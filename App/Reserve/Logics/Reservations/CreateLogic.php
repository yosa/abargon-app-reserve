<?php

namespace App\Reserve\Logics\Reservations;

use Carbon\Carbon;
use App\Reserve\Repositories\EventsRepository;
use App\Reserve\Repositories\ReservationsRepository;
use Melisa\core\LogicBusiness;

/**
 * Create reservation
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateLogic
{
    use LogicBusiness;
    
    protected $events;
    protected $reservations;

    public function __construct(
        EventsRepository $events,
        ReservationsRepository $reservations
    )
    {
        $this->events = $events;
        $this->reservations = $reservations;
    }
    
    public function init(array $input)
    {
        $this->events->beginTransaction();
        $event = $this->getEvent($input['idEvent']);
        
        if( !$event) {
            return $this->events->rollback();
        }
        
        if( !$this->autoFinishEvent($event)) {
            return $this->events->rollback();
        }
        
        if( !$this->isValid($event, $input)) {
            return $this->events->rollback();
        }
        
        $idReservation = $this->createReservation($input);
        
        if( !$idReservation) {
            return $this->events->rollback();
        }
        
        if( !$this->updateEvent($event, $input['numberPeople'])) {
            return $this->events->rollback();
        }
        
        $this->events->commit();
        return true;
    }
    
    public function updateEvent($event, $numberPeople)
    {
        $event->totalReservations += (int)$numberPeople;
        
        if( $event->totalReservations === $event->maximumCapacity) {
            $event->exhausted = $event->finalized = true;
        }
        
        if($event->save()) {
            return true;
        }
        
        return $this->error('Imposible actualizar evento, intentelo nuevamente');
    }
    
    public function createReservation($input)
    {
        $result = $this->reservations->create($input);
        
        if( !$result) {
            return $this->error('Imposible crear la reservación, intentelo nuevamente');
        }
        
        return true;
    }
    
    public function autoFinishEvent($event)
    {
        if( Carbon::now()->gte(Carbon::createFromDate(strtotime($event->endDate)))) {
            return true;
        }
        
        $result = $this->events->update([
            'finalized'=>true
        ], $event->id);
        
        if( $result) {
            return true;
        }
        
        return $this->error('Imposible finalizar evento');
    }
    
    public function isValid($event, $input)
    {
        if( Carbon::now()->gt(Carbon::createFromDate(strtotime($event->endDate)))) {
            return $this->error('El evento ya a finalizado');
        }        
        
        if( $event->finalized) {
            return $this->error('El evento ya ha finalizado, gracias por tu interes');
        }
        
        $total = $event->totalReservations + (int)$input['numberPeople'];
        $available = $event->maximumCapacity - $event->totalReservations;
        
        if( $total > $event->maximumCapacity) {
            return $this->error('Solo se tiene disponible {a} lugares disponibles', [
                'a'=>$available
            ]);
        }
        
        return true;
    }
    
    public function getEvent($id)
    {
        return $this->events->find($id);
    }
    
}
