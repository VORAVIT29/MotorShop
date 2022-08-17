<?php
include "connect.php";
session_start();



if(isset($_POST['button'])) {

  $e_name = $_POST['ename'];
  $e_sur = $_POST['elast'];
  $e_add = $_POST['eadd'];
  $e_age = $_POST['eage'];
  $id = $_SESSION['id_edit'];

  $com=mysqli_query($connect,"UPDATE hm_login SET hm_name='".$e_name."',hm_lastname='".$e_sur."',hm_age='".$e_age."',hm_add='".$e_add."'WHERE hm_id = '".$id."'");
  if($com){
    echo '<script>';
    echo 'alert("คุณได้ทำการแก้ไขเรียบร้อยแล้ว");'; //มี ok อันเดียว
    echo 'window.location.assign("admin.php");'; //คำสั่งใช้ยังหน้าถัดไป
    echo '</script>';
  }
}
else {
  header("Location: admin.php");
}


 ?>
