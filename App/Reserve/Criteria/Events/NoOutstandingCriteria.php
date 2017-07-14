<?php

namespace App\Reserve\Criteria\Events;

use Melisa\Repositories\Contracts\RepositoryInterface;
use App\Reserve\Criteria\Events\DefaultSiteCriteria;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class NoOutstandingCriteria extends DefaultSiteCriteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {        
        return parent::apply($model, $repository)
            ->where('outstanding', false);        
    }
    
}
