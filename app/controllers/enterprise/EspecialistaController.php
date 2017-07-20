<?php 
	/**
	* Descripción: Controlador para la entidad Especialista
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class EspecialistaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde EspecialistaController';
		}
 
		public function register(){
			echo 'register desde EspecialistaConroller';
		}
 
		public function update(){
			echo 'update desde EspecialistaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde EspecialistaConroller';
		}
		
		public function error(){
			require_once('Views/Especialista/error.php');
		} 
       
	}
?>