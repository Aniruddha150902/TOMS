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
            $desc = $_POST['desc'];
            $amt = $_POST['amt'];
            $query= "INSERT INTO FINE_TICKETS(FINE_DESCRIPTION,FINE_AMOUNT) VALUES('{$desc}','{$amt}')";
            $add_fine = mysqli_query($conn,$query); 
            if (!$add_fine) 
            {
                echo "something went wrong ". mysqli_error($conn);
            }
            else 
            {
                echo "<script type='text/javascript'>alert('fine ticket added successfully!')</script>";
            }         
        }
    ?>
    <h1 class="text-center">Add Fine Ticket details </h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="desc" class="form-label">FINE DESCRIPTION</label>
                <input type="text" name="desc"  class="form-control">
            </div>
            <div class="form-group">
                <label for="amt" class="form-label">FINE AMOUNT</label>
                <input type="number" name="amt"  class="form-control">
            </div>  
            <div class="form-group">
                <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
            </div>
        </form> 
    </div>
    <div class="container text-center mt-5">
        <a href="view_all_fine.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>