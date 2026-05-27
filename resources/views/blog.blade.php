@php($title = "Blog by Dr. Sanil Sinhasan on Mental & Sexual Health Awareness")  
@section('meta_desc')Latest blog posts from Dr. Sanil Sinhasan on mental wellness, sexual health awareness, and healthy living tips for Mumbai patients. @endsection

@extends('layouts.default')    
@section('content')

<div class="page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-7">
				<div class="page-tittle text-right">
					<h1>Blog</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="sec-info blog-list">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6 col-md-12 col-sm-12 mb-4">
				<a href="{{ route('blog.most-effective-treatments-for-anxiety') }}" class="blog-card-link">
					<article class="blog-card">
						<div class="blog-card-media">
							<img src="{{ asset('resources/assets/images/most-effective-treatments-for-anxiety.png') }}" alt="Anxiety treatment blog">
						</div>
						<div class="blog-card-body">
							<h3>What Are the Most Effective Treatments for Anxiety?</h3>
						<p>Anxiety can disrupt sleep, work, relationships, and peace of mind, so finding trusted treatment in Mumbai is essential.</p>
							{{-- <span class="blog-card-cta">Read full article</span> --}}
						</div>
					</article>
				</a>
			</div>
		</div>
	</div>	
</section>

@stop