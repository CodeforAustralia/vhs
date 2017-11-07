<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

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
    return $this->hasMany(Letters::class, 'reference_id', 'reference_id' )->orderBy('letter_date','DESC');
  }

  public function numberUnread() {
    $user_id = Auth::user()->id;
    $letter_history = LetterHistory::where('user_id',$user_id)
         ->where('reference_id', $this->reference_id)
         ->where('unread', true)
         ->get();
    if (empty($letter_history)) {
      return 0;
    } else {
      return count($letter_history);
    }
  }
}
