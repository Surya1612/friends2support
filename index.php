<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <style type="text/css">
       
#articles h2 {
  margin: 40px 0px 40px 0px;
  color: darkred;
}

#articles .container .card img {
  width: 100%;
}

#articles .container .card {
  padding: 10px;
  border-radius: 5px;
  margin-right: 20px;
}

#articles .swiper-container .swiper-button-next{
  background-image: url(image/arrow.png);
}

#articles .swiper-container .swiper-button-prev {
  background-image: url(image/arrow.png);
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}

#articles .container .card .like {
  position: absolute;
  top: 15%;
  left: 12%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(85, 85, 85, 0.678);
  color: white;
  font-size: 22px;
  padding: 8px 15px;
  border: none;
  cursor: pointer;
  border-radius: 30px;
}

#articles .container .card .like {
  position: absolute;
  top: 15%;
  left: 12%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: rgba(85, 85, 85, 0.678);
  color: white;
  font-size: 22px;
  padding: 8px 15px;
  border: none;
  cursor: pointer;
  border-radius: 30px;
}

#articles .container .card .like:hover {
  background-color: darkred;
}

#articles .container .card h4 {
  color: darkred;
}

#articles .container .card p {
  color: rgb(51, 58, 65);
  margin-bottom: 25px;
}

#articles .card .card-btn {
  padding: 5px 40px 5px 40px;
  border-radius: 5px;
  border-color: rgb(51, 58, 65);
  color: white;
  background-color: rgb(51, 58, 65);
}

#articles .card .card-btn:hover {
  color: darkorange;
  transition: color 0.5s;
}

#articles .card .btn-cont {
  text-align: center;
}
#sub-header {
  background-image: url(image/1.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  height: 400px;
}

#sub-header .container {
  width: 55%;
  margin-right: 40px;
  padding: 20px 35px 40px 40px;
}

#sub-header .container h3 {
  color: white;
  line-height: 1.4em;
  margin-top: 70px;
  margin-bottom: 20px;
  text-align: center;
}
#articles{
    margin-bottom: 80px;
}
#call-us {
  background-image: url(../imgs/call.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  height: 500px;
}

#call-us .layer {
  background-color: rgba(5, 5, 5, 0.562);
  height: 500px;
}

#call-us h1 {
  text-align: center;
  color: white;
  padding: 90px 0px 30px 0px;
}

#call-us h4 {
  text-align: center;
  color: white;
  margin: 0px 0px 30px 0px;
}

#call-us h3 {
  text-align: center;
  color: white;
  margin: 10px 0px 30px 60px;
  padding: 20px 10px 20px 0px;
  border-radius: 50px;
  width: 30%;
  background-color: green;
}

#call-us .whats {
  text-align: center;
  margin-top: 50px;
}

#call-us .whats img {
  display: inline-block;
  position: absolute;
}

#call-us .whats h3 {
  display: inline-block;
}
#call-us{
    margin-bottom: 40px;
}
    </style>

</head>
<?php $title="Bloodbank | home page"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>

 

  <section id="sub-header">
        <div class="container">
            <h3>A SINGLE PINT CAN SAVE THREE LIVES, A SINGLE GESTURE CAN CREATE A MILLION SMILES.</h3>
        </div>
    </section>


            <section id="articles">
                <div class="container">
                    <h2 style="display: inline-block;">Articles</h2>
                    <div class="swiper-container">
                        <div class="button-area" style="display: inline-block; margin-left: 850px;">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </button>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="image/p3.jpg" alt="Card image">
                                        <button class="like"><i class="fas fa-heart icon-large"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Blood Types</h4>
                                        <p class="card-text">There are 4 main blood groups (types of blood) – A, B, AB and O. Your blood group is determined by the genes you inherit from your parents. Each group can be either RhD positive or RhD negative, which means in total there are 8 blood groups.</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="image/p4.jpg" alt="Card image">
                                        <button class="like"><i class="fas fa-heart icon-large"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Donations Benefits</h4>
                                        <p class="card-text">Giving blood can reveal potential health problems.
                                                             Giving blood can reduce harmful iron stores.
                                                             Giving blood may lower your risk of suffering a heart attack.
                                                             Giving blood may reduce your risk of developing cancer.
                                                             Giving blood can help your liver stay healthy.</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img-top" style="position: relative;">
                                        <img src="image/p5.jpg" alt="Card image">
                                        <button class="like"><i class="fas fa-heart icon-large"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">How To Donate?</h4>
                                        <p class="card-text">Medical Check up (5 Mins) Donors Medical History & life style is asked, check up of temperature, blood pressure, pulse and haemoglobin.
                                         Donation (8 Mins) Phlebotomist draws unit (350ml/450ml) of blood.
                                         Refreshment (10 Mins)</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         

        </div>
    </section>

     <section id="call-us">
        <div class="layer">
            <div class="container">
                <h1>Call Us</h1>
                <h4>You can call us for your inquiries about any information.</h4>
                <div class="whats">
                    <img src="image/whats.png" alt="">
                    <h3>+8888877777</h3>
                </div>
            </div>
        </div>
    </section>
   


    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- Article End -->

    <?php require 'footer.php'; ?>

</body>
</html>