<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Welcome to {!! $menu['placeName'] !!}</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" >
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/font-awesome-4.6.3/css/font-awesome.min.css')}}" >
	<link href="{{URL::asset('assets/css/simple-line-icons.css')}}" rel="stylesheet" media="screen">
	<!--[if lte IE 7]>
		<script src="assets/js/icons-lte-ie7.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}" >	
	<link href="{{URL::asset('assets/css/owl.theme.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/css/animate.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/css/jquery.timepicker.css')}}" rel="stylesheet" media="screen">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/date-picker.css')}}" >
	<link href="{{URL::asset('assets/css/style-menu.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
</head>
<body>
	<!-- Navigation start -->

	<nav class="navbar navbar-custom navbar-transparent navbar-fixed-top" role="navigation">

		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="callout-text" href="#">-Food2U-</a>
			</div>

			<div class="collapse navbar-collapse" id="custom-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="page-scroll"><a href="index.html#home">Home</a></li>			
					<li class="page-scroll"><a href="index.html#dishes">Change Venue</a></li>
					<li class="page-scroll"><a href="index.html#popular">Popular</a></li>
					<li class="page-scroll"><a href="index.html#services">Menu</a></li>		
				</ul>
			</div>

		</div><!-- .container -->

	</nav>

	<!-- Navigation end -->
	<section class="callout" id="callout-zero">
		<div class="myContainer">
		<div class="container">
				<div class="main-slider">
					<div class="slider-content text-center">						
						<h1><span class="pacifico">Welcome To</span> {!! $menu['placeName'] !!} </h1>
						<h2>Food delivary at yoyr footsteps :)</h2>
						<a href="#" class="btn btn-primary">Order Now</a>
					</div>
				</div>
			</div>
			</div>
	</section>
	<!-- Callout section start -->
	@for($k=0; $k< sizeof($menu['categ']); $k++)
	<section id="callout-one" class="callout">
		<div class="container">

			<div class="row">
				<div class="col-sm-2 col-sm-offset-5 text-center long-down">
					<img src="{{URL::asset('assets/images/menu/divider-top.svg')}}" alt="">
				</div>
			</div><!-- .row -->

			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					@if($menu['categ'][$k]->name=='Specials')
					<h2 class="callout-text">Our Special's</h2>
					@else
					<h2 class="callout-text">{!! $menu['categ'][$k]->name !!}</h2>
					@endif
				</div>
			</div><!-- .row -->

		</div><!-- .container -->
	</section>

	<!-- Callout section end -->

	<!-- Menu start -->

	<section class="module">
		<div class="container">

			<div class="row">
			@for($i = 0; $i < sizeof($menu['item'][($menu['categ'][$k]->name)]); $i++)
				@if($i%3==0)
				<div class="col-sm-4">									
					<div class="menu">
						<div class="row">
							<div class="col-sm-6 menu-item-detail">
								<h4 class="menu-title">{!! $menu['item'][$menu['categ'][$k]->name][$i]->name !!}</h4>
								<div class="menu-detail">
								@if($menu['item'][$menu['categ'][$k]->name][$i]->type == 'veg')
								<i class="fa fa-circle" width="1px" aria-hidden="true" style="color:green;padding:-2px;margin-right:10px;"></i><span>Vegetarian</span>
								@elseif($menu['item'][$menu['categ'][$k]->name][$i]->type == 'nveg')
								<i class="fa fa-circle" width="1px" aria-hidden="true" style="color:red;padding:-2px;margin-right:10px;"></i><span>Non-Vegetarian</span>
								@endif</div>
							</div>
							<div class="col-sm-6 menu-price-detail">
								<h4 class="menu-price">{!! $menu['item'][$menu['categ'][$k]->name][$i]->cost !!}</h4>
								<p>Quantity:<span>0</span></p>
								<button type="button" class="small btn btn-default addToMenu">Add</button>
								<button type="button" class="small btn btn-default removeFromMenu">Remove</button>
							</div>
						</div>
					</div>
				</div>
				@endif
				<!-- .col-sm-4 -->
				@if($i%3==1)
				<div class="col-sm-4">
					<div class="menu">
						<div class="row">
							<div class="col-sm-6 menu-item-detail">
								<h4 class="menu-title">{!! $menu['item'][$menu['categ'][$k]->name][$i]->name !!}</h4>
								<div class="menu-detail">
								@if($menu['item'][$menu['categ'][$k]->name][$i]->type == 'veg')
								<i class="fa fa-circle" width="1px" aria-hidden="true" style="color:green;padding:-2px;margin-right:10px;"></i><span>Vegetarian</span>
								@elseif($menu['item'][$menu['categ'][$k]->name][$i]->type == 'nveg')
								<i class="fa fa-circle" width="1px" aria-hidden="true" style="color:red;padding:-2px;margin-right:10px;"></i><span>Non-Vegetarian</span>
								@endif</div>
							</div>
							<div class="col-sm-6 menu-price-detail">
								<h4 class="menu-price">{!! $menu['item'][$menu['categ'][$k]->name][$i]->cost !!}</h4>
								@if($i==8)
								<div class="menu-label">Recommended</div>
								@endif
								<p>Quantity:<span>0</span></p>
								<button type="button" class="small btn btn-default addToMenu">Add</button>
								<button type="button" class="small btn btn-default removeFromMenu">Remove</button>
							</div>
						</div>
					</div>					
				</div><!-- .col-sm-4 -->
				@endif
				@if($i%3==2)
				<div class="col-sm-4">
					<div class="menu">
						<div class="row">
							<div class="col-sm-6 menu-item-detail">
								<h4 class="menu-title">{!! $menu['item'][$menu['categ'][$k]->name][$i]->name !!}</h4>
								<div class="menu-detail">
								@if($menu['item'][$menu['categ'][$k]->name][$i]->type == 'veg')
								<i class="fa fa-circle" width="1px" aria-hidden="true" style="color:green;padding:-2px;margin-right:10px;"></i><span>Vegetarian</span>
								@elseif($menu['item'][$menu['categ'][$k]->name][$i]->type == 'nveg')
								<i class="fa fa-circle" width="1px" aria-hidden="true" style="color:red;padding:-2px;margin-right:10px;"></i><span>Non-Vegetarian</span>
								@endif</div>
							</div>
							<div class="col-sm-6 menu-price-detail">
								<h4 class="menu-price">{!! $menu['item'][$menu['categ'][$k]->name][$i]->cost !!}</h4>
								<p>Quantity:<span>0</span></p>
								<button type="button" class="small btn btn-default addToMenu">Add</button>
								<button type="button" class="small btn btn-default removeFromMenu">Remove</button>
							</div>
						</div>
					</div>
				</div><!-- .col-sm-4 -->
				@endif
				@endfor
			</div><!-- .row -->

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="devider">
						<!-- <img src="assets/images/divider-down.svg" alt=""> -->
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	@endfor
	<!-- Menu end -->

	<!-- Callout section start -->

	


	<!-- Menu end -->

	<!-- Footer start -->

	<footer id="footer">
		<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<p class="copyright">
						© 2016 <a href="#">Food2U</a>.
					</p>
				</div>
			</div><!-- .row -->

		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll-up -->

	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>

	<!-- Javascript files -->
	<script src="{{URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.js')}}"></script>

	
	<script src="{{URL::asset('assets/js/jquery.backstretch.min.js')}}"></script>	
	
	<script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.datepair.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.timepicker.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jqBootstrapValidation.js')}}"></script>	
	<script src="{{URL::asset('assets/js/jquery.matchHeight-min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/twitterFetcher_min.js')}}"></script>
	<script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.fitvids.js')}}"></script>
	<script src="{{URL::asset('assets/js/smoothscroll.js')}}"></script>
	<script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/custom.js')}}"></script>
	<script src="{{URL::asset('assets/js/script-menu.js')}}"></script>
</body>
</html>