<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('test', function(){ 
 return 'test test';   
});