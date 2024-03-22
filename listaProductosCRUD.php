<?php

include('./conexion.php');
include('./functionesGen.php');
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'POST') {


}

if ($metodo == 'GET') {
    if (isset($_GET['datos_general'])) {
        $sql = "SELECT * FROM `lista_computadores_cab` WHERE `estado` = 'Y'";
        $result = $mysqli->query($sql);
        $resultarray = array();

        $i=0;
        foreach ($result as $key) {

            $resultarray[$i]['id_cons'] = $key['id_cons'];
            $resultarray[$i]['id_articulo'] = $key['id_articulo'];
            $resultarray[$i]['nombre_producto'] = $key['nombre_producto'];
            $resultarray[$i]['imagen'] = $key['imagen'];
            $resultarray[$i]['sinopsis'] = $key['sinopsis'];
            $resultarray[$i]['precio'] = $key['precio'];
            $resultarray[$i]['color'] = $key['color'];
            $resultarray[$i]['modelo'] = $key['modelo'];
            $resultarray[$i]['garantia'] = $key['garantia'];
            $resultarray[$i]['aviso_legal'] = $key['aviso_legal'];
            $resultarray[$i]['tamaño_pantalla'] = $key['tamaño_pantalla'];
            $resultarray[$i]['resolucion_pantalla'] = $key['resolucion_pantalla'];

            $resultarray[$i]['codigo_marca'] = consul_marca_by_id($mysqli, $key['codigo_marca']);
            $resultarray[$i]['codigo_procesador'] = consul_procesador_by_id($mysqli, $key['codigo_procesador']);
            $resultarray[$i]['codigo_memoria_ram'] = consul_memoria_ram_by_id($mysqli, $key['codigo_memoria_ram']);
            $resultarray[$i]['codigo_almacenamiento'] = consul_almacenamiento_by_id($mysqli, $key['codigo_almacenamiento']);
            $resultarray[$i]['codigo_sistema_operativo'] = consul_so_by_id($mysqli, $key['codigo_sistema_operativo']);
            $resultarray[$i]['estado'] = $key['estado'];
            $i++;
        }

        echo json_encode($resultarray);
    }

    if (isset($_GET['datos_especi'])) {

        $id = $_GET['id_producto'];

        $sql = "SELECT * FROM lista_computadores_cab WHERE id_cons = '$id'";
        $result = $mysqli->query($sql);
        $resultarray = array();

        $i=0;
        foreach ($result as $key) {

            $resultarray[$i]['id_cons'] = $key['id_cons'];
            $resultarray[$i]['id_articulo'] = $key['id_articulo'];
            $resultarray[$i]['nombre_producto'] = $key['nombre_producto'];
            $resultarray[$i]['imagen'] = $key['imagen'];
            $resultarray[$i]['sinopsis'] = $key['sinopsis'];
            $resultarray[$i]['precio'] = $key['precio'];
            $resultarray[$i]['color'] = $key['color'];
            $resultarray[$i]['modelo'] = $key['modelo'];
            $resultarray[$i]['garantia'] = $key['garantia'];
            $resultarray[$i]['aviso_legal'] = $key['aviso_legal'];
            $resultarray[$i]['tamaño_pantalla'] = $key['tamaño_pantalla'];
            $resultarray[$i]['resolucion_pantalla'] = $key['resolucion_pantalla'];

            $resultarray[$i]['codigo_marca'] = consul_marca_by_id($mysqli, $key['codigo_marca']);
            $resultarray[$i]['codigo_procesador'] = consul_procesador_by_id($mysqli, $key['codigo_procesador']);
            $resultarray[$i]['codigo_memoria_ram'] = consul_memoria_ram_by_id($mysqli, $key['codigo_memoria_ram']);
            $resultarray[$i]['codigo_almacenamiento'] = consul_almacenamiento_by_id($mysqli, $key['codigo_almacenamiento']);
            $resultarray[$i]['codigo_sistema_operativo'] = consul_so_by_id($mysqli, $key['codigo_sistema_operativo']);
            $resultarray[$i]['estado'] = $key['estado'];
            $i++;
        }

        echo json_encode($resultarray);
    }
}

if ($metodo == 'PUT') {


}

if ($metodo == 'DELETE') {

  
}