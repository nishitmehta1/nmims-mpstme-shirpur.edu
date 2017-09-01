<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>NMIMS's MPSTME - Programs</title>
	<link rel="icon" href="img/nm-crest.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-sidenav.css">
	<script type="text/javascript" src="js/scrollnavbar.js"></script>
	<style type="text/css">
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
		.academics_navbar>a{
			color: #9C231B;
		}
		#exCollapsingNavbar3{
			color: black;
			/*font-weight: bold;*/
			border-right: 2px solid #9C231B;
			cursor: pointer;
		}
		.active_li,.active_li>a{
			color: white !important;
			background-color: #9C231B;  
		}
		#exCollapsingNavbar3>li{
			padding : 15px 10px 15px 10px;
		}
		.col-md-3>.list>a,.col-md-3>.list>a:hover{
			color: #9C231B; 
			text-decoration: none;
		}
		.row{
			padding-top: 20px;
		}
		.row>.col-md-3{
			padding-left: 30px;
		}
		.display_content{
			margin-bottom:15px;
			border-bottom: 2px solid #9C231B;
		}
		.static{
			left: 380px;
			/*position: absolute;*/
		}
		@media screen and (min-width: 800px){
			.rightbarfixed{
				position: fixed;
				left: 1139px;
				top: 10px;
			}
		}
		@media screen and (min-width: 800px){ 
			.fixed{
			position: fixed;
			top: 10px;
			/*left: 0;*/
		}
		li>a{
			color: black;
		}
	</style>

	<script src="js/jquery.min.js"></script>
	<script src="js/acad-resource.js"></script>
	<script>
		$(window).scroll(function() {
		  if ($(document).scrollTop() > 210) {
		    $('#sidenav').addClass('fixed');
		    $('.rightbar').addClass('rightbarfixed');
		    $('#content').addClass('static');
		  }else {
		    $('.rightbar').removeClass('rightbarfixed');
		    $('#content').removeClass('static');
		    $('#sidenav').removeClass('fixed');
		  }
		});
	</script>
	
</head>
<body>
	<?php 
		include 'navbar.html';
	?>

		<div class="row">
			<div id="sidenav" class="col-md-2 offset-md-1 affix-top sidebar">	
				<div class="bootstrap-vertical-nav">
	                <div class="collapse" id="collapseExample">
	                    <ul class="nav flex-column"  data-spy="affix" data-offset-top="200" id="exCollapsingNavbar3">
	                        <li class="nav_li active_li" onclick="display(this.id)" id="ele1">
	                            <a class="nav-link" href="#academic" rel="academic" style="padding: 0px; margin: 0px;height: 100%">Academic Wing</a>
	                        </li>
	                        <li class=" nav_li" onclick="display(this.id)" id="ele2">
	                            <a class="nav-link" href="#hostel" rel="hostel" style="padding: 0px; margin: 0px;height: 100%">Hostel</a>
	                        </li>
	                        <li class=" nav_li" onclick="display(this.id)" id="ele3">
	                            <a class="nav-link" href="#dining" rel="dining" style="padding: 0px; margin: 0px;height: 100%">Dining Hall</a>
	                        </li>
	                        <li class=" nav_li" onclick="display(this.id)" id="ele4">
	                            <a class="nav-link" href="#ground" rel="ground" style="padding: 0px; margin: 0px;height: 100%">Play Ground</a>
	                        </li>
	                        <li class=" nav_li" onclick="display(this.id)" id="ele5">
	                            <a class="nav-link" href="#medical" rel="medical" style="padding: 0px; margin: 0px;height: 100%">Medical Facility</a>
	                        </li>
	                        <li class=" nav_li" onclick="display(this.id)" id="ele6">
	                            <a class="nav-link" href="#library" rel="library" style="padding: 0px; margin: 0px;height: 100%">Central Library</a>
	                        </li>
	                        <li class=" nav_li" onclick="display(this.id)" id="ele7">
	                            <a class="nav-link" href="#gym" rel="gym" style="padding: 0px; margin: 0px;height: 100%">Gym</a>
	                        </li>
	                    </ul>
	                </div>
				</div>
	        </div>
	        <div class="col-md-6" id="content" style="padding-left: 20px;">
	        	<div id="academic" class="relative display_content">
		        	<h1>Academic Wing</h1>
		            <img src="" alt="Academic Wing image">
	           		<p>Academic Wing</p>
	            </div>
	            <div id="hostel" class="relative  display_content">
		        	<h1>Hostel</h1>
		            <img src="" alt="Hostel Image">
	           		<p>Separate hostel facilities are available for Boys and Girls. The MPSTME, Shirpur campus hostel has been constructed to provide a safe and congenial atmosphere to the students. Airy rooms are luxuriously furnished. Water coolers with purified drinking water, TV and senior faculty member as Rector-Friend-Guide-Philosopher are the exclusive features of the hostel.</p>
	            </div>
	            <div id="dining" class="relative  display_content">
	            	<h1>Dining</h1>
		            <img src="" alt="Mess Image">
	           		<p>A sophisticated dining facility with Mess services by Coconut Groove a corporate catering service company, who also offers services at DAKC, Reliance Industries, Mumbai.</p>
	            </div>
	            <div id="ground" class="relative  display_content">
	            	<h1>Play Ground</h1>
		            <img src="" alt="Ground Image">
		            <hr />
	           		<p>Ground</p>
	            </div>
	            <div id="medical" class="relative  display_content">
	            	<h1>Medical Facility</h1>
		            <img src="" alt="image">
		            <hr />
	           		<p>Campus has tie-up with Indira Gandhi Memorial Hospital, Shirpur. Doctors and specialists of this hospital visit the campus everyday between 7.00 pm to 9.00 pm. In emergency the students are transported to Indira Gandhi Memorial Hospital under the supervision of medical attendant.</p>
	            </div>
	            <div id="library" class="relative  display_content">
		        	<h1>Library</h1>
		            <img src="img/library.jpg" width="85%" height="300px" style="padding-left: 80px;">
		            <hr />
	           		<div>
	           		<p>The Library of the MPSTME Shirpur was established in 2007 and it is one of the first three departments started in the Institute. The library is considered as one of the best scientific and technical libraries in India. In the year 2011 the library has been renamed as ‘Mukesh Patel Central Library, Shirpur.</p>
					<p>The primary mission of the library is to support the educational and research programs of the institute by providing physical and intellectual access to information, consistent with the present and the anticipated educational and research functions of the institute. In accordance with the objectives of the institute, the library aims to develop a comprehensive collection of documents useful for the faculty and the research community of the institute.</p>
					<p>The secondary mission is, to serve as a resource centre for scholars and scientific community of the country. The collection of the library which includes books, journals, reports, and standards, some of the rare reference materials and several important journals</p>
					<p>Seating Capacity: 450 student</p>
					</div>				
	            </div>
	            <div id="gym" class="relative  display_content">
		        	<h1>Gym</h1>
		            <hr />
		            <img src="" alt="Gym image">
		            <hr />
	           		<p>The state-of-the-art gym and swimming facilities at R.C Patel Gymkhana is helping students for their fitness. Also bank facility at campus extends other services of nationalized banks.<br><br><br>
	           		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel repudiandae saepe voluptate quas, explicabo quam ut quod odio ab reprehenderit.<br><br><br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sapiente mollitia, eius quidem dolore qui illum, cum voluptatem facilis dolorem excepturi facere aliquam assumenda odit placeat deserunt, in vero, suscipit eaque. Distinctio eligendi alias at ipsam recusandae adipisci reprehenderit eos quis, quaerat deserunt neque ratione maiores assumenda minus iusto accusantium cumque molestiae autem. Illo sunt inventore accusamus totam. Vel hic a debitis est ipsum totam, expedita. Dignissimos optio explicabo, quaerat distinctio necessitatibus nesciunt assumenda cumque modi aperiam aliquid ex asperiores debitis aliquam hic possimus nobis. Iure quod consequatur, facere veniam consectetur aliquam quisquam, harum pariatur, voluptatibus officia aperiam minima veritatis.<br><br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, placeat. Natus quibusdam corporis velit aspernatur, temporibus consectetur, tenetur praesentium illum vitae et vero, explicabo nesciunt magni, perspiciatis fuga error. In earum asperiores suscipit eum esse numquam impedit rerum qui iure officia quasi odit, quisquam animi libero, explicabo commodi facilis nobis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sapiente mollitia, eius quidem dolore qui illum, cum voluptatem facilis dolorem excepturi facere aliquam assumenda odit placeat deserunt, in vero, suscipit eaque. Distinctio eligendi alias at ipsam recusandae adipisci reprehenderit eos quis, quaerat deserunt neque ratione maiores assumenda minus iusto accusantium cumque molestiae autem. Illo sunt inventore accusamus totam. Vel hic a debitis est ipsum totam, expedita. Dignissimos optio explicabo, quaerat distinctio necessitatibus nesciunt assumenda cumque modi aperiam aliquid ex asperiores debitis aliquam hic possimus nobis. Iure quod consequatur, facere veniam consectetur aliquam quisquam, harum pariatur, voluptatibus officia aperiam minima veritatis.<br><br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, placeat. Natus quibusdam corporis velit aspernatur, temporibus consectetur, tenetur praesentium illum vitae et vero, explicabo nesciunt magni, perspiciatis fuga error. In earum asperiores suscipit eum esse numquam impedit rerum qui iure officia quasi odit, quisquam animi libero, explicabo commodi facilis nobis.
	           		</p>
	            </div>
	        </div>
	        <div class="col-md-3 rightbar">
	        	<a href="admission.php"><img src="img/npat-2017.png" style="width: 220px;"></a>
	        	<h6 style="padding-left: 5px;">NMIMS Programs after 12th</h6>
	        	<br>
	        	<div class="list">
	        	<a href="">News and Events</a><br>
	        	<a href="">Programmes Offered</a><br>
	        	<a href="">Image Gallery</a><br>
	        	<a href="">Contact Us</a><br>
	        	</div>
	        </div>
        </div>
	

	<?php include 'footer.html'; ?>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/teather.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/teather.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script>
        new WOW().init();
    </script>
</body>
</html>