<?php 
	//pueedes ponerlo de la siguiente manera ../nombre proyecto/nombrearchivo.php
	require "C:/xampp/htdocs/ProyectoDiseño/ProyectoDiseño/Login2v2/Login/Controles/profesionales.php";
	use PHPUnit\Framework\TestCase;

	class testProfesional extends TestCase
	{
		public function test_validar_solo_numeros(): void
	    	{
	        	$this->assertEquals(
	           		true,
	           		ValidarSoloNumeros(22)
	        	);
	    	}
	}
?>