<?php include "connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/00087e8cb4.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    if (isset($_POST['check'])) {
        $l_c = $_POST['l_c'];
        header("refresh:3; url=guest/view_all_fines.php?lc={$l_c}");
        exit();
    }
    ?>
    <section id="navigation-bar" class="red-section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">TOMS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#testimonials">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="fa-solid fa-2x fa-right-to-bracket login-favicon"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section id="check">
        <div class="conatiner-fluid">
            <img class="traffic-img" src="./images/pexels-tim-gouw-147432.jpg" alt="Traffic Light Image">
            <div class="big-heading">TOMS</div>
            <div class="small-heading">(check your fines.)</div>
            <div class="form-box">
                <form action="" method="post">
                    <h1 class="form-heading">Registration Number</h1>
                    <div class="formcontainer">
                        <hr>
                        <div class="container">
                            <label for="l_c"></label>
                            <input type="text" placeholder="vehicle number" name="l_c" required>
                        </div>
                        <button type="submit" name="check" value="submit">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="testimonials" class="red-section">
        <div id="testimonials-carousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active container-fluid">
                    <h2 class="testimonials-text">Unlike convertional fines system, you don't have to be inques. It takes seconds to Check Fines while you are in any kind of busy situation.</h2>
                    <img class="testimonial-image" src="images/savetime.svg" alt="save time image">
                    <em>Save Time and Energy</em>
                </div>
                <div class="carousel-item container-fluid">
                    <h2 class="testimonials-text">We keep tracks of your every single Fine from the beginning. Furthermore, we are going to analyze your data for you.</h2>
                    <img class="testimonial-image" src="images/checkfines.svg" alt="check Fine image">
                    <em>check past fines</em>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>
    <footer id="footer" class="container-fluid colored-section ">
        <i class="footer-favicon fa-brands fa-facebook"></i>
        <i class="footer-favicon fa-brands fa-twitter"></i>
        <i class="footer-favicon fa-brands fa-instagram"></i>
        <i class="footer-favicon fa-solid fa-envelope"></i>
        <p>© Copyright TinDog</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>