<div class="at-header-topbar">  
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-6 d-flex align-items-center pb-0 pb-lg-0 pb-md-0">
				<span><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+919324730370"><i class="flaticon-phone-call"></i>+919324730370</a></span>
			</div>
			<div class="col-lg-7 col-md-5 col-2">
			</div>    
			<!-- <div class="col-lg-3 col-md-3 col-sm-6">
				<div class="at-social text-right">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>
			</div> -->
			<div class="col-lg-3 col-md-5 col-4 d-flex align-items-start">
				<a class="btn btn-default appointment-btn d-lg-block d-md-block d-none" href="{{route('book-appointment')}}" role="button">Book an Appointment</a>    
				<a class="btn btn-default appointment-btn d-lg-none d-md-none d-block d-flex align-self-center" href="{{route('book-appointment')}}" role="button">Book Appointment</a>    
			</div>     
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-md">
	<div class="container">
		<a class="navbar-brand reg-top" href="{{route('home')}}"><img src="{{ asset('/resources/assets/images/dr-sanil-sihmasan-logo-blue.png')}}" alt="Dr. Sanil Sinhasan, Consultant Psychiatrist & Sexologist in Mumbai">
		</a>
		<a class="navbar-brand fix-top" href="{{route('home')}}"><img src="{{ asset('/resources/assets/images/dr-sanil-sihmasan-logo-white.png')}}" alt="Dr. Sanil Sinhasan, Consultant Psychiatrist & Sexologist in Mumbai">
		</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="fas fa-bars"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
	      </li>  
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('about')}}">About Us</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Services
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="{{route('anxiety-disorder')}}">Anxiety Disorder</a>
	          <a class="dropdown-item" href="{{route('depression-psychosis')}}">Depression / Psychosis</a>
	          <a class="dropdown-item" href="{{route('stress-management')}}">Stress Management</a>
	          <a class="dropdown-item" href="{{route('insomnia')}}">Insomnia</a>
	          <a class="dropdown-item" href="{{route('childhood-problems')}}">Childhood Academic and Behavioral Problems</a>
	          <a class="dropdown-item" href="{{route('sexual-disorders')}}">Sexual Disorders</a>
	          <a class="dropdown-item" href="{{route('deaddiction')}}">Deaddiction</a>
	          <a class="dropdown-item" href="{{route('counselling')}}">Counselling Services</a>
	          <a class="dropdown-item" href="{{route('old-age-problems')}}">Old Age Memory & Behavioural Problems</a>
	        </div>     
	      </li>    
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Gallery
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="{{route('videos')}}">Videos</a>
	          <a class="dropdown-item" href="{{route('media')}}">Media</a>
	          <a class="dropdown-item" href="{{route('images')}}">Images</a>
	        </div>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" href="{{route('blog')}}">Blog </a>
	      </li>   
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('contact')}}">Contact</a>
	      </li>
	    </ul>
	  </div>
	</div>
</nav>   