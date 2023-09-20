<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Clients
Route::get('/patients', [App\Http\Controllers\PatientsController::class, 'index'])->name('patients');
Route::get('/no_intern_patients', [App\Http\Controllers\PatientsController::class, 'patients_nointern'])->name('patients');

Route::get('/patients/new', function () {return view('patients.new');});
Route::get('/patients/search', function () {return view('patients.search');});
Route::post('/clients_search', [App\Http\Controllers\ClientsController::class, 'search']);
Route::post('/patients/delete/{id}/{authid}', [App\Http\Controllers\ClientsController::class, 'delete']);
Route::post('/patients/add/{authid}',[App\Http\Controllers\PatientsController::class, 'store']);

Route::get('/patient/visit/{id}', [App\Http\Controllers\PatientsController::class, 'newvisit']);
Route::get('/view-visit/{id}', [App\Http\Controllers\PatientsController::class, 'view_visit']);
Route::get('/patients/edit/{id}', [App\Http\Controllers\PatientsController::class, 'edit']);
Route::get('/patients/edit_no_intern/{id}', [App\Http\Controllers\PatientsController::class, 'edit_nointern']);

Route::post('/patients/delete/{id}', [ClientsController::class, 'delete']);
Route::post('/patients/store_visit/{authid}', [App\Http\Controllers\PatientsController::class, 'storevisit']);
Route::put('update-patient/{id}/{authid}', [App\Http\Controllers\PatientsController::class, 'update']);
Route::put('redeem-client/{id}/{authid}', [App\Http\Controllers\ClientsController::class, 'redeem']);

//Transactions
Route::get('/trans', [App\Http\Controllers\TransController::class, 'index'])->name('trans');


//Interns
Route::get('/interns', [App\Http\Controllers\InternsController::class, 'index'])->name('interns');
Route::post('/interns/delete/{id}', [App\Http\Controllers\InternsController::class, 'delete']);
Route::get('/interns/edit/{id}', [App\Http\Controllers\InternsController::class, 'edit']);
Route::put('update-intern/{id}', [App\Http\Controllers\InternsController::class, 'update']);

//Specs

Route::get('/specs', [App\Http\Controllers\SpecsController::class, 'total_ram_cpu_usage'])->name('interns');
