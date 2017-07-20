<?php 
	/**
	* Descripción: Controlador para la entidad Direccion
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class DireccionController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde DireccionController';
		}
 
		public function register(){
			echo 'register desde DireccionConroller';
		}
 
		public function update(){
			echo 'update desde DireccionConroller';
 
		}
 
		public function delete(){
			echo 'delete desde DireccionConroller';
		}
		
		public function error(){
			require_once('Views/Direccion/error.php');
		} 
       
	}
?>