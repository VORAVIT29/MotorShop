<?php include "connect.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/jquery/jquery-3.5.1.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <title>Honda BigBike</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap');

    .webmadewell {
  background-color: white;
}
body {
  margin: 0;
  background-color: gray;
}
.sample-header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  background-image: url("img/bigbrick.jpg");
  background-size :120%;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
}
.sample-header::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: MidnightBlue;
  opacity: 0.3;
}
.sample-header-section {
  font-family: 'Kanit', sans-serif;
  position: relative;
  padding: 15% 0 10%;
  max-width: 640px;
  margin-left: auto;
  margin-right: auto;
  color: white;
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
}
h1 {
  font-weight: 500;
}
h2 {
  font-weight: 400;
}
.sample-section-wrap {
  position: relative;
  background-color:gray;
}
.sample-section {
  position:relative;
  margin-right: 95px;
  padding:80px;
}


    </style>
  </head>
  <body>
  <div class="sample-header">
      <div class="sample-header-section">
        <h1 class="display-3" style="text-align:center;">GIVE YOUR WINGS</h1>
      </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark " style="background:-webkit-linear-gradient(right,#355C7D,#6C5B7B,#C06C84);color:white;"> <!-- เมนู -->
    <a class="navbar-brand" href="#">MOTOR BIGBIKE</a>
    <i class="fas fa-motorcycle"></i>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id = "navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item">View ALL</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="sell.php">Sell</a>
            <a class="dropdown-item" href="project_database.php">Frist Brike</a>
          </div>
        </li>
      </ul>

        <form class="form-inline my-2 my-lg-0" action="#">
                <?php  if(isset($_SESSION["name"])) { ?>
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Hello
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="edit.php">Information</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="check_login.php?out='1'">Log out</a>
                        </div>
                      </li>
                    </ul>
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo $_SESSION["name"];?></button>
              <?php } else { ?>
                <a class="btn btn-outline-success" href="index_main.php" role="button">Login</a>
             <?php } ?>
        </form>
      </div>
  </nav>

  <div class="sample-section-wrap">
    <div class="sample-section">
      <div class="row">
        <?php
          $sql ="SELECT * FROM buy_to_user";
          $result = mysqli_query($connect,$sql);
          while($row = mysqli_fetch_array($result)) { ?>
          <div class="card text-white bg-dark mb-3" style="width: 18rem;">
            <img class="card-img-top" src="img/<?php echo $row['img_'];?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"style="text-align:center;"><?php echo $row['car_model_buy'] ?></h5>
              <p style="text-align:center;">ราคา : <?php echo $row['price_buy']; ?> บาท</p>
              <a href="#?id='<?php echo $row['0'];?>'" class="btn btn-primary btn-lg btn-block">Detial</a>
            </div>
          </div>
          &nbsp;
        <?php } ?>
      </div>
    </div>
  </div>

  <script>

  function parallax_height() {
  var scroll_top = $(this).scrollTop();
  var sample_section_top = $(".sample-section").offset().top;
  var header_height = $(".sample-header-section").outerHeight();
  $(".sample-section").css({ "margin-top": header_height });
  $(".sample-header").css({ height: header_height - scroll_top });
  }
  parallax_height();
  $(window).scroll(function() {
  parallax_height();
  });
  $(window).resize(function() {
  parallax_height();
  });

  </script>

  </body>
</html>
