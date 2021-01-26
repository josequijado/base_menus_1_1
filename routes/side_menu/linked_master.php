<?php
    /**
     * Este archivo contiene las rutas a las que se accede desde un enlace
     * bien sea en el menú lateral o en una vista de la aplicación.
     * Suelen ser rutas de tipo get, pero también se pueden incluir otras.
     * Las rutas de este archivo corresponden a usuarios de rango Master.
     */
    Route::middleware(config('register.middlesMaster'))
        ->namespace('Master')
        ->prefix('master')
        ->name('master.')
        ->group(function() {
        Route::match(['get', 'post'], 'users-list', 'MainController@BM_usersList')
            ->name('BM_users_list');
    });
