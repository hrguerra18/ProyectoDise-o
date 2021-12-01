<?php 
	require "C:/xampp/htdocs/ProyectoDiseño/ProyectoDiseño/Login2v2/Login/Controles/empresas.php";
	use PHPUnit\Framework\TestCase;

	class testEmpresa extends TestCase
	{
		public function test_validar_solo_numeros(): void
	    	{
	        	$this->assertEquals(
	           		true,
	           		ValidarSoloNumeros("2")
	        	);
	    	}

			public function test_validar_que_existe_el_servicio_seleccionado(): void
	    	{
	        	$this->assertEquals(
	           		true,
	           		VerificarExistenciaServicio("Servicio")
	        	);
	    	}

			public function test_validar_que_la_entrada_solo_tenga_caracteres(): void
	    	{
	        	$this->assertEquals(
	           		true,
	           		ValidarCaracteresAlfabeticos("solocaracteres")
	        	);
	    	}

			public function test_validar_datos_de_entrada_al_registrar_la_empresa(): void
	    	{
	        	$this->assertEquals(
	           		[true,""],
	           		ValidarRegistroEmpresa("helder", "foto", "1234567892", "Servicio", "direccion", "1234567892", "correo@gmail.com", "contraseña")
	        	);
	    	}
	}
