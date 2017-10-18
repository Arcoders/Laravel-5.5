<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserProfile extends Model
{

  protected $table ='profiles';

  protected $fillable = ['bio', 'twitter', 'github'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function getTwitterUrlAttribute()
    {
      return 'https://twitter.com/' . $this->twitter;
    }

}
