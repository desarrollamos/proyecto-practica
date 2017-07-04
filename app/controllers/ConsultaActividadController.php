<?php

namespace App\Controllers;

/**
 * Operations with Users: CRUD
 */
class UsersController extends AbstractController
{
    /////////////////Variables////////////

private $id_usuario;    
private $nombre_usuario;
private $apellido_paterno_usuario;
private $apellido_materno_usuario;
private $fecha_nacimiento;
private $rut_usuario;
private $mail_usuario;
private $nacionalidad_usuario;
private $fecha_creacion_usuario;
private $fecha_edicion_usuario;

/////////////////Propiedades////////////

///////////GET///////////

function getI_usuario(){return $this->id_usuario;}
function getNombre_usuario(){return $this->nombre_usuario;}
function getApellido_paterno_usuario(){return $this->apellido_paterno_usurio;}
function getApellido_materno_usuario(){return $this->apellido_materno_usuario;}
function getFecha_nacimiento(){return $this->fecha_nacimiento;}
function getRut_usuario(){return $this->rut_usuario;}
function getMail_usuario(){return $this->mail_usuario;}
function getNacionalidad_usuario(){return $this->nacionalidad_usuario;}
function getFecha_creacion_usuario(){return $this->fecha_creacion_usuario;}
function getFecha_edicion_usuario(){return $this->fecha_edicion_usuario;}

///////////SET///////////

function setI_usuardio($valor){$this->id_usuario=$valor;}
function setNombre_usuario($valor){$this->nombre_usuario=$valor;}
function setApellido_paterno_usuario($valor){$this->apellido_paterno_usuarioo=$valor;}
function setApellido_materno_usuario($valor){$this->apellido_materno_usuarioo=$valor;}
function setFecha_nacimiento($valor){$this->fecha_nacimientoo=$valor;}
function setRut_usuario($valor){$this->rut_usuario=$valor;}
function setMail_usuario($valor){$this->mail_usuario=$valor;}
function setNacionalidad_usuario($valor){$this->nacionalidad_usuario=$valor;}
function setFecha_creacion_usuario($valor){$this->fecha_creacion_usuario=$valor;}
function setFecha_edicion_usuario($valor){$this->fecha_edicion_usuario=$valor;}


///////////METODOS////////

function Usuario($iu,$nu,$apu,$amu,$fn,$ru,$mu,$nau,$fcu,$feu){//constructor
$this->id_usuario=$iu;
$this->nombre_usuario=$nu;
$this->apellido_paterno_usuario=$apu;
$this->apellido_materno_usuario=$amu;
$this->fecha_nacimiento=$fn;
$this->rut_usuario=$ru;
$this->mail_usuario=$mu;
$this->nacionalidad_usuario=$nau;
$this->fecha_creacion_usuario=$fcu;
$this->fecha_edicion_usuario=$feu;

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