<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class,);

Route::post('/uploadCsv', [ProdutoController::class, 'uploadCsv']);
