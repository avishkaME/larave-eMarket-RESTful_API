<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;

class BuyerScope implements Scope{
    public function apply(\Illuminate\Database\Eloquent\Builder $builder, \Illuminate\Database\Eloquent\Model $model)
    {
        $builder->has('transactions');
    }
}