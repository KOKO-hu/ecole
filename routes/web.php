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
use App\Models\Professeur;

Route::get('/', function () {
    return view('welcome');
});
Route::get('Accueil', function () {
 $proffesseurs = Professeur::All();
  return view('Accueil',compact("proffesseurs",$proffesseurs)); 
 
 
});
