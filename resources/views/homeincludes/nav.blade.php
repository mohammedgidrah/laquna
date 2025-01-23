<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a target="_blank" href="https://www.facebook.com/lagunavco" target="_blank"><i class="ti-facebook"></i></a>
						<a target="_blank" href="https://www.instagram.com/lagunavco/" target="_blank"><i class="ti-instagram"></i></a>
						<a target="_blank"  href="https://www.linkedin.com/company/laguna-visual-communications/""><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+962 797992323</span></a>
						<a href="mailto:leensabti@lagunavco.com" ><i class="fa fa-envelope mr-2"></i><span>Contact Us</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html">
		  	<!-- Mega<span>kit.</span> -->
			 <img src="{{ asset('images/laquna.png')}}" alt="">
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">

				  <a class="nav-link" href="{{ url('/about') }}">About</a>
			  </li>
 
			   <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
			   <li class="nav-item"><a class="nav-link" href="{{ url('/ourclinent') }}">our clients</a></li>
			   <li class="nav-item">

				<a class="nav-link" href="{{ url('/projects') }}">projects</a>
			</li>
 
			<li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
			@if (Auth::user())
			<li>
	
					<a class="nav-link" href="{{ url('/admin') }}">dashboard</a>
			</li>
				
			@endif
		</ul>

 
		  </div>
		</div>
	</nav>
</header>