<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AccountDetails extends Model
{
	// use notifiable
	use Notifiable;
     // The table associated with user
	protected $table = 'users';

	protected $fillable = [
    'firstName', 'lastName', 'email', 'password',
    ];
}
