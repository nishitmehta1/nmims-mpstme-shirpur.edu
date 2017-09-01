<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="scroll.js"></script> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/teather.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/display_content.js"></script>
	<title>NMIMS's MPSTME - About Us</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style3.css">
	<style>
		body{
			background-image: url('img/bg/6.png');
			background-attachment: fixed;
			background-size: 400px;
			background-repeat: no-repeat;
			background-position: center;
		}
		.row{
			margin:50px auto !important;
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
		.list{
			margin:0px;
		}
		.col-md-3>.list>a{
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
			padding-left: 50px;
		}
		#sub-heading>a{
			text-decoration: none;
			color: black;
		}
		.header{
			border-bottom: 2px solid #9C231B;
		}
	</style>
</head>
<body>
<?php include 'navbar.html';?>

	<section class="container">
		<div class="row">
			<div class="col-md-9">
				<div id="adminbody_div">
					<h5 class="header">Administration Body</h5>
					<p>
						<script type="text/javascript">
							document.write(list1);
						</script>
					</p>
				</div>

				<div id="board_div">
				<section><br><br><br></section>
					<h5 class="header">Board Of Management</h5>
					<p>
						<script type="text/javascript">
							document.write(list2);
						</script>
					</p>
				</div>
				
				<div id="assdean_div">
				<section><br><br><br></section>
					<h5 class="header">Associate Deans</h5>
					<p>
						<script type="text/javascript">
							document.write(list3);
						</script>
					</p>
					<!-- <div class="collapse" id="assdean" >
					<div>
						<p></p>
					</div>
					</div>
					<a href="#assdean" data-toggle="collapse" aria-expanded="false" aria-controls="assdean">Read More</a> -->
				</div>
				
				<div id="statbody_div">
				<section><br><br><br></section>
					<h5 class="header">Other Statutory Body</h5>
					<p>
						<script type="text/javascript">
							document.write(list4);
						</script>
					</p>
					
				</div>
				<br><br><br>
			</div>
			<div class="col-md-3">
				<div class="list">
					<h6 id="sub-heading"><a href="facts-history.php">Facts and History</a></h6>
						<a href="facts-history.php#over_div">Overview</a><br>
						<a href="facts-history.php#founding_div">Founding</a><br>
						<a href="facts-history.php#hostel_div">Hostel</a><br>
						<a href="facts-history.php#library_div">Libraries</a><br>
						<a href="facts-history.php#research_div">Research</a><br>
						<!-- <a href="facts&history.php#school_div">Schools</a><br> -->
					<hr>
					<h6 id="sub-heading"><a href="offices-admin.php">Offices and Administration</a></h6>
						<a href="#adminbody_div">Administration Team</a><br>
						<a href="#board_div">Board Of Management</a><br>
						<a href="#assdean_div">Associate Deans</a><br>
						<a href="#statbody_div">Other Statutory body</a><br>
					<hr>
					<h6 id="sub-heading"><a href="http://www.nmims.edu/about/svkm/institution/">SVKM</a></h6>
						<a href="http://www.nmims.edu/about/svkm/founders/">Founders</a><br>
						<a href="http://www.nmims.edu/about/svkm/institution/">Institution</a><br>
						<a href="http://www.nmims.edu/about/svkm/mission/">Mission</a><br>
						<a href="http://www.nmims.edu/about/svkm/presidents/">Presidents</a><br>
					<hr>
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
	</section>

	<nav class="navbar static-bottom navbar-light bg-faded text-center" style="font-size:0.8em;">
		Copyright &copy; 2017 | Design : NKS 
	</nav>

	<script>
		function change(idElement) {
			var element = document.getElementById('element' + idElement);
			if (idElement === 1||idElement===2||idElement===3||idElement===4||idElement===5) {
			if (element.innerHTML === 'Read More') element.innerHTML = 'Read Less';
			else {
				 element.innerHTML = 'Read More';
			}
			}
		}
	</script>
	
</body>
</html>
