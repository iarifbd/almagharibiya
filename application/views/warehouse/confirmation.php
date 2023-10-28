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
                    <div class="container mt-3 mb-3">
                        <h1>Shipment Details</h1>
                    </div>
                    <div class="container-fluid px-4 bg-light">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            <h1>
                                Shipment Information : <?php echo $Details[0]['shipment_id']; ?>
                                
                            </h1>
                        </div>
                        <div class="card-body">
                            <table class="Table display" width="100%">
                                <thead>
                                    <tr>
                                        <td>Sl#</td>
                                        <td>DESCRIPTION</td>
                                        <td>TOTAL_QTY_PCS</td>
                                        <td>TOTAL_BALES</td>
                                        <td>TOTAL_CTN</td>
                                        <td>NET_WEIGHT</td>
                                        <td>GROSS_WEIGHT</td>
                                        <td>TOTAL_CBM</td>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Sl#</td>
                                        <td>DESCRIPTION</td>
                                        <td>TOTAL_QTY_PCS</td>
                                        <td>TOTAL_BALES</td>
                                        <td>TOTAL_CTN</td>
                                        <td>NET_WEIGHT</td>
                                        <td>GROSS_WEIGHT</td>
                                        <td>TOTAL_CBM</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($Details as $key => $value) {?>
                                    <tr>
                                        <td><?php echo $value['SL_NO']; ?></td>
                                        <td><?php echo $value['DESCRIPTION']; ?></td>
                                        <td><?php echo $value['TOTAL_QTY_PCS']; ?></td>
                                        <td><?php echo $value['TOTAL_BALES']; ?></td>
                                        <td><?php echo $value['TOTAL_CTN']; ?></td>
                                        <td><?php echo $value['NET_WEIGHT']; ?></td>
                                        <td><?php echo $value['GROSS_WEIGHT']; ?></td>
                                        <td><?php echo $value['TOTAL_CBM']; ?></td>
                                        
                                    </tr>
                                    <?php } ;?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <br/>
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
