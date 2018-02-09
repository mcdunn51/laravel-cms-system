<!DOCTYPE html>
<html lang="en">

<head>
@include('partials/_head')
</head>

<body>

  @include('partials/_navigation')

  <div class="container">
  	@include('partials/_messages')
    @yield('content')      
    @include('partials/_footer')
  </div><!-- end of .container -->  

  @include('partials/_scripts')    

</body>

</html>
