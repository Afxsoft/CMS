<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $viewTitle . ' | ' . $viewSiteName ?></title>
    <base href="<?php echo HOST_ROOT; ?>" />
    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="dashboard/css/font-awesome.min.css" rel="stylesheet">	
    <!-- Custom Color CSS -->
    <link href="dashboard/css/less-style.css" rel="stylesheet">	
    <!-- Custom CSS -->
    <link href="dashboard/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="outer">
      <div class="sidebar">

        <div class="sidey">
          <div class="logo">
            <h1><a href="/admin/"><i class="fa fa-desktop br-red"></i> Sitruc <span>Le slogan</span></a></h1>
          </div>
          <div class="sidebar-dropdown"><a href="#" class="br-red"><i class="fa fa-bars"></i></a></div>
          <div class="side-nav" style="">
            <div class="side-nav-block">
              <h4>Menu</h4>
              <ul class="list-unstyled">
                <li><a href="ui.html"><i class="fa fa-wrench"></i> Configuration</a></li>
                <li><a href="#"><i class="fa fa-file"></i> Pages </a></li>
                <li><a href="/admin/user"><i class="fa fa-user"></i> Users</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="mainbar">
        <div class="main-head">
          <div class="container">
            <div class="">
              <div class="col-md-9 col-sm-4 col-xs-6">
                <h2><i class="fa fa-desktop lblue"></i> Administration</h2>
              </div> 
              <div class="col-md-3 hidden-sm hidden-xs">
                <div class="head-user dropdown pull-right">
                  <a href="#"  id="profile">

                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['User']['name']; ?> <span class="label label-danger">Admin</span> 
                  </a>
                  <a href="/logout" class="btn btn-default">Se deconnecter <i class="fa fa-sign-in "></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>	
          </div>

        </div>
        <?php echo $alert ?>
        <div class="main-content">
            <?php echo $viewContent; ?>
        </div>
        <!-- Mainbar ends -->

        <div class="clearfix"></div>
      </div>
    </div>
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="dashboard/js/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="dashboard/js/bootstrap.min.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="dashboard/js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="dashboard/js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="dashboard/js/custom.js"></script>
  </body>
</html>