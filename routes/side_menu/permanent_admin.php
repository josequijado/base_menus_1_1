<?php
    /**
     * Este archivo contiene las rutas que estarán disponibles siempre.
     * por lo tanto, estas rutas no se editarán en base de datos.
     * Suelen ser rutas de tipo get, pero también se pueden incluir otras.
     * Las rutas de este archivo corresponden a usuarios de rango Admin.
     */
    Route::middleware(['web', 'auth', 'scope',])
        ->namespace('Admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function() {
        Route::get('/index', 'MainController@BM_index')
            ->name('BM_index');
    });
