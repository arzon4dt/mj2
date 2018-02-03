 <!-- jQuery -->
 <script src="<?= asset_url('vendors/bower_components/jquery/dist/jquery.min.js');?>"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="<?= asset_url('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
 <script src="<?= asset_url('vendors/bower_components/bootstrap-validator/dist/validator.min.js');?>"></script>
 
 <!-- Data table JavaScript -->
 <script src="<?= asset_url('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js');?>"></script>
 
 <!-- Slimscroll JavaScript -->
 <script src="<?= asset_url('dist/js/jquery.slimscroll.js');?>"></script>
 
 <!-- Progressbar Animation JavaScript -->
 <script src="<?= asset_url('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js');?>"></script>
 <script src="<?= asset_url('vendors/bower_components/jquery.counterup/jquery.counterup.min.js');?>"></script>
 
 <!-- Fancy Dropdown JS -->
 <script src="<?= asset_url('dist/js/dropdown-bootstrap-extended.js');?>"></script>
 
 <!-- Sparkline JavaScript -->
 <script src="<?= asset_url('vendors/jquery.sparkline/dist/jquery.sparkline.min.js');?>"></script>
 
 <!-- Owl JavaScript -->
 <script src="<?= asset_url('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js');?>"></script>
 
 <!-- Switchery JavaScript -->
 <script src="<?= asset_url('vendors/bower_components/switchery/dist/switchery.min.js');?>"></script>
 
<!-- Sweet-Alert  -->
<script src="<?= asset_url('vendors/bower_components/sweetalert/dist/sweetalert.min.js');?>"></script>

 <!-- EChartJS JavaScript -->
 <script src="<?= asset_url('vendors/bower_components/echarts/dist/echarts-en.min.js');?>"></script>
 <script src="<?= asset_url('vendors/echarts-liquidfill.min.js');?>"></script>
 
 <!-- Toast JavaScript -->
 <script src="<?= asset_url('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js');?>"></script>
 
 <!-- Init JavaScript -->
 <script src="<?= asset_url('dist/js/init.js');?>"></script>
 <script src="<?= asset_url('dist/js/dashboard-data.js');?>"></script>

<!-- Extra JavaScript -->
	<script src="<?= asset_url('apps-js/extra.js');?>"></script>
<script>
	var base_url = "<?=base_url();?>";
	var site_url = "<?=site_url('/');?>";
</script>
<?php
	if(isset($js_asset)){
		echo '<script src="'.asset_url('apps-js/'.$js_asset.'.js').'"></script>';
	}
?>
