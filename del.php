<?php
include "connect.php";
session_start();

if (isset($_GET['del'])) {
  $del = $_GET['del'];
  $com = mysqli_query($connect,"DELETE FROM hm_login WHERE hm_id= $del");
  if($com) {
    echo '<script>';
    echo 'alert("คุณได้ทำการลบข้อมูลเรียบร้อยแล้ว");'; //มี ok อันเดียว
    echo 'window.location.assign("admin.php");'; //คำสั่งใช้ยังหน้าถัดไป
    echo '</script>';
  }
}
 ?>
