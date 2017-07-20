<?php 
	/**
	* Descripción: Controlador para la entidad Region
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class RegionController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde RegionController';
		}
 
		public function register(){
			echo 'register desde RegionConroller';
		}
 
		public function update(){
			echo 'update desde RegionConroller';
 
		}
 
		public function delete(){
			echo 'delete desde RegionConroller';
		}
		
		public function error(){
			require_once('Views/Region/error.php');
		} 
       
	}
?>