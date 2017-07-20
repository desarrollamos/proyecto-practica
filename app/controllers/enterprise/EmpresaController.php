<?php 
	/**
	* Descripción: Controlador para la entidad Empresa
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class EmpresaController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde EmpresaController';
		}
 
		public function register(){
			echo 'register desde EmpresaConroller';
		}
 
		public function update(){
			echo 'update desde EmpresaConroller';
 
		}
 
		public function delete(){
			echo 'delete desde EmpresaConroller';
		}
		
		public function error(){
			require_once('Views/Empresa/error.php');
		} 
       
	}
?>