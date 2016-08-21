<title>boox.asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php  
	$id_com = $result['id_com'];  
	$pid = $result['pid'];
	$complain = $result['complain'];  
	$status = $result['status'];      
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3>Edit Complain</h3>
					<div class="kanan">
						<a href="<?php echo base_url(); ?>admin/dashboard">
							<button style="background:red;border-color: #337ab7;color:white" type="button" class="btn btn-default" data-dismiss="modal">Back</button>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<form action="<?php echo base_url(); ?>admin/update/save_update" method="post">
									<p>Complain ID</p>
									<input class="form-control" type="text" name="id_com" value="<?php echo $id_com ?>" readonly>
									<p>Customer's ID</p>
									<input class="form-control" type="text" value="<?php echo $pid ?>" name="pid" readonly><br>
									<br>
									<textarea class="form-control" name="complain" cols="50" rows="5" readonly><?php echo $complain ?></textarea>
									<br>
									<div class="radio">
										<label><input type="radio" name="status" <?php if($status == 'Pending'){ echo 'checked';}else{} ?> value="Pending">Pending</label>
										<label><input type="radio" name="status" <?php if($status == 'On Progress'){ echo 'checked';}else{} ?> value="On Progress">On Progress</label>
										<label><input type="radio" name="status" <?php if($status == 'Finished'){ echo 'checked';}else{} ?> value="Finished">Finished</label>
									</div>
									<p>&nbsp;</p>
									<button type="submit" class="btn btn-default">Save</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>