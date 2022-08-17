<!DOCTYPE HTML>
<html>
<title>Sign Up</title>
  <style>
    <?php include "connect.php";?>

      body {
        background-image: url("img/bigbrick.jpg");
        background-size :120%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position:top;
        font-family: Arial, Helvetica, sans-serif;
      }
    * {box-sizing: border-box;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for all buttons */
    button {
      background-color: #cc3399;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }

    button:hover {
      opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 50%;
    }

    /* Add padding to container elements */
    .container {
      padding: 16px;
    }

    /* The Modal (background) */
    .modal {
      position: fixed; /* Stay in place */
      z-index: 0; /* Sit on top */
      right: 0%;
      top: 0%;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      padding-top: 1px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 35px;
      top: 15px;
      font-size: 40px;
      font-weight: bold;
      color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
      color: #f44336;
      cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
         width: 100%;
      }
    }
    .err {
      color:#FF0000;
    }

  </style>
<body>
  <?php
    // define variables and set to empty values
    $UsernameEr = $passEr = $RepassEr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if(empty($_POST["uername"])) {
        $UsernameEr = "ใส่ Username";
      }

      if(empty($_POST["pass"])) {
        $passEr = "ใส่รหัสผ่าน";
      }

      if (empty($_POST["repass"])) {
        $RepassEr = "ใส่รหัสผ่านไม่ตรงกัน";
      }

      if(!empty($_POST["repass"]) && !empty($_POST["pass"]) && !empty($_POST["uername"])) { /*ถ้าใส้ข้อมูลแล้ว*/
        if($_POST["repass"] == $_POST["pass"]) {

          session_start();
          $_SESSION["username"] = $_POST["uername"];
          $_SESSION["pass"] = $_POST["pass"];

          header("Location: add_signup.php");
        }
        else {
          $passEr = "ใส่รหัสผ่านไม่ตรงกัน";
          $RepassEr = "ใส่รหัสผ่านไม่ตรงกัน";
        }
      }

  }
  ?>

  <div class="modal">
      <div class="container modal-content">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">  <!--/*signup_bata.php*/-->
          <h1 style="text-align:center;"> Sign Up</h1>
          <p> Please input Form to create accout.</p>
          <p class="err">*จำเป็น</P>
          <hr>
          <b>User Name</b> <span class="err">* <?php echo $UsernameEr;?></span>
          <input type="text" name="uername" placeholder="Enter UserName" >
          <br><br>
          <b>Password</b> <span class="err">* <?php echo $passEr;?></span>
          <input type="password" name="pass" placeholder="Enter Password" >
          <br><br>
          <b>Repeat Password</b> <span class="err">* <?php echo $RepassEr;?></span>
          <input type="password" name="repass" placeholder="Enter Repeat Password" >
          <br><br>
          <hr>
          <div class="clearfix">
            <button type="submit" class="signupbtn" style="width:49%;background-color:#11a044">Next</button>
          </form>
          <form action="index_main.php">
            <button type="submit" class="cancelbtn" style="width:49%;float:right">Cancel</button>
          </form>
          </div>
        </div>
    </div>
</body>
</html>
