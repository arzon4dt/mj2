<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Registration Error</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content=""/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= asset_url('images/logo-dark.png');?>">
		
		<!-- vector map CSS -->
		<link href="<?= asset_url('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="<?= asset_url('dist/css/style.css');?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  error-page pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="<?= asset_url('dist/img/logo.png'); ?>" alt="brand"/>
						<span class="brand-text">Megahjaya</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<a class="inline-block btn btn-primary btn-rounded btn-outline nonecase-font" href="<?=site_url('login');?>">Back to Login</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 error-bg-img">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<span class="block error-head text-center txt-primary mb-10">Upss!</span>
											<span class="text-center nonecase-font mb-20 block error-comment" style="color:black;">Initial user already added.</span>
											<p class="text-center">Please contact your Administrator.</p>
										</div>	
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?= asset_url('vendors/bower_components/jquery/dist/jquery.min.js');?>"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?= asset_url('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
		<script src="<?= asset_url('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js');?>"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?= asset_url('dist/js/jquery.slimscroll.js');?>"></script>
		
		<!-- Init JavaScript -->
		<script src="<?= asset_url('dist/js/init.js');?>"></script>
	</body>
</html>
