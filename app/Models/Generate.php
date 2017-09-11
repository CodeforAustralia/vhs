<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Generate extends Model
{
    // The table associated with PDF
	protected $table = 'users';
	// protected $fillable = ['letter_id', 'filename', 'uuid'];

	public function generate()
	{
		return $this->belongsTo('App\Models\Generate');
	}
}
