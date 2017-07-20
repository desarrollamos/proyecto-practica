<?php 
	/**
	* Descripción: Controlador para la entidad Categoria
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class CategoriaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde CategoriaController';
		}
 
		public function register(){
			echo 'register desde CategoriaConroller';
		}
 
		public function update(){
			echo 'update desde CategoriaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde CategoriaConroller';
		}
		
		public function error(){
			require_once('Views/Categoria/error.php');
		} 
       
	}
?>