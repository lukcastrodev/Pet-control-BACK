<?php

use Illuminate\Http\Request;

Route::get("clientes", "ClientesController@getCliente");
Route::get("clientes/{clientes}", "ClientesController@getClienteById");
Route::post("clientes", "ClientesController@postCliente");
Route::patch("clientes/{clientes}", "ClientesController@updateCliente");
Route::delete("clientes/{clientes}", "ClientesController@deleteCliente");