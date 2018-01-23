<?php
/**
 * Clase encargada de las consultas a la tabla movimientos.
 */

 //Llamamos a la clase db, encargada de la conexion.
 require_once 'dbJockeys.php';

class Movimientos extends db
{
  //la funcion construct llama al construct de db, encargada de la conexión.
  function __construct()
  {
    parent::__construct();
  }

  //funcion encargada de insertar los recuros para un servicio en la ddbb
  function nuevoMovimiento($fechao, $horao, $origen, $bastidor, $fechad, $horad, $destino){
    //realizamos la consuta y la guardamos en $sql
    $sql="INSERT INTO movimientos(id, fecha_origen, hora_origen, origen, bastidor, fecha_destino, hora_destino, destino)
    VALUES(NULL, '".$fechao."', '".$horao."', '".$origen."', '".$bastidor."', '".$fechad."', '".$horad."', '".$destino."')";
    echo $sql;
    //Realizamos la consulta utilizando la funcion creada en db.php
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      return true;
    }else{
      return null;
    }
  }
}
 ?>