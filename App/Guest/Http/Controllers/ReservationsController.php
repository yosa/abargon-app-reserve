<?php

namespace App\Guest\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Guest\Http\Requests\Reservations\CreateRequest;
use App\Reserve\Logics\Reservations\CreateLogic;

/**
 * Reservations controller
 *
 * @author Luis Josafat Heredia Contreras
 */
class ReservationsController extends Controller
{
    
    public function index(CreateRequest $request, CreateLogic $logic)
    {
        $result = $logic->init($request->allValid());
        
        if( !$result) {
            return back()
                ->withErrors(melisa('msg')->get())
                ->withInput();
        }
        
        return redirect('/');
    }
    
}
