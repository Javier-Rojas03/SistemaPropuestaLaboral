<?php
     require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Companies</h2>
               <table class="table bg-light-alpha">
                    <form action="<?php echo FRONT_ROOT."Company/CompanyInfo"?>" method="post" class="bg-light-alpha p-5">

                    <thead>
                        <th>Id</th>
                        <th>Name</th>
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
                                        <td> 
                                        <button type="submit" name="id" value="<?php echo $company->getCompanyId(); ?>" class="btn" style="background-color: #48c; color: #fff" >More info</button> 
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