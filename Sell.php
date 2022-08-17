<?php
  session_start();
  include "connect.php";
?>
<html>
<head>
  <title>SELL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/jquery/jquery-3.5.1.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <style>
            body {
            /*background: -webkit-linear-gradient(left, #2F80ED, #56CCF2);*/
            /*background-size :100%;*/
            /*background-repeat: no-repeat;*/
            background-image: url("img/bigbrick.jpg");
            background-size: cover;
            background-attachment: fixed;
            }

            .register{
          margin-top: 3%;
          padding: 3%;
          background-color:rgba(0,0,0,0.3);
          }

          .register-left {
          text-align:center;
          color: #fff;
          margin-top: 4%;
          }

          .register-left input {
          border: none;
          border-radius: 1.5rem;
          padding: 2%;
          width: 60%;
          background: #f8f9fa;
          font-weight: bold;
          color: #383d41;
          margin-top: 30%;
          margin-bottom: 3%;
          cursor: pointer;
          }

          .register-right{
          background: #f8f9fa;
          border-top-left-radius: 10% 50%;
          border-bottom-left-radius: 10% 50%;
          /*background-color: white;*/
          }

          .register-left img {
          margin-top: 15%;
          margin-bottom: 5%;
          width: 100%;
          -webkit-animation: mover 2s infinite  alternate;
          animation: mover 1s infinite  alternate;
          }

          @-webkit-keyframes mover {
          0% { transform: translateY(0); }
          100% { transform: translateY(-20px); }
          }

          @keyframes mover {
          0% { transform: translateY(0); }
          100% { transform: translateY(-20px); }
          }

          .register-left p {
          font-weight: lighter;
          padding: 12%;
          margin-top: -9%;
          }

          .register .register-form{
          padding: 10%;
          margin-top: 10%;
          }

          .ro {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
          }

          .btnRegister{
          float: right;
          margin-top: 10%;
          border: none;
          border-radius: 1.5rem;
          padding: 2%;
          background: #0062cc;
          color: #fff;
          font-weight: 600;
          width: 100%;
          cursor: pointer;
          background-color: green;
          }

          .register .nav-tabs{
          margin-top: 3%;
          border: none;
          background: #0062cc;
          border-radius: 1.5rem;
          width: 28%;
          float: right;
          }

          .register .nav-tabs .nav-link{
          padding: 2%;
          height: 34px;
          font-weight: 600;
          color: #fff;
          border-top-right-radius: 1.5rem;
          border-bottom-right-radius: 1.5rem;

          }

          .register .nav-tabs .nav-link:hover{
          border: none;
          }

          .register .nav-tabs .nav-link.active{
          width: 100px;
          color: #0062cc;
          border: 2px solid #0062cc;
          border-top-left-radius: 1.5rem;
          border-bottom-left-radius: 1.5rem;

          }

          .register-heading {
          text-align: center;
          margin-top: 8%;
          margin-bottom: -15%;
          color: #495057;
          }

  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">MOTOR BIGBIKE</a>
    <i class="fas fa-motorcycle"></i>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index_main.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            View Types
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Honda Africa Twin</a>
            <a class="dropdown-item" href="#">Honda Cb</a>
            <a class="dropdown-item" href="#">Honda Cbr</a>
            <div class="dropdown-divider"></div>
            <!--<a class="dropdown-item" href="#">Something else here</a>-->
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container register">
                <div class="ro">
                    <div class="col-md-3 register-left">
                      <form class="" action="index_main.php" method="">
                          <img src="img/pro.jpg" alt=""/>
                          <h3>Welcome To</h3>
                          <p>MOTOR BIGBIKE</p>
                          <input type="submit" name="" value="cancle"/><br/>
                      </form>
                    </div>

                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">แบบฟอร์ม การขายรถให้ร้าน</h3>
                                <form  action="sell_database.php" method="post">  <!--form เปิด -->
                                <div class="ro register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="ชื่อ * Eng" name="sell_name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="นามสกุล * Eng" name="sell_sur" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="ที่อยู่ * Eng"  name="sell_add" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="รุ่นของรถ * Eng"  name="sell_carMo" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  class="form-control" placeholder="ปีโมเดล * Eng"  name="sell_yr_model"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="เลขไมล์ * Eng" name="mileage" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="color">
                                                <option class="hidden"  selected disabled>สีของรถ *</option>
                                                <option>Red</option>
                                                <option>Yellow</option>
                                                <option>Pink</option>
                                                <option>Green</option>
                                                <option>Orange</option>
                                                <option>Blue</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="ราคาที่นำเสนอ * Eng" name="price_sell" />
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="file_"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="male" checked/>
                                                    <span> Male </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="female"/>
                                                    <span>Female </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">รอยตำหนิ</h3>
                                <div class="ro register-form">
                                        <div class="form-group">
                                            <textarea name="commen" rows="8" cols="80" placeholder="ถ้ามีก็เขียนในช่อง *"></textarea>
                                        </div>
                                          <input type="submit" class="btnRegister"  value="Submit"/>
                                    </div>
                                </div>
                              </form> <!-- form ปิด -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>
