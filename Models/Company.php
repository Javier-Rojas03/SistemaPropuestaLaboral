<?php
    namespace Models;

    class Company{
        
        private $company_name;
        private $description;
        private $contact_email;
        private $phone_number;
        private $company_id;/// El id es autoincremental
        

        public function getCompanyName(){ return $this->company_name;}
        public function setCompanyName($company_name){ $this->company_name = $company_name;}

        public function getDescription(){ return $this->description; }
        public function setDescription($description){ $this->description = $description;}

        public function getContactEmail(){ return $this->contact_email; }
        public function setContactEmail($contact_email){ $this->contact_email = $contact_email;}

        public function getPhoneNumber(){ return $this->phone_number; }
        public function setPhoneNumber($phone_number){ $this->phone_number = $phone_number;}

        public function getCompanyId(){ return $this->company_id; }
        public function setCompanyId($company_id){ $this->company_id = $company_id;}
    }
?>