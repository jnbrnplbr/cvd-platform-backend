<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ReportController;
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


Route::get('/categories',[CategoryController::class,'index']);
Route::post('/categories',[CategoryController::class, 'store']);

Route::get('/departments',[DepartmentController::class,'index']);
Route::post('/departments',[DepartmentController::class,'store']);

Route::get('/agencies',[AgencyController::class,'index']);
Route::post('/agencies',[AgencyController::class,'store']);

Route::get('/reports',[ReportController::class,'index']);


Route::post('/sign-up',[AuthController::class, 'signup']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/sms-registration-validation',[AuthController::class, 'validateSMS']);