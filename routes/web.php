<?php

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

Route::resource('clientes', 'ClienteController');
/*
#Usando Controller
Route::get('/produtos', 'MeuController@produtos');
Route::get('/multiplicar/{n1}/{n2}', 'MeuController@multiplicar');

#parametro de rota
Route::get('/param/{nome}', function($nome) {
    return 'Olá, ' . $nome . '!';
});

#paramentro opcional de rota
Route::get('/paramopcinal/{nome?}', function($nome=null){
    if (isset($nome)) {
        return 'Olá, ' . $nome;
    } 
    return 'Olá';
});

#paramentro com regras
Route::get('/paramregras/{nome}/{n}', function($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo 'olá ' . $nome . '<br>';
    }
})->where('nome', '[A-Za-z]+')
  ->where('n', '[0-9]+');

#agrupmento de rota
Route::prefix('/aplicacao')->group(function() {
    Route::get('/', function() {
        return view('app');
    })->name('app'); #renomeando rota para excluir dependencias

    Route::get('/user', function() {
        return view('user');
    })->name('app.user'); #renomeando rota para excluir dependencias

    Route::get('/profile', function() {
        return view('profile');
    })->name('app.profile'); #renomeando rota para excluir dependencias
});

#redirecionamento de rota
Route::get('/produtos', function() {
    return view('produtos');
})->name('meusprodutos');

Route::redirect('todosprodutos', 'produtos', 301);

Route::get('todosprodutos2', function() {
    return redirect()->route('meusprodutos');
});

#Métodos HTTP
Route::get('/metodos', function () {
    return view('metodos');
});

Route::post('/metodos', function (Request $request) {
    echo 'POST';
})->name('metodos.post');

Route::patch('/metodos', function (Request $request) {
    echo 'PATCH';
})->name('metodos.patch');

Route::put('/metodos', function (Request $request) {
    echo 'PUT';
})->name('metodos.put');

Route::delete('/metodos', function (Request $request) {
    echo 'DELETE';
})->name('metodos.delete');

Route::options('/metodos', function (Request $request) {
    echo 'OPTIONS';
})->name('metodos.options');
*/