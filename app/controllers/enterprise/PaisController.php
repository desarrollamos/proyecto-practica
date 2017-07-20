<?php 
	/**
	* Descripción: Controlador para la entidad Pais
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class PaisController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde PaisController';
		}
 
		public function register(){
			echo 'register desde PaisConroller';
		}
 
		public function update(){
			echo 'update desde PaisConroller';
 
		}
 
		public function delete(){
			echo 'delete desde PaisConroller';
		}
		
		public function error(){
			require_once('Views/Pais/error.php');
		} 
       
	}
?>