<?php 



class Empresa 
{
/////////////////Variables////////////
private $id_empresa;
private $nombre_empresa;
private $rut_empresa;
private $razons_empresa;
private $mail_empresa;
private $telefono_empresa;
private $fecha_creador_empresa;
private $fecha_edicion_empresa;
/////////////////Propiedades////////////

///////////GET///////////

function getId_empresa(){return $this->id_empresa;}
function getNombre_empresa(){return $this->nombre_empresa;}
function getRut_empresa(){return $this->rut_empresa;}
function getRazons_empresa(){return $this->razons_empresa;}
function getMail_empresa(){return $this->mai_empresa;}
function getTelefono_empresa(){return $this->telefono_empresa;}
function getFecha_creador_empresa(){return $this->fecha_creador_empresa;}
function getFecha_edicion_empresa(){return $this->fecha_edicion_empresa;}

///////////SET///////////

function setId_empresa($valor){$this->id_empresa=$valor;}
function setNombre_empresa($valor){$this->nombre_empresa=$valor;}
function setRut_empresa($valor){$this->rut_empresa=$valor;}
function setRazons_empresa($valor){$this->razons_empresa=$valor;}
function setMail_empresa($valor){$this->mail_empresa=$valor;}
function setTelefono_empresa($valor){$this->telefono_empresa=$valor;}
function setFecha_creador_empresa($valor){$this->fecha_creador_empresa=$valor;}
function setFecha_edicion_empresa($valor){$this->fecha_edicion_empresa=$valor;}




///////////METODOS////////                                                                              



}

function crear(){
    //agregar funcion
}

function modificar(){
    //agregar funcion

}


?>