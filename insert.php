<?php 
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/navtop.php';
?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 cursor: pointer">
                        <h1 class="h3 mb-0 text-gray-800" style="cursor:pointer">Finance Services Department</h1>
                        
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
             <!-- END of Page Heading -->

            <!--end of main-->


            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Upload PDF Files Here</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body p-0">
                        <div class="container my-3">
                            <form action="insert.php" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="form-label">PDF File Description</label>
                                    <br/>
                                    <input type="text" 
                                            class="form-control form-control-user"
                                            placeholder="Enter your name" 
                                            name="type" 
                                            autocomplete="off"
                                    >
                                </div><br>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="form-label">PDF Control Number</label>
                                    <br/>
                                    <input type="text" 
                                            class="form-control form-control-user"
                                            placeholder="Enter your Email"
                                            name="connum" 
                                            autocomplete="off"    
                                    >
                                </div><br>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="form-label">PDF File Date</label>
                                    <br/>
                                    <input type="date" 
                                            class="form-control form-control-user"
                                            name="date" 
                                            autocomplete="off"                                           
                                    >
                                </div><br>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="form-label">Choose Your PDF File</label>
                                    <br/>
                                    <input type="file" 
                                                class="form-control form-control-user" 
                                                name="pdf"                                           
                                    >
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Area Chat -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                       <p>&copy Coded by CPITETSD 2021.</p>
                    </div>
                </div>
            </footer>
            <!--End of Footer -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
    </div>       
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

        
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
 </body>
 </html>