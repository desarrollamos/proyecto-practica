<?php 
	/**
	* Descripción: Controlador para la entidad Provincia
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ProvinciaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ProvinciaController';
		}
 
		public function register(){
			echo 'register desde ProvinciaConroller';
		}
 
		public function update(){
			echo 'update desde ProvinciaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ProvinciaConroller';
		}
		
		public function error(){
			require_once('Views/Provincia/error.php');
		} 
       
	}
?>