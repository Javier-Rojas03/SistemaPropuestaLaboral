<?php
    namespace Controllers;

    use DAO\StudentDAO as StudentDAO;
    use Models\Student as Student;

    class StudentController
    {
        private $studentDAO;

        public function __construct()
        {
            $this->studentDAO = new StudentDAO();
        }

        public function ShowAddView()
        {
            require_once(VIEWS_PATH."student-add.php");
        }

        public function ShowListView()
        {
            require_once(VIEWS_PATH."student-list.php");
        }

        public function ShowMenu($email)
        {
            $this->studentDAO->SaveAPI();
            $student = $this->studentDAO->SearchEmail($email);
            if($student != null){
                 $_SESSION["loggedUser"] = $student;
                 require_once(VIEWS_PATH."home.php");
             }else{
                 echo "<script> confirm('El email no fue encontrado... vuelva a intentar');</script>";
                 require_once(VIEWS_PATH."login.php");
            }
        }

        public function Add()//aca va add company
        {
            
        }
    }
?>