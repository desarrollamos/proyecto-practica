<?php 
	/**
	* Descripción: Controlador para la entidad ConsultaActividad
	* Autor: Axel castro
	* Web: desarrollamos.cl
	* Fecha: 19-07-2017
	*/
	class ConsultaActividadController
	{	
		public function __construct(){}
 
		public function index(){
			echo 'index desde ConsultaActividadController';
		}
 
		public function register(){
			echo 'register desde ConsultaActividadConroller';
		}
 
		public function update(){
			echo 'update desde ConsultaActividadConroller';
 
		}
 
		public function delete(){
			echo 'delete desde ConsultaActividadConroller';
		}
		
		public function error(){
			require_once('Views/ConsultaActividad/error.php');
		} 
       
	}
?>