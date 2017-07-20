<?php 
	/**
	* Descripción: Controlador para la entidad BonoConsulta
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class BonoConsultaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde BonoConsultaController';
		}
 
		public function register(){
			echo 'register desde BonoConsultaConroller';
		}
 
		public function update(){
			echo 'update desde BonoConsultaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde BonoConsultaConroller';
		}
		
		public function error(){
			require_once('Views/BonoConsulta/error.php');
		} 
       
	}
?>