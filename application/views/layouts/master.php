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
	<?php $this->load->view('layouts/css_assets.php'); ?>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper  theme-1-active pimary-color-blue">
		<?php $this->load->view('layouts/header_menu'); ?>
		<?php $this->load->view('layouts/navigation_menu'); ?>	
        <!-- Main Content -->
		<div class="page-wrapper">
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>">
			
			<?php $this->load->view($page_view); ?>	
			
			<?php $this->load->view('layouts/footer'); ?>
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	<?php $this->load->view('layouts/script_assets.php'); ?>
</body>

</html>
