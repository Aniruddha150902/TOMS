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
</head>

<body>
<?php
  if (isset($_POST['check'])) {
    $l_c = $_POST['l_c'];
    header("refresh:3; url=guest/view_all_fines.php?lc={$l_c}");
	  exit();
  }
  ?>
  <section id="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TOMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="about.html">About</a>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="logintpo.php">TPO Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Admin Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\pexels-tim-gouw-147430.jpg" class="d-block w-100" alt="...">
        <div class="one">
          TOMS
        </div>
        <div class="two">
          (check & pay your fines)
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\pexels-kindel-media-7715191.jpg" class="d-block w-100" alt="...">
      </div>
      <!-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
  <h1 class="text-center">CHECK FINE</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="l_c" class="form-label">ENTER YOUR LICENSE NUMBER :</label>
        <input type="text" name="l_c" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" name="check" class="btn btn-primary mt-2" value="submit">
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>