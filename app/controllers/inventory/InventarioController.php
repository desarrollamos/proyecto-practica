<?php 
	/**
	* Descripción: Controlador para la entidad Inventario
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class InventarioController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde InventarioController';
		}
 
		public function register(){
			echo 'register desde InventarioConroller';
		}
 
		public function update(){
			echo 'update desde InventarioConroller';
 
		}
 
		public function delete(){
			echo 'delete desde InventarioConroller';
		}
		
		public function error(){
			require_once('Views/Inventario/error.php');
		} 
       
	}
?>