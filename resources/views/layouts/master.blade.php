<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'P3' --}}
        @yield('title')
    </title>

    <meta charset='utf-8'>

    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- A Google Font: Open Sans -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<!--Yield any page specific CSS files or anything else you might want in the heading -->
    @yield('head')

</head>

<body>
  <header>
      <div class="container">
          <div class="row">
              <h1 class="site-title"><strong>P4: PFL Fantasy Finders Keepers</strong></h1>
          </div>

<!--Site Navigation -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li><a href="http://p1.courtney-dwa15-practice.me/">P1</a></li>
        <li><a href="http://p2.courtney-dwa15-practice.me/">P2</a></li>
        <li><a href="http://p3.courtney-dwa15-practice.me/">P3</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navigation Ends Here -->
</div>
</header>
    <div id="section">
<!-- Main page content will be yielded here -->
        @yield('content')
    </div>

    <div class="container">
     <div class="row">
    <footer>
        &nbsp; &copy; {{ date('Y') }}
    </footer>
     </div>
     </div>

<!--Yield any page specific JS files or anything else you might want at the end of the page -->

    @yield('body')
</body>
</html>
