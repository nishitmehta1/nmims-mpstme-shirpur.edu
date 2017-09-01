<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>NMIMS's MPSTME - About Us</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style3.css">	
	<link rel="stylesheet" href="css/animate/animate.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/wow/dist/wow.min.js"></script>
	<script src="js/teather.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/display_content.js"></script>
	<script>
        new WOW().init();
    </script>
	<style>
		body{
			background-image: url('img/bg/6.png');
			background-attachment: fixed;
			background-size: 400px;
			background-repeat: no-repeat;
			background-position: center;
		}
		::-webkit-scrollbar {
			width: 6px;
			height: 5px;
		}
		::-webkit-scrollbar-track-piece  {
			background-color: white;
		}
		::-webkit-scrollbar-thumb:vertical {
			height: 30px;
			background-color: #9C231B;
		}
		.aboutus_navbar>a{
			color: #9c231b !important;
		}
		.list{
			margin:0px;
		}
		.col-md-3>.list>.animated>a{
			color: #9C231B;
			font-weight: 450;
			text-decoration: none;
		}
		.collapsed{
			color: black;
			text-decoration: none;
		}
		.container>.row>.col-md-9{
			padding-left: 0px;
		}
		.container>.row>.col-md-3{
			padding-left: 60px;
		}
		#sub-heading>a{
			text-decoration: none;
			color: black;
		}
		.header{
			border-bottom: 2px solid #9C231B;
		}
		img.animated{
			animation-delay: 0.2s;
		}
	</style>
</head>
<body class="">
	<?php 
		include 'navbar.html';
	?>

	<section>
		<img class="animated fadeInRight" src="img/stretched.jpg" width="100%" height="400px;">
	</section>
	<section class="container" id="section_main" style="margin: 60px auto;">	
			<div class="row header">
				<h3>ABOUT US</h3>
			</div>
			<div class="row">	
				<div class="col-md-9  animated slideInLeft" id="content_div">
					 <p>							
					 	<script type="text/javascript">
							document.write(content);
					 	</script>
					</p>		
					<!-- </div>	 -->
					<br>
					<div class="messages">
						<!-- <h4>Messages</h4> -->
						<!-- accordian starts -->
						<div id="accordion" class="wow animated slideInLeft" role="tablist" aria-multiselectable="true">
							<div class="card">
							    <div class="card-header" role="tab" id="message1">
							      <h5 class="mb-0">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#chancellor_msg" aria-expanded="true" aria-controls="collapseOne">
							          Shri Amrish Patel, Chancellor
							        </a>
							      </h5>
						        </div>
								<div id="chancellor_msg" class="collapse" role="tabpanel" aria-labelledby="message1">
								    <div class="card-block animated slideInLeft">
								     	<img src="http://placehold.it/250X200">
								     	<p>
								     		<script type="text/javascript">
								     			document.write(msg1);
								     		</script>
								     	</p>
								    </div>
								</div>
						    </div>
						  	<div class="card">
							    <div class="card-header" role="tab" id="message2">
							      <h5 class="mb-0">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#vice-chancellor_msg" aria-expanded="false" aria-controls="collapseTwo">Dr. Rajan Saxena, Vice-chancellor
							        </a>
							      </h5>
							    </div>
							    <div id="vice-chancellor_msg" class="collapse" role="tabpanel" aria-labelledby="message2">
							      <div class="card-block animated slideInLeft">
							       <img src="http://placehold.it/250X200">
								     	<p>
								     		<script type="text/javascript">
								     			document.write(msg2);
								     		</script>
								     	</p>
							      </div>
							    </div>
						  	</div>
						  	<div class="card">
							    <div class="card-header" role="tab" id="message3">
							      <h5 class="mb-0">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#director_msg" aria-expanded="false" aria-controls="collapseThree">Dr. R.S Gaud, Director
							        </a>
							      </h5>
							    </div>
							    <div id="director_msg" class="collapse" role="tabpanel" aria-labelledby="message3">
							      <div class="card-block animated slideInLeft">
							        <img src="http://placehold.it/250X200">
								     	<p>
								     		<script type="text/javascript">
								     			document.write(msg3);
								     		</script>
								     	</p>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header" role="tab" id="message4">
							      <h5 class="mb-0">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#dean_msg" aria-expanded="false" aria-controls="collapseThree">Dr. Aaquil Bunglowala , Associate Dean
							        </a>
							      </h5>
							    </div>
							    <div id="dean_msg" class="collapse" role="tabpanel" aria-labelledby="message4">
							      <div class="card-block animated slideInLeft">
							        <img src="http://placehold.it/250X200">
								     	<p>
								     		<script type="text/javascript">
								     			document.write(msg4);
								     		</script>
								     	</p>
							      </div>
							    </div>
							</div>
						</div>
					</div>
					<!-- accordian ends -->
				</div>
				<div class="col-md-3">
					<div class="list">
						<div class="animated slideInUp one">
							<h6 id="sub-heading"><a href="facts-history.php">Facts and History</a></h6>
								<a href="facts-history.php#over_div">Overview</a><br>
								<a href="facts-history.php#founding_div">Founding</a><br>
								<a href="facts-history.php#hostel_div">Hostel</a><br>
								<a href="facts-history.php#library_div">Libraries</a><br>
								<a href="facts-history.php#research_div">Research</a><br>
						</div>
						<hr>
						<div class="wow animated slideInUp two">
							<h6 id="sub-heading"><a href="offices-admin.php">Offices and Administration</a></h6>
								<a href="offices-admin.php#adminbody_div">Administration Team</a><br>
								<a href="offices-admin.php#board_div">Board Of Management</a><br>
								<a href="offices-admin.php#assdean_div">Associate Deans</a><br>
								<a href="offices-admin.php#statbody_div">Other Statutory body</a><br>
						</div>
						<hr>
						<div class="wow animated slideInUp three">
							<h6 id="sub-heading"><a href="http://www.nmims.edu/about/svkm/institution/">SVKM</a></h6>
							<a href="http://www.nmims.edu/about/svkm/founders/">Founders</a><br>
							<a href="http://www.nmims.edu/about/svkm/institution/">Institution</a><br>
							<a href="http://www.nmims.edu/about/svkm/mission/">Mission</a><br>
							<a href="http://www.nmims.edu/about/svkm/presidents/">Presidents</a><br>
						</div>
					<hr>
						<div class="wow animated slideInUp four">
							<h6 id="sub-heading"><a href="image_gallery.php">Image Gallery</a></h6>
								<a href="">Cafeteria</a><br>
								<a href="">Class Rooms</a><br>
								<a href="">Hostel</a><br>
								<a href="">Library</a><br>
								<a href="">Research Labs</a><br>
								<a href="">Campus</a><br>
						</div>
					</div>
				</div>
			</div>
	</section>
	
	<!-- <script src="js/animate/jquery.viewportchecker.js"></script> -->
<!-- 
	<script type="text/javascript">
		jQuery(document).ready(function() {
            jQuery('.card').addClass("visible").viewportChecker({
                classToAdd: 'animated fadeInRight', // Class to add to the elements when they are visible
                offset: 100
               });
        }); 
	</script> -->

	<!-- Footer Section -->
	<nav class="navbar static-bottom navbar-light bg-faded text-center" style="font-size:0.8em;">
		Copyright &copy; 2017 | Design : NKS 
	</nav>

</body>
</html>