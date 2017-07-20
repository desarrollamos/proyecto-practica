<?php 
	/**
	* Descripción: Controlador para la entidad ReservaActividad
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ReservaActividadController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ReservaActividadController';
		}
 
		public function register(){
			echo 'register desde ReservaActividadConroller';
		}
 
		public function update(){
			echo 'update desde ReservaActividadConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ReservaActividadConroller';
		}
		
		public function error(){
			require_once('Views/ReservaActividad/error.php');
		} 
       
	}
?>