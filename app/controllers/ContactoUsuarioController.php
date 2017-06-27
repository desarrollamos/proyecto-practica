<?php 


 class ContactoUsuario
{
/////////////////Variables////////////
private $id_contacto_usuario;
private $key;
private $value;
/////////////////Propiedades////////////

///////////GET///////////
function getId_contacto_usuario(){return $this->id_contacto_usuario;}
function getKey(){return $this->key;}
function getValue(){return $this->value;}

///////////SET///////////

function setKey($valor){$this->Key=$valor;}
function setValue($valor){$this->Value=$valor;}

///////////METODOS////////

function Usuario($icu,$k,$v){//constructor
$this->id_contacto_usuario=$icu;
$this->key=$k;
$this->value=$v;

}

function crearTipoUsuario(){
    //agregar funcion
}
function eliminarUsuario(){
    //agregar funcion
}
function modificarUsuario(){
    //agregar funcion
}
function obtenerUsuario(){
    
}

}


?>