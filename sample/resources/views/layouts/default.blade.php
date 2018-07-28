<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel ���Ž̳�</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href="/" id="logo">Sample App</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('help') }}">����</a></li>
              <li><a href="#">��¼</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="container">
      @yield('content')
	  @include('layouts._footer')
    </div>    
  </body>
</html>