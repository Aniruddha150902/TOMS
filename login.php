<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-image: url(./images/pexels-pixabay-532001.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .container
        {
            position: absolute;
            top: 60%;
            left: 50%;
            -ms-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            height: 70%;
        }
        .flex-parent {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box-btn {
            max-width: 275px;
            min-width: 325px;
            height: 300px;
            border-radius: 2rem;
            background-color: #006b95;
            padding: 10px;
            text-align: center;
            margin: 20px 30px 20px 30px;
        }
        a, a .box-btn { text-decoration: none; }
        .box-btn i {
            font-size: 8rem;
            color: #dddddd;
            margin-top: 4rem;
        }
        .box-btn h5 {
            font-size: 1.2rem;
            color: #dddddd;
            font-weight: 500;
            margin: 1rem 1.5rem 1rem 1.5rem;
        }
        .box-btn:hover {
            color: #ffffff;
            background-color: #0f3057;
        } 
    </style>
    <script src="https://kit.fontawesome.com/00087e8cb4.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="flex-parent">
            <a href="admin/login.php">
                <div class="box-btn">
                    <i class="fas fa-user-shield"></i>
                    <h5>Traffic Police Admin</h5>
                </div>
            </a>
            <a href="TPO/logintpo.php">
                <div class="box-btn">
                    <i class="fas fa-book-reader"></i>
                    <h5>Traffic Police Officer</h5>
                </div>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>