<?php
/**
 * Clase DAO para insertar datos en la tabla contactos.
 */
class ContactoDAO
{
  public function insertar($contacto)
  {
    $conexion = AccessoDB::getConnection();
    $sql = 'INSERT INTO Contacto(nombre, empresa, telefono, e_mail, ciudad, comentario) VALUES ("%nombre","%empresa","%telefono","%mail","%ciudad","%comentario")';
    $sql = str_replace("%nombre", $contacto->getNombre(), $sql);
    $sql = str_replace("%empresa", $contacto->getEmpresa(), $sql);
    $sql = str_replace("%telefono", $contacto->getTelefono(), $sql);
    $sql = str_replace("%mail", $contacto->getEmail(), $sql);
    $sql = str_replace("%ciudad", $contacto->getCiudad(), $sql);
    $sql = str_replace("%comentario", $contacto->getComentario(), $sql);
    return $conexion->query($sql);
  }
  public function listar()
  {
    $conexion = AccessoDB::getConnection();
    $lista = array();
    $sql = "select * from Contacto";
    $result = $conexion->query($sql);
    $contacto = null;
    while ($row = $result->fetch_row()) {
      $contacto = new ContactoTO();
      $contacto->setId($row[0]);
      $contacto->setNombre($row[1]);
      $contacto->setEmpresa($row[2]);
      $contacto->setTelefono($row[3]);
      $contacto->setEmail($row[4]);
      $contacto->setciudad($row[5]);
      $contacto->setComentario($row[6]);
      $lista[] = $contacto;
    }
    return $lista;
  }
}
