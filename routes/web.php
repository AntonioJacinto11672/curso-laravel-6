<?php

use Faker\Guesser\Name;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/double', function () {
    return "Testando Double Page Alter";
});

Route::get('/', function () {
    return 'António Jacinto Home Page Teste';
});


Route::get('/teste', function () {
    return view('teste.teste');
});

Route::any('/any', function () {
    return 'any';
});

Route::match(['get', 'post'], '/user/profile', function () {
    return 'match';
});

// Paramentro com Retorno

/* Route::get('/categoria/{flag}/posts', function ($id) {
    return 'Categoria do Produto: ' . $id;
});
 */
// Parametros opcionais usar ?
//Definir Um Valor por Defoult
/* Route::get('/produtos/{id?}/', function ($id = '') {
    return 'Categoria do Produto: ' . $id;
}); */

// Redirecionar Rotas

/* Route::get('redirect1', function () {
    return redirect('/redirect2');
});
*/
Route::get('redirect2', function () {
    return "redirect 2";
});

Route::redirect('redirect1', 'redirect2');

/* Route::get('/view', function () {
    return view('welcome');
}); */

Route::view('/view', 'teste.teste');


//Rotas Nomeadas
Route::get('/redirect3/', function () {
    return redirect()->route('url.name');
});

// Route('url-name');
Route::get('nome-url', function () {
    return "hey hey hey";
})->name('url.name');

//Grupo de Routas
//Usando Middlewere Para Auteticar

Route::get('login', function () {
    return "Login";
})->name('login');


/* Route::get('adimin/dashboard', function () {
    return "Home adimin";
})->middleware('auth');

Route::get('adimin/finaceiro', function () {
    return "Adimin FInaceiro";
})->middleware('auth');

Route::get('adimin/produtos', function () {
    return "Adimin Produtos";
})->middleware('auth'); */


// Criar Grupos de Routas
//Adicionar Middlewere ( Autenticar filtrar)

/* route::middleware(['auth'])->group( function () {
    Route::get('adimin/dashboard', function () {
        return "Home adimin";
    });

    Route::get('adimin/finaceiro', function () {
        return "Adimin FInaceiro";
    });

    Route::get('adimin/produtos', function () {
        return "Adimin Produtos";
    });
}); */

// Aplicar grupo de Prefixos
/* route::middleware([])->group(function () {

    Route::prefix('Adimim')->group(function () {
        Route::get('/dashboard', function () {
            return "Home adimin";
        });

        Route::get('/finaceiro', function () {
            return "Adimin FInaceiro";
        });

        Route::get('/produtos', function () {
            return "Adimin Produtos";
        });
        Route::get('/', 'TesteController@teste');
    });
}); */
/*
Route::get('products/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');

Route::get('products/create','App\Http\Controllers\ProductController@create')->name('products.create');

Route::get('products/{id}/', 'App\Http\Controllers\ProductController@show')->name('products.show');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products.index');

Route::post('products', 'App\Http\Controllers\ProductController@store')->name('products.store');

Route::put('products/{id}','App\Http\Controllers\ProductController@update')->name('products.update');

Route::delete('products/{id}','App\Http\Controllers\ProductController@destroy')->name('products.destroy');
 */

Route::Resource('products', 'App\Http\Controllers\ProductController');//->middleware('auth');









