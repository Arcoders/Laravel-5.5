<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{

  public function update(UpdateProfileRequest $request)
  {
    $profile = auth()->user()->profile;

    $profile->fill($request->validated());

    $profile->save();
  }

}
