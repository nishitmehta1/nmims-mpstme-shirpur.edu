<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="img/nm-crest.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="css/animate.css">
	<title>MPSTME - Placements</title>
	<style>
		body{
			background-image: url('img/bg/6.png');
			background-attachment: fixed;
			background-size: 300px;
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
		.header{
			border-bottom: 1px solid #9c231b;
		}
		.main_div{
			margin-top: 50px;
		}
		li>.active{
			border-left: 1px solid #9C231B !important;
			border-right: 1px solid #9C231B !important;
			border-top: 1px solid #9C231B !important;
			border-bottom: 1px solid white !important;
			/*color: white !important;*/
		}
		.navbar_place>ul>.nav-item:hover{
			
		}
		.nav-link1{
			color: black;
		}
		.navbar_place>ul{
			border-bottom: 1px solid #9c231B !important;
		}
	</style>
</head>
<body>
	<?php include 'navbar.html'; ?>
	
	<div class="offset-md-1 col-md-12 main_div">
		<div class="main col-md-8" style="float: left;">
			<div class="header col-md-12" style="padding: 0;">
				<h3>Placements</h3>
			</div>

			<div class="intro col-md-12" style="padding:20px 0px 0px 0px;">
				Mukesh Patel School of Technology Management and Engineering is affiliated to NMIMS University and has a full-fledged Placement Cell that provides placement assistance to all full time students.<br>
				In addition to the placement, grooming session technical training and interactive sessions with the professionals from corporate world are organized to make the student aware with the recent trends and technologies used in the industry.<br>
				The Placement Department operates all year round with a view to facilitate a connection between graduating batch and the corporate world.<br>
			</div>
			
			<div class="col-md-12 navbar_place" style="padding: 0;margin-top: 35px;">
				<ul class="nav nav-tabs" role="tablist">
				  <li class="nav-item nav-item1" id="ele1"">
				    <a class="nav-link nav-link1 active" data-toggle="tab" href="#report" role="tab">Placement Report</a>
				  </li>
				  <li class="nav-item nav-item1" id="ele2"">
				    <a class="nav-link nav-link1" data-toggle="tab" href="#recruiters" role="tab">Recruiters (2016)</a>
				  </li>
				  <li class="nav-item nav-item1" id="ele3"">
				    <a class="nav-link nav-link1" data-toggle="tab" href="#speak" role="tab">Corporate Speak</a>
				  </li>
				  <li class="nav-item nav-item1" id="ele4"">
				    <a class="nav-link nav-link1" data-toggle="tab" href="#team" role="tab">Placements Team</a>
				  </li>
				</ul>
			</div>

			<div class="col-md-12 tab-content" style="padding: 0;margin-top: 35px;">
				<div class="tab-pane col-md-12 active" role="tabpanel" id="report">
					<p>
						<h5><b>B-Tech</b></h5> 
						Average Package – Domestic – 4.30lakhs per annum <br>	
							Average Package – International – 35 lakhs per annum INR
					</p>
					<p>
						<h5><b>MBA-Tech</b></h5> 
						Highest Package (2015- 16): 14 Lakhs per annum<br>
						Average Package (2015- 16): 6.56 Lakhs per annum<br>
						Corporate Scholarship upto 6 Lakhs given to selected MBA(Tech.) students.
					</p>		
				</div>
			
				<div class="tab-pane col-md-12" role="tabpanel" id="recruiters">
					B
				</div>
			
				<div class="tab-pane col-md-12" role="tabpanel" id="speak">
					C
				</div>
			
				<div class="tab-pane col-md-12" role="tabpanel" id="team">
					D
				</div>
			
			</div>
		</div>	
		
		<div class="offset-md- col-md-3" style="float: right;padding: 0;">
			<a href="admission.php"><img src="img/npat-2017.png" style="width: 220px;"></a>
			<h6 style="padding-left: 5px;">NMIMS Programs after 12th</h6>
			<br>
			<div class="list">
				<!-- <a href="">News and Events</a><br>
				<a href="">Programmes Offered</a><br>
				<a href="">Image Gallery</a><br>
				<a href="">Contact Us</a><br> -->
			</div>
		</div>
		
	</div>
	

	<!-- <?php //include 'footer.html'; ?> -->
</body>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/teather.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/teather.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script>
        new WOW().init();
    </script>
	<script src="js/jquery.min.js"></script>
</html>