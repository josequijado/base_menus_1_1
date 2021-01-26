<?php
    /**
     * Este archivo contiene las rutas a las que se accede desde un enlace
     * bien sea en el menú lateral o en una vista de la aplicación.
     * Suelen ser rutas de tipo get, pero también se pueden incluir otras.
     * Las rutas de este archivo corresponden a usuarios de rango Admin.
     */
    Route::middleware(config('register.middlesAdmin'))
        ->namespace('Admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function() {
            // Aquí van las rutas
        });
