<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
      /**
     * The table associated with the model
     */
    protected $table = 'postcodes';

    /**
     * Get the associated suburbs for postcode
     */
    public function suburbs()
    {
        return $this->hasMany('App\Models\Suburb');
    }
}
