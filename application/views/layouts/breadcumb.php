<!-- Title -->
<div class="row heading-bg">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-dark">panel-wells</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
	<?php
		for($i = 0; $i < sizeof($breadcumb); $i++) {
			if($i == sizeof($breadcumb)-1){
				echo '<li class="active">'.$breadcumb[$i].'</li>';
			}else{
				echo '<li><a href="javascript:void(0);">'.$breadcumb[$i].'</a></li>';
			}
		}
	?>
</ol>
</div>
<!-- /Breadcrumb -->
</div>
<!-- /Title -->
