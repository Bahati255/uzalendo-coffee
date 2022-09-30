<?php
    session_start();
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: index.php");
    }

    if (isset($_POST["submit"])) {
        include 'config.php';

        $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
        $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);

        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]);
        $county = mysqli_real_escape_string($conn, $_POST["county"]);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
        $confirmpassword = mysqli_real_escape_string($conn, md5($_POST["confirmpassword"]));
      

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM signup WHERE email='{$email}'")) > 0) {
            echo "<script>alert('{$email} - email has already taken.');</script>";
        }
        
        else {
            if ($password === $confirmpassword) {
                $sql = "INSERT INTO signup (firstname,lastname,email,phonenumber,county,password) VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$phone}', '{$county}','{$password}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {

                     //echo success then redirect

                     echo "<script>alert('Success account created.');</script>";

                    //if result is successfull navigate to dashboard page
                    header("Location: login.php");

                }else {
                    echo "<script>Error: ".$sql.mysqli_error($conn)."</script>";
                }
            }else {
                echo "<script>alert('Password and confirm password do not match.');</script>";
            }
        }
    }
?>

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
    <?php include "header.php"?>
</head>
<body>



<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom ">
        <div class="container py-5 ">

            <h1 class="display-3 text-primary mt-3 ">50% OFF</h1>
            <h1 class="text-white mb-3 ">Sign in online today to enjoy Special Offer</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3 ">Only for new members </h4>
           
			
			<form class="" action="config.php" method="post">
			<div class="form-group">
				<label for="firstname"></label>
				<input class="form-control" type="text" name="firstname"
					id="firstname" placeholder="Enter your first Name">
			</div>
      <div class="form-group">
				<label for="lastname"></label>
				<input class="form-control" type="text" name="lastname"
					id="lastname" placeholder="Enter your last Name">
			
			</div>

      <div class="form-group">
				<label for="email"></label>
				<input class="form-control" type="email" name="email"
					id="email" placeholder="Enter your email address">
			</div>

      <div class="form-group">
				<label for="phonenumber"></label>
				<input class="form-control" type="text" name="phonenumber"
					id="phonenumber" placeholder="Enter your phone number">
			</div>

			<div class="form-group">
				<label for="county"></label>
				<input class="form-control" type="text" name="county"
					id="county" placeholder="County">
			</div>

			<div class="form-group">
				<label for="password"></label>
				<input class="form-control" type="password" name="userpassword"
					id="userpassword" placeholder="Enter your password">
			</div>

      <div class="form-group">
				<label for="confirmpassword"></label>
				<input class="form-control" type="password" name="confirmpassword"
					id="confirmpassword" placeholder="Confirm your password">
			</div>

			<div class="container">
				<button type="submit" id="form-submit" name="submit" class="btn btn-dark">
					Register
				</button>
				
				<div class="container">
				<a href="login.php" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2"> Already a member? LOG IN!</a>
				
				

				
			</div>
		</form>
        
    </div>
    </div>
    <?php include "footer.php"?>
    
</body>
</html>