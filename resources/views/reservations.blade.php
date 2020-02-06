<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-mouse whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Landon Hotel App</title>
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
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem"><a href="./home.html">Home</a></li>
            <li role="menuitem"><a href="./clients.html">Clients</a></li>
            <li role="menuitem"><a href="./reservations.html">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Reservations</h4>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">ROOM</th>
              <th width="200">Name</th>
              <th width="200">DATES</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody>
                    </tbody>
        </table>
      </div>
    </div>

    

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright 2017</li>
      </ul>
    </div>

    <script>
      $(document).foundation();
    </script>

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