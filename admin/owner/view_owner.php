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
<h1 class="text-center">Owner Details</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th  scope="col">ID</th>
                    <th  scope="col">NAME</th>
                    <th  scope="col">DL NUMBER</th>
                    <th  scope="col">EMAIL</th>
                    <th  scope="col">PHONE NUMBER</th>
                </tr>  
            </thead>
            <tbody>
                <?php
                    if (isset($_GET['owner_id'])) 
                    {
                        $owner_id = $_GET['owner_id']; 
                        $query="SELECT * FROM OWNER WHERE OWNER_ID = {$owner_id} ";  
                        $view_owner= mysqli_query($conn,$query);            
                        while($row = mysqli_fetch_assoc($view_owner))
                        {
                            $id = $row['OWNER_ID'];                
                            $name = $row['OWNER_NAME'];
                            $dl = $row['DL_NO'];        
                            $email = $row['OWNER_EMAIL'];         
                            $ph = $row['PHONE_NO'];
                            echo "<tr >";
                            echo "  <th scope='row' > {$id} </th>";
                            echo "  <td > {$name} </td>";
                            echo "  <td >{$dl} </td>";
                            echo "  <td > {$email} </td>";
                            echo "  <td >{$ph} </td>";
                            echo "</tr >";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container text-center mt-5">
        <a href="view_all_owner.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>