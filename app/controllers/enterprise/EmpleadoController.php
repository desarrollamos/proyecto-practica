<?php 
	/**
	* Descripción: Controlador para la entidad Empleado
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class EmpleadoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde EmpleadoController';
		}
 
		public function register(){
			echo 'register desde EmpleadoConroller';
		}
 
		public function update(){
			echo 'update desde EmpleadoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde EmpleadoConroller';
		}
		
		public function error(){
			require_once('Views/Empleado/error.php');
		} 
       
	}
?>