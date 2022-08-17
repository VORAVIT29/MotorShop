<?php include "connect.php";session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/jquery/jquery-3.5.1.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <title><?php echo  $_SESSION['model_car'];?></title>
    <style>
    div.polaroid {
       width: 80%;
       background-color: white;
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       margin-bottom: 25px;
     }

     div.container_di {
       text-align: center;
       padding: 10px 20px;
     }
    </style>
  </head>
  <body>
    <div class="container">
   <div class="row">
     <?php
       $id = $_GET['id'];
       $sql = "SELECT * FROM data_car WHERE car_id = $id ";
       $result = mysqli_query($connect, $sql); /*or die ("Error in query: $sql " . mysqli_error());*/
       if($result)  { //Start $result
       $row = mysqli_fetch_array($result);
       $_SESSION['idcar']=$row['car_id'];
       $_SESSION['model_car']=$row['model'];
       $_SESSION['price_car']=$row['price_'];
     ?>
     <div class="col-md-10">
       <div class="container" style="margin-top: 50px">
         <div class="row">
           <div class="col-md-6">
             <div class="polaroid">
               <?php echo"<img src='img/".$row['img']."'width='100%'>";?>
                 <div class="container_di">
                   <p><?php echo $row["model"];?></p>
                 </div>
             </div>
           </div>
           <div class="col-md-6">
             <h3><b><?php echo $row["model"];?></b></h3>
             <p>
               ราคา &nbsp;<strong><?php echo $row["price_"];?></strong>&nbsp; บาท
             </p>
             <?php echo $row["commen"];?>
             <?php  if(isset($_SESSION["name"])) { ?>
                <p>
                  &nbsp;<p><a href="insert_data.php?buy='1'" class="btn btn-danger btn-lg btn-block">
                    <i class="fas fa-shopping-basket"></i>&nbsp;
                    Buy Now</a></p>&nbsp;
                    <p><a href="project_database.php" class="btn btn-primary">Cancel</a></p>
                  <?php } else { ?>
                   <p><br><a href="project_database.php" class="btn btn-primary btn-lg btn-block"> Cancel </a></p>&nbsp;
                 <?php } ?>
                </p>
              <?php } // End $result ?>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
  </body>
</html>
