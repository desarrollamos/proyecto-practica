<?php

namespace App\Controllers;

/**
 * Operations with Users: CRUD
 */
class UsuarioController extends AbstractController{

/////////////////Variables////////////

private $idUsuario;    
private $usNombre;
private $usApellidoPaterno;
private $usApellidoMaterno;
private $usFechaNacimiento;
private $usRut;
private $usEMail;
private $usNacionalidad;
private $usFechaCreacion;
private $usFechaMod;

/////////////////Propiedades////////////

///////////GET///////////

function getIdUsuario(){return $this->idUsuario;}
function getusNombre(){return $this->usNombre;}
function getusApellidoPaterno(){return $this->usApellidoPaterno;}
function getusApellidoMaterno(){return $this->usApellidoMaterno;}
function getusFechaNacimiento(){return $this->usFechaNacimiento;}
function getusRut(){return $this->usRut;}
function getusEmail(){return $this->usEMail;}
function getusNacionalidad(){return $this->usNacionalidad;}
function getusFechaCreacion(){return $this->usFechaCreacion;}
function getusFechaMod(){return $this->usFechaMod;}

///////////SET///////////

function setIdUsuario($valor){$this->idUsuario=$valor;}
function setusNombre($valor){$this->usNombre=$valor;}
function setusApellidoPaterno($valor){$this->usApellidoPaterno=$valor;}
function setusApellidoMaterno($valor){$this->usApellidoMaterno=$valor;}
function setusFechaNacimiento($valor){$this->usFechaNacimiento=$valor;}
function setusRut($valor){$this->usRut=$valor;}
function setusEmail($valor){$this->usEmail=$valor;}
function setusNacionalidadUsuario($valor){$this->usNacionalidad=$valor;}
function setusFechaCreacion($valor){$this->usFechaCreacion=$valor;}
function setusFechaMod($valor){$this->FechaMod=$valor;}


///////////METODOS////////

function __construct($iu,$nu,$apu,$amu,$fn,$ru,$mu,$nau,$fcu,$feu){//constructor
$this->idUsuario=$iu;
$this->usNombre=$nu;
$this->usApellidoPaterno=$apu;
$this->usApellidoMaterno=$amu;
$this->usFechaNacimiento=$fn;
$this->usRut=$ru;
$this->usEmail=$mu;
$this->usNacionalidad=$nau;
$this->usFechaCreacion=$fcu;
$this->usFechaMod=$feu;



}
    function CargarTodosLosContactos(){
////lenar el arreglo con consulta <mys>ql
}

    public function addAction()
    {
          /** Init Block **/
        $errors = [];
        $data = [];
   /** End Init Block **/

   /** Validation Block **/
        $data['login'] = $this->request->getPost('login');
        if (!is_string($data['login']) || !preg_match('/^[A-z0-9_-]{3,16}$/', $data['login'])) {
            $errors['login'] = 'Login must consist of 3-16 latin symbols, numbers or \'-\' and \'_\' symbols';
        }

        $data['password'] = $this->request->getPost('password');
        if (!is_string($data['password']) || !preg_match('/^[A-z0-9_-]{6,18}$/', $data['password'])) {
            $errors['password'] = 'Password must consist of 6-18 latin symbols, numbers or \'-\' and \'_\' symbols';
        }

        $data['first_name'] = $this->request->getPost('first_name');
        if ((!empty($data['first_name'])) && (!is_string($data['first_name']))) {
            $errors['first_name'] = 'String expected';
        }

        $data['last_name'] = $this->request->getPost('last_name');
        if ((!empty($data['last_name'])) && (!is_string($data['last_name']))) {
            $errors['last_name'] = 'String expected';
        }

        if ($errors) {
            $exception = new Http400Exception(_('Input parameters validation error'), self::ERROR_INVALID_REQUEST);
            throw $exception->addErrorDetails($errors);
        }
   /** End Validation Block **/

   /** Passing to business logic and preparing the response **/
        try {
            $this->usersService->createUser($data);
        } catch (ServiceException $e) {
            switch ($e->getCode()) {
                case AbstractService::ERROR_ALREADY_EXISTS:
                case UsersService::ERROR_UNABLE_CREATE_USER:
                    throw new Http422Exception($e->getMessage(), $e->getCode(), $e);
                default:
                    throw new Http500Exception(_('Internal Server Error'), $e->getCode(), $e);
            }
        }
   /** End Passing to business logic and preparing the response  **/
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