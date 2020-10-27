<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
   
   public function signup (RegistrationRequest $request) {
      $user = User::create([
         'name'   => $request->name,
         'username'  => $request->username,
         'email'  => $request->type != 1? $request->username : null,
         'phone'  => $request->type != 1? null : $request->username,
         'password' => Hash::make($request->password)
      ]);
      if($user->wasRecentlyCreated) {
         return $user->tryToAuthenticate([$user->username, $request->password]);
      }
      return response()->json('Something went wrong.', 500);
   }


   public function login (Request $request, User $user) {

      return $user->tryToAuthenticate([$request->username, $request->password]);
   }

}
