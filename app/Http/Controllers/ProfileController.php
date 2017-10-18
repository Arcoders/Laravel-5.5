<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

  public function update()
  {
    $this->validate(request(), [
      'bio' => 'required',
      'twitter' => 'alpha_num',
      'github' => 'alpha_num'
    ]);

    $data = request()->all();

    $profile = auth()->user()->profile;

    $profile->fill($data);

    $profile->save();
  }

}
