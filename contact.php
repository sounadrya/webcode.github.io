<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>WebCreintors - Potential Made Real</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/fontawesome-all.min.css" rel="stylesheet">    
    <link href="./css/aos.min.css" rel="stylesheet">
    <link href="./css/swiper.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.png">
</head>
<body>
    
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation"> 
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="../mirko/assets/images/LOGO 1 (2).png" alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!--<a class="navbar-brand logo-text" href="index.html">WebCreintors</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
					<a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">Company</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.html">Abount Us</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="terms.html">History</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="privacy.html">Careers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#plans">MLM Plans</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#blogs">Blogs</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->



    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>CONTACT</p>
                            <h2 class="py-2">Send your query</h2>
                            <p class="para-light">Write a query to our WebCreintors.</p>
                        </div>
                        <div>
                            <form method="post">
                            <div class="row" >
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="exampleFormControlInput1" name="name" placeholder="Enter name">
                                    </div>                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="exampleFormControlInput2"  name="phone_number"  placeholder="Enter phone number">
                                    </div>                                 
                                </div>
                            </div>
                            <div class="form-group py-1">
                                <input type="text" class="form-control form-control-input" id="exampleFormControlInput3"  name="email"   placeholder="Enter email">
                            </div>  
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="exampleFormControlTextarea1"  name="message" rows="6" placeholder="Message"></textarea>
                            </div>                            
                        </div>
                        <div class="my-3">
                            <!-- <a class="btn form-control-submit-button" name="submit" href="#your-link">Submit</a> -->
                            <button type="submit" name="submit" class="btn form-control-submit-button">Submit</button>
                        </div>
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
            </form>
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <img class="img-fluid d-none d-lg-block" src="./assets/images/contact.jpg" alt="contact">        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of contact -->

     <!-- Scripts -->
     <script src="./js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="./js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="./js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="./js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="./js/script.js"></script>  <!-- Custom scripts -->


</body>
</html>





<?php include 'connect.php' ?>
<?php
 
$id='';
$name= '';
$phone_number ='';
$email ='';
$message='';

// if(isset($_GET['id'])){
//   $id=$_GET['id'];
//   $query="SELECT * FROM `contact` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";

//    $res=$conn->query($query);
//    $row= $res->fetch_assoc();
//    $name= $row['name'];
//    $phone_number= $row['phone_number'];
//     $email= $row['email'];
//     $message= $row['message'];
// }

if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $phone_number= $_POST['phone_number'];
  $email= $_POST['email'];
  $message= $_POST['message'];

// if($id > 0){
//   $sql="UPDATE `contact` SET `id`='',`name`='$name',`phone_number`='$phone_number',`email`='$email',`message`='$message' WHERE 'id'= $id ";
// }

// else{
 $sql=" INSERT INTO `contact`(`id`, `name`, `phone_number`, `email`, `message`) VALUES ('','$name','$phone_number','$email','$message')";
// }

$result=$conn->query($sql);

if ($result == TRUE) {
  echo "<script> alert('New record created successfully') </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// $conn->close();
?>

