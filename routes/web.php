<?php

use App\Http\Controllers\UserController;
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

use \Illuminate\Http\Request;

Route::get('/request', function (Request $request) {
    $r = $request->ip();

    dd($r);

    return 'x';
});


/*Route::prefix('usuarios')->group(function(){
    Route::get('', function(){
        return 'usuários';
    })->name('usuarios');
    Route::get('/{id}/', function(){
        return 'Mostrar detalhes';
    })->name('usuarios.show');
    Route::get('/{id}/tags', function(){
        return 'tags do usuario';
    })->name('usuarios.tags');
});

Route::get('/a-empresa/{id?}', function ($string = null) {
    return $string;
});
Route::get('/users/{id}', function ($id) {
    return $id;
}); */

Route::get('user/{user}', [UserController::class, 'show']);
