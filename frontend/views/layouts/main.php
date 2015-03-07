<?php 	
	use yii\widgets\Breadcrumbs;
	use yii\helpers\Html;
	use frontend\assets\AppAsset;
	use frontend\widgets\Alert;
	AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-us" ng-app="passa">
 
    <head>
	    <meta charset="utf-8">
	    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
	 
	    <title>Passa</title>
	    <meta content="" name="description">
	    <meta content="" name="author">
	    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"><!-- Basic Styles -->
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
	    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
			<link href="<?php echo \Yii::$app->request->baseUrl; ?>/css/fonts.css" media="screen" rel="stylesheet" type="text/css">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/css/smartadmin-production.css" media="screen" rel="stylesheet" type="text/css">	    
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/css/smartadmin-skins.css" media="screen" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/css/select2.css" media="screen" rel="stylesheet" type="text/css">
	    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/css/demo.css" media="screen" rel="stylesheet" type="text/css">
	    <!-- FAVICONS -->
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/favicon/favicon.ico" rel="icon" type="image/x-icon">
	    <!-- GOOGLE FONT -->
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/favicon/favicon.ico" rel="icon" type="image/x-icon">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/sptouch-icon-iphone.png" rel="apple-touch-icon">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/touch-icon-ipad.png" rel="apple-touch-icon" sizes="76x76">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/touch-icon-iphone-retina.png" rel="apple-touch-icon" sizes="120x120">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/touch-icon-ipad-retina.png" rel="apple-touch-icon" sizes="152x152">
	    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
	    <meta content="yes" name="apple-mobile-web-app-capable">
	    <meta content="black" name="apple-mobile-web-app-status-bar-style">
	    <!-- Startup image for web apps -->
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" rel="apple-touch-startup-image">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" rel="apple-touch-startup-image">
	    <link href="<?php echo \Yii::$app->request->baseUrl; ?>/img/splash/iphone.png" media="screen and (max-device-width: 320px)" rel="apple-touch-startup-image">
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>				
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
		</head>
 
    <body class="">
			<?php $this->beginBody() ?>
        <header id="header">
			    <div id="logo-group">
			        <!-- PLACE YOUR LOGO HERE -->
			         <span id="logo"><img alt="SmartAdmin" src="<?php echo \Yii::$app->request->baseUrl; ?>/img/logo.png"></span> 
			        <!-- END LOGO PLACEHOLDER -->        
			 
			         <span class="activity-dropdown" id="activity"> <b class="badge">21</b></span> 
			 
			        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
			 
			        <div class="ajax-dropdown">
			            [JUSTIFIED_BUTTONS]
			 
			            <div class="ajax-notifications custom-scroll">
			               [DROPDOWN_CONTENT]
			            </div><!-- end notification content -->
			 
			            <!-- footer: refresh area -->
			             <span>Last updated on: 12/12/2013 9:43AM</span> 
			            <!-- end footer -->
			        </div><!-- END AJAX-DROPDOWN -->
			 
			    </div><!-- projects dropdown -->
			 
			    <div id="project-context">
			        <span class="label">Projects:</span> <span class="popover-trigger-element dropdown-toggle" data-toggle="dropdown" id="project-selector">Recent projects</span> 
			 
			        <!-- Suggestion: populate this list with fetch and push technique -->
			        <ul class="dropdown-menu">
			            <li>...</li>
			        </ul><!-- end dropdown-menu-->
			 
			    </div><!-- end projects dropdown -->
			    <!-- pulled right: nav area -->
			 
			 
			    <div class="pull-right">
			        <!-- collapse menu button -->
			 
			        <div class="btn-header pull-right" id="hide-menu">
			            <span><a href="javascript:void(0);" title="Collapse Menu"><i class="fa fa-reorder"></i></a></span>
			        </div><!-- end collapse menu -->
			 
			        <!-- logout button -->
							<?php if(!\Yii::$app->user->isGuest){ ?>
			        <div class="btn-header transparent pull-right" id="logout">
			            <span>
			            	<a data-logout-msg="You can improve your security further after logging out by closing this opened browser" href="login.html" title="Sign Out">
				            	<i class="fa fa-sign-out"></i>
			            	</a>
			            </span>
			        </div><!-- end logout button -->
							<?php } ?>
			        <!-- fullscreen button -->
			        <div class="btn-header transparent pull-right" id="fullscreen">
			            <span><a href="javascript:void(0);" onclick="launchFullscreen(document.documentElement);" title="Full Screen"><i class="fa fa-arrows"></i></a></span>
			        </div><!-- end fullscreen button -->
			 
			        
			 
			    </div><!-- end pulled right: nav area -->
				</header><!-- END HEADER -->
 
        <aside id="left-panel">
				    <!-- User info -->
				    <div class="login-info">
				        <span>
				        <!-- User image size is adjusted inside CSS, it should stay as it -->
				         <a href="javascript:void(0);" id="show-shortcut"><img alt="me"
				        class="online" src="<?php echo \Yii::$app->request->baseUrl; ?>/img/avatars/sunny.png">
				        <span><?php echo (\Yii::$app->user->isGuest) ? "Invitado" :  \Yii::$app->user->identity->username;?></span></a></span>
				    </div>
				    <!-- end user info -->
				    
				    <nav>
				        <ul>
					        <li><?= Html::a(Html::encode('Inteligencia de Negocios'), array("inteligencia/index")); ?></li>
				           
				        </ul>
				    </nav>
				</aside>
 
        <div id="main">
 
				    <!-- RIBBON -->
				    <div id="ribbon">
				        <span class="ribbon-button-alignment btn btn-ribbon" data-html="true" data-original-title="message..." data-placement="bottom" data-title="refresh" id="refresh"></span> 
				        <!-- breadcrumb -->
				        <ol class="breadcrumb">
				            <!-- if you are using the AJAX version, the breadcrumb area will be empty -->
				            <li><?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?></li>
				        </ol><!-- end breadcrumb -->
				 
				    </div><!-- END RIBBON -->
				    <!-- MAIN CONTENT -->
				 
				    <div id="content">
				      <?= $content ?> </div><!-- END MAIN CONTENT -->
				 
				</div><!-- END MAIN PANEL -->
 
        <div id="shortcut">
            [METRO_SHORTCUT]
        </div>
 
        <!-- END SHORTCUT AREA -->
				 
				<!--================================================== -->
				<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
				        <script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->
				<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
				<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
				
				
				
				<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
				    <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->
				 
				<!-- BOOTSTRAP JS -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/bootstrap/bootstrap.min.js"></script>
				
				<!-- CONTROLADORES ANGULAR -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/toptenproductos.js"></script>
				 
				<!-- CUSTOM NOTIFICATION -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/notification/SmartNotification.min.js"></script>
				 
				<!-- JARVIS WIDGETS -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/smartwidgets/jarvis.widget.min.js"></script>
				 
				<!-- EASY PIE CHARTS -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
				 
				<!-- SPARKLINES -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/sparkline/jquery.sparkline.min.js"></script>
				
				 
				<!-- JQUERY VALIDATE -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/jquery-validate/jquery.validate.min.js"></script>
				 
				<!-- JQUERY MASKED INPUT -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/masked-input/jquery.maskedinput.min.js"></script>
				 
				<!-- JQUERY SELECT2 INPUT -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/select2/select2.min.js"></script>
				 
				<!-- JQUERY UI + Bootstrap Slider -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
				 
				<!-- browser msie issue fix -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>
				 
				<!-- FastClick: For mobile devices: you can disable this in app.js -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/plugin/fastclick/fastclick.js"></script>
				<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
				 
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/demo.js"></script>
				 
				<!-- MAIN APP JS FILE -->
				<script src="<?php echo \Yii::$app->request->baseUrl; ?>/js/app.js"></script>
				 
				<!-- Your GOOGLE ANALYTICS CODE Below -->
				<script type="text/javascript">
				  $('.select2').select2({
					  placeholder: "Seleccione",					  
					});
					
					$('.select2min1').select2({
					  minimumInputLength: 1,
					  placeholder: "Seleccione",
					});
					
					$('.select2min4').select2({
					  minimumInputLength: 4,
					  placeholder: "Seleccione",
					});
					
					
					
				  
				  $(function() {
				    $( ".datepicker" ).datepicker();
				  });
				</script>
				<script type="text/javascript">
					
				      var _gaq = _gaq || [];
				      _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				      _gaq.push(['_trackPageview']);
				    
				      (function() {
				        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				      })();  
				</script>
				<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>