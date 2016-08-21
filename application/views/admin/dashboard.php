<title>boox.asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3>Dashboard</h3>
					<div class="kanan">
						<a href="<?php echo base_url(); ?>admin/dashboard/logout">
							<button style="background:red;border-color: #337ab7;color:white" type="button" class="btn btn-default" data-dismiss="modal">Logout</button>
						</a>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<?php $result = json_decode(json_encode($posts), True); ?>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr align=center>
										<th>Complain ID</th>
										<th>Customer ID</th>
										<th>Complain</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($result as $row) { ?>
									<tr align=center>
										<td><?php echo "$row[id_com]" ?></td>
										<td><?php echo "$row[pid]" ?></td>
										<td><?php echo "$row[complain]" ?></td>
										<td> <a href="<?php echo base_url(); ?>admin/dashboard/edit/<?php echo $row['id_com'] ?>"><?php echo "$row[status]" ?></a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<p>Note : Click the status to edit complain status.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>