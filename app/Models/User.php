<?php

namespace App\Models;

use App\Notifications\SMSRegistrationValidation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\Client;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
   use HasFactory, Notifiable, HasApiTokens;

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name',
      'email',
      'password',
      'phone',
      'username'
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      'password',
      'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];


   /**
    *  This function changed the requirement when authentication
    *  from default 'email' to 'username'.  
    */
   public function findForPassport($username) {
      return $this->where('username', $username)->first();
   }


   /**
    *  My only allowed number for testing 
    *
    */
   public function routeNotificationForNexmo($notification)
    {
         // return $this->phone_number; 
         return '+639056677255';   // FREE SMS Only limited client
    }



   /**
    *  Sends SMS Verification Code for validation of phone number
    */
   public function sendSMSValidation($number) {
      $code = Str::random(6);
      $this->send(new SMSRegistrationValidation($code));
   }




   /**
    * Upon successfull registration it will try to authenticate.
    *
    */
    public function tryToAuthenticate ($request) {

      $passport = Client::where('password_client',1)->first();

      $data = [
         'grant_type'      => 'password',
         'client_id'       => $passport->id,
         'client_secret'   => $passport->secret,
         'username'        => $request[0],
         'password'        => $request[1],
         'scope'           => '*'
      ];
      
      $tokenRequest = Request::create('/oauth/token','POST', $data);

      $tokenResponse = app()->handle($tokenRequest);

      $contentString = json_decode($tokenResponse->content(),true);

      if(!empty($contentString['access_token'])){
         return response()->json($contentString, 200);
      }

      if(empty($contentString)) {
         return response()->json([
             'message' => 'Email is not verified'
         ],500);
      }

      return response()->json([  
      'errors' => [ 'message' => ['Incorrect Credentials'] ]
      ],500);

    }
   


}


