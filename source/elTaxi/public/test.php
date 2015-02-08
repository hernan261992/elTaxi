<?php
require('../core/model/AccessoDB.php');
require('../core/model/ContactoDAO.php');
require('../core/to/ContactoTO.php');
$cnx = AccessoDB::getConnection();
// print_r($cnx->connect_errno);print "<br>";
$contacto = new ContactoTO();
$contacto->setNombre("Nombre");
$contacto->setEmpresa("Nombre");
$contacto->setTelefono(123456);
$contacto->setEmail("Nombre");
$contacto->setCiudad("Nombre");
$contacto->setComentario("Nombre");

$contactoDAO = new ContactoDAO();
print_r($contacto);print "<br>";
print_r($contactoDAO->insertar($contacto));print "<br>";
print_r($contactoDAO->listar());print "<br>";

// print str_replace("d s f", "d", "a");print "<br>";

// nombre, empresa, telefono, e_mail, ciudad, comentario,
// INSERT INTO Contacto(nombre, empresa, telefono, e_mail, ciudad, comentario) VALUES ("nombre","empresa",345245234,"mail","ciudad","comentario")
// $result = $cnx->query("select * from Contacto");
// while ($row = mysqli_fetch_row($result)) {
//   print_r($row);print "<br>";
// }
