<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
  // The table associated with user services
  protected $table = 'user_services';

  public $timestamps = false;

  public function service() {
    return $this->hasOne('App\Models\Service', 'reference_id', 'reference_id');
  }
}
