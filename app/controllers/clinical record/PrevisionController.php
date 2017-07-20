<?php 
	/**
	* Descripción: Controlador para la entidad PrevisionMedica
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class PrevisionController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde PrevisionController';
		}
 
		public function register(){
			echo 'register desde PrevisionConroller';
		}
 
		public function update(){
			echo 'update desde PrevisionConroller';
 
		}
 
		public function delete(){
			echo 'delete desde PrevisionConroller';
		}
		
		public function error(){
			require_once('Views/Prevision/error.php');
		} 
       
	}
?>