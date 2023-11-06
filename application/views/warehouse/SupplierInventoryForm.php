<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>almagharibiyaltd.com - Dashboard</title>

    
        <!--Datatable plugin CSS file -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>

        <link href="<?php echo base_url(); ?>assets/dashboard/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">almagharibiyaltd.com</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider"/></li> -->
                        <li><a class="dropdown-item" href="<?php echo base_url('Logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <?php $this->load->view('warehouse/sidebar'); ?>
            <div id="layoutSidenav_content">
                <main>
                  <div class="container-fluid px-4">
                      <h1 class="mt-4">Dashboard</h1>
                      <?php if ($this->session->flashdata('success')): ?>
                         <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                         </div>
                      <?php endif; ?>
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Add product to Suppliers inventory
                                </div>
                                <div class="card-body">    

                                    <h2>Add Product</h2>
                                    <?php echo form_open_multipart('FactorystockInventory/save_product'); ?>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- Serial Number -->
                                            <div class="form-group">
                                                <label for="serial_number">Serial Number</label>
                                                <input type="text" class="form-control" name="serial_number" value="<?php echo set_value('serial_number'); ?>">
                                                <?php echo form_error('serial_number'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- Image File Path (File Upload) -->
                                            <div class="form-group">
                                                <label for="image_file_path">Image File Path</label>
                                                <input type="file" name="image_file_path">
                                                <?php if(isset($error)) echo $error; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- Reference Number -->
                                            <div class="form-group">
                                                <label for="reference_number">Reference Number</label>
                                                <input type="text" class="form-control" name="reference_number" value="<?php echo set_value('reference_number'); ?>">
                                                <?php echo form_error('reference_number'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- Item Name -->
                                            <div class="form-group">
                                                <label for="item_name">Item Name</label>
                                                <input type="text" class="form-control" name="item_name" value="<?php echo set_value('item_name'); ?>">
                                                <?php echo form_error('item_name'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- Color -->
                                            <div class="form-group">
                                                <label for="color">Color</label>
                                                <input type="text" class="form-control" name="color" value="<?php echo set_value('color'); ?>">
                                                <?php echo form_error('color'); ?>
                                            </div>
                                        </div>    
                                        <div class="col-md-3">
                                            <!-- Size -->
                                            <div class="form-group">
                                                <label for="size">Size</label>
                                                <input type="text" class="form-control" name="size" value="<?php echo set_value('size'); ?>">
                                                <?php echo form_error('size'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- Total Quantity -->
                                            <div class="form-group">
                                                <label for="total_quantity">Total Quantity</label>
                                                <input type="text" class="form-control" name="total_quantity" value="<?php echo set_value('total_quantity'); ?>">
                                                <?php echo form_error('total_quantity'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- Unit Price -->
                                            <div class="form-group">
                                                <label for="unit_price">Unit Price</label>
                                                <input type="text" class="form-control" name="unit_price" value="<?php echo set_value('unit_price'); ?>">
                                                <?php echo form_error('unit_price'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- Total Price -->
                                            <div class="form-group">
                                                <label for="total_price">Total Price</label>
                                                <input type="text" class="form-control" name="total_price" value="<?php echo set_value('total_price'); ?>">
                                                <?php echo form_error('total_price'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- Delivery Date -->
                                            <div class="form-group">
                                                <label for="delivery_date">Delivery Date</label>
                                                <input type="date" class="form-control" name="delivery_date" value="<?php echo set_value('delivery_date'); ?>">
                                                <?php echo form_error('delivery_date'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <?php echo form_close(); ?>   
                                  </div>
                              </div>
                          </div>

                      </div>
                    </div>
                    <div  class="container-fluid px-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Suppliers inventory Search
                                    </div>
                                    <div class="card-body">
                                        <table class="display" width="100%">
                                            <thead>
                                                <tr>
                                                    <td>Sl#</td>
                                                    <td>Image</td>
                                                    <td>Reference Number</td>
                                                    <td>Item Name</td>
                                                    <td>Color</td>
                                                    <td>Size</td>
                                                    <td>Total Quantity</td>
                                                    <td>Unit Price</td>
                                                    <td>Total Price</td>
                                                    <td>Delivery Date</td>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <td>Sl#</td>
                                                    <td>Image</td>
                                                    <td>Reference Number</td>
                                                    <td>Item Name</td>
                                                    <td>Color</td>
                                                    <td>Size</td>
                                                    <td>Total Quantity</td>
                                                    <td>Unit Price</td>
                                                    <td>Total Price</td>
                                                    <td>Delivery Date</td>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($factory as $key => $value) {
                                                    // code...
                                                } ?>
                                                <tr>
                                                    <td><?php echo ($value['SerialNumber']); ?></td>
                                                    <td><img src="<?php echo base_url($value['ImageFilePath']); ?>" hight="50px" width="50px"></td>
                                                    <td><?php echo $value['ReferenceNumber']; ?></td>
                                                    <td><?php echo $value['ItemName']; ?></td>
                                                    <td><?php echo $value['Color']; ?></td>
                                                    <td><?php echo $value['Size']; ?></td>
                                                    <td><?php echo $value['TotalQuantity']; ?></td>
                                                    <td><?php echo $value['UnitPrice']; ?></td>
                                                    <td><?php echo $value['TotalPrice']; ?></td>
                                                    <td><?php echo $value['DeliveryDate']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; www.iarifbd.com 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/scripts.js"></script>
        
        <!--jQuery library file -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!--Datatable plugin JS library file -->
        <script type="text/javascript"
            src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
        </script>
        <script>
            /* Initialization of datatables */
            $(document).ready(function () {
              $('table.display').DataTable();
            });
        </script>
    </body>
</html>
