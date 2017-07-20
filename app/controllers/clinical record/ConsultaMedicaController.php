<?php 
	/**
	* Descripción: Controlador para la entidad ConsultaMedica
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ConsultaMedicaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ConsultaMedicaController';
		}
 
		public function register(){
			echo 'register desde ConsultaMedicaConroller';
		}
 
		public function update(){
			echo 'update desde ConsultaMedicaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ConsultaMedicaConroller';
		}
		
		public function error(){
			require_once('Views/ConsultaMedica/error.php');
		} 
       
	}
?>