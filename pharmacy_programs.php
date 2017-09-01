<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pharmacy - Programs</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/aboutus.css">
	<script type="text/javascript" src="js/program_update_content"></script>
	<script type="text/javascript" src="js/scrollnavbar.js"></script>
	<style>
		body{
			background-image: url('img/bg/6.png');
			background-attachment: fixed;
			background-size: 400px;
			background-repeat: no-repeat;
			background-position: center;
		}
	</style>
</head>
<body>
	<!-- Headers Section -->
	<?php include 'navbar.html'; ?>

	<section>
		<img src="" width="100%" >
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
							<!-- <option value="" disabled="disabled">───────────B-TECH──────────────</option> -->
							<option class="dropdown-item" value="btechcs">Lorem ipsum dolor.</option>
							<option class="dropdown-item" value="btechit">Lorem ipsum dolor.</option>
						</div>
					</select>
					<div class="course_content" id="course_content"></div>
				</div>
				<div class="col-md-3">
					<div class="list">
						<h6 id="sub-heading"><a href="facts-history.php">Pharmacy</a></h6>
							<a href="">B..Pharm - Four Year Program</a><br>
							<a href="">B. Pharm + MBA(Pharma Tech)</a><br>
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

	<script src="js/jquery.min.js"></script>
	<script src="js/teather.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>