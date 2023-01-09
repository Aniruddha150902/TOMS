<?php include "../connection.php" ?>
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
    if (isset($_GET['notice_id'])) {
        $notice_id = $_GET['notice_id'];
    }
    $sql = "SELECT LICENSE_NUMBER FROM VEHICLE V,VIOLATIONS O WHERE V.VEHICLE_ID=O.VEHICLE_iD AND O.NOTICE_ID  = '{$notice_id}' ";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $lc = $row['LICENSE_NUMBER'];
    $query = "SELECT * FROM VIOLATIONS WHERE NOTICE_ID = $notice_id ";
    $view_offence = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($view_offence)) {
        $fid = $row['FINE_ID'];
        $oid = $row['OFFICER_ID'];
        $place = $row['PLACE'];
        $dt = $row['DATE'];
    }
    if (isset($_POST['update'])) {
        $fid = $_POST['fid'];
        $oid = $_POST['oid'];
        $place = $_POST['place'];
        $dt = $_POST['dt'];
        $status=$_POST['status'];
        $query = "UPDATE VIOLATIONS SET FINE_ID = '{$fid}' , OFFICER_ID = '{$oid}' , PLACE = '{$place}' , DATE = '{$dt}' , STATUS = '{$status}' WHERE NOTICE_ID = $notice_id";
        $update_user = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert('offence data updated successfully!')</script>";
    }
    ?>
    <h1 class="text-center">Update Offence Details</h1>
    <div class="container ">
        <form action="" method="post">
            <div class="form-group">
                <label for="lc">LICENSE NUMBER</label>
                <input type="text" name="lc" class="form-control" value="<?php echo $lc  ?>" readonly>
            </div>
            <div class="form-group">
                <label for="fid">FINE ID</label>
                <input type="number" name="fid" class="form-control" value="<?php echo $fid  ?>">
            </div>
            <div class="form-group">
                <label for="oid">OFFICER ID</label>
                <input type="number" name="oid" class="form-control" value="<?php echo $oid  ?>">
            </div>
            <div class="form-group">
                <label for="place" class="form-label">PLACE</label>
                <input type="text" name="place" class="form-control" value="<?php echo $place ?>">
            </div>
            <div class="form-group">
                <label for="dt" class="form-label">ISSUED DATE</label>
                <input type="datetime-local" name="dt" class="form-control" value="<?php echo $dt ?>">
            </div>
            <div class="form-group">
                <input type="radio" value="PAID" name="status">PAID
                <input type="radio" value="UNPAID" name="status">UNPAID
            </div>
            <div class="form-group">
                <input type="submit" name="update" class="btn btn-primary mt-2" value="update">
            </div>
        </form>
    </div>
    <div class="container text-center mt-5">
        <a href="view_all_offence.php" class="btn btn-warning mt-5"> Back </a>
        <div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>