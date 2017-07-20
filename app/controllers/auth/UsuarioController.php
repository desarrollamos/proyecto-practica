<?php 
	/**
	* Descripción: Controlador para la entidad usuario
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class UsuarioController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde UsuarioController';
		}
 
		public function register(){
			echo 'register desde UsuarioConroller';
		}
 
		public function update(){
			echo 'update desde UsuarioConroller';
 
		}
 
		public function delete(){
			echo 'delete desde UsuarioConroller';
		}
		
		public function error(){
			require_once('Views/Usuario/error.php');
		} 
        public function cargar(){
            require_once('app/models/auth/Usuario');
        }
	}
?>