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
								<form role="form" action="<?php echo base_url(); ?>admin/admin_login" method="POST">
								    <div class="form-group">
								      <label for="username">Username:</label>
								      <input type="text" class="form-control" id="email" name="username" placeholder="Enter username">
								    </div>
								    <div class="form-group">
								      <label for="pwd">Password:</label>
								      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
								    </div>
							    	<button type="submit" class="btn btn-default">Submit</button>
							  	</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>