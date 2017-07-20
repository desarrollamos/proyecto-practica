<?php 
	/**
	* Descripción: Controlador para la entidad HistorialClinico
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class HistorialClinicoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde HistorialClinicoController';
		}
 
		public function register(){
			echo 'register desde HistorialClinicoConroller';
		}
 
		public function update(){
			echo 'update desde HistorialClinicoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde HistorialClinicoConroller';
		}
		
		public function error(){
			require_once('Views/HistorialClinico/error.php');
		} 
       
	}
?>