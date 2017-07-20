<?php 
	/**
	* Descripción: Controlador para la entidad Transaccion
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class TransaccionController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde TransaccionController';
		}
 
		public function register(){
			echo 'register desde TransaccionConroller';
		}
 
		public function update(){
			echo 'update desde TransaccionConroller';
 
		}
 
		public function delete(){
			echo 'delete desde TransaccionConroller';
		}
		
		public function error(){
			require_once('Views/Transaccion/error.php');
		} 
       
	}
?>