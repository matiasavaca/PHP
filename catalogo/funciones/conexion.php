<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'id18519623_root';
    const CLAVE     = 'hcUvmD!Ja*0q7Anx';
    const BASE      = 'id18519623_catalogo';
    function conectar()
    {
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        return $link;
    }