<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> CSIA</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400'>
    <link rel="stylesheet" href="css/style1.css">
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
			<h1 class="mt-4 mb-3"> Ticket Number </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="home.php">Home</a>
					</li>
					<li class="breadcrumb-item active">Ticket Number</li>
				</ol>
			</div>
		</div>
	</div>

    <div class="container">
		<!-- Image Header -->
		<form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
				<div class="controls">
   					<input type="text" placeholder="Enter Ticket Number" class="form-control" id="name" name='tn' required data-validation-required-message="Please Enter Ticket number.">
        			<p class="help-block"></p>
   				</div>
 			</div>
            <div class="control-group form-group"></div>
 			<div id="success"></div>
 			<!-- For success/fail messages -->
            <center><button type="submit" class="btn btn-primary" id="sendMessageButton">Enter Here To Get Details</button></center>
 		</form>
 	</div>
    <div>
        <?php
             $servername = "localhost";
             $username = "Nisarg";
             $password = "Nisarg_14";
             $dbname = "airport";
             $connection = mysqli_connect($servername, $username, $password, $dbname);
             $tn=$_GET['tn'];
             $text=substr($tn,0,11);
             $arrival="";
             $departure="";
             $duration="";
             $flight_code="";
             settype($tn,'integer');
             $sql="SELECT ticket_number,source,destination,seatno,class,passportno,date_of_travel,pid from ticket1 where ticket_number=$tn";
             $result=$connection-> query($sql);
             if(mysqli_num_rows($result)==0){
                echo "<br><br><br><br><br><center>SORRY....WRONG NUMBER<br><br>ENTER PROPER NUMBER<br>(eg.->1001234111122)</center><br><br><br><br><br>";
                $connection->close();
                goto abc;
             }
             $row=$result->fetch_assoc();
             $sql1="SELECT fname,m,lname from passenger2 where passportno='".$row['passportno']."'";
             $sql_temp="SELECT flight_code from passenger3 where pid=".$row['pid']."";
             $result_temp=$connection-> query($sql_temp);
             while($row_temp=$result_temp->fetch_assoc()){
                $sql_tp="SELECT source,destination,arrival,departure,duration,flight_code from flight where flight_code='".$row_temp['flight_code']."'";
                $result_tp=$connection-> query($sql_tp);
                $row_tp=$result_tp->fetch_assoc();
                if ($row['source']==$row_tp['source'] and $row['destination']==$row_tp['destination'] ){
                    $arrival=$row_tp['arrival'];
                    $departure=$row_tp['departure'];
                    $duration=$row_tp['duration'];
                    $flight_code=$row_tp['flight_code'];
                }
             }

    if(isset($_GET['tn'])){
echo '<div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="boarding-pass">
      <header>
        <svg class="logo">
          <use xlink:href=""></use>
        </svg>
        <div class="flight">
          <small>flight</small>
          <strong> '.$flight_code.'</strong>
        </div>
      </header>
      <section class="cities">
        <div class="city">
          <strong>'.$row["source"].'</strong>
        </div>
        <div class="city">
          <strong>'.$row["destination"].'</strong>
        </div>
        <svg class="airplane">
          <use xlink:href="#airplane"></use>
        </svg>
      </section>
      <section class="infos">
        <div class="places">
          <div class="box"></div>
          <div class="box"></div>
          <div class="box">
            <small>Seat</small>
            <strong>'.$row["seatno"].'</strong>
          </div>
          <div class="box">
            <small>Class</small>';
                if($row["class"]=="ECONOMY"){
                    echo '<strong>E</strong>';
                }
                elseif($row["class"]=="BUSINESS"){
                    echo '<strong>B</strong>';
                }
                elseif($row["class"]=="FIRST-CLASS"){
                    echo '<strong>FC</strong>';
                }
                else{
                    echo '<strong>CLASS NOT FOUND.</strong>';
                }
      echo    '</div>
        </div>
        <div class="times">
          <div class="box">
            <small>Boarding</small>
            <strong>Pending</strong>
          </div>
          <div class="box">
            <small>Departure</small>
            <strong>'.$departure.'</strong>
          </div>
          <div class="box">
            <small>Duration</small>
            <strong>'.$duration.'</strong>
          </div>
          <div class="box">
            <small>Arrival</small>
            <strong>'.$arrival.'</strong>
          </div>
        </div>
      </section>
      <section class="infos">
        <div class="box">
          <div class="passenger">
            <small>passenger</small>';
            $result1=$connection-> query($sql1);
            if(mysqli_num_rows($result1)>0){
                $row1=$result1->fetch_assoc();
                echo   '<strong>'.$row1["fname"].' '.$row1["m"].' '.$row1["lname"].'</strong>';
            }
            else{
                echo '<strong>No Data</strong>';
            }
echo '</div>
          <div class="date">
            <small><br>Date</small>
            <strong>'.$row["date_of_travel"].'</strong>
          </div>
        </div>
        <div class="places">
             <img alt="testing" src="barcode.php?codetype=Code128&size=35&text='.$text.'&print=true"/>
             <strong><center>'.$tn.'</center></strong>
        </div>
      </section>
    </div>
    <svg>
        <symbol  id="airplane" viewBox="243.5 245.183 25 21.633">
            <g>
              <path fill="#336699" d="M251.966,266.816h1.242l6.11-8.784l5.711,0.2c2.995-0.102,3.472-2.027,3.472-2.308
                                      c0-0.281-0.63-2.184-3.472-2.157l-5.711,0.2l-6.11-8.785h-1.242l1.67,8.983l-6.535,0.229l-2.281-3.28h-0.561v3.566
                                      c-0.437,0.257-0.738,0.724-0.757,1.266c-0.02,0.583,0.288,1.101,0.757,1.376v3.563h0.561l2.281-3.279l6.535,0.229L251.966,266.816z
                                      "/>
            </g>
          </symbol>
    </svg>';
    $connection->close();
    abc:
    }
 ?>
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
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
