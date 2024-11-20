<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminCarController;
use App\Http\Controllers\CarBrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CarPhotoController;
use App\Http\Controllers\CarEngineController;
use App\Http\Controllers\CarEquipmentsController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\CarEquipmentGroupsController;

Route::get('/', [CarController::class, 'index']);

Route::get('frontcars/search', [CarController::class, 'search']);
Route::get('frontcars/result', [CarController::class, 'result']);

Route::get('/frontcars/show/{id}', [CarController::class, 'show']);
Route::get('/frontcars', [CarController::class, 'index']);



Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::get('/carbrands/create', [CarBrandController::class, 'create'])->middleware('auth');
Route::post('/carbrands/create', [CarBrandController::class, 'store'])->middleware('auth');
Route::get('/carbrands/edit/{id}', [CarBrandController::class, 'edit'])->middleware('auth');
Route::patch('/carbrands/{id}', [CarBrandController::class, 'update'])->middleware('auth');
Route::delete('/carbrands/{id}', [CarBrandController::class, 'destroy'])->middleware('auth');
Route::get('/carbrands', [CarBrandController::class, 'index'])->middleware('auth');

Route::get('/carengines/create', [CarEngineController::class, 'create'])->middleware('auth');
Route::post('/carengines/create', [CarEngineController::class, 'store'])->middleware('auth');
Route::get('/carengines/edit/{id}', [CarEngineController::class, 'edit'])->middleware('auth');
Route::patch('/carengines/{id}', [CarEngineController::class, 'update'])->middleware('auth');
Route::delete('/carengines/{id}', [CarEngineController::class, 'destroy'])->middleware('auth');
Route::get('/carengines', [CarEngineController::class, 'index'])->middleware('auth');

Route::get('/regions/create', [RegionController::class, 'create'])->middleware('auth');
Route::post('/regions/create', [RegionController::class, 'store'])->middleware('auth');
Route::get('/regions/edit/{id}', [RegionController::class, 'edit'])->middleware('auth');
Route::patch('/regions/{id}', [RegionController::class, 'update'])->middleware('auth');
Route::delete('/regions/{id}', [RegionController::class, 'destroy'])->middleware('auth');
Route::get('/regions', [RegionController::class, 'index'])->middleware('auth');

Route::get('/carmodels/create', [CarModelController::class, 'create'])->middleware('auth');
Route::post('/carmodels/create', [CarModelController::class, 'store'])->middleware('auth');
Route::get('/carmodels/edit/{id}', [CarModelController::class, 'edit'])->middleware('auth');
Route::patch('/carmodels/{id}', [CarModelController::class, 'update'])->middleware('auth');
Route::delete('/carmodels/{id}', [CarModelController::class, 'destroy'])->middleware('auth');
Route::get('/carmodels', [CarModelController::class, 'index'])->middleware('auth');

Route::get('/carequipmentgroups/create', [CarEquipmentGroupsController::class, 'create'])->middleware('auth');
Route::post('/carequipmentgroups/create', [CarEquipmentGroupsController::class, 'store'])->middleware('auth');
Route::get('/carequipmentgroups/edit/{id}', [CarEquipmentGroupsController::class, 'edit'])->middleware('auth');
Route::patch('/carequipmentgroups/{id}', [CarEquipmentGroupsController::class, 'update'])->middleware('auth');
Route::delete('/carequipmentgroups/{id}', [CarEquipmentGroupsController::class, 'destroy'])->middleware('auth');
Route::get('/carequipmentgroups', [CarEquipmentGroupsController::class, 'index'])->middleware('auth');

Route::get('/carequipments/create', [CarEquipmentsController::class, 'create'])->middleware('auth');
Route::post('/carequipments/create', [CarEquipmentsController::class, 'store'])->middleware('auth');
Route::get('/carequipments/edit/{id}', [CarEquipmentsController::class, 'edit'])->middleware('auth');
Route::patch('/carequipments/{id}', [CarEquipmentsController::class, 'update'])->middleware('auth');
Route::delete('/carequipments/{id}', [CarEquipmentsController::class, 'destroy'])->middleware('auth');
Route::get('/carequipments', [CarEquipmentsController::class, 'index'])->middleware('auth');

Route::get('/admincars/create', [CarController::class, 'admincreate'])->middleware('auth');
Route::post('/admincars/create', [CarController::class, 'adminstore'])->middleware('auth');
Route::get('/admincars/edit/{id}', [CarController::class, 'adminedit'])->middleware('auth');
Route::patch('/admincars/{id}', [CarController::class, 'adminupdate'])->middleware('auth');
Route::delete('/admincars/{id}', [CarController::class, 'admindestroy'])->middleware('auth');
Route::get('/admincars', [CarController::class, 'adminindex'])->middleware('auth');

Route::get('/admincars/photos/edit/{id}', [CarPhotoController::class, 'index'])->middleware('auth');
Route::post('/admincars/photos/edit/{id}', [CarPhotoController::class, 'store'])->middleware('auth');
Route::get('/admincars/photos/delete/{id}', [CarPhotoController::class, 'destroy'])->middleware('auth');


Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
