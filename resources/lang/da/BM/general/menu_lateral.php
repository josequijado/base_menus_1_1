<?php
    require __DIR__.'/../side_menu/globals.php';
    require __DIR__.'/../side_menu/master.php';
    require __DIR__.'/../side_menu/admin.php';
    require __DIR__.'/../side_menu/user.php';

   $matrizDeGruposYOpciones = array_merge($globalOptions, $masterOptions, $adminOptions, $userOptions);

    return $matrizDeGruposYOpciones;

