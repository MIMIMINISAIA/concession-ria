<?php

use App\Http\Controllers\CadastroCarrosControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('carros/cadastro', [CadastroCarrosControler::class, 'cadastro']);
Route::get('carros/retornarTodos', [CadastroCarrosControler::class, 'retornarTodos']);
Route::post('carros/procurarModelo', [CadastroCarrosControler::class, 'pesquisarPorModelo']);
Route::delete('excluir/carros/{id}', [CadastroCarrosControler::class, 'excluir']);
Route::put('carros/atualizar', [CadastroCarrosControler::class, 'update']);


