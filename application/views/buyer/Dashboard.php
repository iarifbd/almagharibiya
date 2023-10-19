<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>almagharibiyaltd.com - Dashboard</title>

        <!-- Bootstrap CDN style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

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
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider"/></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu Bar</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Static Navigation</a>
                                    <a class="nav-link" href="#">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Login</a>
                                            <a class="nav-link" href="#">Register</a>
                                            <a class="nav-link" href="#">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">401 Page</a>
                                            <a class="nav-link" href="#">404 Page</a>
                                            <a class="nav-link" href="#">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo isset($_SESSION['LogData']['username']) ? $_SESSION['LogData']['username'] : ''; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo isset($_SESSION['LogData']['Dashboard']) ? $_SESSION['LogData']['Dashboard'] : ''; ?> Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo "Today: ". date('d-m-Y');?></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <h3>Balance</h3>
                                        <p>$301869 </p>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <h3>Payment</h3>
                                        <p>$23456 </p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <h3>Bill</h3>
                                        <p>$325325 </p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <h3>Goods</h3>
                                    <p>1234 Nos </p>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Buyer Accounts:
                                    </div>
                                    <div class="card-body">
                                        <table class="display" width="100%">
                                            <thead>
                                                <tr>
                                                    <td>Sl#</td>
                                                    <td>Date</td>
                                                    <td>Amount</td>
                                                    <td>Xchange rate</td>
                                                    <td>Amount BDT</td>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <td>Sl#</td>
                                                    <td>Date</td>
                                                    <td>Amount</td>
                                                    <td>Xchange rate</td>
                                                    <td>Amount BDT</td>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>10.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>11.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>12.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>13.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>14.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>15.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>16.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        PROFORMA INVOICE
                                    </div>
                                    <div class="card-body">
                                        <table class="display" width="100%">
                                            <thead>
                                                <tr>
                                                    <td>Sl#</td>
                                                    <td>DESCRIPTION OF GOODS</td>
                                                    <td>QTY</td>
                                                    <td>FOB PRICE PCS</td>
                                                    <td>TOTAL AMOUNT USD</td>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <td>Sl#</td>
                                                    <td>DESCRIPTION OF GOODS</td>
                                                    <td>QTY</td>
                                                    <td>FOB PRICE PCS</td>
                                                    <td>TOTAL AMOUNT USD</td>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>10.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>11.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>12.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>13.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>14.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>15.</td>
                                                    <td>10-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                                <tr>
                                                    <td>16.</td>
                                                    <td>11-10-2023</td>
                                                    <td>1234</td>
                                                    <td>123</td>
                                                    <td>2345</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Packing List
                            </div>
                            <div class="card-body">
                                <table class="display" width="100%">
                                    <thead>
                                        <tr>
                                            <td>Sl#</td>
                                            <td>DISCRIPTION OF GOODS</td>
                                            <td>TOTAL QTY PCS</td>
                                            <td>TOTAL BALES</td>
                                            <td>TOTAL CTN.</td>
                                            <td>N.WT</td>
                                            <td>G.WT</td>
                                            <td>TOTAL CBM</td>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Sl#</td>
                                            <td>DISCRIPTION OF GOODS</td>
                                            <td>TOTAL QTY PCS</td>
                                            <td>TOTAL BALES</td>
                                            <td>TOTAL CTN.</td>
                                            <td>N.WT</td>
                                            <td>G.WT</td>
                                            <td>TOTAL CBM</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>10-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>11-10-2023</td>
                                            <td>1234</td>
                                            <td>123</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                            <td>2345</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
