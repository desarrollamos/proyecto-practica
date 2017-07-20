<?php 
	/**
	* Descripción: Controlador para la entidad Paciente
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class PacienteController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde PacienteController';
		}
 
		public function register(){
			echo 'register desde PacienteConroller';
		}
 
		public function update(){
			echo 'update desde PacienteConroller';
 
		}
 
		public function delete(){
			echo 'delete desde PacienteConroller';
		}
		
		public function error(){
			require_once('Views/Paciente/error.php');
		} 
       
	}
?>