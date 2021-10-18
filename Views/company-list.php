<?php
     require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Companies</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Id</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($studentList as $student)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $student->getRecordId() ?></td>
                                             <td><?php echo $student->getLastName() ?></td>
                                             <td><?php echo $student->getFirstName() ?></td>
                                        </tr>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>