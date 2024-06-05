<?php
    function setElegir($ruta){
        return request()->routeIs('$ruta') ? 'activo' : '';
    }
?>