<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $with = ['belongsToType'];

    /**
     * get the type collection for homepage
     * @return mixed
     */
    public function belongsToType()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
}
