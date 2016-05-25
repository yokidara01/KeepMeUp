<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
        <script src="{{URL::asset('js/jquery.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    </head>
    <body>
        @section('sidebar')
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" id="logo"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li> 
      <li><a href="#">Page 3</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>







<div class="panel panel-default"  >
<div class="panel-heading">
    <h3 class="panel-title">MediaType</h3>
  </div>
  <div class="panel-body">
 
<div class="row" >
 

<div class="col-sm-4 col-md-2" >
    <div class="thumbnail">
      <img src="{{URL::asset('images/thumbnail.png')}}" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div><div class="col-sm-4 col-md-2">
    <div class="thumbnail">
      <img src="{{URL::asset('images/thumbnail.png')}}" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div><div class="col-sm-4 col-md-2">
    <div class="thumbnail">
      <img src="{{URL::asset('images/thumbnail.png')}}" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div><div class="col-sm-4 col-md-2">
    <div class="thumbnail">
      <img src="{{URL::asset('images/thumbnail.png')}}" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-md-2">
    <div class="thumbnail">
      <img src="{{URL::asset('images/thumbnail.png')}}" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  

</div>


 </div>
</div>





<iframe src="https://docs.google.com/presentation/d/13HSvFjWBj3evbC_C6KzNnrLkMebFG2JrvUAKO0eano4/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>







        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>