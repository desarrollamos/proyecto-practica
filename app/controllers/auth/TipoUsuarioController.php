<?php 
	/**
	* Descripción: Controlador para la entidad Tipo Usuario
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class TipoUsuarioController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde TipoUsuarioController';
		}
 
		public function register(){
			echo 'register desde TipoUsuarioConroller';
		}
 
		public function update(){
			echo 'update desde TipoUsuarioConroller';
 
		}
 
		public function delete(){
			echo 'delete desde TipoUsuarioConroller';
		}
		
		public function error(){
			require_once('Views/TipoUsuario/error.php');
		} 
        
	}
?>
