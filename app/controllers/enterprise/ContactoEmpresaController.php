<?php 
	/**
	* Descripción: Controlador para la entidad ContactoEmpresa
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ContactoEmpresaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ContactoEmpresaController';
		}
 
		public function register(){
			echo 'register desde ContactoEmpresaConroller';
		}
 
		public function update(){
			echo 'update desde ContactoEmpresaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ContactoEmpresaConroller';
		}
		
		public function error(){
			require_once('Views/ContactoEmpresa/error.php');
		} 
       
	}
?>