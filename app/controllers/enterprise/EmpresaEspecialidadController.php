<?php 
	/**
	* Descripción: Controlador para la entidad EmpresaEspecialidad
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class EmpresaEspecialidadController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde EmpresaEspecialidadController';
		}
 
		public function register(){
			echo 'register desde EmpresaEspecialidadConroller';
		}
 
		public function update(){
			echo 'update desde EmpresaEspecialidadConroller';
 
		}
 
		public function delete(){
			echo 'delete desde EmpresaEspecialidadConroller';
		}
		
		public function error(){
			require_once('Views EmpresaEspecialidad/error.php');
		} 
       
	}
?>