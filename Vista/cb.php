<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Wallapp | -</title>
  

  <?php include ('css.php'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="../Content/vendors/jquery/dist/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script src="../Content/alertify/alertify.min.js"></script>

<!-- include the style -->
<link rel="stylesheet" href="../Content/alertify/css/alertify.min.css" />
<!-- include a theme -->
<link rel="stylesheet" href="../Content/alertify/css/themes/default.min.css" />  

</head>
<script>
 $(document).ready(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-shopping-cart"></i> <span>Wallapp</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../Content/Imagenes/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido,</span>
              <h2>Usuario</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>MENÚ</h3>
              <ul class="nav side-menu">

                <?php include ('menu.html'); ?>

              </ul>
            </div>
              
            </div>
            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars">&nbspBUSCADOR</i> </a>
              </div>
              
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">WALLAPP
                    <!-- <span class=" fa fa-angle-down"></span> -->
                  </a>
               
                </li>

              </ul>
            </nav>

          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12  col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="col-md-12 col-xs-12">
             
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="input-group">
                <input id="scanner_input" class="form-control" placeholder="Click the button to scan an EAN..." type="text" /> 
                <span class="input-group-btn"> 
                  <button class="btn btn-default" type="button" data-toggle="modal" data-target="#livestream_scanner">
                    <i class="fa fa-barcode fa-lg"></i>
                  </button> 
                </span>
              </div>

              <div class="modal" id="livestream_scanner">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">Barcode Scanner</h4>
                    </div>
                    <div class="modal-body" style="position: static">
                      <div id="interactive" class="viewport" style="max-width: 200px; min-width: 200px; max-height: 200px; min-height: 200px"></div>
                      <div class="error"></div>
                    </div>
                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      

        <!-- /page content -->
        <!-- footer content -->

        <footer class="footer_fixed">
          <div class="pull-right">
            <strong>Copyright SYCSOFT 2018 Template by Colorlib</strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <?php include ('js.php'); ?>
    

  </body>
  </html>
