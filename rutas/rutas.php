<?php
$arrayRutas = explode("/",$_SERVER['REQUEST_URI']);

if (count(array_filter($arrayRutas))== 0) {
    $json = array(
        "detalle"=>"no encontrado"
    );
    
    echo json_encode($json, true);
    return;
}else{
    if (array_filter($arrayRutas)[1] == "municipios") {
        if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
           $municipios = new MunicipiosController();
           $municipios->show();
        }
    }

    if (array_filter($arrayRutas)[1] == "lugares") {
        if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
            $lugares = new LugaresController();
            $lugares->show();
         }
    }
}
