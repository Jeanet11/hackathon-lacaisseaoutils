
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>La caisse à outils</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="footer-style.css">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
    </header>

    <div class="container" ">

      <div class="starter-template">
        <?= $filter ?>
      </div>

    </div><!-- /.container -->
    <nav class="navbar navbar-inverse col-md-4 col-md-offset-1">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php echo $navbar; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" ">

      <div class="starter-template">
        <?= $map ?>
      </div>

    </div><!-- /.container -->


<footer>

      <hr>
        <div class="container">
            <div class="row-offset-2">
                <div class="col-md-3">
                  <h6>Copyright &copy; 2017 <br><br> La caisse à outils</h6>
                </div>
                <div class="col-md-3">
                  <h6>  À propos de nous </h6>
                  <p>Lorem ipsum dolor sit amet, conse similique, laborum distinctio qui totam! Deleniti quos fugit, perspiciatis.</p>
                </div>
                <div class="col-md-3">
                      <h6>Nous suivre</h6>
                      <ul class="unstyled">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Annonceur</a></li>
                        <li><a href="#">Evenements</a></li>
                      </ul>
                </div>
                <div class="col-md-3">
                  <h6>Nous suivre</h6>
                  <ul class="unstyled">
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i>  Twitter</a></li>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>  Facebook</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
