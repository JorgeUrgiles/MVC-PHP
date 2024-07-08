<?php
require_once("modelo/usuario.php");
class UsuarioControlador extends Usuario{
    public function __construct(){
        parent::__construct();
    }
    //metodos
    public function indexUsuario(){
        require_once("vista/usuarios.php");
    }
    public function mostrarUsuario(){
        //necesitamos recibir el id en el diseño
        if(isset($_REQUEST["id"])){
            $usuario=$this->getOne($_REQUEST["id"]);//getone viene del crud ya que hay herencia en usuario
        }else{
            $usuario=$this;
        }//el isset sirve para verificar que no este vacio
        require_once("vista/usuario_formulario.php");

    }


    public function guardar(){
      $this->id=$_REQUEST["id"];
      $this->nombre=$_REQUEST["nombre"];
      $this->apellido=$_REQUEST["apellido"];
      $this->telefono=$_REQUEST["telefono"];
      $this->edad=$_REQUEST["edad"];

      $this->id>0?$this->actualizar():$this->insertar();
      header("Location:index.php");
    }

    public function eliminar(){
        $this->delete($_REQUEST["id"]);
        header("Location:index.php");
    }

} 