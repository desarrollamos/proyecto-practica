<?php 
	/**
	* Descripción: Controlador para la entidad ProductoCompuesto
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ProductoCompuestoController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ProductoCompuestoController';
		}
 
		public function register(){
			echo 'register desde ProductoCompuestoConroller';
		}
 
		public function update(){
			echo 'update desde ProductoCompuestoConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ProductoCompuestoConroller';
		}
		
		public function error(){
			require_once('Views/ProductoCompuesto/error.php');
		} 
       
	}
?>