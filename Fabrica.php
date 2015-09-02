<?php
class Fabrica
{
	private $_RazonSocial;
	private $_Empleado = array();
	public function _Contruc($Empleado)
	{
		$this->_RazonSocial="Anonima";
		$this->_Empleado=$Empleado;
	}
	public function AgregarPersona($per)
	{ 
		array_push($_Empleado,$per);
	}
	public function ToString()
	{
		return $_RazonSocial."-".$_Empleado;
	}
	public function CalcularSalario()
	{
		

	}
	public function SacarPersona()
	{

	}
	private function EvitarDuplicado()
	{

	}
}

?>