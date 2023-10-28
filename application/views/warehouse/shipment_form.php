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
                        <h1>Shipment Form</h1>
                    </div>
                    <div class="container-fluid px-4 bg-light">

                        <form action="<?php echo base_url('SubmitShipment'); ?>" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="card-header">
                                  <div class="form-group">
                                    <label for="EXP_NO">EXP NO</label>
                                    <input type="text" name="EXP_NO" id="EXP_NO" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="DATE">DATE</label>
                                    <input type="date" name="DATE" id="DATE" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="SHIPMENT_DETAILS">SHIPMENT DETAILS</label>
                                    <textarea name="SHIPMENT_DETAILS" id="SHIPMENT_DETAILS" class="form-control"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="PAYMENT_TERMS">PAYMENT TERMS</label>
                                    <input type="text" name="PAYMENT_TERMS" id="PAYMENT_TERMS" class="form-control">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-9">
                              <div class="card-body">
                                <div class="shipment-item-container">
                                  <table class="table table-striped" width="100%" border="1px">
                                    <thead>
                                      <tr>
                                        <th></th>
                                        <th>DESCRIPTION</th>
                                        <th>TOTAL QTY PCS</th>
                                        <th>TOTAL BALES</th>
                                        <th>TOTAL CTN</th>
                                        <th>NET WEIGHT</th>
                                        <th>GROSS WEIGHT</th>
                                        <th>TOTAL CBM</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody id="table-body">
                                      <tr>
                                        <td><input type="hidden" class="form-control sl-no" name="SL_NO[]"></td>
                                        <td><input type="text" class="form-control" name="DESCRIPTION[]"></td>
                                        <td><input type="number" class="form-control" name="TOTAL_QTY_PCS[]"></td>
                                        <td><input type="number" class="form-control" name="TOTAL_BALES[]"></td>
                                        <td><input type="number" class="form-control" name="TOTAL_CTN[]"></td>
                                        <td><input type="number" class="form-control" name="NET_WEIGHT[]"></td>
                                        <td><input type="number" class="form-control" name="GROSS_WEIGHT[]"></td>
                                        <td><input type="number" class="form-control" name="TOTAL_CBM[]"></td>
                                        <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td>
                                      </tr>
                                    </tbody>
                                  </table>

                                  <button type="button" class="btn btn-primary" onclick="addRow()">Add Row</button>
                                </div>
                              </div>
                              <?php echo validation_errors(); ?>
                            </div>
                          </div>
                          <div class="card-footer mt-4">
                            <button type="submit" class="btn btn-success mt-2 mb-4">Submit</button>
                          </div>
                        </form>
                    </div>
                    <br/>
                    <div class="container mt-4 mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Shipment Information
                        </div>
                        <div class="card-body">
                            <table class="Table display" width="100%">
                                <thead>
                                    <tr>
                                        <td>Sl#</td>
                                        <td>Export Number</td>
                                        <td>Date</td>
                                        <td>Shipment Details</td>
                                        <td>Payment Terms</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Sl#</td>
                                        <td>Export Number</td>
                                        <td>Date</td>
                                        <td>Shipment Details</td>
                                        <td>Payment Terms</td>
                                        <td>Action</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($shipment as $key => $value) {?>
                                    <tr>
                                        <td><?php echo($key+1); ?></td>
                                        <td><?php echo $value['EXP_NO']; ?></td>
                                        <td><?php echo $value['DATE']; ?></td>
                                        <td><?php echo $value['SHIPMENT_DETAILS']; ?></td>
                                        <td><?php echo $value['PAYMENT_TERMS']; ?></td>
                                        <td><a href="<?php echo base_url('DetailsShipment/'). $value['id']; ?>"><button class="btn btn-info btn-sm">Details</button></a></td>
                                    </tr>
                                    <?php } ;?>
                                </tbody>
                            </table>
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

        <script>
    function addRow() {
      const tableBody = document.getElementById('table-body');
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
        <td><input type="hidden" class="form-control" name="SL_NO[]"></td>
        <td><input type="text" class="form-control" name="DESCRIPTION[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_QTY_PCS[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_BALES[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_CTN[]"></td>
        <td><input type="number" class="form-control" name="NET_WEIGHT[]"></td>
        <td><input type="number" class="form-control" name="GROSS_WEIGHT[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_CBM[]"></td>
        <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td>
      `;
      tableBody.appendChild(newRow);
      updateSerialNumberCells();
    }

    function removeRow(button) {
      const row = button.parentNode.parentNode;
      const tableBody = document.getElementById('table-body');
      tableBody.removeChild(row);
      updateSerialNumberCells();
    }

    // Update the serial number text input
    function updateSerialNumberCells() {
      // Get all of the serial number input elements
      const serialNumberCells = document.querySelectorAll('[name="SL_NO[]"]');

      // Update the serial number cell text for each row
      for (let i = 0; i < serialNumberCells.length; i++) {
        serialNumberCells[i].value = i + 1;
      }
    }

    window.onload = updateSerialNumberCells;
</script>

    </body>
</html>
