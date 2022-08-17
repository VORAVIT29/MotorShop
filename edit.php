<?php
include "connect.php";
session_start();

  if(isset($_GET['edit_'])) {   //กด Edit
    $_SESSION['ch']="";
    $_SESSION['head'] = "EDIT";
    $_SESSION['under'] = "Save";
    header("location: infor_.php");
  }
  else if(isset($_GET['ca'])) {      //ถ้ากด cancle
    unset($_SESSION['ch']);
    header("location: project_database.php");
  }
  else if(isset($_POST['sa'])) {  //ถ้ากด save
    $e_name = $_POST['_name'];
    $e_sur = $_POST['_sur'];
    $e_add = $_POST['add'];
    $e_age = $_POST['age'];
    $u_pass = $_POST['user_pass'];
    $u_id = $_SESSION['id'];

    $query = "UPDATE hm_login SET user_pass='".$u_pass."',hm_name='".$e_name."',hm_lastname='".$e_sur."',hm_age='".$e_age."',hm_add='".$e_add."'WHERE hm_id = '".$u_id."'";
    $result = mysqli_query($connect,$query);
    if($result == TRUE) {
        $querySELL = "SELECT * FROM hm_login WHERE hm_id = '".$u_id."'";
        $resultSELL = mysqli_query($connect,$querySELL);
          if($resultSELL == TRUE) {
              $rows = mysqli_fetch_array($resultSELL);
              $_SESSION['name'] = $rows['hm_name'].' '.$rows['hm_lastname'];
              header("location: project_database.php");
          }
    }
    else {
      echo "ERROR";
    }

  }
  else {
    $id = $_SESSION['id'];
    $query = "SELECT * FROM hm_login WHERE hm_id = '$id'";
    $result = mysqli_query($connect,$query);
    if($result == TRUE) {
      $row = mysqli_fetch_array($result);
      $_SESSION['user_pass'] = $row['user_pass'];
      $_SESSION['_name'] = $row['hm_name'];
      $_SESSION['_sur'] = $row['hm_lastname'];
      $_SESSION['add'] = $row['hm_add'];
      $_SESSION['age'] = $row['hm_age'];

      $_SESSION['head'] = "INFORMATION";
      $_SESSION['ch'] ="readonly";
      $_SESSION['under'] = "Edit";
      header("location: infor_.php");
    }
  }
?>
