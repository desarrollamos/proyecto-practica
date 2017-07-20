<?php 
	/**
	* Descripción: Controlador para la entidad Contacto Usuario
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ContactoUsuarioController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ContactoUsuarioController';
		}
 
		public function register(){
			echo 'register desde ContactoUsuarioConroller';
		}
 
		public function update(){
			echo 'update desde ContactoUsuarioConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ContactoUsuarioConroller';
		}
		
		public function error(){
			require_once('Views/ContactoUsuario/error.php');
		} 
        
	}
?>