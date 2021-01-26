<?php
    function BM_EditUserAllowed($requiredUser, $currentUser)
    {
        if (null === $requiredUser) {
            return 'S';
        }
        $scopeDeSolicitado = $requiredUser->scope;
        $scopeDeActivo = $currentUser->scope;
        if (($scopeDeActivo == 'A' && $scopeDeSolicitado == 'M') || ($scopeDeActivo == 'U' && $scopeDeSolicitado != 'U')) {
            return 'S';
        }
        return 'N';
    }
