<?php 
	/**
	* Descripción: Controlador para la entidad Especialidad
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class EspecialidadController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde EspecialidadController';
		}
 
		public function register(){
			echo 'register desde EspecialidadConroller';
		}
 
		public function update(){
			echo 'update desde EspecialidadConroller';
 
		}
 
		public function delete(){
			echo 'delete desde EspecialidadConroller';
		}
		
		public function error(){
			require_once('Views/Especialidad/error.php');
		} 
       
	}
?>