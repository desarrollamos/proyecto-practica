<?php 
	/**
	* Descripción: Controlador para la entidad Stock
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class StockController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde StockController';
		}
 
		public function register(){
			echo 'register desde StockConroller';
		}
 
		public function update(){
			echo 'update desde StockConroller';
 
		}
 
		public function delete(){
			echo 'delete desde StockConroller';
		}
		
		public function error(){
			require_once('Views/Stock/error.php');
		} 
       
	}
?>