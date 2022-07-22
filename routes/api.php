<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerJoblist;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\apply\applyController;
use App\Http\Controllers\apply\ApplyViewController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware(['auth:sanctum','isAPIAdmin'])->group(function(){
//     Route::get('/checkingAuth',function(){
//         return response()->json(['message'=>'you are in','status'=>200],200);
//     });
// });
// ----authController-------
 
 Route::post('register',[AuthController::class,'register']);
 Route::post('login',[AuthController::class,'login']);
// --------admin-------

Route::post('JoblistAdd',[ControllerJoblist::class,'JoblistAdd']);
Route::get('joblistview',[ControllerJoblist::class,'joblistview']);
Route::get('joblistDelete/{id}',[ControllerJoblist::class,'joblistDelete']);
Route::get('joblistSingleview/{id}',[ControllerJoblist::class,'joblistSingleview']);
Route::put('JoblistUpdate/{id}',[ControllerJoblist::class,'JoblistUpdate']);

// Application from

Route::post('applyin',[applyController::class,'applyin']);
Route::post('applyexp',[applyController::class,'applyexp']);
Route::get('applyViewSingle',[ApplyViewController::class,'applyViewSingle']);

