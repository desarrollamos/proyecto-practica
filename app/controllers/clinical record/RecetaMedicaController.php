<?php 
	/**
	* Descripción: Controlador para la entidad RecetaMedica
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class RecetaMedicaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde RecetaMedicaController';
		}
 
		public function register(){
			echo 'register desde RecetaMedicaConroller';
		}
 
		public function update(){
			echo 'update desde RecetaMedicaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde RecetaMedicaConroller';
		}
		
		public function error(){
			require_once('Views/RecetaMedica/error.php');
		} 
       
	}
?>