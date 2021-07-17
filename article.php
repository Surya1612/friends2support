<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
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

#article .container .head-img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
  margin-bottom: 30px;
  width: 60%;
  border: 10px solid rgb(226, 226, 226);
}


#article .container .details-container{
  border: 1px solid lightgray;
  padding-bottom: 30px;
}

#article .container .details-container p{
  margin: 30px 30px 20px 30px;
  font-size: 20px;
}

#article .container .details-container a{
  font-size: 20px;
  padding-left: 30px;
}

#article .container .icons {
  padding: 10px 0px 0px 30px;
}

#article .container .icons .fab{
  padding: 0px 15px 0px 0px;
}

#article .container .icons i:hover{
  transform: translate(0,-10px);
  -webkit-transform: translate(0,-10px);
  -o-transform: translate(0,-10px); 
  -moz-transform: translate(0,-10px);
  transition-delay: 0.1s;
  transition-duration: 0.5s;
}

#article .container .fa-facebook-square{
  color: darkblue;
}

#article .container .fa-whatsapp-square{
  color: darkgreen;
}

#article .container .fa-twitter-square{
  color: blue;
}

#article .container .fa-youtube-square{
  color: darkred;
}

#article .container .fa-google-plus-square{
  color: orangered;
}

#article .container .details-container .title{
  text-align: center;
  background-color: darkred;
  color: white;
  padding-top: 12px;
  border-top-right-radius: 5px;
  border-top-Left-radius: 5px;
  font-size: 28px;
  height: 70px;
}

#article #articles{
  margin-bottom: 90px;
}


</style>
    <title>Article</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-dark sticky-top" style="color: black;">
    <div class="container">
        <a class="navbar-brand" href="index.php" style="
    text-shadow: 1px 1px 2px red, 0 0 50px black, 0 0 5px white;
    font-weight: bold;
    font-size: 1.5em;
">Friends2support</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="bloodinfo.php">Add blood info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="bloodrequest.php">Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><img src="image/hospital.png" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['hname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="sentrequest.php">Sent Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="abs.php" style="color:white;"> Available blood samples</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="register.php" style="color:white;">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="login.php" style="color:white;">Login</a>
            </li>
             <li class="nav-item">
                <a class="nav-link btn btn-dark" href="contact.php" style="color:white;">Contact</a>
            </li>
        </ul>

        <?php } ?>
       </div>
    </div>
</nav>
    
    <!-- article Start -->
    <section id="article">
        <div class="container">
            <img class="head-img" src="image/p4.jpg" alt="">
            <div class="details-container">
                <div class="title" style="font-weight: bolder;font-size: xx-large;">Donations Benefits</div>
                <p>In patients prone to iron overload, blood donation prevents the accumulation of toxic quantities.Donating blood may reduce the risk of heart disease for men, but the link has not been firmly established and may be from selection bias because donors are screened for health problems.<br><br>

                 Regular donors are often given some sort of non-monetary recognition. Time off from work is a common benefit.For example, in Italy, blood donors receive the donation day as a paid holiday from work.Blood centers will also sometimes add incentives such as assurances that donors would have priority during shortages, free T-shirts, first aid kits, windshield scrapers, pens, and similar trinkets. There are also incentives for the people who recruit potential donors, such as prize drawings for donors and rewards for organizers of successful drives.Recognition of dedicated donors is common. <br><br>For example, the Singapore Red Cross Society presents awards for voluntary donors who have made a certain number of donations under the Blood Donor Recruitment Programme starting with a "bronze award" for 25 donations. The government of Malaysia also offers free outpatient and hospitalization benefits for blood donors, for example, 4 months of free outpatient treatment and hospitalization benefits after every donation.In Poland, after donating a specific amount of blood (18 litres for men and 15 for women), a person is gifted with the title of "Distinguished Honorary Blood Donor" as well as a medal. In addition, a popular privilege in larger Polish cities is the right to free use of public transport, but the conditions for obtaining a privilege may vary depending on the city. During the COVID-19 pandemic, many US blood centers advertised free COVID-19 antibody testing as an incentive to donate, however these antibody tests were also useful for blood centers in determining which donors could be flagged for convalescent plasma donations.
                </p>
                <strong><a>Share this article:</a></strong>
                     <div class="icons">
                    <i class="fab fa-facebook-square fa-3x"></i>
                    <i class="fab fa-google-plus-square fa-3x"></i>
                    <i class="fab fa-twitter-square fa-3x"></i>
                </div>

            </div>
<!-- Articles Start -->
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
            <!-- Articles End -->


        </div>
    </section>
    <!-- Article End -->
 <?php require 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>