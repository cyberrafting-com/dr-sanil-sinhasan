@php($title = "")  
@section('meta_desc') @endsection

@extends('layouts.default')            
@section('content') 

<section class="sec-contact mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-md-10 col-12">
                <h2 class="title-head text-center pb-5">Send Us Message</h2>
                <div class="appointment-form">                    
                    @if(session('success'))
                    <p style="color: green;">{{ session('success') }}</p>
                    @endif
                    <form method="post" action="{{ route('saveContact') }}">
                    @csrf
                       <input type="text" name="{{session('cr_honey')}}" style="display:none" />
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control form-control-lg" name="first_name" aria-describedby="name" placeholder="Enter Your Name" value="{{ old('first_name') }}">
                                    @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control form-control-lg" name="last_name" aria-describedby="name" placeholder="Enter Your Name" value="{{ old('last_name') }}">
                                    @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" aria-describedby="email" placeholder="Enter email Id" value="{{ old('email') }}">
                                    @error('email')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Mobile No</label>
                                    <input type="tel" class="form-control form-control-lg" name="mobile" aria-describedby="mobile" placeholder="Enter Mobile No" value="{{ old('mobile') }}">
                                    @error('mobile')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>  
                            </div>      
                        </div>                   
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" name="message">{{ old('message') }}</textarea>
                            @error('message')
                            <p style="color: red;">{{ $message }}</p>
                            @enderror
                        </div>  
                        <button type="submit" class="btn mt-3 default-btn">Submit</button>
                    </form>   
                </div>
            </div>            
        </div>
    </div>          
</section>  

@stop