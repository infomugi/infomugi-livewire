<?php

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

Route::livewire('/', 'auth.login')
->layout('layouts.login')->name('auth.login');

Route::group(['middleware' => 'guest'], function(){
    
    //register
    Route::livewire('/register', 'auth.register')
    ->layout('layouts.login')->name('auth.register');
    
    //login
    Route::livewire('/login', 'auth.login')
    ->layout('layouts.login')->name('auth.login');
    
});

Route::group(['middleware' => 'auth'], function(){
    
    //dashboard
    Route::livewire('/admin/dashboard', 'admin.dashboard')
    ->layout('layouts.form')->name('admin.dashboard');
    
    //dashboard
    Route::livewire('/puskesmas', 'master.puskesmas')
    ->layout('layouts.form')->name('puskesmas');
    
    //dashboard
    Route::livewire('/vaksinasi', 'master.vaksinasi')
    ->layout('layouts.form')->name('vaksinasi');
    
    
});