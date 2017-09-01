<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>NMIMS's MPSTME - Programs</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="css/aboutus.css">
	<script type="text/javascript" src="js/program_update_content"></script>
	<script type="text/javascript" src="js/scrollnavbar.js"></script>
	<style>
		.courses_navbar>a{
			color: #9c231b !important;
		}
	</style>
</head>
<body>
	<!-- Headers Section -->
	<?php include 'navbar.html'; ?>

	<section>
		<img src="img/slider/gallery/oneone.jpg" width="100%">
	</section>
	<section class="container">	
			<div class="row header">
				<h3>Programs</h3>
			</div>
			<div class="row">	
				<div class="col-md-9">
					<select name="courses" id="select-course" class="courses-select" onchange="updatecontent();">
						<div class="dropdown-menu">
							<option class="dropdown-item" value="none" hidden selected disabled>--Select Course--</option>
							<option value="" disabled="disabled">───────────B-TECH──────────────</option>
							<option class="dropdown-item" value="btechcs">B.Tech - Coumputer Engineering</option>
							<option class="dropdown-item" value="btechit">B.Tech - Information Technology</option>
							<option class="dropdown-item" value="btechmech">B.Tech - Mechanical</option>
							<option class="dropdown-item" value="btechmxtc">B.Tech - Mechatronics</option>
							<option class="dropdown-item" value="btechextc">B.Tech - Electronics &amp; Telecommunications</option>
							<option class="dropdown-item" value="btechcivil">B.Tech - Civil</option>
							<option class="dropdown-item" value="btechtextile">B.Tech - Textile</option>
							<option value="" disabled="disabled">───────────MBA-TECH──────────────</option>
							<option class="dropdown-item" value="mbacs">MBA-Tech - Computer Engineering</option>
							<option class="dropdown-item" value="mbamech">MBA-Tech - Mechanical</option>
							<option class="dropdown-item" value="mbacivil">MBA-Tech - Civil</option>
							<option class="dropdown-item" value="mbait">MBA-Tech - Information Technology</option>
							<option class="dropdown-item" value="mbaelectrical">MBA-Tech - Electrical</option>							
							<option class="dropdown-item" value="mbaextc">MBA-Tech - Electronics &amp; Telecommunications</option>
						</div>
					</select>
					<div class="course_content" id="course_content"></div>
				</div>
				<div class="col-md-3">
					<div class="list">
						<h6 id="sub-heading"><a href="facts-history.php">Pharmacy</a></h6>
							<a href="">B.Pharm - Four Year Program</a><br>
							<a href="">B.Pharm + MBA(Pharma Tech)</a><br>
							<a href="">M.Pharm - Teo Year Program</a><br>
							<a href="">Sub Heading 4</a><br>
							<a href="">Sub Heading 5</a><br>
							<a href="">Sub Heading 6</a><br>
						<hr>
						<h6 id="sub-heading"><a href="">Side Bar Title 2</a></h6>
							<a href="">Sub Heading</a><br>
							<a href="">Sub Heading</a><br>
							<a href="">Sub Heading<br>
							<a href="">Sub Heading</a><br>
						<hr>
					</div>
				</div>
			</div>
	</section>
	

	<!-- Footer Section -->
	<?php include 'footer.html'; ?>
	

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/teather.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/teather.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>