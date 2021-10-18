<?php
    namespace Controllers;

    use DAO\StudentDAO as StudentDAO;

    class StudentController
    {
        private $studentDAO;

        public function __construct(){
            $this->studentDAO = new StudentDAO();
        }

        public function ShowMenu($email){
            $this->studentDAO->SaveAPI();
            $student = $this->studentDAO->SearchEmail($email);
            
            if($student != null || $email == "admin@sessionstart.com" ){

                if($email == "admin@sessionstart.com"){
                    $_SESSION["loggedUser"] = $email;
                    //FALTA LA DIRECCION DE INICIO DEL ADMIN
                }else{
                    $_SESSION["loggedUser"] = $student;
                    require_once(VIEWS_PATH."home.php"); 
                }
                
                 
            }else{
                echo "<script> confirm('El email no fue encontrado... vuelva a intentar');</script>";
                require_once(VIEWS_PATH."login.php");
            }
        }

        
    }
?>