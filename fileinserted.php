<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/navtop.php';

    include 'db.php';
?>

 


                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4 cursor: pointer">
                    <h1 class="h3 mb-0 text-gray-800" style="cursor:pointer">Finance Services Department</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
                <!-- END of Page Heading -->
                <!--end of main-->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Uploaded PDF Files</h6>
                    </div>   
                    <div class="card-body">
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info btn-sm my-4" data-toggle="modal" data-target="#exampleModal">
                            Add File
                            </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add File Here!</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            
                                <form action="" method="POST">
                                <?php
                                        
                                        include 'db.php';

                                        if(isset($_POST['submit'])){
                                            $type=$_POST['type'];
                                            $connum=$_POST['connum'];
                                            $date=$_POST['date'];
                                            $file=$_POST['pdf'];

                                            $sql="insert into `fsd` (type,connum,date,pdf) 
                                            values ('$type','$connum','$date','$file')";

                                            $result=mysqli_query($conn,$sql);
                                            if($result){
                                                //echo "Data inserted successfully";
                                                //header('location:uploadedfsd.php');
                                            }else{
                                                die(mysqli_error($conn));
                                            }
                                        }
                                    ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>File Description</label>
                                            <input type="text" 
                                                    class="form-control" 
                                                    placeholder="Enter your name" 
                                                    name="type" 
                                                    autocomplete="off"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>File Control Number</label>
                                            <input type="text" 
                                                    class="form-control" 
                                                    placeholder="Enter your name" 
                                                    name="connum" 
                                                    autocomplete="off"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>Enty File Date</label>
                                            <input type="date" 
                                                    class=".col-lg-*" 
                                                    placeholder="Enter PDF File Date" 
                                                    name="date" 
                                                    autocomplete="off" 
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>Choose Your PDF File</label>
                                            <input type="file" 
                                                    class=".col-lg-*"  
                                                    name="pdf"
                                            >
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Add File</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                        <!-- Button trigger modal END-->

                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <!--<th scope="col">Serial No</th>-->
                                        <th scope="col">File Name/Description</th>
                                        <th scope="col">File Control Number</th>
                                        <th scope="col">Date/Time Uploaded</th>
                                        <th scope="col">File Date</th>
                                        <th scope="col">View File</th>
                                        <th scope="col">Update / Delete File</th>
                                        </tr>
                                    </thead>
                                        <tfoot>
                                        <tr>
                                        <!--<th scope="col">Serial No</th>-->
                                        <th scope="col">File Name/Description</th>
                                        <th scope="col">File Control Number</th>
                                        <th scope="col">Date/Time Uploaded</th>
                                        <th scope="col">File Date</th>
                                        <th scope="col">View File</th>
                                        <th scope="col">Update / Delete File</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                                $sql="Select * from `fsd`";
                                                $result=mysqli_query($conn,$sql);
                                                if($result){
                                                    while($row=mysqli_fetch_assoc($result)){
                                                        $id=$row['id'];
                                                        $type=$row['type'];
                                                        $connum=$row['connum'];
                                                        $time=$row['time'];
                                                        $date=$row['date'];
                                                        //$file=$row['file'];
                                                        echo '<tr>
                                                        <td>'.$type.'</td>
                                                        <td>'.$connum.'</td>
                                                        <td>'.$time.'</td>
                                                        <td>'.$date.'</td>
                                                    
                                                        <td>
                                                            <button class="btn btn-primary btn-sm btn-info"><a href="view.php?viewid='.$id.'" class="text-light">Click Here</a></button>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm btn-success"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                                            <button class="btn btn-primary btn-sm btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                                                        </td>

                                                    </tr>';
                                                    }
                                                }
                                        ?>
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            <!-- /.container-fluid -->

<?php
    include 'includes/footer.php';
    include 'includes/script.php';
?>