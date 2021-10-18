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
                         <th></th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($company_list as $company)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $company->getCompanyName(); ?></td>
                                             <td><?php echo $company->getDescription(); ?></td>
                                             <td><?php echo $company->getContactEmail(); ?></td>
                                             <td><?php echo $company->getPhoneNumber(); ?></td>
                                             <td><?php echo $company->getCompanyId(); ?></td>  
                                             <td> 
                                                  <!--SESION DE COMPANY PARA PASARLE LA COMPANIA A MODIFICAR O A DELETEAR-->
                                             <button class="btn" style="background-color: #48c; color: #fff" >Edit</button> 
                                             <button class="btn" style="background-color: #48c; color: #fff" >Delete</button> 
                                             </td>                                                                                                                                                                 
                                        </tr>
                                        
                                   <?php
                              }
                         ?>

                    </tbody>
               </table>
          </div>
     </section>
</main>