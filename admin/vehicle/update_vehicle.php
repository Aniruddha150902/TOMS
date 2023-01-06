<?php include "../../connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_GET['vehicle_id']))
        {
            $vehicle_id = $_GET['vehicle_id']; 
        }
        $query="SELECT * FROM VEHICLE WHERE VEHICLE_ID = $vehicle_id ";
        $view_vehicle= mysqli_query($conn,$query);            
        while($row = mysqli_fetch_assoc($view_vehicle))
        {              
            $lc = $row['LICENSE_NUMBER'];        
            $vt = $row['VEHICLE_TYPE'];         
            $vm = $row['VEHICLE_MODEL'];
            $oid = $row['OWNER_ID'];
        }
        if(isset($_POST['update'])) 
        {
            $lc = $_POST['lc'];        
            $vt = $_POST['vt'];         
            $vm = $_POST['vm'];
            $oid = $_POST['oid'];
            $query = "UPDATE VEHICLE SET LICENSE_NUMBER = '{$lc}' , VEHICLE_TYPE = '{$vt}' , VEHICLE_MODEL = '{$vm}' , OWNER_ID = '{$oid}' WHERE VEHICLE_ID = $vehicle_id";
            $update_vehicle = mysqli_query($conn, $query);
            echo "<script type='text/javascript'>alert('vehicle data updated successfully!')</script>";
        }             
    ?>
    <h1 class="text-center">Update Vehicle Details</h1>
    <div class="container ">
    <form action="" method="post">
        <form action="" method="post">
            <div class="form-group">
                <label for="lc" >LICENSE NUMBER</label>
                <input type="text" name="lc" class="form-control" value="<?php echo $lc  ?>">
            </div>
            <div class="form-group">
                <label for="vt" >VEHICLE TYPE</label>
                <input type="text" name="vt"  class="form-control" value="<?php echo $vt  ?>">
            </div>
            <div class="form-group">
                <label for="vm" >VEHICLE MODEL</label>
                <input type="text" name="vm"  class="form-control" value="<?php echo $vm  ?>">
            </div>    
            <div class="form-group">
                <label for="oid" class="form-label">OWNER ID</label>
                <input type="number" name="oid"  class="form-control" value="<?php echo $oid ?>">
            </div>
            <div class="form-group">
                <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
            </div>
        </form>    
    </div>
    <div class="container text-center mt-5">
      <a href="view_all_vehicle.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>