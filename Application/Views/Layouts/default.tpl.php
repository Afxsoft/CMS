<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Public/app/img/favicon.ico">

    <title><?php echo $viewTitle . ' | ' . $viewSiteName ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/Public/app/css/bootstrap.css" rel="stylesheet">

    <?php if (!empty($calendar)) : ?>
        <link rel="stylesheet" href="/Public/app/css/stylesheet.css">
        <link rel="stylesheet" href="/Public/app/css/skeleton.css">
        <link rel="stylesheet" href="/Public/app/css/styles.css">
        <link rel="stylesheet" href="/Public/app/css/layout.css">
        <link rel="stylesheet" href="/Public/app/css/jquery-ui.min.css">
    <?php endif; ?>
    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/Public/app/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/Public/app/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/Public/app/css/custom.css" />
    <link href="/Public/app/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/app/css/jquery-ui-1.8.12.custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond./Public/app/js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Navbar
      ============= -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Sitruc</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="/page/qui-sommes-nous" >Qui somme nous ?</a>
            </li>
            <li class="dropdown">
              <a href="/page/infos-et-tarifs">Nos tarifs</a>
            </li>
            <li class="dropdown">
              <a href="/page/itineraire" >Itinéraire</a>
            </li>
            <li class="dropdown">
              <a href="/page/contact" >Nous contacter</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <!-- Sign in & Sign up -->
            <li id="sign-up" class="show"><a href="/page/calendrier/"><i class="fa fa-calendar"></i> Calendrier</a></li>
            <!-- Signed in. Profile Menu -->
            <li id="cogs-menu" class="hidden">
              <a href="/page/calendrier/">
                <i class="fa fa-gears fa-lg"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="wrapper">    
      <!-- Showcase
        ================ -->
      <?php if (!empty($front)) : ?>
          <div id="hp-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#hp-slider" data-slide-to="0" class=""></li>
              <li data-target="#hp-slider" data-slide-to="1" class="active"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <!-- Slider #1 -->
              <div class="item">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <h1 class="animated slideInDown">Mini-bus pour le transport du personnel de votre société</h1>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                      <div class="macbook">
                        <img src="/Public/app/slide/minibus.png" class="img-responsive" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slider #2 -->
              <div class="item active">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <h1 class="animated slideInDown">Renouvelement de nos bus</h1>
                      <div class="list">
                        <ul>
                          <li class="animated slideInLeft first delay"><span><i class="fa fa-smile-o"></i> <span>Toujours autant de confort.</span></span></li>
                          <li class="animated slideInLeft second delay"><span><i class="fa fa-life-ring"></i> <span>La sécurité, une priorité.</span></span></li>
                          <li class="animated slideInLeft third delay"><span><i class="fa  fa-recycle"></i> <span>Bus écolo.</span></span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                      <div class="macbook">
                        <img src="/Public/app/slide/bus.png" class="img-responsive" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Controls -->
            <a class="carousel-arrow carousel-arrow-prev" href="#hp-slider" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-arrow carousel-arrow-next" href="#hp-slider" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
      <?php elseif (empty($e404)) : ?>
          <div class="section-header">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="animated slideInLeft"><span> <?php echo $pageContent->title; ?> </span></h1>
                </div>
              </div>
            </div>
          </div>
      <?php endif; ?>
      <?php if (!empty($e404)) : ?>
          <div class="not-found">
          <?php endif; ?>

        <div class="container">
            <?php echo $viewContent; ?>
        </div>
        <?php if (!empty($e404)) : ?>
          </div>
      <?php endif; ?>
    </div>

    <!-- Foooter
    ================== -->
    <footer>
      <div class="container">
        <div class="row">
          <!-- Contact Us 
          =================  -->
          <div class="col-sm-4">
            <div class="headline"><h3>Nous contacter</h3></div>
            <div class="content">
              <p>
                127 Boulevard de la Révolution<br />
                23 657 Gothan City<br />
                Tèl: +0 000 000 00 00<br />
                Fax: +0 000 000 00 00<br />
                Email: <a href="mailto:contact@sitruc">contact@sitruc</a>
              </p>
            </div>
          </div>
          <!-- Social icons 
          ===================== -->
          <div class="col-sm-4">
            <div class="headline"><h3>Réseau sociale</h3></div>
            <div class="content social">
              <ul>
                <li><a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-github"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-vk"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- Subscribe 
          =============== -->
          <div class="col-sm-4">
            <div class="headline"><h3>Newsletter</h3></div>
            <div class="content">
              <form class="form" role="form">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="input-group">
                      <label class="sr-only" for="subscribe-email">Email address</label>
                      <input type="email" class="form-control" id="subscribe-email" placeholder="Enter email">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">OK</button>
                      </span>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Legal 
    ============= -->
    <div class="legal">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Sitruc. <a href="/page/mention-legale">Mention légal</a> </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php if (!empty($calendar)) : ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="/Public/app/js/jquery-ui.min.js"></script>
        <script src="/Public/app/js/objet.js"></script>
        <script src="/Public/app/js/main.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="/Public/app/js/bootstrap.min.js"></script>
        <script src="/Public/app/js/custom.js"></script>
        <script src="/Public/app/js/scrolltopcontrol.js"></script>
    <?php else: ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="/Public/app/js/jquery-ui-1.8.12.custom.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false&language=fr"></script>
        <script src="/Public/app/js/functions.js"></script>
        <script src="/Public/app/js/bootstrap.min.js"></script>
        <script src="/Public/app/js/custom.js"></script>
        <script src="/Public/app/js/scrolltopcontrol.js"></script><!-- Scroll to top javascript -->
    <?php endif; ?>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                    function () {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>
  </body>
</html>