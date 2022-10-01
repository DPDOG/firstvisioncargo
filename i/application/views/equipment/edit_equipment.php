<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Equipment | <a href="<?php echo base_url('equipment/view_equipment'); ?>">
			<button class="btn btn-info btn-sm">View Equipment</button>
		</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Equipment</li>
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
					<h3 class="box-title">Edit Equipment</h3>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
							<?php
							$message = '';
							if (isset($this->session->message)) {
								$message = $this->session->message;
								if ($message == "Record Inserted Successfully") { ?>
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
				<form role="form" action="<?= base_url('equipment/update_equipment'); ?>" method="post"
					  enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Owner First Name</label>
											<input type="text" class="form-control" name="owner_first_name"
												   value="<?=htmlspecialchars($equipment->first_name); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('owner_first_name', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Owner Last Name</label>
											<input type="text" class="form-control" name="owner_last_name"
												   value="<?=htmlspecialchars($equipment->last_name); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('owner_last_name', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Unit Number</label>
											<input type="text" class="form-control" name="unit_number"
												   value="<?= htmlspecialchars($equipment->unit_number); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('unit_number', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Make</label>
											<input type="text" class="form-control" name="make"
												   value="<?= htmlspecialchars($equipment->make); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('make', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Type</label>
											<input type="text" class="form-control" name="type"
												   value="<?= htmlspecialchars($equipment->type); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Year</label>
											<input type="text" class="form-control" name="year"
												   value="<?= htmlspecialchars($equipment->year); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('year', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">VIN</label>
											<input type="text" class="form-control" name="vin"
												   value="<?= htmlspecialchars($equipment->vin); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('vin', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Plate Number</label>
											<input type="text" class="form-control" name="plate_number"
												   value="<?= htmlspecialchars($equipment->plate_number); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('plate_number', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Plate Expiry</label>
											<input type="text" class="form-control datepicker" name="plate_exp"
												   value="<?=htmlspecialchars($equipment->plate_expiry); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('plate_exp', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Mileage</label>
											<input type="text" class="form-control" name="mileage"
												   value="<?= htmlspecialchars($equipment->mileage); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Truck</label>
											<input type="text" class="form-control" name="truck"
												   value="<?= htmlspecialchars($equipment->truck); ?>"
												   id="truck">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Trailer</label>
											<input type="text" class="form-control" name="trailer"
												   value="<?= htmlspecialchars($equipment->trailer); ?>"
												   id="trailer">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Province</label>
											<input type="text" class="form-control" name="province"
												   value="<?= htmlspecialchars($equipment->province); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Axels</label>
											<input type="text" class="form-control" name="axels"
												   value="<?= htmlspecialchars($equipment->axels); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Fuel Type</label>
											<input type="text" class="form-control" name="fuel_type"
												   value="<?= htmlspecialchars($equipment->fuel_type); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Weight</label>
											<input type="text" class="form-control" name="weight"
												   value="<?= htmlspecialchars($equipment->weight); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Start Date</label>
											<input type="text" class="form-control datepicker" name="start_date"
												   value="<?= htmlspecialchars($equipment->start_date); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('start_date', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Deactivation Date</label>
											<input type="text" class="form-control datepicker" name="deactivation_date"
												   value="<?= htmlspecialchars($equipment->deactivation_date); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">DOT Inspection Date</label>
											<input type="text" class="form-control datepicker" name="dot_date"
												   value="<?= htmlspecialchars($equipment->dot_date); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('dot_date', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">IFTA Truck</label>
											<select class="form-control select2" name="ifta_truck" id="">
												<?php if ($equipment->ifta_truck == "Yes") { ?>
													<option value="Yes" selected>Yes</option>
													<option value="No">No</option>
												<?php } else { ?>
													<option value="Yes">Yes</option>
													<option value="No" selected>No</option>
												<?php } ?>
											</select>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Annual Inspection Date</label>
											<input type="text" class="form-control datepicker" name="annual_date"
												   value="<?= htmlspecialchars($equipment->annual_date); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('annual_date', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">90 Days Inspection Date</label>
											<input type="text" class="form-control datepicker"
												   name="days_inspection_date"
												   value="<?= htmlspecialchars($equipment->days_inspection_date); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('days_inspection_date', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
									</div>
								</div>
							</div>

							<input type="hidden" value="<?= htmlspecialchars($equipment->id); ?>" name="id">

							<!-- /.box-body -->
							<div class="box-footer text-center">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
					<!-- form start -->
				</form>
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
