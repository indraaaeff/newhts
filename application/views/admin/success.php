<title>boox.asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3>Admin Login</h3>
				</div>
				<div class="panel-body">
					<?php 
					if($this->session->flashdata('flash_data')) {  
						echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('flash_data').'</p>';  
					}  
					?> 
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-4">
								<a href="<?php echo base_url(); ?>admin/dashboard">
									<button type="button" class="btn btn-default">Back To Dashboard</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>