<?php
include "connect.php";
session_start();


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ถ้ามีการส่งค่าเป็นแบบ POST
    if($_POST['gender'] && $_POST['file_'] && $_POST['price_sell'] &&
    $_POST['color'] && $_POST['mileage'] && $_POST['sell_name'] && $_POST['sell_sur'] &&
    $_POST['gender'] && $_POST['sell_add'] && $_POST['sell_carMo'] && $_POST['sell_carMo'] && $_POST['sell_yr_model']  != "") {  /*ตรวจสอบว่ามีช่องว่างไหม*/

      $name = $_POST['sell_name'];
      $sur =$_POST['sell_sur'];
      $add = $_POST['sell_add'];
      $carmodel = $_POST['sell_carMo'];
      $yearmodel = $_POST['sell_yr_model'];
      $milea = $_POST['mileage'];
      $color = $_POST['color'];
      $price = $_POST['price_sell'];
      $img = $_POST['file_'];
      $gender = $_POST['gender'];
      if(empty($_POST['commen'])) {
        $commen='ไม่มี';
      } else $commen = $_POST['commen'];


      $result = mysqli_query($connect,"INSERT INTO buy_to_user (name_buy,sur_buy,add_buy,car_model_buy,color_buy,Year_facture_buy,Mileage_car_buy,price_buy,img_,user_sell_gender,commen_sell,car_new)
                                        VALUES ('$name','$sur','$add','$carmodel','$color','$yearmodel','$milea','$price','$img','$gender','$commen','2')");
      if($result) {
        echo '<script>';
        echo 'alert("คุณได้ขายรถให้ร้านเรียบร้อยแล้ว");'; //มี ok อันเดียว
        echo 'window.location.assign("sell.php");'; //คำสั่งใช้ยังหน้าถัดไป
        echo '</script>';
      }
    }
    else {
    echo '<script>';
    echo 'confirm("คุณลงทะเบียนไม่สำเร็จ");'; //มี ok กับ ยกเลิก
    echo 'window.history.back();'; //คำสั่งใช้ยังหน้าถัดไป
    echo '</script>';;
  }
}

?>
