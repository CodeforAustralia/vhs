<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
	protected $table = 'templates';
     // The table associated with PDF
     protected $fillable = ['template_id'];
}
