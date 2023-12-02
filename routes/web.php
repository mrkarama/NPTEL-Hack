<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

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
    return view('nptel_certificate');
});

Route::get('/c', function () {
    return view('nptel_certificate2');
});

Route::get('noc/Ecertificate/NPTEL23MG78S843802412', [FileController::class, 'file'])->name('noc/Ecertificate/NPTEL23MG78S843802412');

Route::get('noc/Ecertificate/NPTEL23MG107S843802205', [FileController::class, 'file2'])->name('noc/Ecertificate/NPTEL23MG107S843802205');

//https://archive.nptel.ac.in/noc/Ecertificate/?q=NPTEL23MG78S84380248320007464
//Roll No:
 
//NPTEL23MG78S843802412
