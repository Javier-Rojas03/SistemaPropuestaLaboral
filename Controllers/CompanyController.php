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

        public function Add($company_name, $description, $contact_email, $phone_number){

            $Company = new Company();
            $Company->setCompanyName($company_name);
            $Company->setDescription($description);
            $Company->setContactEmail($contact_email);
            $Company->setPhoneNumber($phone_number);

            $this->CompanyDAO->Add_Company($Company);

            $this->ShowListView();
        }

        public function Remove($id){
            $this->CompanyDAO->Remove($id);
            $this->ShowListView();
        }

        public function CompanyInfo($id){
            $company = $this->CompanyDAO->GetById($id);
            require_once(VIEWS_PATH."company-info.php");
        }
        

        
    }
?>     
        
        
       