<?php
    require_once('nav.php');

    $admin = $_SESSION["loggedUser"];
    
?>
<main class="py-5">
    <section id="listado" class="mb-5">
          <div class="container">
              <div align="center">
                    <div style="display:inline;">
                        <img src="../Views/Styles/img/admin.png">
                        <h2 class="mb-4" >Welcome <?php echo "$admin!" ?></h2>
                    </div>
                    <img src = "../Views/Styles/img/Fachada.jpg" style="border: 2px solid #000; margin-top:30px;border-radius: 5px;">
                    <p style="padding-top:10px;"> <b>You are in the lobby of the website, use the references on the upper right corner to navigate through the system.</b> </p>
              </div>
          </div>
    </section>
</main>