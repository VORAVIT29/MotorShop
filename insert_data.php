<?php include "connect.php";  session_start();?>

<?php                                      //ตัวเก็บข้อมูลใน data_base

  if(isset($_GET['buy'])){ //ตอนซื้อของ

      $id_user=$_SESSION['id'];
      $model_car=$_SESSION['model_car'];
      $price_car=$_SESSION['price_car'];

      $result = mysqli_query($connect,"INSERT INTO userdata_sell (id_user_login,name_car_sell,price_sell)
                                        VALUES ('$id_user','$model_car','$price_car')");
      if($result){
        echo '<script>';
        echo 'alert("คุณได้ซื้อรถให้ร้านเรียบร้อยแล้ว");'; //มี ok อันเดียว
        echo 'window.location.assign("project_database.php");'; //คำสั่งใช้ยังหน้าถัดไป
        echo '</script>';
      }
  }

  else {
  $username =  $_SESSION["username"];
  $password = $_SESSION["pass"];
  $name = $_SESSION["name"];
  $lastname = $_SESSION["lastname"];
  $gender = $_SESSION["gender"];
  $age = $_SESSION["age"];
  $add = $_SESSION["add"];

if($name && $lastname && $gender && $age && $add && $username && $password  != ""){  /*ตรวจสอบว่ามีช่องว่างไหม*/
  mysqli_query($connect,"INSERT INTO hm_login (user_name,user_pass,hm_name,hm_lastname,hm_age,hm_add,hm_sex)
                         VALUES ('$username','$password','$name','$lastname','$age','$add','$gender')");
}

header("Location: index_main.php");
}
?>
