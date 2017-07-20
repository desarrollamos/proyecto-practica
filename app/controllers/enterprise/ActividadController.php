<?php 
	/**
	* Descripción: Controlador para la entidad Actividad
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ActividadController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ActividadController';
		}
 
		public function register(){
			echo 'register desde ActividadConroller';
		}
 
		public function update(){
			echo 'update desde ActividadConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ActividadConroller';
		}
		
		public function error(){
			require_once('Views/Actividad/error.php');
		} 
       
	}
?>