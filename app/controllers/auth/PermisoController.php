<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class Permiso extends AbstractController
{
/////////////////Variables////////////
private $idPermiso;
private $pmR;
private $pmW;
private $pmX;
<<<<<<< HEAD
private $conn;
private $permiso;
=======
>>>>>>> master
/////////////////Propiedades////////////

///////////GET///////////

function getIdPermiso(){return $this->idPermiso;}
function getpmR(){return $this->pmR;}
function getpmW(){return $this->pmW;}
function getpmX(){return $this->pmX;}

///////////SET///////////

function setIdPermiso($valor){$this->idPermiso=$valor;}
function setpmR($valor){$this->pmR=$valor;}
<<<<<<< HEAD
function setpmW($valor){$this->pmW=$valor;}
function setpmx($valor){$this->pmX=$valor;}

///////////METODOS////////

function Permiso($ip, $rp, $xp, $wp){//constructor
$this->idPermiso=$ip;
$this->pmR=$rp;
$this->pmW=$xp;
$this->pmX=$wp;

$this->Permiso=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
}


}
}
=======
function setpmW($valor){$this->pmX=$valor;}
function setpmX($valor){$this->pmX=$valor;}



///////////METODOS////////

function __construct($ip, $rp, $xp, $wp){//constructor
$this->idPermiso=$ip;
$this->pmR=$rp;
$this->pmX=$xp;
$this->pmW=$wp;

}

public function AgregarPermiso()
    {
       
    }

public function ObtenerPermiso()
    {
       
    }

public function EliminarPermiso($userId)
    {
       
    }
}

>>>>>>> master

?>