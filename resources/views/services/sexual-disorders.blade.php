@php($title = "Treatment for Sexual Disorders in Mumbai | Dr. Sanil Sinhasan")  
@section('meta_desc')Reclaim Your Intimate Well-Being: with Premier Sexual Disorder Treatment in Mumbai by Dr. Sanil Sinhasan. 10+ experience in Psychiatry & Sexology disorder. Book now! @endsection

@extends('layouts.default')    
@section('content')

<div class="page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-7">
				<div class="page-tittle text-right">
					<h1>Sexual Disorder</h1>
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
						<img src="{{ asset('/resources/assets/images/sexual-disorders.jpg')}}">
					</div>
				</div>	
					<div class="content-wrap">
						<h3 class="para-15">What are Sexual Disorders?</h3>
						<p class="para-20">Sexual dysfunctions are disorders related to a particular phase of the sexual response cycle. For example, sexual dysfunctions include sexual desire disorders, sexual arousal disorders, orgasm disorders, and sexual pain disorders. If a person has difficulty with some phase of the sexual response cycle or a person experiences pain with sexual intercourse, he/she may have a sexual dysfunction.</p>
					<h3 class="para-15">Erectile Dysfunction (ED)</h3> 
					<ul class="para-20 list-unstyled">
						<li><i class="fa-solid fa-snowflake"></i>Erectile dysfunction (ED) is a common type of male sexual dysfunction. It is when a man has trouble getting or keeping an erection. ED becomes more common as you get older. But it's not a natural part of aging.</li>

						<li><i class="fa-solid fa-snowflake"></i>Some people have trouble speaking with their doctors about sex. But if you have ED, you should surely discuss it with your doctor before it gets worse. </li>

						<li><i class="fa-solid fa-snowflake"></i>ED can be a sign of health problems. It may mean your blood vessels are clogged. It may mean you have nerve damage from diabetes. If you don't see your doctor, these problems will go untreated.</li>
					</ul>
					<h3 class="para-15">Premature Ejaculation</h3>
					<p class="para-20">This disorder is characterized by ejaculation within the first minute after sexual penetration with a partner. While this happens from time to time with most men, it becomes a concern if the pattern persists for more than six months.</p>

					<h3 class="para-15">Delayed Ejaculation</h3>

					<p class="para-20">Delayed ejaculation is an ongoing inability to achieve sexual climax or ejaculation during sex with a partner.</p>
					<h3 class="para-15">Female Orgasmic Disorder</h3> 
					<ul class="para-20 list-unstyled">
						<li><i class="fa-solid fa-snowflake"></i>Female orgasmic disorder occurs when there is a significant delay or total absence of orgasm associated with the sexual activity. </li>
						<li><i class="fa-solid fa-snowflake"></i>This condition must cause a problem in the relationship with the sexual partner in order to be defined as a disorder.</li>
					</ul>
					<h3 class="para-20">Male Orgasmic Disorder</h3>
					<ul class="para-15 list-unstyled">
						<li><i class="fa-solid fa-snowflake"></i>When a male experiences significant delay or total absence of orgasm following sexual activity, he may have male orgasmic disorder. </li>
						<li><i class="fa-solid fa-snowflake"></i>In order to be qualified as a disorder, the symptoms must present a significant problem for the individual.</li>
					</ul>
					</div>
				
			</div>
			<div class="col-md-5">
				@include('includes.service-list') 
			</div>
	    </div>
	</div>
</section>

@stop