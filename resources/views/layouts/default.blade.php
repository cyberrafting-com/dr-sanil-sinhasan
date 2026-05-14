<!DOCTYPE html>
<html>

<head>
    <title> {{ $title }} </title>
    <meta name="description" content="@yield('meta_desc')">
    @include('includes.header') 
    <link rel="canonical" href="{{ url()->current() }}" />                           
</head>    

<body>
    <div class="page-wrapper">
        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')
    </div>          
</body>

</html>              
