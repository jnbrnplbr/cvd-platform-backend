<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;


Route::post('/checkout',function(Request $request) {
   try {
      Stripe::setApiKey(config('services.stripe.secret'));

      $charge = Stripe::charges()->create([
          'amount' => 100.00,                      
          'currency' => 'PHP',
          'source' => $request->stripeToken,
          'description' => 'Description goes here',
          'receipt_email' => 'sample@gmail.com',
          'metadata' => [
              'data1' => 'metadata 1',
              'data2' => 'metadata 2',
              'data3' => 'metadata 3',
          ],
      ]);

      // save this info to your database

      // SUCCESSFUL
      return response()->json('Thank you! Your payment has been accepted.',200);
   } catch (CardErrorException $e) {
         // save info to database for failed
         return response()->json($e,500);
   }
});












Route::middleware('auth:api')->group(function () {

   Route::get('/user', function () {
      return auth()->user();
   });

   
});


Route::post('/sign-up',[AuthController::class, 'signup']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/sms-registration-validation',[AuthController::class, 'validateSMS']);