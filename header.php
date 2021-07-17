<nav class="navbar navbar-expand-sm navbar-light bg-dark sticky-top">
	<div class="container">
		<a class="navbar-brand" href="index.php" style="color: whitesmoke;">Friends2support</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link btn btn-dark" href="bloodinfo.php" style="color: white;">Add blood info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="bloodrequest.php" style="color: white;">Blood Request</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn btn-dark" href="abs.php" style="color: white;">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><img src="image/hospital.png" width="15" height="15" class="rounded-circle"><mark style="background-color:#3b3d40;color: white;"><?php echo $_SESSION['hname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php" style="background-color: red;color: white;">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="sentrequest.php" style="color: white;">Sent Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="abs.php" style="color: white;"style="color: white;">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark style="background-color:#3b3d40;color: white;"><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
           <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php" style="background-color: red;color: white;">Logout</a>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link btn btn-dark" href="login.php" style="color: white;">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="register.php" style="color: white;">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark" href="abs.php" style="color: white;">Available blood samples</a>
            </li>
            
          
        </ul>

        <?php } ?>
       </div>
    </div>
</nav>