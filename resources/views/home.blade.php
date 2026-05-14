@php($title = "Dr. Sanil Sinhasan | Best Psychiatrist & Sexologist in Mumbai")  
@section('meta_desc')Dr. Sanil Sinhasan: Experienced Psychiatrist & Sexologist in Mumbai, 10+ years of expertise in mental & sexual health disorders. Book an appointment today! @endsection

@extends('layouts.default')      
@section('content')
<!--Body content -->
<!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade d-lg-block d-md-block d-none" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
         <li data-target="#carousel-example-1z" data-slide-to="2"></li> 
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item">
          <img src="{{ asset('/resources/assets/images/banner-3.png')}}" alt="Nuture your mental health with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai">
          <!--<div class="container banner-caption">-->
          <!--  <div class="row">-->
          <!--    <div class="col-lg-6 col-md-8 col-6">-->
          <!--      <div class="">-->
          <!--        <h1 class="f700 text-white">Get Ride of Depression Now</h1>-->
          <!--        <p class="f18 f400 text-white pt-2">Talk | Resolve | Heal</p>-->
          <!--        <a href="contact.php" class="btn btn-orange">Contact Us</a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item active">
          <img src="{{ asset('/resources/assets/images/banner-4.png')}}" alt="Solve talk problems with your partner with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai">
          <!--<div class="container banner-caption">-->
          <!--  <div class="row">-->
          <!--    <div class="offset-lg-6 offset-md-4 offset-6 col-lg-6 col-md-8 col-6 ">-->
          <!--       <div class="">-->
          <!--        <h1 class="f700 text-white">Get Solution for your Personal Life</h1>-->
          <!--        <p class="f18 f400 text-white pt-2">Talk | Resolve | Heal</p>-->
          <!--        <a href="contact.php" class="btn btn-orange">Contact Us</a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <!--/Second slide-->
         <div class="carousel-item">
          <img src="{{ asset('/resources/assets/images/banner-5.png')}}" alt="Mental illness Recovery with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai">
          <!--<div class="container banner-caption">-->
          <!--  <div class="row">-->
          <!--    <div class="offset-lg-6 offset-md-4 offset-6 col-lg-6 col-md-8 col-6 ">-->
          <!--       <div class="">-->
          <!--        <h1 class="f700 text-white">Get Solution for your Personal Life</h1>-->
          <!--        <p class="f18 f400 text-white pt-2">Talk | Resolve | Heal</p>-->
          <!--        <a href="contact.php" class="btn btn-orange">Contact Us</a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
<!--/.Carousel Wrapper--> 

<div id="carouselExampleIndicators" class="carousel slide d-lg-none d-md-none d-block pointer-event" data-ride="carousel">
  <div class="carousel-inner">  
      <div class="carousel-item  active">  
          <a href="tel:+919324730370"><img src="{{ asset('/resources/assets/images/mob-banner.jpg')}}" class="d-block w-100" alt="Solve talk problems with your partner with Dr. Sanil Sinhasan, Psychiatrist &amp; Sexologist in Mumbai"></a>    
      </div>  
  </div>
</div>

<!-- About Section    -->
<section class="abt-sec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="abt-img">
          <img src="{{ asset('/resources/assets/images/doctor-2.png')}}" alt="Dr. Sanil Sinhasan, Consultant Psychiatrist & Sexologist in Mumbai">
        </div>
      </div>
      <div class="col-md-5 offset-md-1 ">
        <div class="abt-txt">
          <h1 class="orange">Dr. Sanil Sinhasan</h1>
          <span class="f600 d-block">MBBS, MD Psychiatry,</span>
          <span class="f600 d-block">Consultant Psychiatrist & Sexologist</span>
          <p class="pb-2 pt-4">Dr. Sanil Sinhasan is a renowned Psychiatrist & Sexologist practicing in Mumbai. He has an experience of more than 10 years in the treatment of various mental & sexual health disorders. </p>

    	  <p class="pb-2">He completed MBBS and did MD degree in Psychiatry from the prestigious TNMC & Nair Hospital, Mumbai. He gathered extensive knowledge and vast experience while working with government hospital and various private hospitals and psychiatric rehabilitation centres.</p>
          
            <a href="{{route('about')}}" class="btn-blue btn">Know More</a>
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="servc-sec">
  <div class="container">
    <h2 class="orange pb-5">Specialized Help For Your Mental Health</h2>
    <div class="row">
          <div class="col-md-4 col-6">
            <div class="service-blog" onclick="document.location={{route('anxiety-disorder')}}">
              <div class="img-thumb">     
                <a href="{{route('anxiety-disorder')}}"><img src="{{ asset('/resources/assets/images/anxiety-test.jpg')}}" alt="Anxiety Disorders with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('anxiety-disorder')}}"><p>Anxiety Disorder</p></a>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">
                <a href="{{route('depression-psychosis')}}"><img src="{{ asset('/resources/assets/images/depression-test.jpg')}}" alt="Depression Test with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('depression-psychosis')}}"><p>Depression / Psychosis</p></a>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">  
                <a href="{{route('stress-management')}}"><img src="{{ asset('/resources/assets/images/stress-management.jpg')}}" alt="Stress management with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('stress-management')}}"><p>Stress Management </p></a>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">
              <a href="{{route('insomnia')}}"><img src="{{ asset('/resources/assets/images/insomnia.jpg')}}" alt="Insomnia treatment with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('insomnia')}}"><p>Insomnia</p></a>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">
              <a href="{{route('childhood-problems')}}"><img src="{{ asset('/resources/assets/images/childhood-problems.jpg')}}" alt="Childhood behavioural problems with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('childhood-problems')}}"><p>Childhood Academic and Behavioral Problems</p></a>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">
              <a href="{{route('sexual-disorders')}}"><img src="{{ asset('/resources/assets/images/sexual-disorders.jpg')}}" alt="sexual disorder treatment with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('sexual-disorders')}}"><p>Sexual Disorders</p></a>
            </div>  
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">
              <a href="{{route('deaddiction')}}"><img src="{{ asset('/resources/assets/images/de-addiction.jpg')}}" alt="Addiction treatment with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('deaddiction')}}"><p>Deaddiction</p></a>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">
              <a href="{{route('counselling')}}"><img src="{{ asset('/resources/assets/images/psychiatrist-counseling.webp')}}" alt="Counselling with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('counselling')}}"><p>Counselling</p></a>
            </div>
          </div>
          <div class="col-md-4 col-6">
            <div class="service-blog">
              <div class="img-thumb">
              <a href="{{route('old-age-problems')}}"><img src="{{ asset('/resources/assets/images/old-age-problem.webp')}}" alt="Old age problems with Dr. Sanil Sinhasan, Psychiatrist & Sexologist in Mumbai"></a>
              </div>
              <a href="{{route('old-age-problems')}}"><p>Old Age Memory & Behavioural Problems</p></a>
            </div>
          </div>
      </div>   
    </div>
  </div>
