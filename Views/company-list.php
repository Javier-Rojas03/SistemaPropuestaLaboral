<?php
     require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Companies</h2>
               <table class="table bg-light-alpha">
                    <form action="<?php echo FRONT_ROOT."Company/Action"?>" method="post" class="bg-light-alpha p-5">   

                    <thead>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th></th>
                    </thead>

                    <tbody>
                         <?php
                              foreach($company_list as $company)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $company->getCompanyId(); ?></td>  
                                             <td><?php echo $company->getCompanyName(); ?></td>
                                             <td><?php echo $company->getDescription(); ?></td>
                                             <td><?php echo $company->getContactEmail(); ?></td>
                                             <td><?php echo $company->getPhoneNumber(); ?></td>
                                             <td> 
                                             <!--SESION DE COMPANY PARA PASARLE LA COMPANIA A MODIFICAR O A DELETEAR-->
                                             <button type="submit" class="btn" name="action" value="<?php echo $company->getCompanyId(); ?>,Remove" style="background-color: #48c; color: #fff" >Delete</button>
                                             <button type="submit" class="btn" name="action" value="<?php echo $company->getCompanyId(); ?>,Edit" style="background-color: #48c; color: #fff" >Edit</button> 
                                             </td>                                                                                                                                                                 
                                        </tr>
                                        
                                   <?php
                              }
                         ?>

                    </tbody>

                    </form>
               </table>
          </div>
     </section>
</main>