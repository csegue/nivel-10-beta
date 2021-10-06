<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CookieController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/',[CatalogoController::class, 'home'] )->name('catalogos.home');

/*RUTAS APLICACION*/
/******************************************************************************************************************* */
//Route::get('/',HomeController::class)->name('home')->middleware('auth');

Route::get('/catalogos/create',          [CatalogoController::class, 'create'] )->name('catalogos.create');  //Form
Route::get('/catalogos',                 [CatalogoController::class, 'index'] ) ->name('catalogos.index'); //->middleware('auth');
Route::post('/catalogos',                [CatalogoController::class,'store'])   ->name('catalogos.store');   //Create
Route::get('/catalogos/{catalogo}',      [CatalogoController::class, 'show'] )  ->name('catalogos.show');
Route::get('/catalogos/{catalogo}/edit', [CatalogoController::class, 'edit'] )->name('catalogos.edit');      //Form
Route::put('/catalogos/{catalogo}',      [CatalogoController::class,'update'])->name('catalogos.update');   //update
Route::delete('catalogos/{catalogo}',    [CatalogoController::class,'destroy'])->name('catalogos.destroy');

/*ROUTE RESORCE*/
/******************************************************************************************************************* */
//Route::resource('catalogos', CatalogoController::class);

/* ENVIO DE MAIL PARA QUE CONTACTEN CON NOSOTROS */
/******************************************************************************************************************* */
Route::get ('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

/*MIDDLEWARE  Proyecto y Controlador*/
/******************************************************************************************************************* */
route::get('edad',              function(){ return "Sí estás autorizado"; })->middleware('age');
route::get('no-autorizado',     function(){ return "No estás autorizado"; });
/* .................................................................................................................. */
Route::get('/catalogo/prueba',[CatalogoController::class, 'prueba'] ) ->name('catalogos.prueba')->middleware('roladmi');
Route::get('/catalogos2/index2',[CatalogoController::class, 'index2'] ) ->name('catalogos2.index2');


/* LOG IN & REGISTER */ 
/******************************************************************************************************************* */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/* SESSION */
/******************************************************************************************************************* */
Route::get('session/index',        [SessionController::class, 'index'])->name('session.index');        //todas las sesiones
Route::get('session/xflash',       [SessionController::class, 'xflash'])->name('session.xflash');        
Route::get('session/get',          [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('session/set',          [SessionController::class, 'storeSessionData'])->name('session.store');
Route::get('session/remove',       [SessionController::class, 'deleteSessionData'])->name('session.delete');

/* COOKIES */
/******************************************************************************************************************* */
Route::get('cookies/formcookie',        [CookieController::class, 'formcookie'])->name('cookies.formcookie');
Route::get('cookies/createcookie',      [CookieController::class, 'createcookie'])->name('cookies.createcookie');
Route::get('cookies/crearcookie',       [CookieController::class, 'crearcookie'])->name('cookies.crearcookie');


