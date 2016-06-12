<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>Food 2 U | Select Menu</title>
	
	
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" >
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/font-awesome-4.6.3/css/font-awesome.min.css')}}" >
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/animation.css')}}" >
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}" >	
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/date-picker.css')}}" >
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/bxslider.css')}}" >	
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/vegas.min.css')}}" >
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}" >
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}" >	
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}" >	
	
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
</head><!--/head-->
<body>
	<div id="bg-slider-section" style="height:100vh;padding-top:0px;padding-bootom:0px;margin:0px;">
		<div id="slider-section" style="height:100vh;padding-top:0px;padding-bootom:0px;margin:0px;">
			<div class="overlay-bg"></div>
			<div class="container">
				<div class="main-slider">
					<div class="slider-content text-center">						
						<p class="large">Select the place from which you want to order food:</p>
						<div class="space-medium"></div>
						<div class="styled-select">
							<ul class="vendors">
								Select your option here <i class="fa fa-caret-down" aria-hidden="true"></i>
								@for($i = 0;$i< sizeof($data);$i++)
									<li class="vendor-item" data-name="{!! $data[$i]->vendorName !!}">{!! $data[$i]->vendorName !!}</li>
								@endfor
							</ul>
								
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#bg-video-section-->
	
	
	<!--/#scripts--> 
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/jquery.parallax.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/vegas.min.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery.bxslider.min.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('assets/js/main.js')}}"></script> 
	<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script> 
	<script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script> 
	<!-- <script>$('input.date-pick').datepicker();</script> -->
</body>

</html>