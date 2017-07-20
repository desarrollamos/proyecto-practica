<?php 
	/**
	* Descripción: Controlador para la entidad ProductoCategoria
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ProductoCategoriaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ProductoCategoriaController';
		}
 
		public function register(){
			echo 'register desde ProductoCategoriaConroller';
		}
 
		public function update(){
			echo 'update desde ProductoCategoriaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ProductoCategoriaConroller';
		}
		
		public function error(){
			require_once('Views/ProductoCategoria/error.php');
		} 
       
	}
?>