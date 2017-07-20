<?php 
	/**
	* Descripción: Controlador para la entidad Reserva
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ReservaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ReservaController';
		}
 
		public function register(){
			echo 'register desde ReservaConroller';
		}
 
		public function update(){
			echo 'update desde ReservaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ReservaConroller';
		}
		
		public function error(){
			require_once('Views/Reserva/error.php');
		} 
       
	}
?>