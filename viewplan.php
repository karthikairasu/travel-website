
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
    <style>
	 #days{
		 background-image:url(1.jpg);
		
	 }
	 li a{
		color:blue;
		font-weight:700;
	 }

    .circle-icon 
	{
	color:white;	
    background:rgb(69, 193, 201);
    padding:15px;
    border-radius: 50%;
   }
   label:hover{
	   color:blue;
   }

	/* Sweep To Bottom */
.hvr-sweep-to-bottom {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-sweep-to-bottom:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #2098D1;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-sweep-to-bottom:hover, .hvr-sweep-to-bottom:focus, .hvr-sweep-to-bottom:active {
  color: white;
}
.hvr-sweep-to-bottom:hover:before, .hvr-sweep-to-bottom:focus:before, .hvr-sweep-to-bottom:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
}

	</style>
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	

	</head>
	<body>
	<div class="row">
	
	  
	  <section class="col-sm-12 text-center" id="days"  style="    height: 400px; ">
	    
		 <header style="background-color:black; height:15%; width:100%; opacity:0.7;">
	  <p class="text-center" style=" color:white;"><b>travel plans</b></p>
	 </header>
	    
		<?php
		  
		  $conn = mysqli_connect("localhost","root","","travel");
		  $sql="select max(id) as id from plans";
		  $res=mysqli_query($conn,$sql);
		  $row=mysqli_fetch_object($res);
		  $id=$row->id;
		  $sql2="select * from plans where id='$id'";
		  $res2=mysqli_query($conn,$sql2);
		  $row2=mysqli_fetch_object($res2);
		  $in=$row2->checkin;
		  $out=$row2->checkout;
		  $f=$row2->fromadd;
		  $t=$row2->toadd;
		  
		  
		 

           	  
		  
		?>
		  <?php
			$date1 = new DateTime("$in");
			$date2 = new DateTime("$out");
			$diff = $date1->diff($date2);
			// will output 2 days
			 ?>
			
		
		 <p style="margin-top:120px;color:white; font-size:35px;font-weight: 900;">
		 <?php echo $diff->days ;?>&nbsp;Days&nbsp;in <?php echo$f; ?>
		 <b style="font-size:45px;font-weight: 900;"> & </b> <?php echo$t; ?>
		 <br> 
		 <i style="font-size:25px;"> <?php  echo date("M d", strtotime($in)); ?>&nbsp;-&nbsp;<?php echo date("M d,Y", strtotime($out)); ?> <i></p>
		 
		
		
	  </section>
	  
	    <ul class="nav nav-pills "  style="background-color: #f5f5f5;border: 1px solid lightgray;">
		  <li class="hvr-sweep-to-bottom" style="margin-left: 240px;border: 1px solid lightgray;"><a href="">Route</a></li>
		  <li class="hvr-sweep-to-bottom" style="border: 1px solid lightgray;"><a href="">Day by Day</a></li>
		  <li class="hvr-sweep-to-bottom" style="border: 1px solid lightgray;"><a href="">Where to Stay</a></li>
		  <li class="hvr-sweep-to-bottom" style="border: 1px solid lightgray;"><a href="">How to Travel</a></li>
		</ul>
		
		<div class="row">
		  <div class="col-sm-2"></div>
		  <div class="col-sm-4" style="margin-top:80px;">
		     <h3>View / edit route</h3>
			 <span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;<label style="color:black;font-size:20px">Start:<?php echo $f;?>.</label><br>
			  <svg height="100px" width="100px">
			    <polyline points="0,0,0,0,0,80,80" style="fill:white;stroke:red;stroke-width:4" />
			  </svg><br>
			  <label><span class="	glyphicon glyphicon-plane fa-2x circle-icon"></span>
             <?php echo $f;?>.</label><br>
			  <svg height="100px" width="100px">
			    <polyline points="0,0,0,0,0,80,80" style="fill:white;stroke:red;stroke-width:4" />
			  </svg><br>
			  <label><span class="	glyphicon glyphicon-plane fa-2x circle-icon"></span>
			  </span><?php echo $t;?></label><br>
			   <svg height="100px" width="100px">
			    <polyline points="0,0,0,0,0,80,80" style="fill:white;stroke:red;stroke-width:4" />
			  </svg><br>
			  <span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;<label style="color:black;font-size:20px">End:<?php echo $f;?>.</label><br>
			  
			  
		  </div>
		   <div class="col-sm-2"></div>
		  <div class="col-sm-4" style="margin:120px 0 100px 0 ;">
		   <div id="map" style="width:400px;height:400px;background-color:yellow;"></div>
		   <center>Search Hotel: <a  class="btn btn-primary " href="place.html">search</a></center>
		  </div>
		 
		
		</div>
	   
		
	  
	  
	</div>
	
	
	 
	
	
	
		
	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>
		
		
    <script>
      function myMap()
	  {
	   	  
	   var mapOptions = {
	              center : new google.maps.LatLng( 	40.023559, 	40.5),
				  zoom : 2,
				  mapTypeId : google.maps.MapTypeId.ROADMAP  
	   }
	   var map = new google.maps.Map(document.getElementById("map"),mapOptions);
	  
	  }
   
   </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDidKGjHVKSzG0la9YbX33bfBqH7e_9HTw&libraries=places &callback=myMap"></script>

	</body>
</html>

