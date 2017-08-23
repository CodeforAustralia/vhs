<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Letters extends Model
{
     // The table associated with PDF
     protected $fillable = ['template_id'];
}
