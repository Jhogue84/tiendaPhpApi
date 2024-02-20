<?php
    include_once '../Config/ConectorBd.php';
    class UserModel{       
        //atributos
        private $id;
        private $nombres;
        private $apellidos; 
        private $numIdentificacion;
        private $tipoIdentificacion;
        private $usuario;
        private $clave;
        private $estado;
        private $idTipoUsuario;

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }

        public function ver(){
            $sql = "SELECT * FROM users WHERE id = {$this->id}";
            $datos = ConectorBd::consultaRetorno($sql);
            $fila = mysqli_fetch_assoc($datos);
            return $fila;
        }

        public static function loguear($usuario, $clave){
            $fila = UserModel::ver();
            $sql = "SELECT * FROM users WHERE usuario = '{this->usuario}' AND clave= '{this->clave}' AND estado = {$this->estado}";

        }

        
    }

?>