<?php

abstract class Persona
{

private $_nombre;
private $_apellido;
private $_dni;
private $_sexo;

public function construct($nom,$ape,$dni,$sexo)
{
	$this->_nombre = $nom;
	$this->_apellido = $ape;
	$this->_dni = $dni;
	$this->_sexo=$sexo;
}

public function getNombre()
{
	return $this->_nombre;
}

public function getApellido()
{
	return $this->_apellido;
}

public function getDni()
{
	return $this->_dni;
}
public function getSexo()
{
	return $this->_sexo;
}

public function setNombre($nom)
{
	$this->_nombre = $nom;
}

public function setApellido($ape)
{
	$this->_apellido = $ape;
}

public function setDni($_dni)
{
	$this->_dni = $_dni;
}

public function ToString()
{
	return $this->_nombre.$this->_apellido.$this->_dni;
}

public abstract Hablar($idioma);


}

?>