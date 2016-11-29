<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Short Link</title>

    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top teal lighten-2">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Short Link </a>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <div class="col-lg-6 col-md-offset-3 center">
            <h1>Enter Your URL</h1>
            <form method="post" action="{{url('shorten')}}">
            {!! csrf_field() !!}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukin URL" name="url">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-warning" type="submit">Confirm</button>
                        <a class="btn btn-default btn-warning" href="/">Reset</a>
                    </span>
                </div>
            </form>
            @yield('content')
          </div>
      </div>


    </div><!-- /.container -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    </body>
</html>
