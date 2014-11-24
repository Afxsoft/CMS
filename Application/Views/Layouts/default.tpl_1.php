<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $viewTitle . ' | ' . $viewSiteName ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="/Public/app/css/font-awesome.min.css">
        <link rel="stylesheet" href="/Public/app/css/stylesheet.css">
        <link rel="stylesheet" href="/Public/app/css/skeleton.css">
        <link rel="stylesheet" href="/Public/app/css/styles.css">
        <link rel="stylesheet" href="/Public/app/css/layout.css">


        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<div class="container">
		<?php 
		
		if(!isset($page)){
			$page = "";
		}
		if($page != "calendrier"){ 
		?>
			<div id="entete" class="sixteen columns">
			
				<?php if(empty($_SESSION['User'])):?>
				<a href="/login" class="three columns btn-connexion">Inscription</a>
				<a href="/login" class="three columns btn-connexion offset-by-one">Connexion</a>
				<?php else:?>
				<a href="/logout" class="three columns btn-connexion">Se déconnecter</a>
				<?php endif;?>
				<div class="four columns btn-recherche"><input type="text"/><i class="fa fa-search"></i></div>
				
			</div>
			<div id="slide" class="sixteen columns ">
				
			</div>
			<div class="clear"></div>
			<div id="menu">
				<a class="onglet four columns omega">Itinéraires</a>
				<a class="onglet four columns alpha omega">Evenements</a>
				<a class="onglet four columns alpha omega" href="calendrier">Calendrier</a>
				<a class="onglet four columns alpha last">Infos & Tarifs</a>
				<div class="clear"></div>
			</div>
		
		<div class="clear"></div>
		<?php } ?>
		<div id="conteneur">
	      <?php echo $viewContent; ?>
		</div>
		<div class="clear"></div>
		<footer>
		<p>&copy; Footer 2014</p>
		</footer>
	</div> <!-- /container -->        
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>