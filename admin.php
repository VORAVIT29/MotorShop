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
    <title>ADMIN USER</title>

    <style>

        tr {
          text-align: center;
        }

    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark " style="background:-webkit-linear-gradient(right,#355C7D,#6C5B7B,#C06C84);color:white;"> <!-- เมนู -->
      <a class="navbar-brand" href="#">MOTOR BIGBIKE (ADMIN)</a>
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
              <a class="dropdown-item" href="ADMIN_DATA.php">DATA</a>
            </div>
          </li>
        </ul>

          <form class="form-inline my-2 my-lg-0" action="#">

          </form>
        </div>
    </nav>

    <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Last</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $n = 0;
        $com = mysqli_query($connect,"SELECT * FROM hm_login");
        while ($row = mysqli_fetch_array($com)) {
        echo '<tr>';
          echo '<th scope="row">'.(++$n).'</th>';
          echo '<td>'.$row['hm_id'].'</td>';
          echo '<td>'.$row['hm_name'].'</td>';
          echo '<td>'.$row['hm_lastname'].'</td>';
          echo '<td>'.$row['hm_age'].'</td>';
          echo '<td>'.$row['hm_add'].'</td>';
          echo '<td>'.$row['hm_sex'].'</td>';
          echo '<td><a href="editad.php?id='.$row['0'].'"><button type="button" class="btn btn-warning">Edit</button></a></td>';
          echo '<td><a href="del.php?del='.$row['0'].'"><button type="button" class="btn btn-danger">Del</button></a></td>';
        echo '</tr>';
      }
    ?>
  </tbody>
</table>

  </body>
</html>
