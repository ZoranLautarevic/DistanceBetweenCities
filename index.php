<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Distance Between Cities App</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron">
      <div class="container-fluid">
        <h1>Rastojanje između gradova</h1>
        <p>Naša aplikacija će vam pomoći da izračunate putnu razdaljinu.</p>

        <form class="form-horizontal">
          <div class="form-group">
              <label for="from" class="col-xs-2 control-label">Od:</label>
              <div class="col-xs-10">
                  <input type="text" id="od" placeholder="Početak" class="form-control">
              </div>
          </div>
          <div class="form-group">
              <label for="to" class="col-xs-2 control-label">Do:</label>
              <div class="col-xs-10">
                  <input type="text" id="do" placeholder="Odredište" class="form-control">
              </div>
          </div>
        </form>

        <div class="col-xs-offset-2 col-xs-10">
          <button class="btn btn-success btn-lg" onclick="calcRoute();">Pošalji</button>
        </div>
      </div>

      <div class="container-fluid">
        <div id="googleMap">
        
        </div>
        <div id="output">
        
        </div>
      </div>
    </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI8ok8bmHDx5qk0n3MSgXnDcNFLCxtMnY&callback=initMap&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>