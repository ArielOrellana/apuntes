<?php
//crear aplicacion con laravel version 8
composer create-project laravel/laravel:^8.0 nombre aplicacion
//migraciones en laravel
php artisan migrate
//crear modelo controlador y recurso
php artisan make:model Nombre -mcr
//(mcr m: modelo c: controlador r: recurso)
//crear tablas
$table->tipo de dato('nombre de la tabla');
//como asignar una ruta del controlador
Route::get('/empleado/create', [EmpleadoController::class, 'create']);
//asignar todas las rutas del controlador
Route::resource('empleado', EmpleadoController::class);