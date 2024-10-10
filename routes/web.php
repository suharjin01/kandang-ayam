<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SensorController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

#Sensor
Route::middleware('auth-check')->group(function ($router) {
    $router->get('/', [DashboardController::class, 'dashboard']);

    $router->controller(SensorController::class)->group(function($subrouter) {
        //$subrouter->get('/', 'dashboard');
        $subrouter->get('/sensor', 'sensor');
        $subrouter->get('/sensor/create', 'create');
        $subrouter->get('/sensor/edit/{id}', 'edit');
        $subrouter->post('/sensor/store', 'store');
        $subrouter->put('/sensor/update/{id}', 'update');
        $subrouter->delete('/sensor/delete/{id}', 'delete');
    });

});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


#Device
Route::middleware('is-admin')->group(function ($router) {
    $router->controller(DeviceController::class)->group(function($subrouter) {
        $subrouter->get('/device', 'index');
        $subrouter->get('/device/create', 'create');
        $subrouter->get('/device/edit/{id}', 'edit');
        $subrouter->post('/device/store', 'store');
        $subrouter->put('/device/update/{id}', 'update');
        $subrouter->delete('/device/delete/{id}', 'delete');
    });
});


//Route::get('/login', [AuthController::class, 'viewLogin']);
//Route::get('/register', [AuthController::class, 'viewRegister']);
Route::get('/ganti_password', [AuthController::class, 'viewChangePassword']);
Route::post('/ganti_password', [AuthController::class, 'changePassword']);
