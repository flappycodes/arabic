<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title> 
	<?php echo Asset::css(
            array(
            	'admin_template/css/bootstrap.min.css',
            	'admin_template/css/bootstrap-theme.css',
            	'admin_template/css/elegant-icons-style.css',
                'admin_template/css/font-awesome.css',
            	'admin_template/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css',
            	'admin_template/assets/fullcalendar/fullcalendar/fullcalendar.css',
                'admin_template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css',
                'admin_template/css/owl.carousel.css',
                'admin_template/css/jquery-jvectormap-1.2.2.css',
                'admin_template/css/fullcalendar.css',
                'admin_template/css/widgets.css',
                'admin_template/css/style.css',
                'admin_template/css/style-responsive.css',
                'admin_template/css/xcharts.min.css',
                'admin_template/css/jquery-ui-1.10.4.min.css'
        )); 
    ?>

</head>
<?php if (!$current_user): ?>
    <body class="login-img3-body">
    <?php echo $content; ?>
<?php else: ?>
    <body class="padTop53">
<?php endif ?>
<?php if ($current_user): ?>
 <section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="/" class="logo">a<span class="lite">rabic</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">                    
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>                    
            </ul>
            <!--  search form end -->                
        </div>

    </header>      
      <!--header end-->

   <!--sidebar start-->
   <aside>
      <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">                
                <li class="active">
                    <?php echo Html::anchor('admin', '<i class="icon_house_alt"></i> Dashboard') ?>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_cog"></i>
                        <span>Settings</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li>
                            <?php echo Html::anchor('admin/users', 'Users') ?>
                        </li>                          
                        <li><a class="" href="/">Madarasah Information</a></li>
                        <li>
                            <?php echo Html::anchor('admin/logout', 'Logout') ?>
                        </li> 
                    </ul>
              </li> 
              
          </ul>
          <!-- sidebar menu end-->
      </div>
   </aside>
   <!--sidebar end-->
      
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">            
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
                <?php if (Session::get_flash('success')): ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p>
                        <?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if (Session::get_flash('error')): ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p>
                        <?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
            <?php echo $content; ?>
        </div>
      </section>
      <!--main content end-->
  </section>
    <!--END FOOTER -->
    	<?php endif; ?>
    
    <?php echo Asset::js(
            array(
                'admin_template/js/jquery.js',
                'admin_template/js/jquery-ui-1.10.4.min.js',
                'admin_template/js/jquery-1.8.3.min.js',
                'admin_template/js/jquery-ui-1.9.2.custom.min.js',
                'admin_template/js/bootstrap.min.js',
                'admin_template/js/jquery.scrollTo.min.js',
                'admin_template/js/jquery.nicescroll.js',
                'admin_template/assets/jquery-knob/js/jquery.knob.js',
                'admin_template/js/jquery.sparkline.js',
                'admin_template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js',
                'admin_template/js/owl.carousel.js',
                'admin_template/js/fullcalendar.min.js',
                'admin_template/assets/fullcalendar/fullcalendar/fullcalendar.js',
                'admin_template/js/calendar-custom.js',
                'admin_template/js/jquery.rateit.min.js',
                'admin_template/js/jquery.customSelect.min.js',
                'admin_template/assets/chart-master/Chart.js',
                'admin_template/js/scripts.js',
                'admin_template/js/sparkline-chart.js',
                'admin_template/js/easy-pie-chart.js',
                'admin_template/js/jquery-jvectormap-1.2.2.min.js',
                'admin_template/js/jquery-jvectormap-world-mill-en.js',
                'admin_template/js/xcharts.min.js',
                'admin_template/js/jquery.autosize.min.js',
                'admin_template/js/jquery.placeholder.min.js',
                'admin_template/js/gdp-data.js',
                'admin_template/js/morris.min.js',
                'admin_template/js/sparklines.js',
                'admin_template/js/charts.js',
                'admin_template/js/jquery.slimscroll.min.js',
                'datatables/jquery.dataTables.js',
                'datatables/dataTables.bootstrap.js'
        )); 
    ?>
    <script>

      //carousel
      $(document).ready(function() {
          $('#userstbl').dataTable();
      });

  </script>
</body>
</html>
