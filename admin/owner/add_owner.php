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
            $name = $_POST['name'];
            $dl = $_POST['dl'];
            $email = $_POST['email'];
            $ph = $_POST['ph'];
            $query= "INSERT INTO OWNER(OWNER_NAME,DL_NO,OWNER_EMAIL,PHONE_NO) VALUES('{$name}','{$dl}','{$email}','{$ph}')";
            $add_owner = mysqli_query($conn,$query); 
            if (!$add_owner) 
            {
                echo "something went wrong ". mysqli_error($conn);
            }
            else 
            {
                echo "<script type='text/javascript'>alert('User added successfully!')</script>";
            }         
        }
    ?>
    <h1 class="text-center">Add Owner details </h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name" class="form-label">NAME</label>
                <input type="text" name="name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="dl" class="form-label">DL NUMBER</label>
                <input type="text" name="dl"  class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">EMAIL ID</label>
                <input type="email" name="email"  class="form-control">
            </div>
            <div class="form-group">
                <label for="ph" class="form-label">PHONE NUMBER</label>
                <input type="number" name="ph"  class="form-control">
            </div>    
            <div class="form-group">
                <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
            </div>
        </form> 
    </div>
    <div class="container text-center mt-5">
        <a href="view_all_owner.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>