<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Report
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Report</li>
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
					<h3 class="box-title">Driver Pay Report</h3>
				</div>

				<!-- /.box-header -->
				<div class="row">
					<div class="col-md-1"></div>
					<form role="form" action="<?= base_url('report/show_driver_pay_report'); ?>" method="post" target="_blank"
						  enctype="multipart/form-data">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputPassword1">Driver</label>
									<select class="form-control select2" name="driver_id" required>
										<option value="">--Select--</option>
										<?php foreach ($drivers as $driver): ?>
											<option
												value="<?= htmlspecialchars($driver->id); ?>"><?= htmlspecialchars($driver->driver_id) . ' - ' . htmlspecialchars($driver->first_name) . ' ' . htmlspecialchars($driver->last_name); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">From Date</label>
									<input type="text" class="form-control datepicker" name="from_date" required
										   value="<?php echo date('Y-m-d'); ?>"
										   id="exampleInputPassword1">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">To Date</label>
									<input type="text" class="form-control datepicker" name="to_date" required
										   value="<?php
										   $first_date = date('Y-m-d');
										   echo date('Y-m-t', strtotime($first_date));
										   ?>"
										   id="exampleInputPassword1">
								</div>
							</div>
							<!-- /.box-body -->

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<!-- form start -->
				<br><br><br>
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
