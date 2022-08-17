<!DOCTYPE HTML>
<html>
<title>Sign Up</title>
  <style>

<?php include "connect.php";?>

  body {
    background-image: url("img/bigbrick.jpg");
    background-size :120%;
    background-repeat: no-repeat;
    background-position:top;
    font-family: Arial, Helvetica, sans-serif;
  }
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=number]:focus {
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
    $nameEr = $lastnameEr = $genderEr = $ageEr = $addEr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if(empty($_POST["name"])) {
        $nameEr = "กรุณากรอกชื่อ";
      }

      if(empty($_POST["age"])) {
        $ageEr = "กรุณากรอกอายุ";
      }

      if (empty($_POST["gender"])) {
        $genderEr = "กรุณากรอกเพศ";
      }

      if (empty($_POST["add"])) {
        $addEr = "กรุณากรอกที่อยู่";
      }

      if (empty($_POST["lastname"])) {
        $lastnameEr = "การุณากรอกนามสกุล";
      }

      //ตรวจสอบว่าต้องเขียนให้หมด
      if(!empty($_POST["name"]) && !empty($_POST["age"]) && !empty($_POST["gender"]) &&
      !empty($_POST["add"]) && !empty($_POST["lastname"])) {

        session_start();
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["age"] = $_POST["age"];
        $_SESSION["gender"] = $_POST["gender"];
        $_SESSION["add"] = $_POST["add"];
        $_SESSION["lastname"] = $_POST["lastname"];

        header("Location: insert_data.php");
      }
  }
  ?>

  <div class="modal">
      <div class="container modal-content">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <h1 style="text-align:center;"> Sign Up</h1>
        <p> Please input Form to create accout.</p>
        <p class="err">*จำเป็น</P>
        <hr>
          Name <span class="err">* <?php echo $nameEr;?></span>
          <input type="text" name="name" placeholder="Enter Name">
          <br><br>
          Last Name <span class="err">* <?php echo $lastnameEr;?></span>
          <input type="text" name="lastname" placeholder="Enter Last Name">
          <br><br>
          Address <span class="err">* <?php echo $addEr;?></span>
          <input type="text" name="add" placeholder="Enter Address">
          <br><br>
          Age <span class="err">* <?php echo $ageEr;?></span>
          <input type="number" name="age" placeholder="Enter number">
          <br><br>
          Gender
          <input type="radio" name="gender" <?php if(isset($gender) && $gender=="famale") echo "checked";?>value="female">Female
          <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked";?>value="male">Male
          <span class="err">* <?php echo $genderEr;?></span>
          <br><br>
          <hr>
          <div class="clearfix">
            <button type="submit" class="signupbtn" style="width:49%;background-color:#11a044">Sign Up</button>
          </form>
          <form action="index_main.php">
            <button type="submit" class="cancelbtn" style="width:49%;float:right">Cancel</button>
          </form>
          </div>
        </div>
    </div>
</body>
</html>
