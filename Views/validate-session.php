<?php
  session_start();
  if(!isset($_SESSION["loggedUser"])){
    echo "<script> if(confirm('Debe iniciar sesion previamente!'));"; 
    header("location:../index.php");  
  }
?>