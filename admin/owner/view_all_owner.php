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
        <h1 class="text-center" >Vehicle Owners</h1>
        <a href="add_owner.php" class='btn btn-outline-dark mb-2'><i class="bi bi-person-plus"></i> add New Owner</a>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th  scope="col">ID</th>
                    <th  scope="col">NAME</th>
                    <th  scope="col">DL NUMBER</th>
                    <th  scope="col">EMAIL</th>
                    <th  scope="col">PHONE NUMBER</th>
                    <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
                </tr>  
            </thead>
            <tbody>
                <?php
                    $query="SELECT * FROM OWNER";
                    $view_owner= mysqli_query($conn,$query);
                    while($row= mysqli_fetch_assoc($view_owner))
                    {
                        $id = $row['OWNER_ID'];                
                        $name = $row['OWNER_NAME'];
                        $dl = $row['DL_NO'];        
                        $email = $row['OWNER_EMAIL'];         
                        $ph = $row['PHONE_NO'];
                        echo "<tr >";
                        echo "  <th scope='row' >{$id}</th>";
                        echo "  <td > {$name}</td>";
                        echo "  <td >{$dl} </td>";
                        echo "  <td > {$email}</td>";
                        echo "  <td >{$ph} </td>";
                        echo "  <td class='text-center'> <a href='view_owner.php?owner_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";                   
                        echo "  <td class='text-center' > <a href='update_owner.php?edit&owner_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
                        echo "  <td  class='text-center'>  <a href='delete_owner.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
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