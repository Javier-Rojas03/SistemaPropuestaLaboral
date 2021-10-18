<?php
    namespace DAO;

    use Models\Company as Company;

    interface ICompanyDAO
    {
        function GetAll();
        function Add_Company(Company $newCompany);
        function Remove($id);
        function GetById($id);
    }
?>