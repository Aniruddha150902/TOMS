<?php include "../connection.php" ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        a{
            margin: 10px 30px;
        }
    </style>
</head>
<body>
    <a href="../index.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>LOG OUT</a><br>
    <a href="officer/view_all_officer.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all officer</a><br>
    <a href="vehicle/view_all_vehicle.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all vehicle</a><br>
    <a href="owner/view_all_owner.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all owner</a><br>
    <a href="fines/view_all_fine.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all fine tickets</a><br>
    <a href="officer/add_officer.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add officer</a><br>
    <a href="vehicle/add_vehicle.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add vehicle</a><br>
    <a href="owner/add_owner.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add owner</a><br>
    <a href="fines/add_fine.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add fine ticket</a><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .toms {
            padding-left: 400px;
            padding-right: 400px;
            background-image: url("abstract-blue-green-gradient-color-effect-background-website-banner-poster-paper-card_120819-307.avif");
            background-size: cover;
            text-align: center;
        }

        .option {
            padding-top: 180px;
            color: 	#000000 ;
            padding-bottom: 20px;

        }

        .parent {
            border-style: solid;
            border-color: #000000;
            border-radius: 3px;
            display: block;
            width: 100%;
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

<body class="toms">


    <h1 class="option">ADMIN FUNCTIONALITY</h1>

    <div class="parent">




        <div class="b">
            <a href="owner/view_all_owner.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all owner</a><br>
            <a href="officer/view_all_officer.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus" class="view"></i>view all officer</a><br>

            <a href="vehicle/view_all_vehicle.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all vehicle</a><br>
            <a href="fines/view_all_fine.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>view all fine tickets</a><br>


        </div>
        <div class="c">
            <a href="officer/add_officer.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add officer</a><br>
            <a href="vehicle/add_vehicle.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add vehicle</a><br>

            <a href="owner/add_owner.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add owner</a><br>


            <a href="fines/add_fine.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>add fine ticket</a><br>
        </div>
        <div class="a">
            <a href="../index.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus" style="padding: left 300px ;"></i>LOG OUT</a><br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>