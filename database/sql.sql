CREATE DATABASE elTaxi;

USE elTaxi;

CREATE TABLE Contacto(
  id  INT() NOT NULL AUTOINCREMENT,
  nombre VARCHAR(40) NOT NULL,
  empresa VARCHAR(50),
  telefono CHAR(12) NOT NULL,
  e-mail  VARCHAR(60) NOT NULL,
  ciudad  VARCHAR(50) NOT NULL,
  comentario  TEXT NOT NULL,
  PRIMARY KEY Pk_contacto(id)
);
