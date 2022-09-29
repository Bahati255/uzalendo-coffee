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
<<<<<<< HEAD
<?php include "header.php"?>
=======
	<?php include "header.php"?>
<!--http://mrwallpapers.com/wp-content/uploads/2018/10/wall-leaves-wooden-background-images-hd.jpg-->
<div>
<div class="form" id="login">
	<div class="box">
	<h3>LOGIN</h3>
	<div class="social-container">
		<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	</div>
	<div>
		<?php
			function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			if(isset($_POST['login']))
			{
				session_start();
				$username=$password="";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$username = test_input($_POST['Username']);
					$password = test_input($_POST['Password']);
					//echo $username,"<br>";
					//echo $password;
>>>>>>> ee1369a2bdbde68ae8cd8baf528dcfac15644954


<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom ">
        <div class="container py-5 ">
            <h1 class="display-3 text-primary mt-3 ">Welcome Back</h1>
            <h1 class="text-white mb-3 ">Log in to enjoy Special Offers and Discounts</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3 ">Only for registered members </h4>
            <form class="" action="" method="post">
			
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
				<button type="submit" id="form-submit" name="submit" class="btn btn-dark">
					LOG IN!
				</button>
				
				
				

				
			</div>
		</form>
        </div>
    </div>
    <?php include "footer.php"?>
    
</body>
</html>