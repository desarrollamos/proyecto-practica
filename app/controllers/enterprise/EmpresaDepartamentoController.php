<?php 
	/**
	* Descripción: Controlador para la entidad EmpresaDepartamento
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class EmpresaDepartamentoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde EmpresaDepartamentoController';
		}
 
		public function register(){
			echo 'register desde EmpresaDepartamentoConroller';
		}
 
		public function update(){
			echo 'update desde EmpresaDepartamentoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde EmpresaDepartamentoConroller';
		}
		
		public function error(){
			require_once('Views EmpresaDepartamento/error.php');
		} 
       
	}
?>