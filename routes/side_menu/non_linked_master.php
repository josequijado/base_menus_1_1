<?php
    /**
     * Este archivo contiene las rutas a las que se accede desde un formulario
     * o mediante una petición ajax.
     * Suelen ser rutas de tipo post, pero también se pueden incluir otras.
     * Las rutas de este archivo corresponden a usuarios de rango Master.
     */
    Route::middleware(config('register.middlesMaster'))
        ->namespace('Master')
        ->prefix('master')
        ->name('master.')
        ->group(function() {
            // Aquí van las rutas
        });
