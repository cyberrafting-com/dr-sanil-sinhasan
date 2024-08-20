@php($title = "Best Treatment for Addiction in Mumbai | Dr. Sanil Sinhasan")  
@section('meta_desc')Break free from addiction with top treatment in Mumbai by Dr. Sanil Sinhasan, experienced Psychiatrist & Sexologist. Get a a healthier, addiction-free life. @endsection

@extends('layouts.default')    
@section('content')

<div class="page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-7">
				<div class="page-tittle text-right">
					<h1>Deaddiction</h1>
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
						<img src="{{ asset('/resources/assets/images/de-addiction.jpg')}}">
					</div>
					</div>
					<div class="content-wrap">
						<p class="para-20">Addiction treatment is not one-size-fits-all. Treatments may vary based on your needs. You can choose the treatment that works best for you based on the substance you're abusing, the level of care you need, your personal mental health needs, or what health care options you can afford. </p>

						<h3 class="para-15">Detoxification</h3>
						<p class="para-20">Detoxification refers to the physiological or medicinal removal of toxic substances from the body. One can detoxify their body from drugs or alcohol. If your body is habituated to substance abuse for a long time, detoxification, done by experts, will help you flush all the toxins out of your body. </p>


						<h3 class="para-15">CBT</h3>
						<p class="para-10">Cognitive behavioral therapy (CBT) is a form of talking therapy which can be used to treat people with a wide range of mental health problems.</p>

						<p>CBT aims to help people become aware of when they make negative interpretations, and of behavioral patterns which reinforce the distorted thinking.  Cognitive therapy helps people to develop alternative ways of thinking and behaving which aims to reduce their psychological distress.</p>

				</div>
			</div>
			<div class="col-md-5">
				@include('includes.service-list')  
			</div>
	    </div>
	</div>
</section>
@stop