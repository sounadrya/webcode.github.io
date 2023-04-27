<?php include 'connect.php' ?>
<?php

session_start();
if (isset($_POST['login'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];
    $q ="SELECT * FROM `adminlog` WHERE `username` ='$username' AND  `password` = '$password'";
    // $q ="SELECT * FROM `login` WHERE `username`='$username' AND `password` ='$password'"; 
    $result =$conn->query($q);
    if ($result->num_rows > 0){
        echo "<script>location='add-product.php'</script>";
		$_SESSION['username'] = $username;
	} else {
		echo "<script>alert('you have entered incorrect password')</script>";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <!-- <div class="container-fluid"  -->
        <div class="animate form login_form">
          <section class="login_content">
            <form method ="POST">
              <h1 style="color: midnightblue; text-shadow: darkslateblue;"><b>Login Form</b></h1>
              <div>
              <label style="color: midnightblue;"><b>User name</b></label>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
              <label style="color: midnightblue;"><b>Password</b></label>
                <input type="password" name="password" class="form-control" placeholder="****" required="" />
              </div>
              <div>
                <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                <button type="submit" class="btn btn-primary btn-lg btn-block"  value="login" name="login">Sign In</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="clearfix"></div>
                <br/>

                
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>




