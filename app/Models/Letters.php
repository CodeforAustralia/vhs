<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Letters extends Model
{
     // The table associated with PDF
     protected $fillable = ['letter_id', 'uuid', 'filename', 'reference_id', 'letter_date'];

     public function service() {
       return $this->hasOne('App\Models\Service', 'reference_id', 'reference_id');
     }

     public function template() {
       return $this->hasOne('App\Models\Templates', 'template_id', 'template_id');
     }
}
