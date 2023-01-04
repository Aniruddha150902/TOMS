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
        if(isset($_GET['officer_id']))
        {
            $officer_id = $_GET['officer_id']; 
        }
        $query="SELECT * FROM TPO WHERE OFFICER_ID = $officer_id ";
        $view_officer= mysqli_query($conn,$query);            
        while($row = mysqli_fetch_assoc($view_officer))
        {
            $id = $row['OFFICER_ID'];                
            $name = $row['OFFICER_NAME'];        
            $email = $row['OFFICER_EMAIL'];         
            $pass = $row['OFFICER_PASSWORD'];
            $ps = $row['POLICE_STATION'];
        }
        if(isset($_POST['update'])) 
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $ps = $_POST['ps'];
            $query = "UPDATE TPO SET OFFICER_NAME = '{$name}' , OFFICER_EMAIL = '{$email}' , OFFICER_PASSWORD = '{$pass}' , POLICE_STATION = '{$ps}' WHERE OFFICER_ID = $officer_id";
            $update_user = mysqli_query($conn, $query);
            echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
        }             
    ?>
    <h1 class="text-center">Update Officer Details</h1>
    <div class="container ">
        <form action="" method="post">
            <div class="form-group">
                <label for="name" >NAME</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name  ?>">
            </div>
            <div class="form-group">
                <label for="email" >Email ID</label>
                <input type="text" name="email"  class="form-control" value="<?php echo $email  ?>">
            </div>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class="form-group">
                <label for="pass" >PASSWORD</label>
                <input type="password" name="pass"  class="form-control" value="<?php echo $pass  ?>">
            </div>    
            <div class="form-group">
                <label for="ps" class="form-label">POLICE STATION</label>
                <input type="text" name="ps"  class="form-control" value="<?php echo $ps ?>">
            </div>
            <div class="form-group">
                <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
            </div>
        </form>    
    </div>
    <div class="container text-center mt-5">
      <a href="view_all_officer.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>