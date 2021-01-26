<?php
    /**
     * Este archvo contiene todas las rutas de autenticación.
     * Se le llama desde web.php.
     */
    Route::middleware ('guest')
        ->group(function () {
        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@BM_showLoginForm')
            ->name('BM_login');
        Route::post('login', 'Auth\LoginController@BM_login');
        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@BM_showLinkRequestForm')
            ->name('password.BM_request');
        Route::post('password/email', 'Auth\ForgotPasswordController@BM_sendResetLinkEmail')
            ->name('password.BM_email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@BM_showResetForm')
            ->name('password.BM_reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@BM_reset')
            ->name('password.BM_update');
    });
    /**
     * Las rutas de logout y de 2FA se sacan del grupo de autenticación para poder asignarles
     * un middleware diferente.
     */
    Route::post('/access_confirm/{user}', 'Auth\LoginController@BM_confirm2fa')
        ->name('BM_confirm2fa');
    Route::post('logout', 'Auth\LoginController@BM_logout')
        ->middleware('auth')
        ->name('BM_logout');
    Route::post('/resend_2FA/{user}', 'Auth\LoginController@BM_resendCode')
        ->name('BM_resend2fa');

    // Email Verification Routes...
    Route::get('email/verify', 'Auth\VerificationController@BM_show')
        ->name('verification.BM_notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@BM_verify')
        ->name('verification.BM_verify');
    Route::get('email/resend', 'Auth\VerificationController@BM_resend')
        ->name('verification.BM_resend');
    Route::get('check-verify', 'Auth\LoginController@BM_checkVerify')
        ->name('BM_check_if_verified');
    Route::post('resend-verification', 'Auth\LoginController@BM_resendVerification')
        ->name('BM_resend_verification');
    Route::post('recheck-email-erification', 'Auth\LoginController@BM_recheckEmailVerificaton')
        ->name('BM_recheck_email_verification');
    Route::post('check_sms_code', 'Auth\LoginController@BM_ckeckSMSCode')
        ->name('BM_check_sms_code');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@BM_showRegistrationForm')
        ->name('BM_register');
    Route::post('new-user', 'Auth\RegisterController@BM_saveNewUser')
        ->name('BM_create_user');
