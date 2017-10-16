<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserProfile extends Model
{

  protected $table ='profiles';

    public function user()
    {
      return $this->hasOne(User::class);
    }

    public function getTwitterUrlAttribute()
    {
      return 'https://twitter.com/' . $this->twitter;
    }

}
