<?php

use Illuminate\Http\Request;

Route::get("clientes", "ClientesController@getCliente");
Route::post("clientes", "ClientesController@postCliente");