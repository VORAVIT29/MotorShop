<?php include "connect.php";
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>

      body {
        background-color:#393939;
        font-family: Arial, Helvetica, sans-serif;
      }

      input[type=text] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
          background-color:#f1f1f1;
          text-align: center;

      }

      .container {
          padding: 16px;
      }

      .modal {
          display: normal;
          position:absolute;
          z-index: 0;
          right: 33%;
          top: 5px;
          width: 40%;
          height: 50%;
          padding-top: 150px;

      }

      .modal-content {
          background-color: #DAE2F8;
          margin: 5% auto 15% auto;
          border: 1px solid #888;
          width: 80%;
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
          /*background-image:linear-gradient(360deg,#ECE9E6,#FFFFFF);*/
      }

      button {
          /*background-color: #c70024;*/
          background-image:linear-gradient(360deg,#D6A4A4,#DAE2F8);
          padding: 14px 20px;
          margin: 8px 0;
          top:150px;
          border: none;
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

      }

      button:hover {
        opacity: 0.8;
        cursor: pointer;
      }

  </style>
</head>
<body>
      <div class="modal">
        <div class="modal-content">
                  <div class="container" style="background-image:linear-gradient(180deg,#D6A4A4,#DAE2F8)">
                    <h1 style="text-align: center;"><?php echo   $_SESSION['head'];?></h1>
                  </div>
                  <form class="" action="edit.php" method="post">
                        <div class="container">

                        <?php if($_SESSION['under'] != "Save") { ?>
                          <label><b>Number ID :</b></label>
                          <input type="text" value="<?php echo $_SESSION['id'];?>" readonly>
                          <label><b>Gender :</b></label>
                          <input type="text"  value="<?php echo $_SESSION['gender'];?>"  readonly>
                          <label><b>User Name :</b></label>
                          <input type="text" value="<?php echo $_SESSION['user_name'];?>" readonly>
                        <?php } ?>

                          <label><b>User password :</b></label>
                          <input type="text" name="user_pass" value="<?php echo $_SESSION['user_pass'];?>"<?php echo $_SESSION['ch'];?>>
                          <label><b>Name :</b></label>
                          <input type="text" name="_name" value="<?php echo $_SESSION['_name'];?>"<?php echo $_SESSION['ch'];?>>
                          <label><b>Surname :</b></label>
                          <input type="text" name="_sur" value="<?php echo $_SESSION['_sur'];?>" <?php echo $_SESSION['ch'];?>>
                          <label><b>Address :</b></label>
                          <input type="text" name="add" value="<?php echo $_SESSION['add'];?>" <?php echo $_SESSION['ch'];?>>
                          <label><b>Age :</b></label>
                          <input type="text" name="age" value="<?php echo $_SESSION['age'];?>" <?php echo $_SESSION['ch'];?>>
                        </div>
                        <div class="container" style="background-image:linear-gradient(360deg,#D6A4A4,#DAE2F8)">

                          <?php if(!empty($_SESSION['ch'])) : ?> <!-- ถ้าตัวแปร ch ต้องไม่ว่าง -->
                              <a href="edit.php?edit_='1'"><button type="button" style="width: 50%; font-size:1rem;"><b><?php echo $_SESSION['under'];?></b></button></a>
                              <a href="edit.php?ca='1'"><button type="button" style="width: 48%; font-size:1rem;"><b>Cancel</b></button></a>
                          <?php endif ?>

                          <?php if($_SESSION['under'] == "Save") : ?>
                                <button type="submit" name="sa" style="width: 50%; font-size:1rem;"><b><?php echo $_SESSION['under'];?></b></button>
                   </form>
                                <a href="edit.php?ca='1'"><button type="button" style="width: 48%; font-size:1rem;"><b>Cancel</b></button></a>
                          <?php endif ?>
                       </div>
        </div>
      </div>
</body>
</html>
