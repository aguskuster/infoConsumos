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


// LOGIN 

Route::get('/login', function () {
    return view('login');
});

Route::post('/login','empleadoController@autenticarEmpleado');









// VISTAS PRINCIPALES 

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/Cliente','clienteController@listarClientes');

Route::get('/Empleado','empleadoController@listarEmpleados' );

Route::get('/Insumos','insumosController@listarInsumos' );

Route::get('/Compra','comprasController@cargarDatosCompra' );


Route::get('/Venta','ventaController@cargarDatosVenta' );

Route::get('/historialVenta', 'ventaController@listarHistorialVenta');

Route::get('/historialDeCompra', 'comprasController@listarHistorialCompra'); 

Route::get('formulariosAlta/altaStock','stockController@listarStockParaHabilitar');

Route::get('/Stock','comprasController@listarStock');


// FORMULARIOS Alta

Route::get('/altaCliente', function () {
    return view('formulariosAlta/altaCliente');
});
Route::post('/altaCliente','clienteController@altaCliente');

Route::get('/generarPDF/{id}','clienteController@generarPDF');



Route::get('/altaEmpleado', function () {
    return view('formulariosAlta/altaEmpleado');
})->middleware('autenticacion');

Route::post('/altaEmpleado', 'empleadoController@altaEmpleado');



Route::get('/altaInsumo', function () {
    return view('formulariosAlta/altaInsumo');
});


Route::post('/altaInsumo', 'insumosController@altaInsumo');


Route::post('/altaVenta', 'ventaController@altaVenta');

Route::post('/altaCompra', 'comprasController@altaCompra');

Route::post('/altaStock/{id}', 'stockController@altaStock');

/* Route::post('/agregarArticuloTabla','comprasController@agregarCompraTabla'); */

// FORMULARIOS Modificar


Route::post('/modificarCliente', 'clienteController@modificarCliente');

Route::get('/modificarCliente/{id}', 'clienteController@listarClienteParaModificar');



Route::post('/modificarEmpleado', 'empleadoController@modificarEmpleado');

Route::get('/modificarEmpleado/{id}', 'empleadoController@listarEmpleadoParaModificar');


Route::post('/modificarInsumo', 'insumosController@modificarInsumo');

Route::get('/modificarInsumo/{id}', 'insumosController@listarInsumoParaModificar');

Route::post('/modificarVenta', 'ventaController@modificarVenta');

Route::get('/modificarVenta/{id}', 'ventaController@listarVentaParaModificar');

/* Route::get('/modificarHisotrialCompra/{id}', 'comprasController@listarHisotrialCompraParaModificar'); */
/* Route::post('/modificarHisotrialCompra', 'comprasController@modificarHistorialCompra'); */

Route::get('/modificarStock/{id}', 'stockController@listarStockParaModificar');
Route::post('/modificarStock', 'stockController@modificarStock');




// FORMULARIOS Baja

Route::post('/bajaCliente', 'clienteController@eliminarCliente');
Route::get('/bajaCliente/{id}', 'clienteController@listarClienteParaEliminar') ;


Route::post('/bajaEmpleado', 'empleadoController@eliminarEmpleado');
Route::get('/bajaEmpleado/{id}', 'empleadoController@listarEmpleadoParaEliminar') ;


Route::post('/bajaInsumo', 'insumosController@eliminarInsumo');
Route::get('/bajaInsumo/{id}', 'insumosController@listarInsumoParaEliminar') ;


Route::post('/bajaVenta', 'ventaController@eliminarVenta');
Route::get('/bajaVenta/{id}', 'ventaController@listarVentaParaEliminar');


/* Route::post('/bajaCompra', 'comprasController@eliminarCompra'); */
/* Route::get('/bajaCompra/{id}', 'comprasController@listarCompraParaEliminar') ; */

Route::post('/bajaStock', 'stockController@eliminarStock');
Route::get('/bajaStock/{id}', 'stockController@listarStockParaEliminar') ;



// FILTROS 

Route::post('/filtrar', 'comprasController@buscarMarca');