<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>UZALENDO COFFEE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>
<body>
<?php include "header.php"?>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else 
?>



<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom ">
        <div class="container py-5 ">
            <h1 class="display-3 text-primary mt-3 ">Welcome Back</h1>
            <h1 class="text-white mb-3 ">Log in to enjoy Special Offers and Discounts</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3 ">Only for registered members </h4>
            
            <form class="" action="" method="post" autocomplete="off">
			
      <div class="form-group">
				<label for="email"></label>
				<input class="form-control" type="email" name="email"
					id="email" placeholder="Enter your email address">
			</div>
      
			<div class="form-group">
				<label for="password"></label>
				<input class="form-control" type="password" name="userpassword"
					id="userpassword" placeholder="Enter your password">
			</div>
      

		   <div class="container">
				<button type="submit" id="form-submit" name="login" class="btn btn-dark">
					LOG IN!
				</button>
				
				
				

				
			</div>
		</form>
        </div>
    </div>
    <?php include "footer.php"?>
    
</body>
</html>