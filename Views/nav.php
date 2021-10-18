<?php
     require_once(VIEWS_PATH."validate-session.php");
?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <strong>Universidad Tecnologica Nacional</strong>
         
     </span>
     <ul class="navbar-nav ml-auto">
          <?php
               if($_SESSION["loggedUser"] == "admin@sessionstart.com"){
                    ?>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo FRONT_ROOT?>Company/ShowAddView">Add Company</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo FRONT_ROOT ?>Company/ShowListView">Company List</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo FRONT_ROOT ?>Home/Logout">Logout</a>
                         </li>
                    <?php
               }else{
                    ?>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo FRONT_ROOT ?>Company/ShowListView">Company List</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo FRONT_ROOT ?>Home/Menu">My Info</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo FRONT_ROOT ?>Home/Logout">Logout</a>
                         </li>
                    <?php
               }
          ?>          
     </ul>
</nav>