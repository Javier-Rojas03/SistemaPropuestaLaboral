<?php
     require_once(VIEWS_PATH."validate-session.php");
?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <strong>Universidad Tecnologica Nacional</strong>
         
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT?>Student/ShowAddView">Agregar Alumno</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Student/ShowListView">Listar Alumnos</a>
          </li>          
     </ul>
</nav>