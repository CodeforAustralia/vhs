<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    /**
     * The table associated with the model
     */
    protected $table = 'suburbs';

    /**
     * Get the associated postcode for suburb
     */
    public function postcode()
    {
        return $this->belongsTo('App\Models\Postcode');
    }
}
