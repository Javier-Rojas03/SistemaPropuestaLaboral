<?php
    require_once('nav.php');

    $student = $_SESSION["loggedUser"];
    
?>
<main class="py-5">
    <section id="listado" class="mb-5">
          <div class="container" align="center">
               <h2 class="mb-4">User info:</h2>
               <table class="table bg-light-alpha">
                    <thead>
                        <th>Student ID</th>
                        <th>Career ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Dni</th>
                        <th>File Number</th>
                        <th>Gender</th>
                        <th>Birth date</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Active</th>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($student)){
                                ?>
                                    <tr>
                                        <td><?php echo $student->getStudentId() ?></td>
                                        <td><?php echo $student->getCareerId() ?></td>
                                        <td><?php echo $student->getFirstName() ?></td>
                                        <td><?php echo $student->getLastName() ?></td>
                                        <td><?php echo $student->getDni() ?></td>
                                        <td><?php echo $student->getFileNumber() ?></td>
                                        <td><?php echo $student->getGender() ?></td>
                                        <td><?php echo trim($student->getBirthDate(),"T0:") ?></td>
                                        <td><?php echo $student->getEmail() ?></td>
                                        <td><?php echo $student->getPhoneNumber() ?></td>
                                        <td>
                                            <?php 
                                                if($student->getActive())
                                                    echo "✔";
                                                else
                                                    echo "❌";
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
               </table>
               <img src = "../Views/Styles/img/Fachada.jpg" style="border: 2px solid #000; margin-top:30px;border-radius: 5px;">
               <p style="padding-top:10px;"> <b>You are in the lobby of the website, use the references on the upper right corner to navigate through the system.</b> </p>
          </div>
    </section>
</main>