<?php
    require_once('nav.php');

    $admin = $_SESSION["loggedUser"];
    
?>
<main class="py-5">
    <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4" align="center">Welcome <?php echo "$admin!" ?></h2>
          </div>
    </section>
</main>