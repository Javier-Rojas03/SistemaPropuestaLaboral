<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Edit Company</h2>
               <form action="<?php echo FRONT_ROOT ?>Company/EditAux" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Name</label>
                                   <input maxlength="20" type="text" name="company_name" class="form-control" value="<?php echo $company->getCompanyName() ?>" placeholder="<?php echo $company->getCompanyName() ?>" required>
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Description</label>
                                   <textarea maxlength="100" name="description"  class="form-control" cols="60" rows="1" placeholder="<?php echo $company->getDescription() ?>" style="min-height: 100px; max-height: 200px" required></textarea>
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input maxlength="30" type="email" name="contact_email" class="form-control" value="<?php echo $company->getContactEmail() ?>" placeholder="<?php echo $company->getContactEmail() ?>" required>
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Phone</label>
                                   <input type="number" name="phone_number" class="form-control" value="<?php echo $company->getPhoneNumber() ?>" placeholder="<?php echo $company->getPhoneNumber() ?>" required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Edit</button>
               </form>
          </div>
     </section>
</main>