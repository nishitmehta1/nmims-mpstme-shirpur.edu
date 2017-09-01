<!-- Students Speak - Created on : 13/04/2017 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="css/animate/animate.min.css">
	<script src="js/wow/dist/wow.min.js"></script>
	<script>
	        new WOW().init();
	</script>	
	<title>Contact Us</title>
	<style>
		body{
			background-image: url('img/bg/6.png');
			background-attachment: fixed;
			background-size: 300px;
			background-repeat: no-repeat;
			background-position: center;
		}
		::-webkit-scrollbar {
			width: 5px;
			height: 5px;
		}
		::-webkit-scrollbar-track-piece  {
			background-color: white;
		}
		::-webkit-scrollbar-thumb:vertical {
			height: 30px;
			background-color: #9C231B;
		}
		.contactus_navbar>a{
			color: #9c231b !important;
		}
		.header{
			margin-top: 30px;
			/*border-bottom: 2px solid #9C231B;*/
		}
		form{
			margin-top: 40px;
		}
		#header_div{
			border-bottom: 2px solid #9C231B;
		}
		#submit_message{
			background: #9C231B;
			color: white;
		}
		#message{
			resize: none;
		}
		.first_section{
			float: left;
		}
		.second_section,.map_section{
			float: right;	
		}
	</style>
</head>

<body>
	<!-- Headers Section -->
	<?php include 'navbar.html'; ?>

	<section>
		<img class="animated fadeInRight" src="img/stretched.jpg" width="100%" height="400px;">
	</section>

	<div class="row bg-fade" style="padding:55px 100px;margin-top:-20px">
		<section class="col-md-4 offset-md-1 first_section">	
				<div id="header_div" class="container header">
					<div class="text-center">
						<h3>Campus Address</h3>
					</div>
				</div>
				<div>	
					<div>
						<div class="text-center address wow fadeInLeft">
							<p><h6>
								Mukesh Patel School Of Technology Management &amp; Engineering, Shirpur Campus<br><br>
									Mukesh Patel Technolgy Park,<br>
									Babulde, Bank of Tapi River,<br>
									Dist. Dhule, Maharashtra, India<br><br>
									Phone No: 02563 – 286545 / 286546 / 286547 / 286548 / 286549 / 286550<br>
							</h6></p>
						</div>
					</div>
				</div>
		</section>
		<section class="col-md-4 offset-md-2 second_section">	
				<div id="header_div" class="container header">
					<div class="text-center">
						<h3>Head Office Address</h3>
					</div>
				</div>
				<div>	
					<div>
						<div class="text-center address wow fadeInRight">
							<p><h6>
								Mukesh Patel School Of Technology Management &amp; Engineering, Mumbai<br><br>Bhakti Vedant Swami Marg,<br>Near Cooper Hospital, JVPD Scheme,<br> Vile Parle (West),<br> Mumbai.Maharashtra- 400 056,<br><br> Tel. No: +91 22 4233 4000
							</h6></p>
						</div>
					</div>
				</div>
		</section>
	</div>
	
	<div style="margin-top:-20px;">
		<div id="map" class="wow fadeInUp container col-md-12" style="height:450px; padding:40px;"></div>
	</div>
	
	<!-- MAP STARTS HERE -->


	<div class="bg-faded">
	<div class="offset-md-2 col-md-8 container" style="padding:40px 0;">
		<section class="col-md-12">	
			<div id="header_div">
				<div class="text-center">
					<h3>Have a question?</h3>
					<h6>Get In Touch!</h6>
				</div>
			</div>
			<div class="container">	
				<div class="container">
					<div class="contact_form form-group">
						<form class="wow fadeInRight">
						  <div class="form-group">
							<input type="name" name="firstname" class="form-control" placeholder="*First Name">
						  </div>
						  <div class="form-group">
						    <input type="name" name="lastname" class="form-control" placeholder="*Last Name">
						  </div>
						  <div class="form-group">
						    <input type="email" name="email" class="form-control" placeholder="*Enter Email">
						  </div>
						  <div class="form-group">
						    <input type="text" name="subject" class="form-control" placeholder="*Subject">
						  </div>
						  <div class="form-group">
						    <textarea class="form-control" name="message" id="message" rows="4" placeholder="*Message"></textarea>
						   </div>
						  <button type="submit" id="submit_message" class="btn col-md-2 offset-md-5">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	</div>
	<script>
	function myMap() {
	  var mapCanvas = document.getElementById("map");
	  var myCenter1 = new google.maps.LatLng(21.2860804,74.8420682); 
	    var marker = new google.maps.Marker({
	      position: myCenter1,												
	      animation: google.maps.Animation.DROP
	    });
	  var mapOptions = {
	    center: new google.maps.LatLng(21.2860804,74.8420682), 
	    zoom: 14,
	    mapTypeId: google.maps.MapTypeId.ROAD
	  }
	  var map = new google.maps.Map(mapCanvas, mapOptions);
	  map.setOptions({draggable: true, zoomControl: true, scrollwheel: false, disableDoubleClickZoom: false});
	  marker.setMap(map);
		var infowindow = new google.maps.InfoWindow({
		  content:"Mukesh Patel School of Technology Management & Engineering, Shirpur"
		  });

		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.open(map,marker);
		  });
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU8yMt56ANS6LSlevylJrfzm0F8HHe_VE&callback=myMap"
  type="text/javascript"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> -->

	<?php include 'footer.html'; ?>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/teather.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>