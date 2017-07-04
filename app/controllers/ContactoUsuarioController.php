<?php 

 
 class ContactoUsuarioController
{
/////////////////Variables////////////
private $idContactoUsuario;
private $cuKey;
private $cuValue;
private $Usuario_idUsuario;
/////////////////Propiedades////////////

///////////GET///////////
function getIdContactoUsuario(){return $this->idContactoUsuario;}
function getCuKey(){return $this->cuKey;}
function getCuValue(){return $this->cuValue;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;} 

///////////SET///////////

function setIdContactoUsuario($valor){$this->idContactoUsuario=$valor;}
function setCuKey($valor){$this->cuKey=$valor;}
function setCuValue($valor){$this->cuValue=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario;}

///////////METODOS////////

function UsuarioConstructor($icu,$ck,$cv, $uiu){//constructor
$this->idContactoUsuario=$icu;
$this->cuKey=$ck;
$this->value=$cv;
$this->Usuario_idUsuario=$uiu;

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