</section>

<!-- <section class="sec-cta"> 
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-4 mt-4">
        <h4 class="pb-4"><b>Have Questions? Felicity Support Has You Covered.</b></h4>
        <p>Get help in choosing the right counselling therapist.</p>
        <br><br><a href="tel:+919324730370" class="btn-orange btn cta-btn">Call Now +919324 730 370</a>
      </div>
    </div>
  </div>
</section>-->

<section class="cta-sec">
    <div class="container">    
        <div class="row">
            <div class="col-md-8 offset-md-4 col-12">  
            <h3 class="text-white">SEEKING HELP IS THE FIRST
STEP TOWARDS LIVING A WHOLESOME LIFE.</h3>  
            <a href="{{route('book-appointment')}}" class="btn-orange btn cta-btn">Book an Appointment</a>  
            </div>
        </div>
    </div>
</section>    

<section class="sec-testimonial">
  <div class="container card">
    <h2 class="py-3 text-center text-white">What Patients Says About Us</h2>
    <div class="row justify-content-center">
      <div class="col-md-8 ">
        <div class="owl-carousel testimonial-wrapper" id="sec-testimonial">
          <div class="item">
            <div class="carousel-owl">
              <p class="owl-content text-justify text-white"> Before I say that you are an extraordinary doctor, let me tell you that you are an extraordinary human being. Thank you for taking such good care. The main thing I liked is that along with medicines, he helps the patient with a CBT module, and in my daughter's case, it has been of very good help.</p>
              <p class="text-white pt-4">Siddhesh Vichare | Mumbai</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-owl">
              <p class="owl-content text-justify text-white">He made me feel comfortable about my symptoms, didn't make them sound abnormal, and then helped me with medicine and counseling. After a couple of sessions, I was feeling much better. He took care of the withdrawal symptoms.</p>
              <p class="text-white pt-4">Anil Kamble | Mumbai</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-owl">
              <p class="owl-content text-justify text-white">Before my treatment with Dr. Sanil, I was in a very difficult place in my life, where I thought I had no control over my emptiness, loneliness, and overwhelming emotions. My constant crying and overreaction to little things caused me great anxiety. My relationships with my partner, my sibling, and my parents all suffered because I was trying to cut them off from my life. My consultation with Dr. Sanil was the best thing I could have done. Thank you for all your help and support.</p>
              <p class="text-white pt-4">Radha Desayi | Mumbai</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-owl">
              <p class="owl-content text-justify text-white">Doctor sanil's diagnosis of the problem is exactly to the point. I had anxiety problems, but after visiting his clinic, in almost 2-3 sessions I felt almost 80-85% improvement. His counselling skills have helped me in becoming calm and mature and develop a positive and problem-solving attitude.</p>
              <p class="text-white pt-4">Gangadhar Naik | Mumbai</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>        

 <section class="sec-stat">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="stat-wrap text-center">
          <div class="stat-icon"><i class="fa-solid fa-people-group"></i></div>
          <span class="stat-num text-white counter" data-target="5000"></span>
          <p>Happy Customers</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-wrap text-center">
          <div class="stat-icon"><i class="fa-solid fa-briefcase"></i></div>
          <span class="stat-num text-white counter" data-target="10"></span>
          <p>Years of Experience</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-wrap text-center">
          <div class="stat-icon"><i class="fa-solid fa-award"></i></div>
          <span class="stat-num text-white counter" data-target="25"></span>
          <p>Services</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-wrap text-center">
          <div class="stat-icon"><i class="fa-solid fa-crown"></i></div>
          <span class="stat-num text-white counter" data-target="250"></span>
          <p>Patients Reviews</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-gallery">
  <h2 class="pb-5 text-center orange">Videos</h2>
  <div class="container">
    <div class="row">
     <div class="col-md-6">
        <iframe width="100%" height="258" src="https://www.youtube.com/embed/6nBIPixGrV4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <iframe width="100%" height="258" src="https://www.youtube.com/embed/Fd8PFB2wgT8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div> 
    </div>
    <div class="text-center">
      <a href="https://drsanilsinhasan.com/gallery/videos
" class="btn-blue btn">Show More</a>
    </div>
  </div>
</section>

@stop