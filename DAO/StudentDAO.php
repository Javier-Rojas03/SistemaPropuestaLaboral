<?php
    namespace DAO;

    use DAO\IStudentDAO as IStudentDAO;
    use Models\Student as Student;

    class StudentDAO implements IStudentDAO{
        private $studentList = array();
        private $fileName = ROOT."Data/students.json";

        public function SearchEmail($email){
            $this->RetrieveData();
            $studentExist = null;

            $users = array_filter($this->userList, function($studentExist) use($email){
                return $studentExist->getEmail() == $email;
            });

            $users = array_values($users);

            return (count($users) > 0) ? $users[0] : null;
        }

        public function GetAll(){
            $this->RetrieveData();

            return $this->studentList;
        }

        public function DownloadAPI(){
            $ch = curl_init();
            $url = 'https://utn-students-api.herokuapp.com/api/Student';

            $header = array (
                'x-api-key: 4f3bceed-50ba-4461-a910-518598664c08'
            );

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

            $response = curl_exec($ch);

            return $response;
        }

        public function SaveAPI(){
            if(!file_exists($this->fileName)){
                $stringAPI = $this->DownloadAPI();

                $contentArray = json_decode($stringAPI,true);
            
                $jsonContent = json_encode($contentArray, JSON_PRETTY_PRINT);

                file_put_contents('Data/students.json', $jsonContent);
            }
        }
        
        private function RetrieveData(){

             $this->userList = array();

             if(file_exists($this->fileName))
             {
                 $jsonToDecode = file_get_contents($this->fileName);

                 $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();

                 foreach($contentArray as $content)
                 {
                     $user = new Student();
                     $user->setStudentId($content["studentId"]);
                     $user->setCareerId($content["careerId"]);
                     $user->setFirstName($content["firstName"]);
                     $user->setLastName($content["lastName"]);
                     $user->setDni($content["dni"]);
                     $user->setFileNumber($content["fileNumber"]);
                     $user->setGender($content["gender"]);
                     $user->setBirthDate($content["birthDate"]);
                     $user->setEmail($content["email"]);
                     $user->setPhoneNumber($content["phoneNumber"]);
                     $user->setActive($content["active"]);

                     array_push($this->userList, $user);
                 }
             }
        }

    }

?>