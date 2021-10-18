<?php
    namespace Controllers;

    use DAO\CompanyDAO as CompanyDAO;
    use Models\Company as Company;

    class CompanyController{
        private $CompanyDAO;

        public function __construct(){
            $this->CompanyDAO = new CompanyDAO();
        }

        public function ShowAddView(){
            require_once(VIEWS_PATH."company-add.php");
        }

        public function ShowListView(){
            $company_list = $this->CompanyDAO->GetAll();
            require_once(VIEWS_PATH."company-list.php");
        }

        public function Add($name, $description, $email, $phone){

            $Company = new Company();
            $Company->setCompanyName($name);
            $Company->setDescription($description);
            $Company->setContactEmail($email);
            $Company->setPhoneNumber($phone);

            $this->CompanyDAO->Add_Company($Company);

            $this->ShowAddView();
        }

        public function Remove($id){
            $this->CompanyDAO->Remove($id);
            $this->ShowListView();
        }

        

        
    }
?>     
        
        
       