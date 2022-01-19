<?php 
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/navtop.php';

    include 'db.php';
    $id=$_GET['updateid'];
    $sql="Select * from `fsd` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $type=$row['type'];
    $connum=$row['connum'];
    $date=$row['date'];
    //$file=$row['file'];

    if(isset($_POST['submit'])){
        $type=$_POST['type'];
        $connum=$_POST['connum'];
        $date=$_POST['date'];
        //$file=$_POST['file'];

        $sql="update `fsd` set id=$id,type='$type',connum='$connum',date='$date'
        where id=$id";
   
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data updated successfully";
            header ('location:fileinserted.php');
            
        }else{
            die(mysqli_error($conn));
        }
    }
 ?>
 

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading --
        <div class="d-sm-flex align-items-center justify-content-between mb-4 cursor: pointer" onclick="openNav()">
                    <h1 class="h3 mb-0 text-gray-800" style="cursor:pointer">&#9776; Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        --end of main-->
     
     <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Update Description/PDF Files </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
     <div class="container my-4">
     <form method="POST">
        <div class="mb-3">
        <label class="form-label">PDF File Description</label>
            <br/>
            <input type="text" 
                    class=".col-lg-*" 
                    placeholder="Enter your name" 
                    name="type" 
                    autocomplete="off"
                    value="<?php echo $type; ?>"
            >
        </div>
        <div class="mb-3">
        <label class="form-label">PDF Control Number</label>
            <br/>
            <input type="text" 
                    class=".col-lg-*" 
                    placeholder="Enter your Email"
                    name="connum" 
                    autocomplete="off"
                    value="<?php echo $connum; ?>"
            >
        </div>
        <div class="mb-3">
        <label class="form-label">PDF File Date</label>
            <br/>
            <input type="date" 
                    class=".col-lg-*" 
                    placeholder="Enter PDF File Date" 
                    name="date" 
                    autocomplete="off" 
                    value="<?php echo $date; ?>"
            >
        </div>
        <div class="mb-3">
            <label class="form-label">Choose Your PDF File</label>
            <br/>
            <input type="file" 
                        class=".col-lg-*"  
                        name="pdf"
            >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    </div>
            </div>
        </div>
    </div>

</div>
  
<?php
    include 'includes/footer.php';
    include 'includes/script.php';
?>