<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', HomeController::class);

//ruta index
/*Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

//ruta mostrar crea
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

//ruta gradar registro
Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

//ruta mostrar registro
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show');

//ruta mostrar editar
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit');

//ruta actualizar (put o push para actualizaciones)
Route::put('/posts/{post}', [PostController::class, 'update'])
    ->name('posts.update');

//ruta eliminar (delete para eliminacion)
Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->name('posts.destroy');*/
//-----------------------------------------------------------------------------------
/*Route::resource('articulos', PostController::class)
    ->parameters('posts')
    ->names('posts');*/
Route::resource('posts', PostController::class);
Route::get('/prueba', function () {
    /*$users = DB::table('users')
        ->orderBy('id')
        ->chunk(100, function ($users) {
            foreach ($users as $user) {
                echo $user->name . '<br>';
            }
        });*/
    /*DB::table('users')
        ->orderBy('id')
        ->lazy()->each(function ($user) {
            echo $user->name . '<br>';
        });*/
    $users = DB::table('users')
        ->paginate(10);
    return view('prueba', compact('users'));
});
//-----------------------------------------------------------------------------------
/*
Route::get('/contacto', function () {
    return "hola desde contacto";
});

Route::get('/cursos/{curso}', function ($curso) {
    return "welcome cursos $curso";
})->whereAlpha('curso')->name('cursos.curso');
//Route::get('/cursos/{curso}/{category?}', function ($curso, $category = null) {
  //  return "welcome cursos $curso";
//})->where([
//    'curso', '[A-Za-Z]+',
//    'category', '[A-Za-Z]+'
//]);

Route::get('/curso/{id}', function ($id) {
    return "welcome cursos con id $id";
});*/
