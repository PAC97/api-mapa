<?php

class LugaresController{
   static public function show()
    {
        $lugares = LugaresModel::show("lugar");
        $json = array(
            "detalle" => $lugares
        );
        echo json_encode($json, true);
        return;
    }
}