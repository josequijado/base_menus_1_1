<?php
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    require __DIR__ . '/globals.php'; // Grupo de rutas generales de la aplicación

    require __DIR__ . '/auth.php'; // Grupo de rutas de autenticación

    require __DIR__ . '/side_menu/permanent_master.php'; // Rutas de Master que estarán siempre disponibles
    require __DIR__ . '/side_menu/permanent_admin.php'; // Rutas de Admin que estarán siempre disponibles
    require __DIR__ . '/side_menu/permanent_user.php'; // Rutas de User que estarán siempre disponibles

    require __DIR__ . '/side_menu/linked_master.php'; // Rutas de Master a las que se accede mediante un enlace de menú o de página
    require __DIR__ . '/side_menu/linked_admin.php'; // Rutas de Admin a las que se accede mediante un enlace de menú o de página
    require __DIR__ . '/side_menu/linked_user.php'; // Rutas de User a las que se accede mediante un enlace de menú o de página

    require __DIR__ . '/side_menu/non_linked_master.php'; // Rutas de Master a las que se accede mediante un formulario o una llamada ajax, de forma no visible al usuario
    require __DIR__ . '/side_menu/non_linked_admin.php'; // Rutas de Admin a las que se accede mediante un formulario o una llamada ajax, de forma no visible al usuario
    require __DIR__ . '/side_menu/non_linked_user.php'; // Rutas de User a las que se accede mediante un formulario o una llamada ajax, de forma no visible al usuario


