<!DOCTYPE html>
<html data-whatinput="initial" data-whatintent="mouse" class=" whatinput-types-initial"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Hotel Supreme App</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="{{asset('project design')}}/css/foundation.css">
            <link rel="stylesheet" href="{{asset('project design')}}/css/app.css">
            <link rel="stylesheet" href="{{asset('project design')}}/pickadate/lib/themes/default.css">
            <link rel="stylesheet" href="{{asset('project design')}}/pickadate/lib/themes/default.date.css">
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="49qhhm-dropdown-menu" role="menubar">
            <li role="menuitem"><a href="/">Home</a></li>
            <li role="menuitem"><a href="{{ route('client.index') }}">Clients</a></li>
            <li role="menuitem"><a href="{{ route('reservation') }}">Reservations</a></li>
           
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    @yield('content')
    

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright Hasan 2020</li>
      </ul>
    </div>

    <script>
      $(document).foundation();
    </script>

        <script src="{{asset('project design')}}/js/vendor/jquery.js"></script>
        <script src="{{asset('project design')}}/js/vendor/what-input.js"></script>
        <script src="{{asset('project design')}}/js/vendor/foundation.js"></script>
        <script src="{{asset('project design')}}/js/app.js"></script>
        <script src="{{asset('project design')}}/pickadate/lib/picker.js"></script>
        <script src="{{asset('project design')}}/pickadate/lib/picker.date.js"></script>
        <script>
            $('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>