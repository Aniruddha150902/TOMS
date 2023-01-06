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
        if(isset($_GET['owner_id']))
        {
            $owner_id = $_GET['owner_id']; 
        }
        $query="SELECT * FROM OWNER WHERE OWNER_ID = $owner_id ";
        $view_owner= mysqli_query($conn,$query);            
        while($row = mysqli_fetch_assoc($view_owner))
        {
            $id = $row['OWNER_ID'];                
            $name = $row['OWNER_NAME'];
            $dl = $row['DL_NO'];        
            $email = $row['OWNER_EMAIL'];         
            $ph = $row['PHONE_NO'];
        }
        if(isset($_POST['update'])) 
        {
            $name = $_POST['name'];
            $dl = $_POST['dl'];
            $email = $_POST['email'];
            $ph = $_POST['ph'];
            $query = "UPDATE OWNER SET OWNER_NAME = '{$name}' , DL_NO = '{$dl}' , OWNER_EMAIL = '{$email}'  , PHONE_NO = '{$ph}' WHERE OWNER_ID = $owner_id";
            $update_owner = mysqli_query($conn, $query);
            echo "<script type='text/javascript'>alert('owner data updated successfully!')</script>";
        }             
    ?>
    <h1 class="text-center">Update Owner Details</h1>
    <div class="container ">
        <form action="" method="post">
            <div class="form-group">
                <label for="name" >NAME</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name  ?>">
            </div>
            <div class="form-group">
                <label for="dl" class="form-label">DL NUMBER</label>
                <input type="text" name="dl"  class="form-control" value="<?php echo $dl ?>">
            </div>
            <div class="form-group">
                <label for="email" >Email ID</label>
                <input type="text" name="email"  class="form-control" value="<?php echo $email  ?>">
            </div>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>    
            <div class="form-group">
                <label for="ph" >PHONE NUMBER</label>
                <input type="number" name="ph"  class="form-control" value="<?php echo $ph  ?>">
            </div>
            <div class="form-group">
                <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
            </div>
        </form>    
    </div>
    <div class="container text-center mt-5">
      <a href="view_all_owner.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>