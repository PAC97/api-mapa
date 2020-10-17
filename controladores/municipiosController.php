<?php

class MunicipiosController{
   static public function show()
    {
        $municipios = MuncipiosModel::show("municipios");
        $json = array(
            "detalle" => $municipios
        );
        echo json_encode($json, true);
        return;
    }
}