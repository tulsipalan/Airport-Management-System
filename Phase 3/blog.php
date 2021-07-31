<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>CSIA </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/jquery.fancybox.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper-main">
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="social-media">
						<ul>
							<li><a href="https://www.facebook.com/CSMIAOfficial/?epa=SEARCH_BOX" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/CSMIA_Official" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/user/CSIAMumbai" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/company/mumbaiinternationalairportlimitedcsmia/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="https://www.instagram.com/csmia_official/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-details">
						<ul>
							<li><i class="fas fa-phone fa-rotate-90"></i> +022 66851010</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
		<div class="container">
			<a class="navbar-brand" href="home.php">
				<img src="logo_csia.png" alt="logo" />
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">Airlines</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="services.php?SSN=0">Employee</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Flight <i class="fas fa-sort-down"></i></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
							<a class="dropdown-item" href="faq.php">Arrival</a>
							<a class="dropdown-item" href="404.php">Departure</a>
							<a class="dropdown-item" href="pricing.php?id=0">By Airline</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="portfolio-3-col.php?tn=0" >Ticket</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Passenger <i class="fas fa-sort-down"></i></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
							<a class="dropdown-item" href="blog.php?PID=0">PID</a>
							<a class="dropdown-item" href="blog-post.php?PN=0">Passport Number</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">PID</h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="home.php">Home</a>
					</li>
					<li class="breadcrumb-item active">PID</li>
				</ol>
			</div>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<!-- Image Header -->
		<form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
				<div class="controls">
   					<input type="text" placeholder="Enter PID Number" class="form-control" id="name" name='PID' required data-validation-required-message="Please enter PID.">
        			<p class="help-block"></p>
   				</div>
 			</div>
            <div class="control-group form-group"></div>
 			<div id="success"></div>
 			<!-- For success/fail messages -->
            <center><button type="submit" class="btn btn-primary" id="sendMessageButton">Enter Here To Get Details</button></center>
 		</form>
        <?php
             $servername = "localhost";
             $username = "Nisarg";
             $password = "Nisarg_14";
             $dbname = "airport";
             $connection = mysqli_connect($servername, $username, $password, $dbname);
             if (isset($_GET['PID'])) {
                $pid=$_GET['PID'];
                settype($pid,'integer');
                $sql="SELECT passportno from passenger1 where pid=$pid";
                $result=$connection-> query($sql)or die ("DBMS not connected");
                $row1=$result->fetch_assoc();
                if($pid!=0){
                    $sql_fn="SELECT passportno,fname,m,lname,address,phone,sex,age from passenger2 where passportno = '".$row1['passportno']."'";
                }
                else{
                    $sql_fn="SELECT passportno,fname,m,lname,address,phone,sex,age from passenger2 where passportno ='0' ";
                }
             }
        ?>
	</div>
	<div class="services-bar">
		<div class="container">
			<h1 class="py-4">Here Is The Details </h1>
			<!-- Services Section -->
			<div class="row">
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-06.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Passport Number</h4>
							<p class="card-text">
                                <?php
    							    $result_fn=$connection->query($sql_fn);
                                    if (isset($_GET['PID'])){
                                        if (mysqli_num_rows($result_fn) > 0) {
                                            while($row = $result_fn->fetch_assoc()) {
                                                 echo "<h5>". $row['passportno']. "</h5>";
                                            }
                                        }
                                    }
                                    else {
                                         echo "No Data Found.";
                                    }
    						    ?>
							</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="name.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Full Name </h4>
							<p class="card-text">
							    <?php
							        $result_fn=$connection->query($sql_fn);
                                    if (isset($_GET['PID'])){
                                        if (mysqli_num_rows($result_fn) > 0) {
                                            while($row = $result_fn->fetch_assoc()) {
                                                 echo "<h5>". $row['fname']. " ". $row['m']. " " . $row["lname"] . "</h5>";
                                            }
                                        }
                                    }
                                    else {
                                        echo "No Data Found.";
                                    }
							    ?>
							</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="address.png" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Address </h4>
							<p class="card-text">
	                            <?php
                                    $result_fn=$connection->query($sql_fn);
                                    if (isset($_GET['PID']) ){
                                        if(mysqli_num_rows($result_fn)>0){
                                            while($row=$result_fn->fetch_assoc()){
                                                echo "<h5>".$row['address']."</h5>";
                                            }
                                        }
                                    }
                                    else {
                                         echo "No Data Found.";
                                    }
    						    ?>
							</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="phone.png" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Phone Number </h4>
							<p class="card-text">
                                <?php
    							    $result_fn=$connection->query($sql_fn);
                                    if (isset($_GET['PID'])){
                                        if (mysqli_num_rows($result_fn) > 0) {
                                            while($row = $result_fn->fetch_assoc()) {
                                                echo "<h5>". $row['phone']. "</h5>";
                                            }
                                        }
                                    }
                                    else {
                                         echo "No Data Found.";
                                    }
    						    ?>
							</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="age.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Age </h4>
							<p class="card-text">
                                <?php
    							    $result_fn=$connection->query($sql_fn);
                                    if (isset($_GET['PID']) ){
                                        if (mysqli_num_rows($result_fn) > 0) {
                                            while($row = $result_fn->fetch_assoc()) {
                                                if ($row['sex']=='F'){
                                                    echo "<h5>". $row['age']. " </h5>";
                                                }
                                                else{
                                                    echo "<h5>". $row['age']. " </h5>";
                                                }
                                            }
                                        }
                                    }
                                    else {
                                         echo "No Data Found.";
                                    }
    						    ?>
							</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="type.png" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> GENDER </h4>
							<p class="card-text">
                                <?php
    							    $result_fn=$connection->query($sql_fn);
                                    if (isset($_GET['PID']) ){
                                        if (mysqli_num_rows($result_fn) > 0) {
                                            while($row = $result_fn->fetch_assoc()) {
                                                if ($row['sex']=='F'){
                                                    echo "<h5>FEMALE</h5>";
                                                }
                                                else{
                                                    echo "<h5>MALE</h5>";
                                                }
                                            }
                                        }
                                    }
                                    $connection->close();
    							?>
							</p>
						</div>
					</div>
			   </div>
			</div>
			<!-- /.row -->
		</div>
	</div>

    <div class="container">
    		<!-- Image Header -->
    		<form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
    				<div class="controls">
                        <center><a class='btn btn-lg btn-secondary btn-button' href='blog.php?PID=0'>Clear Data</a></center>
    				</div>
    			</div>
    		</form>
    </div>


	<div class="customers-box">
		<div class="container">
			<!-- Our Customers -->
			<h2>Our Airlines</h2>
			<div class="row">
				<div class="col-lg-12">
					<div id="customers-slider" class="owl-carousel">
						<div class="mb-4">
							<img class="img-fluid" src="airline1.jpg" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="airline2.jpeg" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="airline3.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="airline4.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="airline5.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="airline6.png" alt="" />
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>

	<!-- Contact Us -->
	<div class="touch-line">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Click There To In Touch </h2>
					<p>If you want to connect to Chhatrapati Shivaji Maharaj International Airport Head Authority...</p>
				</div>
				<div class="col-md-4">
					<a class="btn btn-lg btn-secondary btn-block" href="contact.php"> Contact Us </a>
				</div>
			</div>
		</div>
	</div>

	<!-- /.container -->
	<!--footer starts from here-->
	<footer class="footer">
		<div class="container bottom_border">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow CSIA On Different Platform</h5>
					<!--headin5_amrc-->
					<p class="mb10"></p>
					<ul class="footer-social">
						<li><a class="facebook hb-xs-margin" href="https://www.facebook.com/CSMIAOfficial/?epa=SEARCH_BOX" target="_blank"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
						<li><a class="twitter hb-xs-margin" href="https://twitter.com/CSMIA_Official" target="_blank"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
						<li><a class="googleplus hb-xs-margin" href="https://www.youtube.com/user/CSIAMumbai" target="_blank"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-youtube"></i></span></a></li>
						<li><a class="dribbble hb-xs-margin" href="https://www.linkedin.com/company/mumbaiinternationalairportlimitedcsmia/" target="_blank"><span class="hb hb-xs spin hb-dribbble"><i class="fab fa-linkedin-in"></i></span></a></li>
						<li><a class="instagram hb-xs-margin" href="https://www.instagram.com/csmia_official/" target="_blank"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6"><!--footer_ul_amrc ends here--></div>
				<div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow Our Team Member On Instagram</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="https://www.instagram.com/niket_kothari3?r=nametag" target="_blank"><i class="fab fa-instagram fleft padding-right"></i> </a>
							<a href="https://www.instagram.com/niket_kothari3?r=nametag" target="_blank"><p>Niket Kothari <br>(18BCE134)</p></a>
						</li>
						<a>
							<a href="https://www.instagram.com/nisarg.143?r=nametag" target="_blank"><i class="fab fa-instagram fleft padding-right"></i> </a>
							<a href="https://www.instagram.com/nisarg.143?r=nametag" target="_blank"><p>Nisarg Patel <br>&nbsp;&nbsp;&nbsp;&nbsp;(18BCE136)</p></a>
							</li>
							<li>
								<a href="https://www.instagram.com/tulsi_palan?r=nametag" target="_blank"><i class="fab fa-instagram fleft padding-right"></i> </a>
								<a href="https://www.instagram.com/tulsi_palan?r=nametag" target="_blank"><p>Tulsi Palan  <br>(18BCE141)</p></a>
							</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 "></div>
			</div>
		</div>
		<div class="container">
			<p class="copyright text-center">All Rights Reserved. &copy; 2020 TEAM OF NTN Design By : NTN DEVELOPERS</p>
		</div>
	</footer>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
