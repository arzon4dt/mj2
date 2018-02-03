<div class="container-fluid">
				
	<?php $this->load->view('layouts/breadcumb') ?>
	
	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">data Table</h6>
					</div>
					<button id=add-btn class="pull-right btn btn-sm btn-default">Add</button>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="table-wrap">
							<div class="table-responsive">
								<table id="datatable" class="table table-hover display  pb-30" >
									<thead>
										<tr>
											<?php
												foreach($columns as $column){	
											?>	
												<th class="dt-head-center" data-field="<?=$column['data_field'];?>" data-align="<?=$column['data_align'];?>" ><?=$column['label'];?></th>
											<?php
												}
											?>
										</tr>
									</thead>
									<tbod>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!-- /Row -->
	
</div>
