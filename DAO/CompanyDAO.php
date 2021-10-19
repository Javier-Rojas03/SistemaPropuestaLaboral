<?php
    namespace DAO;

    use DAO\ICompanyDAO as ICompanyDAO;
    use Models\Company as Company;

    class CompanyDAO implements ICompanyDAO{
        private $CompanyList = array();
        private $fileName = ROOT."Data/company_data.json";
        
        public function GetAll(){
            $this->RetrieveData();

            return $this->CompanyList;
        }
        
        public function Add_Company(Company $newCompany){
            $this->RetrieveData();

            $newCompany->setCompanyId($this->GetNextId());

            array_push($this->CompanyList, $newCompany);

            $this->SaveData();
        }

        private function GetNextId(){
            $id = 0;
            foreach($this->CompanyList as $Company){
                $id = ($Company->getCompanyId() > $id) ? $Company->getCompanyId() : $id; 
            }
            return $id + 1;
        }
        
        public function GetById($id){
            $this->RetrieveData();

            $Company_array = array_filter($this->CompanyList, function($Company) use($id){
                return $Company->getCompanyId() == $id;
            });

            $Company_array = array_values($Company_array); 

            return (count($Company_array) > 0) ? $Company_array[0] : null;
        }

        public function Edit($company){
            $this->Remove($company->getCompanyId());
            $this->Add_Company($company);
        }

        public function Remove($id){
            $this->RetrieveData();

            $this->CompanyList = array_filter($this->CompanyList, function($Company) use($id){
                return $Company->getCompanyId() != $id;
            });

            $this->SaveData();
        }
        
        private function SaveData(){
            $arrayToEncode = array();
    
            foreach($this->CompanyList as $Company){
                
                $valuesArray["company_name"] = $Company->getCompanyName();
                $valuesArray["description"] = $Company->getDescription();
                $valuesArray["contact_email"] = $Company->getContactEmail();
                $valuesArray["phone_number"] = $Company->getPhoneNumber();
                $valuesArray["company_id"] = $Company->getCompanyId();
                
                array_push($arrayToEncode, $valuesArray);
            }
    
            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

            file_put_contents($this->fileName, $jsonContent);
        }
        
        private function RetrieveData(){

            $this->CompanyList = array();

            if(file_exists($this->fileName)){

                $jsonToDecode = file_get_contents($this->fileName);
                $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();

                foreach($contentArray as $content){

                    $Company = new Company();
                    $Company->setCompanyName($content["company_name"]);
                    $Company->setDescription($content["description"]);
                    $Company->setContactEmail($content["contact_email"]);
                    $Company->setPhoneNumber($content["phone_number"]);
                    $Company->setCompanyId($content["company_id"]);
        
                    array_push($this->CompanyList, $Company);
                }
                asort($this->CompanyList);
            }
        }

    }

?>

