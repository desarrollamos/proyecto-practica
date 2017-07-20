<?php 
	/**
	* Descripción: Controlador para la entidad Departamento
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class DepartamentoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde DepartamentoController';
		}
 
		public function register(){
			echo 'register desde DepartamentoConroller';
		}
 
		public function update(){
			echo 'update desde DepartamentoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde DepartamentoConroller';
		}
		
		public function error(){
			require_once('Views/Departamento/error.php');
		} 
       
	}
?>