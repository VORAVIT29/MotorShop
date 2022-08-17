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
    <title></title>
  </head>
  <body>

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
            </div>
          </li>
        </ul>
        </div>
    </nav>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <!--<th scope="col">#</th>-->
      <th scope="col">ID</th>
      <th scope="col">User</th>
      <th scope="col">Pass</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Age</th>
      <th scope="col">add</th>
      <th scope="col">gender</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $id=$_GET['id'];
    $result=mysqli_query($connect,"SELECT * FROM hm_login WHERE hm_id=$id");
    $row=mysqli_fetch_array($result);
        echo '<tr>';
        /*echo '<th scope="row"></th>';*/
        echo '<td>'.$row['hm_id'].'</td>';
        echo '<td>'.$row['user_name'].'</td>';
        echo '<td>'.$row['user_pass'].'</td>';
        echo '<td>'.$row['hm_name'].'</td>';
        echo '<td>'.$row['hm_lastname'].'</td>';
        echo '<td>'.$row['hm_age'].'</td>';
        echo '<td>'.$row['hm_add'].'</td>';
        echo '<td>'.$row['hm_sex'].'</td>';
      echo '</tr>';
     ?>
  </tbody>
</table>
<form class="" action="edit_data.php" method="post">
  <?php
  $_SESSION['id_edit']=$row['hm_id'];
  echo '<input type="text" name="ename" value="'.$row['hm_name'].'">';
  echo '<input type="text" name="elast" value="'.$row['hm_lastname'].'">';
  echo '<input type="text" name="eage" value="'.$row['hm_age'].'">';
  echo '<input type="text" name="eadd" value="'.$row['hm_add'].'">';
   ?>
   <button type="submit" class="btn btn-danger" name="button">Save</button>
   <button type="submit" class="btn btn-success">Cancle</button>
</form>
  </body>
</html>
