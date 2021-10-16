<?php
    namespace Controllers;

    class HomeController
    {

        public function Index(){
            require_once(VIEWS_PATH."login.php"); // aca hay que mandarlo a la pantalla de login
        }

        public function ShowAlumnView(){
            require_once(VIEWS_PATH."validate-session.php");
            require_once(VIEWS_PATH.".php"); //aca hay que mostrar las cosas que van despues del login
        }

        public function Login($email){
            //DAO de usuarios
            if(true)// aca se corrobora que el mail existe en el sistema
            {
                $_SESSION["loggedUser"] = true; // igualarlo al mail
                $this->ShowAlumnView();
            }
            else
                echo "<script> confirm('El mail ingresado no es correcto, vuelva a intentarlo');</script>";
                $this->Index();
        }
        
        public function Logout(){
            session_destroy();

            $this->Index();
        }
    }
?>