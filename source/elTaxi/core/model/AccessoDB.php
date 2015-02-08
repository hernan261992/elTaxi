<?php
/**
 * Instanciadora del objeto conexion
 */
class AccessoDB
{
  // private static $conexion = null;
  public static function getConnection()
  {
    $conexion = null;
    if ($conexion == null) {
      $url = "localhost";
      $user = "root";
      $pass = "";
      $database = "elTaxi";
      $conexion = new mysqli($url, $user, $pass, $database);
    }
    return $conexion;
  }
}
