<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css(array('assets/plugins/bootstrap/css/bootstrap.css',
	'assets/css/main.css',
	'assets/css/theme.css',
	'assets/css/MoneAdmin.css',
	'assets/plugins/Font-Awesome/css/font-awesome.css',
	'assets/plugins/flot/examples/examples.css',
	'assets/plugins/timeline/timeline.css')); ?>

	<?php echo Asset::js(array(
		'assets/plugins/jquery-2.0.3.min.js',
		'assets/plugins/bootstrap/js/bootstrap.min.js',
		'assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js',
		'assets/plugins/flot/jquery.flot.js',
		'assets/plugins/flot/jquery.flot.resize.js',
		'assets/plugins/flot/jquery.flot.time.js',
		'assets/plugins/flot/jquery.flot.stack.js',
		'assets/js/for_index.js'
	)); ?>
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
</head>
<body class="padTop53 " >
<?php if ($current_user): ?>
 <div id="wrap" >
        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <!-- <img src="assets/img/logo.png" alt="" /> -->
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">
                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                     

							<li><?php echo Html::anchor('admin/logout', '<i class="icon-signout"></i> Logout') ?></li>
                          
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->

        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                <?php echo Html::img('assets/img/user.png', array("alt" => "User", 'class' => "media-object img-thumbnail user-img",'style'=>' width: 70px;')); ?>
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Joe Romlin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                <li class="panel <?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
					<?php echo Html::anchor('admin', '<i class="icon-dashboard"></i> Dashboard') ?>
				</li>

                <li class="panel">
                    <?php echo Html::anchor('admin/users', 'Users') ?>
                </li>
            </ul>

        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Admin Dashboard </h1>
                    </div>
                </div>
                  <hr />
             
                 <div class="container">
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
                 	<?php echo $content; ?>
                 </div>
                </div> 

			</div>
		
        </div>
    </div>
 </div>
              

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right"> 
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Visitor &nbsp; : <span>23,000</span></li>
                    <li>Users &nbsp; : <span>53,000</span></li>
                    <li>Registrations &nbsp; : <span>3,000</span></li>
                </ul>
            </div>
            <div class="well well-small">
                <button class="btn btn-block"> Help </button>
                <button class="btn btn-primary btn-block"> Tickets</button>
                <button class="btn btn-info btn-block"> New </button>
                <button class="btn btn-success btn-block"> Users </button>
                <button class="btn btn-danger btn-block"> Profit </button>
                <button class="btn btn-warning btn-block"> Sales </button>
                <button class="btn btn-inverse btn-block"> Stock </button>
            </div>
            <div class="well well-small">
                <span>Profit</span><span class="pull-right"><small>20%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                </div>
                <span>Sales</span><span class="pull-right"><small>40%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                </div>
                <span>Pending</span><span class="pull-right"><small>60%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                </div>
                <span>Summary</span><span class="pull-right"><small>80%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                </div>
            </div>
        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  &nbsp;2017 &nbsp;</p>
    </div>
    <!--END FOOTER -->
    	<?php endif; ?>
<?php if (!$current_user): ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $title; ?></h1>
				<hr>

			</div>
			<div class="col-md-12">
        <?php echo $content; ?>
			</div>
		</div>
		<hr/>
	</div>
<?php endif; ?>
</body>
</html>
