<?php 
	/**
	* Descripción: Controlador para la entidad Ciudad
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class CiudadController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde CiudadController';
		}
 
		public function register(){
			echo 'register desde CiudadConroller';
		}
 
		public function update(){
			echo 'update desde CiudadConroller';
 
		}
 
		public function delete(){
			echo 'delete desde CiudadConroller';
		}
		
		public function error(){
			require_once('Views/Ciudad/error.php');
		} 
       
	}
?>