

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


#main page
Route::get('/', function () {
    return view('welcome');
});

#pizza view using PizzaController
Route::get('/pizzas', [PizzaController::class, 'index']);

#wildcards using PizzaController
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);