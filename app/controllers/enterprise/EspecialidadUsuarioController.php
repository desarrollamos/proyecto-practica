<?php 
	/**
	* Descripción: Controlador para la entidad EspecialidadUsuario
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class EspecialidadUsuarioController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde EspecialidadUsuarioController';
		}
 
		public function register(){
			echo 'register desde EspecialidadUsuarioConroller';
		}
 
		public function update(){
			echo 'update desde EspecialidadUsuarioConroller';
 
		}
 
		public function delete(){
			echo 'delete desde EspecialidadUsuarioConroller';
		}
		
		public function error(){
			require_once('Views/EspecialidadUsuario/error.php');
		} 
       
	}
?>