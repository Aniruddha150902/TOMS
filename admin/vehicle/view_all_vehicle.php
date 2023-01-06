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
    <div class="container">
        <h1 class="text-center" >VEHICLE DETAILS</h1>
        <a href="add_vehicle.php" class='btn btn-outline-dark mb-2'><i class="bi bi-person-plus"></i>REGESTER VEHICLE</a>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th  scope="col">VEHICLE ID</th>
                    <th  scope="col">LICENCE NUMBER</th>
                    <th  scope="col">VEHICLE TYPE</th>
                    <th  scope="col">VEHICLE MODEL</th>
                    <th  scope="col">OWNER NAME</th>
                    <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
                </tr>  
            </thead>
            <tbody>
                <?php
                    $query=" SELECT V.VEHICLE_ID,V.LICENSE_NUMBER,V.VEHICLE_TYPE,V.VEHICLE_MODEL,O.OWNER_NAME FROM VEHICLE V,OWNER O WHERE V.OWNER_ID=O.OWNER_ID ORDER BY V.VEHICLE_ID";
                    $view_vehicle= mysqli_query($conn,$query);
                    while($row= mysqli_fetch_assoc($view_vehicle))
                    {
                        $id = $row['VEHICLE_ID'];                
                        $lc = $row['LICENSE_NUMBER'];        
                        $vt = $row['VEHICLE_TYPE'];         
                        $vm = $row['VEHICLE_MODEL'];
                        $name = $row['OWNER_NAME'];
                        echo "<tr >";
                        echo "  <th scope='row' >{$id}</th>";
                        echo "  <td > {$lc}</td>";
                        echo "  <td > {$vt}</td>";
                        echo "  <td >{$vm} </td>";
                        echo "  <td >{$name} </td>";
                        echo "  <td class='text-center'> <a href='view_vehicle.php?vehicle_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";                   
                        echo "  <td class='text-center' > <a href='update_vehicle.php?edit&vehicle_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
                        echo "  <td  class='text-center'>  <a href='delete_vehicle.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
                        echo "</tr> ";
                    }  
                ?>
            </tbody>
        </table>
    </div>
    <div class="container text-center mt-5">
      <a href="../home.php" class="btn btn-warning mt-5"> Back </a>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>