            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu Bar</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Menues</div>
                            
                            <div class="sb-sidenav-menu-heading">warehouse office</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Stock Management
                            </a>
                            <a class="nav-link" href="<?php echo base_url('ShipmentForm'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Shipment Form
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Incoming Shipments
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Outgoing Shipments
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Reports
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo isset($_SESSION['LogData']['username']) ? $_SESSION['LogData']['username'] : ''; ?>
                    </div>
                </nav>
            </div>