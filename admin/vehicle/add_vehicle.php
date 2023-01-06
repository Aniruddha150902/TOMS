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
        if(isset($_POST['create'])) 
        {            
            $lc = $_POST['lc'];        
            $vt = $_POST['vt'];         
            $vm = $_POST['vm'];
            $oid = $_POST['oid'];
            $query= "INSERT INTO VEHICLE(LICENSE_NUMBER,VEHICLE_TYPE,VEHICLE_MODEL,OWNER_ID) VALUES('{$lc}','{$vt}','{$vm}','{$oid}')";
            $add_vehicle = mysqli_query($conn,$query); 
            if (!$add_vehicle) 
            {
                echo "something went wrong ". mysqli_error($conn);
            }
            else 
            {
                echo "<script type='text/javascript'>alert('User added successfully!')</script>";
            }         
        }
    ?>
    <h1 class="text-center">Add Vehicle details </h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="lc" class="form-label">LICENSE NUMBER</label>
                <input type="text" name="lc"  class="form-control">
            </div>
            <div class="form-group">
                <label for="vt" class="form-label">VEHICLE TYPE</label>
                <input type="text" name="vt"  class="form-control">
            </div>
            <div class="form-group">
                <label for="vm" class="form-label">VEHICLE MODEL</label>
                <input type="text" name="vm"  class="form-control">
            </div>    
            <div class="form-group">
                <label for="oid" class="form-label">OWNER ID</label>
                <input type="number" name="oid"  class="form-control">
            </div>
            <div class="form-group">
                <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
            </div>
        </form> 
    </div>
    <div class="container text-center mt-5">
        <a href="view_all_vehicle.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>