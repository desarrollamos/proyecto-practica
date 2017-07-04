<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class Permisos extends AbstractController
{
/////////////////Variables////////////
private $id_permisos;
private $r_per;
private $w_per;
private $x_per;
/////////////////Propiedades////////////

///////////GET///////////

function getId_permisos(){return $this->id_permisos;}
function getR_per(){return $this->r_per;}
function getW_per(){return $this->w_per;}
function getX_per(){return $this->x_per;}

///////////SET///////////

function setId_permisos($valor){$this->id_permisos=$valor;}
function setR_per($valor){$this->r_per=$valor;}
function setW_per($valor){$this->x_per=$valor;}
function setX_per($valor){$this->x_per=$valor;}



///////////METODOS////////

function Permisos($ip, $rp, $xp, $wp){//constructor
$this->id_permisos=$ip;
$this->r_per=$rp;
$this->x_per=$xp;
$this->w_per=$wp;

}

public function addAction()
    {
       
    }

    /**
     * Returns user list
     *
     * @return array
     */
    public function getUserListAction()
    {
       
    }

     /**
     * Updating existing user
     *
     * @param string $userId
     */
    public function updateUserAction($userId)
    {
       
    }

    /**
     * Delete an existing user
     *
     * @param string $userId
     */
    public function deleteUserAction($userId)
    {
       
    }
}
}

?>