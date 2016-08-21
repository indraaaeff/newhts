<title>boox.asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Login</h3>
				</div>
				<div class="panel-body">
					<?php 
					if($this->session->flashdata('flash_data')) {  
						echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('flash_data').'</p>';  
					}  
					?> 
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6 ">
								<form role="form" action="<?php echo base_url(); ?>user_login" method="POST">
								    <div class="form-group">
								      <label for="username">Username:</label>
								      <input type="text" class="form-control" id="email" name="username" placeholder="Enter username">
								    </div>
								    <div class="form-group">
								      <label for="pwd">Password:</label>
								      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
								    </div>
								    <div class="checkbox">
								      <label><input type="checkbox"> Remember me</label>
								    </div>
							    	<button type="submit" class="btn btn-default">Login</button>
							    	<a href="<?php echo base_url(); ?>register">
							    		<button type="button" class="btn btn-default">Sign Up</button>
							    	</a>
							  	</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>