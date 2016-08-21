<title>boox.asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Register</h3>
					<div class="kanan">
						<a href="<?php echo base_url(); ?>home">
							<button style="background:red;border-color: #337ab7;color:white" type="button" class="btn btn-default" data-dismiss="modal">Home</button>
						</a>
					</div>
				</div>
				<div class="panel-body">
<!-- 					<div class="alert alert-success">
					  <?php echo $message; ?>
					</div> -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-4">
								<form role="form" action="<?php echo base_url(); ?>register/index" method="POST">
								    <div class="form-group">
								      <label for="username">Username:</label>
								      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
								      <label for="pwd">Password:</label>
								      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
								      <label for="nama">Nama:</label>
								      <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter name" required>
								      <label for="email">Email:</label>
								      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
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