<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Aalmagharibiyaltd.com - Registration</title>
      <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/homepage/images/favicon.png">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/all-fontawesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/flaticon.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/magnific-popup.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/homepage/css/style.css">
   </head>
    <body class="bg-primary" style="background-image: url('<?php echo base_url() ?>assets/homepage/images/shop.jpg'); background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header text-center">
                                        <img class="bg-dark" src="<?php echo base_url(); ?>assets/homepage/images/inlinelogo.png" hight="230px" width="250px">
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url('RegFormData'); ?>" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="FirstName" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?php echo set_value('FirstName'); ?>" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                    <?php echo form_error('FirstName'); ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input name="LastName" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="<?php echo set_value('LastName'); ?>" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                    <?php echo form_error('LastName'); ?>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="Email" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" value="<?php echo set_value('Email'); ?>" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <?php echo form_error('Email'); ?>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="Password" class="form-control" id="inputPassword" type="password" placeholder="Create a password" value="<?php echo set_value('Password'); ?>" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                    <?php echo form_error('Password'); ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="PasswordConfirm" class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" value="<?php echo set_value('PasswordConfirm'); ?>" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                    <?php echo form_error('PasswordConfirm'); ?>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="DepartmentName" class="form-control">  
                                                        <?php foreach ($Department as $key => $value){ ?>
                                                            <option value="<?php echo $value['id'] ?>">
                                                                <?php echo $value['DepartmentName'] ?>
                                                                
                                                            </option>
                                                        <?php }; ?>    
                                                        </select>
                                                        <label for="SelectDepartment">Select Department</label>
                                                    </div>
                                                    <?php echo form_error('PasswordConfirm'); ?>
                                                </div>
                                            </div>                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo base_url('Login'); ?>">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="<?php echo base_url(); ?>assets/homepage/#">Privacy Policy</a>
                                &middot;
                                <a href="<?php echo base_url(); ?>assets/homepage/#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <a href="<?php echo base_url(); ?>assets/homepage/#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>
      <script data-cfasync="false" src="<?php echo base_url(); ?>assets/homepage/js/email-decode.min.js"></script><script src="<?php echo base_url(); ?>assets/homepage/js/jquery-3.6.0.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/modernizr.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/imagesloaded.pkgd.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/isotope.pkgd.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/jquery.appear.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/jquery.easing.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/counter-up.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/wow.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/homepage/js/main.js"></script>
    </body>
</html>
