<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Consignee | <a href="<?php echo base_url('consignee/add_consignee'); ?>">
			<button class="btn btn-info btn-sm">Add Consignee</button>
		</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Consignee</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">View Consignees</h3>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
							<?php
							$message = '';
							if (isset($this->session->message)) {
								$message = $this->session->message;
								if ($message == "Record Updated Successfully") { ?>
									<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<?php echo htmlspecialchars($message); ?>
									</div>
								<?php } elseif ($message == "Data Deleted Successfully") { ?>
									<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<?php echo htmlspecialchars($message); ?>
									</div>
								<?php } else { ?>
									<div class="alert alert-danger">
										<button class="close" data-dismiss="alert">×</button>
										<?php echo htmlspecialchars($message); ?>
									</div>
								<?php } ?>
							<?php }
							?>
						</div>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body" style="overflow-y: scroll">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>Consignee ID</th>
							<th>Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal/Zip</th>
							<th>State</th>
							<th>Contact</th>
							<th>Phone</th>
							<th>Ext</th>
							<th>Email</th>
							<th>Notes</th>
							<th>Latitude</th>
							<th>Longitude</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($results as $result):
							?>
							<tr>
								<td><?= htmlspecialchars($result->consignee_id); ?></td>
								<td><?= htmlspecialchars($result->name); ?></td>
								<td><?= htmlspecialchars($result->address); ?></td>
								<td><?= htmlspecialchars($result->city); ?></td>
								<td><?= htmlspecialchars($result->postal_zip); ?></td>
								<td><?= htmlspecialchars($result->state); ?></td>
								<td><?= htmlspecialchars($result->contact); ?></td>
								<td><?= htmlspecialchars($result->phone); ?></td>
								<td><?= htmlspecialchars($result->ext); ?></td>
								<td><?= htmlspecialchars($result->email); ?></td>
								<td><?= htmlspecialchars($result->notes); ?></td>
								<td><?= htmlspecialchars($result->latitude); ?></td>
								<td><?= htmlspecialchars($result->longtitude); ?></td>
								<td>
									<a class="btn btn-info btn-edit mr-1 btn-xs"
									   href="<?php echo base_url("consignee/edit_consignee/$result->id"); ?>"><i
											class="fa fa-edit"></i></a>
									<a class="btn btn-danger del btn-xs"
									   href="<?php echo base_url("consignee/delete_consignee/$result->id"); ?>"
									   onclick="return confirm('Are you want to delete');"><i
											class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /.box -->

		</div>
		<!--/.col (left) -->
	</div>
	<!-- /.row -->
	<!-- Main row -->
	<div class="row">
		<!-- Left col -->
		<section class="col-lg-7 connectedSortable">

		</section>
		<!-- /.Left col -->
		<!-- right col (We are only adding the ID to make the widgets sortable)-->
		<section class="col-lg-5 connectedSortable">


		</section>
		<!-- right col -->
	</div>
	<!-- /.row (main row) -->

</section>
<!-- /.content -->
