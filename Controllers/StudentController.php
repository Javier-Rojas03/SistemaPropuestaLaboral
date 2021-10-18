<?php
    namespace Controllers;

    use DAO\StudentDAO as StudentDAO;
    use DAO\CompanyDAO as CompanyDAO;

    class StudentController
    {
        private $studentDAO;
        private $companyDAO;

        public function __construct(){
            $this->studentDAO = new StudentDAO();
            $this->companyDAO = new CompanyDAO;
        }

        public function ShowListView(){
            $company_list = $this->companyDAO->GetAll();
            require_once(VIEWS_PATH."std-company-list.php");
        }

        public function ShowMenu($email){
            $this->studentDAO->SaveAPI();
            if($email == "admin@sessionstart.com"){
                $_SESSION["loggedUser"] = $email;
                require_once(VIEWS_PATH."homeAdmin.php");
            }else{
                $student = $this->studentDAO->SearchEmail($email);
                if($student != null){
                    $_SESSION["loggedUser"] = $student;
                    require_once(VIEWS_PATH."home.php");
                }else{
                    echo "<script> confirm('El email no fue encontrado... vuelva a intentar');</script>";
                    require_once(VIEWS_PATH."login.php");
                }
            }
        }

        
    }
?>