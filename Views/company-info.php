<?php
    require_once('nav.php');    
?>
<main class="py-5">
    <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Company info:</h2>
               <table class="table bg-light-alpha">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $company->getCompanyId() ?></td>
                            <td><?php echo $company->getCompanyName() ?></td>
                            <td><?php echo $company->getDescription() ?></td>
                            <td><?php echo $company->getContactEmail() ?></td>
                            <td><?php echo $company->getPhoneNumber() ?></td>
                        </tr>
                    </tbody>
               </table>
          </div>
    </section>
</main>