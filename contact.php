<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style type="text/css">
#contact{
    margin-top: 40px;
}
  #contact .container img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
  margin-bottom: 30px;
  width: 60%;
}

#contact .container .call{
  border: 1px solid lightgray;
  border-radius: 5px;
  padding-left: 0;
  padding-right: 0;
  margin: 0px 30px 40px 45px; 
  box-shadow: 2px 2px 5px 5px #e7e6e6;
}

#contact .container .info{
  border: 1px solid lightgray;
  border-radius: 5px;
  padding-left: 0;
  padding-right: 0;
  padding-bottom: 30px;
  margin: 0px 0px 40px 0px; 
  box-shadow: 2px 2px 5px 5px #e7e6e6;
}

#contact .container .col-md-6{
  max-width: 45%;
}

#contact .container .call hr{
  margin-bottom: 40px;
  margin-top: 40px;
}

#contact .container .call h4{
  padding-left: 20px;
  padding-bottom: 10px;
}

#contact .container .call h3{
  margin: 40px 0px 30px 0px;
  text-align: center;
  color: darkred;
}

#contact .container .call .icons{
  text-align: center;
}

#contact .container .call .icons .fab{
  padding: 0px 15px 0px 15px;
}

#contact .container .call .icons i:hover{
  transform: translate(0,-10px);
  -webkit-transform: translate(0,-10px);
  -o-transform: translate(0,-10px); 
  -moz-transform: translate(0,-10px);
  transition-delay: 0.1s;
  transition-duration: 0.5s;
}

#contact .container .call .fa-facebook-square{
  color: darkblue;
}

#contact .container .call .fa-whatsapp-square{
  color: darkgreen;
}
#contact .container .call .fa-twitter-square{
  color: blue;
}
#contact .container .call .fa-youtube-square{
  color: darkred;
}
#contact .container .call .fa-google-plus-square{
  color: orangered;
}

#contact .container .title{
  text-align: center;
  background-color: darkred;
  color: white;
  padding-top: 12px;
  border-top-right-radius: 5px;
  border-top-Left-radius: 5px;
  font-size: 28px;
  height: 70px;
}

#contact .container form input{
  width: 85%;
  font-size: 20px;
  height: 50px;
  margin: 20px 0px 0px 0px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border: 1px solid lightgray;
  padding-left: 10px;
  border-radius: 5px;
}

#contact .container form textarea{
  width: 85%;
  font-size: 20px;
  margin: 20px 0px 0px 0px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border: 1px solid lightgray;
  padding-left: 10px;
  border-radius: 5px;
  resize: none;
}

#contact .container form button{
  font-size: 20px;
  border-radius: 10px;
  padding: 10px 40px 10px 40px; 
  margin-top: 5px;
  background-color: darkred;
  color: white;
}

#contact .container form button:hover{
  background-color: rgba(9, 0, 29, 0.781);
  color: white;
}

#contact .container form .reg-group{
  text-align: center;
  margin-top: 30px;
}
    </style>
    <title>Contact Us</title>
</head>

<body>

 <?php require 'header.php'; ?>

    <!-- login Start -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 call">
                    <div class="title">Head</div>
                    <img src="image/favicon.png" alt="">
                    <hr>
                    <h4>Mobile: +20 127 245 6884</h3>
                        <h4>Fax: +2 455 6646</h3>
                            <h4>Email: 
                            FriendSupport@gmail.com</h3>
                                <hr>
                                <h3>Find Us On</h3>
                                <div class="icons">
                                    <i class="fab fa-facebook-square fa-3x"></i>
                                    <i class="fab fa-google-plus-square fa-3x"></i>
                                    <i class="fab fa-twitter-square fa-3x"></i>
                                    <i class="fab fa-whatsapp-square fa-3x"></i>
                                    <i class="fab fa-youtube-square fa-3x"></i>
                                </div>
                </div>
                <div class="col-md-6 info">
                    <div class="title">Head</div>
                    <form action="submit">
                        <input type="text" name="name" id="" placeholder="Name" required="">
                        <input type="email" name="name" id="" placeholder="Email" required="">
                        <input type="number" name="name" id="" placeholder="Phone" required="">
                        <input type="text" name="title" id="" placeholder="Title" required="">
                        <textarea name="message" id="" cols="10" rows="5" placeholder="Message"></textarea>
                        <div class="reg-group">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- login End -->

   <?php require 'footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>