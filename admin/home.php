<?php include "../connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-image: url(../images/p9rdyvwu2tybvezaz5su.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            text-align: center;
        }

        .option {
            padding-top: 180px;
            padding-bottom: 20px;
            color: yellow;
        }

        .parent {
            border-radius: 5%;
            display: block;
            margin:0 25%;
            background-color: yellow;
        }

        .a {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            color: white;
            padding-left: 300px;
            padding-top: 20px;

        }

        .c {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            color: white;
            padding-top: 20px;
        }

        .b {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            padding-top: 15px;
            color: white;
            padding-top: 20px;
        }

        a {
            margin: 10px 30px;
        }

        .view {
            padding-left: 300px;
        }
    </style>
</head>
<body>
    <h1 class="option">ADMIN FUNCTIONALITY</h1>
    <div class="parent">
        <div class="b">
            <a href="fines/view_all_fine.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all fine tickets</a><br>
            <a href="officer/view_all_officer.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus" class="view"></i>view all officer</a><br>
            <a href="owner/view_all_owner.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all owner</a><br>
            <a href="vehicle/view_all_vehicle.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all vehicle</a><br>
        </div>
        <div class="c">
            <a href="fines/add_fine.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add fine ticket</a><br>
            <a href="officer/add_officer.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add officer</a><br>
            <a href="owner/add_owner.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add owner</a><br>
            <a href="vehicle/add_vehicle.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add vehicle</a><br>         
        </div>
        <div class="a">
            <a href="../index.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus" style="padding: left 300px ;"></i>LOG OUT</a><br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>