<?php 
	/**
	* Descripción: Controlador para la entidad Producto
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ProductoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ProductoController';
		}
 
		public function register(){
			echo 'register desde ProductoConroller';
		}
 
		public function update(){
			echo 'update desde ProductoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ProductoConroller';
		}
		
		public function error(){
			require_once('Views/Producto/error.php');
		} 
       
	}
?>