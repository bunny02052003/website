<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

  

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="stylesheet" href="style.css">
   <style>
.Home{
	width:100%;
	min-height: 100vh;
	display:flex;
	background-image: url('1.png');
    background-position: center;
	background-repeat:no-repeat;
    background-size: 100%;	
	background-color:#181818 ;
}
.boxx{
	margin: auto;
	padding: 20px;
	height: 325px;
	width:800px;
	align-items: center;
	border-radius:20px;
	background-color: rgba(	000, 0, 0, 0.7);	
}
.find{
	font-size:20px;
	color: skyblue;
	text-align: center;
	letter-spacing: 1px;
	margin-top: 30px;
}
.info{
	 text-align: center;
	 font-size: 45px;
	 padding-left: 15px;
	 color: white;
     font-family: Arial, sans-serif;
     font-weight: bold;
	 letter-spacing: 1px;
	 margin-top: 35px;
	 margin-bottom: 40px;
}
#explore{
	text-decoration: none;
	color:white;
	transition: 1s;
    }
#explore:hover{
	color: skyblue;	
	text-transform: uppercase;
}
.explore{
	height:35px;
	width: 100px;
	padding:5px;
	padding-left:25px;
	margin:auto;
	font-weight: bold;
	background-color: skyblue;
	border-radius:5px;
	letter-spacing: 1px;
}
.explore:hover{
background-color: white;
letter-spacing: 3px;
width: 110px;
}
#loginn{
	display: flex;
    justify-content: center;
    min-height: 100vh;
	background-image: url('133.png');
   }

</style>

</head>
<body>
 <section id="home" class="Home">
<div class="boxx">
<h5 class="find"><i>FIND THE BEST</i></h5>
<p class="info">Innovative  Constructions <br>For The Future Era of Living</p>
<div class="explore">
<a href="#loginn" id="explore">login<a>
</div>
</div>
</section>
<section id="loginn">
<div class="form-container">

   <form action="login.php" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>
</section>
</body>
</html>