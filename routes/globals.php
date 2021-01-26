<?php
    /**
     * Aqui aparecen todas las rutas que están disponibles desde cualquier punto de la aplicación.
     *  - La ruta de la página principal de la aplicación.
     *  - La ruta de cambio de idioma.
     *  - La ruta de cambio de tema (sólo disponible para usuarios registrados).
     */
    Route::get('/', 'MainController@BM_index')
        ->name('BM_index');

    Route::get('change-language/{locale}', 'MainController@BM_changeLanguage')
        ->name('BM_chlg');

    Route::get('change-theme/{theme}', 'MainController@BM_changeTheme')
        ->name('BM_chth');

    Route::post('ch-sm-state', 'MainController@BM_changeSideMenuState')
        ->name('BM_ch-sm-state');

    Route::get('rd-sm-state', 'MainController@BM_readSideMenuState')
        ->name('BM_rd-sm-state');

    Route::get('edit-profile/{user}', 'MainController@BM_showProfile')
        ->name('BM_edit-profile');

    Route::post('update-profile', 'MainController@BM_updateProfile')
        ->name('BM_update-profile');

    Route::get('/usuario_impersonado', 'MainController@BM_impersonate')
        ->name('BM_imp_user');

    Route::get('/stop-impersonation', 'MainController@BM_stopImpersonate')
        ->name('BM_imp_stop');

