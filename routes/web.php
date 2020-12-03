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


// VISTAS PRINCIPALES 

Route::get('/', function () {
    return view('home');
});


Route::get('/Cliente','clienteController@listarClientes');

Route::get('/Empleado','empleadoController@listarEmpleados' );

Route::get('/Insumos','insumosController@listarInsumos' );

Route::get('/Compra', function () {
    return view('compra');
});

Route::get('/Venta','ventaController@cargarDatos' );

Route::get('/Stock', function () {
    return view('stock');
});


// FORMULARIOS 

Route::get('/altaCliente', function () {
    return view('formularios/altaCliente');
});
Route::post('/altaCliente','clienteController@altaCliente');



Route::get('/altaEmpleado', function () {
    return view('formularios/altaEmpleado');
});
Route::post('/altaEmpleado', 'empleadoController@altaEmpleado');



Route::get('/altaInsumo', function () {
    return view('formularios/altaInsumo');
});
Route::post('/altaInsumo', 'insumosController@altaInsumo');
