<?php

use Illuminate\Http\Request;

Route::get("clientes", "ClientesController@getCliente");
Route::get("clientes/{clientes}", "ClientesController@getClienteById");
Route::post("clientes", "ClientesController@postCliente");
Route::patch("clientes/{clientes}", "ClientesController@updateCliente");
Route::delete("clientes/{clientes}", "ClientesController@deleteCliente");

Route::get("usuarios", "UsuariosController@getUsuario");
Route::get("usuarios/{usuarios}", "UsuariosController@getUsuarioById");
Route::post("usuarios", "UsuariosController@postUsuario");
Route::patch("usuarios/{usuarios}", "UsuariosController@updateUsuario");
Route::delete("usuarios/{usuarios}", "UsuariosController@deleteUsuario");

Route::get("pets", "PetsController@getPet");
Route::get("pets/{pets}", "PetsController@getPetById");
Route::post("pets", "PetsController@postPet");
Route::patch("pets/{pets}", "PetsController@updatePet");
Route::delete("pets/{pets}", "PetsController@deletePet");