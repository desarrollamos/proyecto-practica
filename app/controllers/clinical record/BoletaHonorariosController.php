<?php 
	/**
	* Descripción: Controlador para la entidad BoletaHonorarios
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class BoletaHonorariosController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde BoletaHonorariosController';
		}
 
		public function register(){
			echo 'register desde BoletaHonorariosConroller';
		}
 
		public function update(){
			echo 'update desde BoletaHonorariosConroller';
 
		}
 
		public function delete(){
			echo 'delete desde BoletaHonorariosConroller';
		}
		
		public function error(){
			require_once('Views/BoletaHonorarios/error.php');
		} 
       
	}
?>