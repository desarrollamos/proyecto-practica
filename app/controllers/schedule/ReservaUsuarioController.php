<?php 
	/**
	* Descripción: Controlador para la entidad ReservaUsuario
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ReservaUsuarioController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ReservaUsuarioController';
		}
 
		public function register(){
			echo 'register desde ReservaUsuarioConroller';
		}
 
		public function update(){
			echo 'update desde ReservaUsuarioConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ReservaUsuarioConroller';
		}
		
		public function error(){
			require_once('Views/ReservaUsuario/error.php');
		} 
       
	}
?>