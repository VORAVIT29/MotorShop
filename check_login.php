<?php
  include "connect.php";
  session_start();
  $error = array();

  if(isset($_GET["out"])) {  //ถ้ากด logout
    session_destroy();
    header("location: index_main.php");

  }

  if(isset($_POST["sub_log"])) {   //ถ้ากด Login
    $user = $_POST['uname'];
    $userpass =  $_POST['psw'];

    if(count($error) == 0) {
      //md5 แปลง paaword
      $query = "SELECT * FROM hm_login WHERE user_name = '$user' AND user_pass = '$userpass'";
      $result = mysqli_query($connect,$query);

      if(mysqli_num_rows($result) == 1) {  //ถ้าค้นหาเจอ ชื่อและรหัวผ่าน
          $row = mysqli_fetch_array($result);
          $_SESSION['name'] = $row['hm_name'].' '.$row['hm_lastname'];
          $_SESSION['id'] = $row['hm_id'];
          $_SESSION['gender'] = $row['hm_sex'];
          $_SESSION['user_name'] = $row['user_name'];
          header("location: project_database.php");
      } else {
        $_SESSION["eror"] = "UserName หรือ รหัสผ่านผิด";
        header("location: index_main.php");
      }
    }
  }

?>
