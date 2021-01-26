<?php
    /**
     * Este archivo contiene las rutas a las que se accede desde un enlace
     * bien sea en el menú lateral o en una vista de la aplicación.
     * Suelen ser rutas de tipo get, pero también se pueden incluir otras.
     * Las rutas de este archivo corresponden a usuarios de rango User.
     */
    Route::middleware(config('register.middlesUser'))
        ->namespace('User')
        ->prefix('user')
        ->name('user.')
        ->group(function() {
            // Aquí van las rutas
        });
