<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?=$title;?></title>
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
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="<?= asset_url('dist/img/logo.png'); ?>" alt="brand"/>
						<span class="brand-text">Megahjaya</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-primary  btn-rounded btn-outline" href="<?=site_url('registration');?>">Sign Up</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to ERP</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="text-center" style="color: red; margin-top:10px;">
											<?php 
											if($this->session->flashdata('login_error')){
												echo $this->lang->line('login_error');
											}
											?>
										</div>
										<div class="form-wrap">
											<form id="loginform" method="post" action="<?=site_url('login/check_login');?>">
												<div class="form-group">
													<label class="control-label mb-10" for="username">Username</label>
													<input type="username" class="form-control" required="" id="username" name="username" placeholder="<?=$this->lang->line('username');?>">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="password">Password</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html"><?=$this->lang->line('forgot');?></a>
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="password" name="password" placeholder="<?=$this->lang->line('password');?>">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> <?=$this->lang->line('remember');?></label>
													</div>
													<div class="clearfix"></div>
												</div>
												<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>">
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary  btn-rounded"><?=$this->lang->line('login');?></button>
												</div>
											</form>
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
