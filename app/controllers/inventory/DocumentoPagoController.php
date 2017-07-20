<?php 
	/**
	* Descripción: Controlador para la entidad DocumentoPago
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class DocumentoPagoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde DocumentoPagoController';
		}
 
		public function register(){
			echo 'register desde DocumentoPagoConroller';
		}
 
		public function update(){
			echo 'update desde DocumentoPagoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde DocumentoPagoConroller';
		}
		
		public function error(){
			require_once('Views/DocumentoPago/error.php');
		} 
       
	}
?>