<!DOCTYPE .php>
<!php lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> CSIA </title>
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
			<h1 class="mt-4 mb-3">Departure</h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="home.php">Home</a>
					</li>
					<li class="breadcrumb-item active">Departure</li>
				</ol>
			</div>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="pricing-box">
		<!-- Content Row -->
			<h2><u><center>Departure Flights</center></u></h2>
			<h4><center>
			    <?php
                    $servername = "localhost";
                    $username = "Nisarg";
                    $password = "Nisarg_14";
                    $dbname = "airport";
                    $connection = mysqli_connect($servername, $username, $password, $dbname);
			        date_default_timezone_set("Asia/Kolkata");
			        $tm=date("H:i:s");
			        echo date("d/m/Y")." ".date("H:i:s");
			        $sql = "SELECT departure,airlineid,arrival,source,destination FROM flight ORDER BY departure";
                    $result =$connection-> query($sql) ;
			    ?>
			 </center></h4>
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="card  ">
						<div class="card-header">
							<h3 class="">Airlines ID</h3>
						</div>
						<ul class="list-group list-group-flush"><center><h6>
						<?php
						    $result =$connection-> query($sql) ;
                            if(mysqli_num_rows($result) > 0){
                                while($row = $result->fetch_assoc()) {
                                    if($tm<$row['departure'] and $row['source']=='BOM'){
                                        echo "<li>".$row['airlineid']."</li><hr>";
                                    }
                                }
                            }
                            else{
                                echo "<li class='list-group-item'>No Record Found.</li>";
                            }
						?>
						</h6></center></ul>
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="card ">
						<div class="card-header">
							<h3 class="">Flight Detail</h3>
						</div>
						<ul class="list-group list-group-flush"><center><h6>
						<?php
						    $result =$connection-> query($sql) ;
                            if(mysqli_num_rows($result) > 0){
                                while($row = $result->fetch_assoc()) {
                                    $sql1="SELECT al_name from airline where airlineid='".$row['airlineid']."'";
                                    $result1=$connection-> query($sql1);
                                    $row1=$result1->fetch_assoc();
                                    if($tm<$row['departure'] and $row['source']=='BOM'){
                                        echo "<li>".$row['source']." TO ".$row['destination']."</li><hr>";
                                    }
                                }
                            }
                            else{
                                echo "<li class='list-group-item'>No Record Found.</li>";
                            }
						?>
						</h6></center></ul>
					</div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="card ">
						<div class="card-header">
							<h3 class="">Departure Time</h3>
						</div>
						<ul class="list-group list-group-flush"><center><h6>
						<?php
						    $result =$connection-> query($sql) ;
                            if(mysqli_num_rows($result) > 0){
                                while($row = $result->fetch_assoc()) {
                                    if($tm<$row['departure'] and $row['source']=='BOM'){
                                        echo "<li>".$row['departure']."</li><hr>";
                                    }
                                }
                            }
                            else{
                                echo "<li class='list-group-item'>No Record Found.</li>";
                            }
						?>
						</h6></center></ul>
					</div>
				</div>
			</div>
		<!-- /.row -->
		</div>
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
<script src="js/script.js"></script>
</body>
</.php>
