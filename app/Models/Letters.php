<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

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

     public function isUnread() {
       $user_id = Auth::user()->id;
       $letter_history = LetterHistory::where('user_id',$user_id)
       ->where('letter_uuid', $this->uuid)
       ->where('reference_id', $this->reference_id)
       ->get();
       if (count($letter_history)>0){
         return $letter_history[0]->unread;
       } else {
         return 1; //something has gone wrong, no letter history exists for this user and service combination
       }
    }
}
