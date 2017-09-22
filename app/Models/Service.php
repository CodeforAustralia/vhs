<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  // The table associated with services
  protected $table = 'services';

  // Has many user services (there is a many to many relationship between the UserService
  // and the services)

  public function user_services() {
    return $this->hasMany(UserService::class, 'reference_id', 'reference_id' );
  }

  public function letters() {
    return $this->hasMany(Letters::class, 'reference_id', 'reference_id' );
  }

  public function unreadLetters() {
    return $this->hasMany(Letters::class, 'reference_id', 'reference_id' )->where('unread', '=', true);
  }
  
}
