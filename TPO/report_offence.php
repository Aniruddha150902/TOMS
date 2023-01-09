<?php include "../connection.php"?>
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
        if(isset($_POST['report'])) 
        {
            $lc = $_POST['lc'];
            $sql="SELECT VEHICLE_ID FROM VEHICLE WHERE LICENSE_NUMBER = '{$lc}' ";  
            $res= mysqli_query($conn,$sql);            
            $row = mysqli_fetch_assoc($res);
            $vid = (int)$row['VEHICLE_ID'];
            $fid = $_POST['fid'];
            $oid = $_POST['oid'];
            $place = $_POST['place'];
            $dt = $_POST['dt'];
            $query= "INSERT INTO VIOLATIONS(VEHICLE_ID,FINE_ID,OFFICER_ID,PLACE,DATE) VALUES('{$vid}','{$fid}','{$oid}','{$place}','{$dt}')";
            $add_offence = mysqli_query($conn,$query); 
            if (!$add_offence) 
            {
                echo "something went wrong ". mysqli_error($conn);
            }
            else 
            {
                echo "<script type='text/javascript'>alert('offence reported successfully!')</script>";
            }         
        }
    ?>
    <h1 class="text-center">REPORT AN OFFENCE</h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="lc" class="form-label">LICENSE NUMBER</label>
                <input type="text" name="lc"  class="form-control">
            </div>
            <div class="form-group">
                <label for="fid" class="form-label">FINE ID</label>
                <input type="number" name="fid"  class="form-control">
            </div>
            <div class="form-group">
                <label for="oid" class="form-label">OFFICER ID</label>
                <input type="number" name="oid"  class="form-control">
            </div>    
            <div class="form-group">
                <label for="place" class="form-label">PLACE</label>
                <input type="text" name="place"  class="form-control">
            </div>
            <div class="form-group">
                <label for="dt" class="form-label">DATE</label>
                <input type="datetime-local" name="dt"  class="form-control">
            </div>
            <div class="form-group">
                <input type="submit"  name="report" class="btn btn-primary mt-2" value="submit">
            </div>
        </form> 
    </div>
    <div class="container text-center mt-5">
        <a href="view_all_offence.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>