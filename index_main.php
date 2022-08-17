<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Big Bike</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  include "connect.php";
  ?>
  <style>

  body {
    background-image: url("img/bigbrick.jpg");
    background-size :120%;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    /*background-position: center;*/
    font-family: Arial, Helvetica, sans-serif; /*ตั้งค่า front*/
    }
    h1 {
        text-align:center;
        color:white;
        width: 97%;
    }
        p {
            text-align: right;
            color: white;
            width: 89%;
          }
          input[type=text], input[type=password] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
              background-color:#f1f1f1;
          }

          /* Set a style for all buttons */
          button {
              background-color: #c70024;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              top:150px;
              border: none;
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  /*ทำให้เป็น เงาในปุ่ม*/

          }

              button:hover {
                  cursor: pointer;
                  opacity: 0.8;
              }

          /* Extra styles for the cancel button */
          .cancelbtn {
              width: 49%;
              padding: 10px 18px;
          }

          /* Center the image and position the close button */
          .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
              position: relative;
          }

          img.picture {
              width: 40%;
              border-radius: 50%;
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); /*เงาในปุ่ม*/
          }

          .container {
              padding: 16px;
          }

          span.psw {
              float: right;
              padding-top: 16px;
          }

          /* The Modal (background) */
          .modal {
              display: normal; /* Hidden by default */
              position:absolute; /* Stay in place */
              z-index: 0; /* Sit on top */
              right: 33%;
              top: 5px;
              width: 40%; /* Full width */
              height: 50%; /* Full height */
              padding-top: 60px;

          }

          /* กล่องเมนูหน้าแรก */
          .box {
              display: normal;
              position: center; /* Stay in place */
              width: 95%;

          }

          .day {
            width: 95%;
            padding-top: 10px;
            color: white;
            margin: 32% auto 1% auto;
          }

          /* Modal Content/Box */
          .modal-content {
              background-color: #fefefe;
              margin: 5% auto 15% auto;
              border: 1px solid #888;
              width: 80%;
              background-image:linear-gradient(180deg,#8e9eab,#eef2f3);
          }

          /* icon ตัว ( X ) */
          .close {
              position: absolute;
              right: 25px;
              top: 0;
              color: #000;
              font-size: 35px;
              font-weight: bold;
          }

              .close:hover, /* ถ้าเม้าชี้จะเป็นยังไง */
              .close:focus {
                  color: red;
                  cursor: pointer;
              }

          /* Add Zoom Animation */
          .animate {
              -webkit-animation: animatezoom 0.9s;
              animation: animatezoom 0.9s
          }

          @-webkit-keyframes animatezoom {
              from {
                  -webkit-transform: scale(0)
              }

              to {
                  -webkit-transform: scale(1)
              }
          }

          @keyframes animatezoom {
              from {
                  transform: scale(0)
              }

              to {
                  transform: scale(1)
              }
          }

          a:link, a:visited {
              background-color: #11a044;
              color: white;
              padding: 14px 67px;
              text-align: center;
              text-decoration: none;
          }

          .err {
            color:#FF0000;
          }

          .button span {      /*ตัวหนังสือขยับ*/
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s; /*ขยับ*/
          }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
            /*font-size: 15px;*/
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
}

  </style>
</head>
  <body>

      <div class="box container">
          <h1>MOTOR BIGBIKE</h1>
            <button  onclick="document.getElementById('id01').style.display='block'" style="width: 25%;float: right; padding: 16px;">Login</button>
            <button   type="submit" class="button" style="width:24%; padding:16px; background-color:#11a044;"><a href="project_database.php"><span>SHOP</span></a></button>

      </div>

      <div id="id01" class="modal">
          <div class="modal-content animate">
                  <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> <!--$times;คือiconตัว(x)-->
                      <img src="img/pro.jpg" alt="Pictur" class="picture">
                  </div>

                  <div class="container">
                    <?php //ถ้ากรอกรหัสผิด
                         if(isset($_SESSION["eror"])) {
                          $er="";
                          $er="<br>".$_SESSION["eror"];
                          unset($_SESSION["eror"]);
                         }
                         else {
                           $er="";
                         }
                      ?>

                    <form action="check_login.php" method="post">
                      <label for="uname"><b>User Name</b></label><span class="err"> *<?php echo $er;?> </span>
                      <input type="text" placeholder="Enter Name" name="uname" required> <!--required = ตัวที่จะเช็คว่าว่างไหม-->
                      <label for="psw"><b>Password</b></label> <span class="err"> *<?php echo $er;?> </span>
                      <input type="password" placeholder="Enter Password" name="psw" required>
                      <button type="submit" name="sub_log" style="width:100%";>Login</button>
                    </form>
                  </div>

                  <div class="container" style="background-color:#f1f1f1">
                    <form action="add_Userpass.php">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" style="background-color:#11a044;float:right;width:49%;" class="cancelbtn">Create an Account</button>
                    </form>
                  </div>

            </div>
      </div>

        <div  class="day" style="text-align:right;" >
          <?php
          echo date("l")."<br><br>";
          echo " TODAY IS : " . date("d - m - Y");
          ?>
       </div>

  </body>
</html>
