<?php
/**
 * Clase entidad de la tabla Contacto.
 */
class ContactoTO
{
  private $id;
  private $nombre;
  private $empresa;
  private $telefono;
  private $e_mail;
  private $ciudad;
  private $comentario;

  public function getId()
  {
    return $this->id;
  }
  public function setId($value='')
  {
    $this->id = $value;
  }
  public function getComentario()
  {
    return $this->comentario;
  }
  public function setComentario($value='')
  {
    $this->comentario = $value;
  }
  public function getCiudad()
  {
    return $this->ciudad;
  }
  public function setCiudad($value='')
  {
    $this->ciudad = $value;
  }
  public function getEmail()
  {
    return $this->e_mail;
  }
  public function setEmail($value='')
  {
    $this->e_mail = $value;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($value='')
  {
    $this->nombre = $value;
  }
  public function getEmpresa()
  {
    return $this->empresa;
  }
  public function setEmpresa($value='')
  {
    $this->empresa = $value;
  }
  public function getTelefono()
  {
    return $this->telefono;
  }
  public function setTelefono($value='')
  {
    $this->telefono = $value;
  }
}
