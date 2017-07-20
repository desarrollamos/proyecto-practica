<?php 
	/**
	* Descripción: Controlador para la entidad Permiso
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class PermisoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde PermisoController';
		}
 
		public function register(){
			echo 'register desde PermisoConroller';
		}
 
		public function update(){
			echo 'update desde PermisoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde PermisoConroller';
		}
		
		public function error(){
			require_once('Views/Permiso/error.php');
		} 
        
	}
?>