<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Guru;
use App\Http\Livewire\Home;
use App\Http\Livewire\Siswa;
use App\Http\Livewire\Staf;
use App\Http\Livewire\User;

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
    return view('welcome');
});


route::get('/guru',Guru::class);
route::get('/siswa',Siswa::class);
route::get('/staf',Staf::class);
route::get('/home',Home::class);
route::get('/user',User::class);