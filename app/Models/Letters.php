<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Letters extends Model
{
     // The table associated with PDF
     protected $fillable = ['letter_id', 'uuid', 'filename', 'reference_id', 'letter_date'];
}
