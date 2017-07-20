<?php 
	/**
	* Descripción: Controlador para la entidad Metadatos
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class MetadatosController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde MetadatosController';
		}
 
		public function register(){
			echo 'register desde MetadatosConroller';
		}
 
		public function update(){
			echo 'update desde MetadatosConroller';
 
		}
 
		public function delete(){
			echo 'delete desde MetadatosConroller';
		}
		
		public function error(){
			require_once('Views/Metadatos/error.php');
		} 
       
	}
?>