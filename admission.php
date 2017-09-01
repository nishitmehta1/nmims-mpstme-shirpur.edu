<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/nm-crest.png">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="css/aboutus.css">
	<link rel="stylesheet" href="css/animate/animate.min.css">
	<script src="js/wow/dist/wow.min.js"></script>
	<script>
	        new WOW().init();
	</script>	
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
		.admission_navbar>a{
			color: #9c231b !important;
		}
		.header{
			border-bottom: 2px solid #9C231B;	
		}
		.active_nav{
			background-color:#9c231b !important;
			color: white;
		}
		#li1,#li2,#li3,#li4,#li5{
			padding: 20px 10px;
			cursor: pointer;
			border-right:2px solid #9c231b; 
		}
		#footer{
			margin-top: 50px;
		}
	</style>
	<title>MPSTME - Admissions</title>
</head>
<body  style="margin:0;padding: 0;">
	<?php include 'navbar.html';?>
		
	<section>
		<img class="animated fadeInRight" src="img/stretched.jpg" width="100%" height="400px;">
	</section>


	<div class="offset-md-1 col-md-6" id="img_div" style="padding: 50px 0px;">
	  <a href="https://cdn.digialm.com//EForms/configuredHtml/1288/50765/Registration.html"><img class="col-md-12 image" src="img/JPEG/npat-2017.jpg" alt="NPAT" style="height: 150px;padding: 0;"></a>
	</div>


	<!-- Nav tabs -->
	<div class="row" style="">
		<div class="offset-md-1 col-md-8" style="padding:20px 0;">
			<div id="div_list" class="col-md-3" style="padding: 0;float: left;">
				<ul style="list-style: none;padding: 0;margin: 0px;">
					<li id="li1" onclick="opencontent(this.id);" class="active_nav">NPAT 2017</li>
					<li id="li2" onclick="opencontent(this.id);" class="">Programs covered under NPAT 2017</li>
					<li id="li3" onclick="opencontent(this.id);" class="">Programs Offerred at Campus</li>
					<li id="li4" onclick="opencontent(this.id);" class="">Important Dates</li>
					<li id="li5" onclick="opencontent(this.id);" class="">How to Apply</li>
				</ul>
			</div>
				
			<div id="content_div" class="col-md-8" style="float: left;padding: 0;" >
				<div class="col-md-12 display animated fadeIn" id="display_content1" style="display: block;">NPAT 2017 (NMIMS Programs After Twelfth) is the official entrance test for admissions to Undergraduate Degree and Integrated Degree Programs (Academic session 2017-18) being offered by constituent schools of SVKM's Narsee Monjee Institute of Management Studies (Deemed to be University u/s 3 of UGC act 1956) at Mumbai, Shirpur, Bengaluru, Indore and Navi Mumbai Campuses.<br><br><br>
				<small><em>You can download the Admission Brochure <a href="download/mpstme-admission-info.pdf" style="text-decoration: underline;color: #9c213b;" download>here</a>.</em></small>
				</div>
				<div class="col-md-12 display animated fadeIn list-group" id="display_content2" style="display: none;"><p style="margin: 0;">
					<strong>Undergraduate Degree Programs:</strong>
					</p>
					<ul title="Undergraduate Degree Programs:">
						<li>B.Tech.</li>
						<li>B.Sc. Economics</li>
						<li>B.Com.(Hons.)</li>
						<li>B.Sc. Finance</li>
						<li>BBA</li>
						<li>B.Des.</li>
					</ul>
					<p style="margin: 5px 0px;">
						<strong>Integrated Degree Programs</strong>
						</p>
						<ul title="Undergraduate Degree Programs:">
							<li>MBA Tech. (B.Tech. + MBA Tech.)</li>
							<li>MBA Pharma Tech (B.Pharm + MBA)</li>
						</ul>
				</div>
				<div class="col-md-12 display animated fadeIn" id="display_content3" style="display: none;">
					<p style="margin : 0;"><strong>Mumbai Campus offers - </strong>All the programs listed in the above section.</p>
					<p style="margin :5px 0px;"><strong>Shirpur Campus offers - </strong>B.Tech, MBA (Tech) and MBA (Pharma Tech).</p>
					<p style="margin :5px 0px;"><strong>Bengaluru Campus offers - </strong>BBA, B.Sc. Finance and B.Sc. Economics.</p>
					<p style="margin :5px 0px;"><strong>Indore Campus offers - </strong>BBA.</p>
					<p style="margin :5px 0px;"><strong>Navi Mumbai Campus offers - </strong>BBA.</p>
				</div>
				<div class="col-md-12 display animated fadeIn" id="display_content4" style="display: none;">
					<p style="margin : 0;"><strong>Last Date for Online Registration: </strong> Sunday, 30th April, 2017.</p>
					<p style="margin :5px 0px;"><strong>Last date for Form Editing: </strong>Monday, 24th April,2017 (Only addition school/ program, change of exam date, change of test city will be allowed).</p>
					<p style="margin :5px 0px;"><strong>Test Dates: </strong>Saturday, 13th May and Sunday, 14th May, 2017.</p>
					<p style="margin :5px 0px;"><strong>Test centers: </strong>Multiple Centers in 32 Cities.</p>
				</div>
				<div class="col-md-12 display animated fadeIn" id="display_content5" style="display: none;">
					<p style="margin : 0;"><strong>Step 1 - </strong>Click on <a href="https://cdn.digialm.com//EForms/configuredHtml/1288/50765/Registration.html" style="color: #9C213b;text-decoration: underline;">Register</a> and create your account. Remember to keep your 10th Roll Number handy.</p>
					<p style="margin :5px 0px;"><strong>Step 2 - </strong>Go to your mail box and verify.</p>
					<p style="margin :5px 0px;"><strong>Step 3 - </strong><a href="https://cdn.digialm.com//EForms/configuredHtml/1288/50765/login.html" style="text-decoration: underline;color: #9C213b;">Login</a> with your username and password and complete your application form.</p>
					<p style="margin :5px 0px;"><strong>Step 4 - </strong>Make online payment of registration fee.</p>
				</div>
			</div>
		</div>
		<div class="fixed col-md-3 wow fadeInUp">
			<div class="list">
				<h6 id="sub-heading"><a href="Engineering-Programs.php">Engineering Programs</a></h6>
					<a href="Engineering-Programs.php">Computer Science</a><br>
					<a href="Engineering-Programs.php">Information Technology</a><br>
					<a href="Engineering-Programs.php">Textile</a><br>
					<a href="Engineering-Programs.php">Mechatronics</a><br>
					<a href="Engineering-Programs.php">Mechanical</a><br>
				<hr>
				<h6 id="sub-heading"><a href="offices-admin.php">Side Bar Title 2</a></h6>
					<a href="offices-admin.php#adminbody_div">Sub Heading</a><br>
					<a href="offices-admin.php#board_div">Sub Heading</a><br>
					<a href="offices-admin.php#assdean_div">Sub Heading</a><br>
					<a href="offices-admin.php#statbody_div">Sub Heading</a><br>
				<hr>
			</div>
		</div>
	</div>
 
	<script>
		function opencontent(id){
			var lis=document.getElementsByTagName("li");
			for (var i = 0; i < lis.length; i++) {
				lis[i].removeAttribute("class");
			}
			var classes=document.getElementsByClassName('display');
			for (var i = 0; i < classes.length; i++) {
				classes[i].style.display='none';
			}
			if (id=='li1') {
				document.getElementById('display_content1').style.display='block';
			}
			else if (id=='li2') {
				document.getElementById('display_content2').style.display='block';
			}
			else if (id=='li3') {
				document.getElementById('display_content3').style.display='block';
			}
			else if (id=='li4') {
				document.getElementById('display_content4').style.display='block';
			}
			else if (id=='li5') {
				document.getElementById('display_content5').style.display='block';
			}
			document.getElementById(id).setAttribute('class','active_nav');
		}
	</script>


	<?php include 'footer.html' ?>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/teather.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>