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
			<a class="navbar-brand" href="homw.php">
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
			<h1 class="mt-4 mb-3"> Airlines </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="home.php">Home</a>
					</li>
					<li class="breadcrumb-item active"> Airlines </li>
				</ol>
			</div>
		</div>
	</div>

    <div class="container">
		<!-- About Content -->
		<div class="about-main">
			<div class="row">
				<div class="col-lg-6">
					<a href="about.php?airline1=true?btn1=true"><img class="img-fluid rounded mb-4" src="final1.jpg" alt="American Airlines"></a>
					<?php
	                    $servername = "localhost";
	                    $username = "Nisarg";
	                    $password = "Nisarg_14";
	                    $dbname = "airport";
	                    $connection = mysqli_connect($servername, $username, $password, $dbname);
	                    $sql1 = "SELECT * FROM airline where al_name='American Airlines'";
	                    $result1 =$connection-> query($sql1) or die ("DBMS not connected");
	                    if (isset($_GET['airline1']) && !isset($_GET['btn1'])){
	                        if (mysqli_num_rows($result1) > 0) {
                                // output data of each row
		                        while($row = $result1->fetch_assoc()) {
			                        echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn1=true'><b>BACK</b></a><br>";
		                        }
	                        }
	                        else {
		                            echo "0 results";
	                        }
	                    }
                        $connection->close();
                    ?>
					<a href="about.php?airline2=true?btn2=true"><img class="img-fluid rounded mb-4" src="final2.jpg" alt="Air Asia" ></a>
					<?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql2 = "SELECT * FROM airline where al_name='AirAsia India'";
                        $result2 =$connection-> query($sql2) or die ("DBMS not connected");
                        if (isset($_GET['airline2']) && !isset($_GET['btn2'])){
                            if (mysqli_num_rows($result2) > 0) {
                                // output data of each row
                                while($row = $result2->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn2=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
				<div class="col-lg-6">
					<a href="about.php?airline3=true?btn3=true"><img class="img-fluid rounded mb-4" src="final3.jpg" alt="Air India" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql3 = "SELECT * FROM airline where al_name='Air India Limited'";
                        $result3 =$connection-> query($sql3) or die ("DBMS not connected");
                        if (isset($_GET['airline3']) && !isset($_GET['btn3'])){
                            if (mysqli_num_rows($result3) > 0) {
                                // output data of each row
                                while($row = $result3->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn3=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
					<a href="about.php?airline4=true?btn4=true"><img class="img-fluid rounded mb-4" src="final4.jpg" alt="British Airways" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql4 = "SELECT * FROM airline where al_name='British Airways'";
                        $result4 =$connection-> query($sql4) or die ("DBMS not connected");
                        if (isset($_GET['airline4']) && !isset($_GET['btn4'])){
                            if (mysqli_num_rows($result4) > 0) {
                                // output data of each row
                                while($row = $result4->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn4=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
				<div class="col-lg-6">
					<a href="about.php?airline5=true?btn5=true"><img class="img-fluid rounded mb-4" src="final5.jpg" alt="Emirates" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql5 = "SELECT * FROM airline where al_name='Emirates'";
                        $result5 =$connection-> query($sql5) or die ("DBMS not connected");
                        if (isset($_GET['airline5']) && !isset($_GET['btn5'])){
                            if (mysqli_num_rows($result5) > 0) {
                                // output data of each row
                                while($row = $result5->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn5=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
					<a href="about.php?airline6=true?btn6=true"><img class="img-fluid rounded mb-4" src="final6.jpg" alt="Etihad Airways" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql6 = "SELECT * FROM airline where al_name='Etihad Airways'";
                        $result6 =$connection-> query($sql6) or die ("DBMS not connected");
                        if (isset($_GET['airline6']) && !isset($_GET['btn6'])){
                            if (mysqli_num_rows($result6) > 0) {
                                // output data of each row
                                while($row = $result6->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn6=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
				<div class="col-lg-6">
					<a href="about.php?airline7=true?btn7=true"><img class="img-fluid rounded mb-4" src="final7.jpg" alt="Go Air" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql7 = "SELECT * FROM airline where al_name='GoAir'";
                        $result7 =$connection-> query($sql7) or die ("DBMS not connected");
                        if (isset($_GET['airline7']) && !isset($_GET['btn7'])){
                            if (mysqli_num_rows($result7) > 0) {
                                // output data of each row
                                while($row = $result7->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn7=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
					<a href="about.php?airline8=true?btn8=true"><img class="img-fluid rounded mb-4" src="final8.jpg" alt="Indigo" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql8 = "SELECT * FROM airline where al_name='Indigo'";
                        $result8 =$connection-> query($sql8) or die ("DBMS not connected");
                        if (isset($_GET['airline8']) && !isset($_GET['btn8'])){
                            if (mysqli_num_rows($result8) > 0) {
                                // output data of each row
                                while($row = $result8->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn8=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
				<div class="col-lg-6">
					<a href="about.php?airline9=true?btn9=true"><img class="img-fluid rounded mb-4" src="final9.jpg" alt="Swiss Airlines" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql9 = "SELECT * FROM airline where al_name='Swiss Airlines'";
                        $result9 =$connection-> query($sql9) or die ("DBMS not connected");
                        if (isset($_GET['airline9']) && !isset($_GET['btn9'])){
                            if (mysqli_num_rows($result9) > 0) {
                                // output data of each row
                                while($row = $result9->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn9=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
					<a href="about.php?airline10=true?btn10=true"><img class="img-fluid rounded mb-4" src="final10.jpg" alt="Lufthansa Airlines" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql10 = "SELECT * FROM airline where al_name='Lufthansa'";
                        $result10 =$connection-> query($sql10) or die ("DBMS not connected");
                        if (isset($_GET['airline10']) && !isset($_GET['btn10'])){
                            if (mysqli_num_rows($result10) > 0) {
                                // output data of each row
                                while($row = $result4->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn10=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
				<div class="col-lg-6">
					<a href="about.php?airline11=true?btn11=true"><img class="img-fluid rounded mb-4" src="final11.jpg" alt="Singapore Airlines" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql11 = "SELECT * FROM airline where al_name='Singapore Airlines'";
                        $result11 =$connection-> query($sql11) or die ("DBMS not connected");
                        if (isset($_GET['airline11']) && !isset($_GET['btn11'])){
                            if (mysqli_num_rows($result11) > 0) {
                                // output data of each row
                                while($row = $result11->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn11=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
					<a href="about.php?airline12=true?btn12=true"><img class="img-fluid rounded mb-4" src="final12.jpg" alt="Spice Jet" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql12 = "SELECT * FROM airline where al_name='SpiceJet'";
                        $result12 =$connection-> query($sql12) or die ("DBMS not connected");
                        if (isset($_GET['airline12']) && !isset($_GET['btn12'])){
                            if (mysqli_num_rows($result12) > 0) {
                                // output data of each row
                                while($row = $result12->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn12=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
				<div class="col-lg-6">
					<a href="about.php?airline13=true?btn13=true"><img class="img-fluid rounded mb-4" src="final13.jpg" alt="Srilankan Airlines" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql13 = "SELECT * FROM airline where al_name='Srilankan Airlines'";
                        $result13 =$connection-> query($sql13) or die ("DBMS not connected");
                        if (isset($_GET['airline13']) && !isset($_GET['btn13'])){
                            if (mysqli_num_rows($result13) > 0) {
                                // output data of each row
                                while($row = $result13->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn13=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
					<a href="about.php?airline14=true?btn14=true"><img class="img-fluid rounded mb-4" src="final14.jpg" alt="Vistara Airlines" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql14 = "SELECT * FROM airline where al_name='Vistara'";
                        $result14 =$connection-> query($sql14) or die ("DBMS not connected");
                        if (isset($_GET['airline14']) && !isset($_GET['btn14'])){
                            if (mysqli_num_rows($result4) > 0) {
                                // output data of each row
                                while($row = $result4->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn14=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
				<div class="col-lg-6">
					<a href="about.php?airline15=true?btn15=true"><img class="img-fluid rounded mb-4" src="final15.jpg" alt="Thai Airlines" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql15 = "SELECT * FROM airline where al_name='Thai Airways'";
                        $result15 =$connection-> query($sql15) or die ("DBMS not connected");
                        if (isset($_GET['airline15']) && !isset($_GET['btn15'])){
                            if (mysqli_num_rows($result15) > 0) {
                                // output data of each row
                                while($row = $result15->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn15=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
					<a href="about.php?airline16=true?btn16=true"><img class="img-fluid rounded mb-4" src="final16.jpg" alt="Qatar Airlines" ></a>
                    <?php
                        $servername = "localhost";
                        $username = "Nisarg";
                        $password = "Nisarg_14";
                        $dbname = "airport";
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql16 = "SELECT * FROM airline where al_name='Qatar Airways'";
                        $result16 =$connection-> query($sql16) or die ("DBMS not connected");
                        if (isset($_GET['airline16']) && !isset($_GET['btn16'])){
                            if (mysqli_num_rows($result16) > 0) {
                                // output data of each row
                                while($row = $result16->fetch_assoc()) {
                                    echo "<h5><br>Airline_Id: ". $row["AIRLINEID"]. "<br>Name: ". $row["AL_NAME"]. " &nbsp;Code:-" . $row["THREE_DIGIT_CODE"] . "</h5><a class='btn btn-lg btn-secondary btn-button' href='about.php?btn16=true'><b>BACK</b></a><br>";
                                }
                            }
                            else {
                                    echo "0 results";
                            }
                        }
                        $connection->close();
                    ?>
				</div>
			</div>
			<!-- /.row -->
		</div>
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

	<div class="container">
		<!-- Team Members -->
		<div class="team-members-box">  
			<h2>Our Team</h2>
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="card h-100 text-center">
						<div class="our-team">
							<img class="img-fluid" src="niket_2.png" alt="" />
							<div class="team-content">
								<h3 class="title">Niket Kothari</h3>
								<span class="post">18BCE134</span>
								<ul class="social">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-snapchat"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100 text-center">
						<div class="our-team">
							<img class="img-fluid" src="nisarg_1.jpg" alt=""/>
							<div class="team-content">
								<h3 class="title">Nisarg Patel</h3>
								<span class="post">18BCE136</span>
								<ul class="social">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-snapchat"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100 text-center">
						<div class="our-team">
							<img class="img-fluid" src="tulsi_1.png" alt="" />
							<div class="team-content">
								<h3 class="title">Tulsi Palan</h3>
								<span class="post">18BCE141</span>
								<ul class="social">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-snapchat"></i></a></li>
								</ul>
							</div>
						</div>
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
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
