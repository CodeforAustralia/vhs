<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    // The table associated with PDF
	protected $table = 'letters';
	protected $fillable = ['letter_id', 'filename', 'uuid'];

	public function letters()
	{
		return $this->belongsTo('App\Models\Pdf');
	}
}
