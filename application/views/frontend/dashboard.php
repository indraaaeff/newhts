<title>boox.asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Dashboard</h3>
					<div class="kanan">
						<a href="<?php echo base_url(); ?>dashboard/logout">
							<button style="background:red;border-color: #337ab7;color:white" type="button" class="btn btn-default" data-dismiss="modal">Logout</button>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<h3>Welcome, <?= $this->session->userdata('username') ?></h3><br>
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-4 col-sm-12">
								<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create New Complain</button>
								<!-- Modal -->
								<div class="modal fade" id="myModal" role="dialog">
								  <div class="modal-dialog">
								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">New Complain</h4>
								      </div>
								      <div class="modal-body">
								         <form role="form" action="<?php echo base_url(); ?>complain" method="post">
										   <div class="form-group">
										     <label for="complain">Complain:</label>
										     <input type="text" name="pid" value="<?php echo set_value('pid', $this->session->userdata('pid')); ?>" hidden>
										     <textarea class="form-control" name="complain" rows="5" id="comment" required></textarea>
										   </div>
										   <div class="kanan">
										     <button type="submit" class="btn btn-default">Submit</button>
								             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										   </div>
										 </form>
								      </div>
								    </div>
								   </div>
								</div>
								<p>&nbsp;</p>
								<?php 
								if($this->session->flashdata('flash_data')) {  
									echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('flash_data').'</p>';  
								}  
								?> 
								<div class="panel panel-default">
    								<div class="panel-body">
										<?php $result = json_decode(json_encode($posts), True); ?>
										<table class="table table-bordered">
											<thead>
												<tr align=center>
													<th>Customer ID</th>
													<th>Complain</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($result as $row) { ?>
												<tr align=center>
													<td><?php echo "$row[pid]" ?></td>
													<td><?php echo "$row[complain]" ?></td>
													<td><?php echo "$row[status]" ?></td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
    								</div>
  								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>