<?php
    /**
     * Este archivo contiene las rutas a las que se accede desde un formulario
     * o mediante una petición ajax.
     * Suelen ser rutas de tipo post, pero también se pueden incluir otras.
     * Las rutas de este archivo corresponden a usuarios de rango User.
     */
    Route::middleware(config('register.middlesUser'))
        ->namespace('User')
        ->prefix('user')
        ->name('user.')
        ->group(function() {
            // Aquí van las rutas
        });
        