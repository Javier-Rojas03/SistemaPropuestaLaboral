<?php   
    namespace DAO;

    use DAO\IUserDAO as IUserDAO;
    use Models\User as User;

    class UserDAO implements IUserDAO{
        private $userList = array();
        private $fileName = ROOT."Data/Students.json";

        public function getByUserEmail($email){
            ///esta funcion devuelve null si no esta y si esta lo devuelve
        }

        private function RetrieveData(){

             $this->userList = array();

             if(file_exists($this->fileName))
             {
                 $jsonToDecode = file_get_contents($this->fileName);

                 $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();

                 foreach($contentArray as $content)
                 {
                     $user = new User();
                     $user->setStudentId($content["studentId"]);
                     $user->setCareerId($content["careerId"]);
                     $user->setFirstName($content["firsName"]);
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