@php($title = "Best Counselling in Chembur, Mumbai | Dr. Sanil Sinhasan")  
@section('meta_desc')Achieve emotional well-being and personal growth with best counselling by Dr. Sanil Sinhasan, 10+ years Experienced Psychiatrist & Sexologist in Chembur, Mumbai. @endsection

@extends('layouts.default')    
@section('content')

<div class="page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-7">
				<div class="page-tittle text-right">
					<h1>Counselling</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ser-content">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-10">
						<img src="{{ asset('/resources/assets/images/psychiatrist-counseling.jpg')}}">
					</div>
				</div>
				<div class="content-wrap">
					<p class="para-20">We care for your mental health as much as you care, so we provide professional and specific assistance and guidance in resolving personal and psychological problems by an expert in a therapeutic way.</p>
					<h3 class="para-15">Types of Counselling -</h3>
					<ul class="para-20 list-unstyled">
						<li><i class="fa-solid fa-snowflake"></i><b>Marriage and Family Counselling</b><br>
						People often face a lot of problems in their marriage and family life. Sometimes, these troubled people find it hard to cope up with their life.</li>

						<li><i class="fa-solid fa-snowflake"></i><b>Educational Counselling</b><br> 
						Counseling for s student who is fresh out of school or college is often clueless as to which career to choose. This is completely normal for kids of that age to feel like that. </li>

						<li><i class="fa-solid fa-snowflake"></i><b>Rehabilitation Counselling</b><br>
						This type of counselling refers to a practice where the counsellor helps people with their emotional and physical disabilities</li>

						<li><i class="fa-solid fa-snowflake"></i><b>Mental Health Counselling</b><br>
						Mental health counselling helps people deal with issues that impact their mental health and well-being.</li> 

						<li><i class="fa-solid fa-snowflake"></i><b>Substance Abuse Counselling</b><br>
						Substance abuse counselling is a form of counselling which helps people in treating them and supporting them from breaking free from their drug and alcohol addiction.</li>

					</ul>
					<h3 class="para-15">Key benefits of counselling:</h3>
					<ul class="para-20 list-unstyled">
						<li><i class="fa-solid fa-snowflake"></i>A good therapist can help you move forward</li>
						<li><i class="fa-solid fa-snowflake"></i>Counselling gives you time and space to work through your problems</li>
						<li><i class="fa-solid fa-snowflake"></i>Therapy helps you gain a different perspective on problems and issues</li>
						<li><i class="fa-solid fa-snowflake"></i>Therapy provides a safe, non-judgemental and respectful environment</li>
						<li><i class="fa-solid fa-snowflake"></i>Counselling can help you regain wellbeing and balance in your life</li>
						<li><i class="fa-solid fa-snowflake"></i>Counselling often makes clients think more clearly and make better decisions</li>
						<li><i class="fa-solid fa-snowflake"></i>Through therapy, clients motivated, confident and assertive</li>
						<li><i class="fa-solid fa-snowflake"></i>Therapy can help with improving and maintaining relationships</li>
						<li><i class="fa-solid fa-snowflake"></i>Counselling helps release your true potential</li>
						<li><i class="fa-solid fa-snowflake"></i>You will know when you’ve found counselling or psychotherapy that’s right for you</li>

					</ul>

					<h3 class="para-15">Why Counselling is Important?</h3>
					<ol type="1">
						<li> Deals With Issues Like Depression</li>
					    <li> Make You Feel Strong and Empowered</li>
					    <li> Helps in Letting Go of The Past</li>
					    <li>  Contributes to The Clarification of the Mind</li>

					</ol>
				</div>
			</div>
			<div class="col-md-5">
				@include('includes.service-list') 
			</div>
	    </div>
	</div>
</section>

@stop