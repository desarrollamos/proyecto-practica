<?php 
	/**
	* Descripción: Controlador para la entidad DetalleTransaccion
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class DetalleTransaccionController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde DetalleTransaccionController';
		}
 
		public function register(){
			echo 'register desde DetalleTransaccionConroller';
		}
 
		public function update(){
			echo 'update desde DetalleTransaccionConroller';
 
		}
 
		public function delete(){
			echo 'delete desde DetalleTransaccionConroller';
		}
		
		public function error(){
			require_once('Views/DetalleTransaccion/error.php');
		} 
       
	}
?>