<?php 
	/**
	* Descripción: Controlador para la entidad Turno
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class TurnoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde TurnoController';
		}
 
		public function register(){
			echo 'register desde TurnoConroller';
		}
 
		public function update(){
			echo 'update desde TurnoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde TurnoConroller';
		}
		
		public function error(){
			require_once('Views/Turno/error.php');
		} 
       
	}
?>