<?php

namespace App\Reserve\Criteria\Events;

use Melisa\Repositories\Criteria\Criteria;
use Melisa\Repositories\Contracts\RepositoryInterface;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DefaultSiteCriteria extends Criteria
{
    
    public function apply($model, RepositoryInterface $repository, array $input = [])
    {
        return $model->where('finalized', false)
            ->where('endDate', '>', date('Y-m-d'))
            ->orderBy('createdAt', 'desc');
    }
    
}
