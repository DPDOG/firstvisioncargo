<!-- Content Header (Page header) -->
<section class="content-header" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<h1>
		Load Entry | <a href="<?php echo base_url('load/view_load_entry'); ?>">
			<button class="btn btn-info btn-sm">View Load Entry</button>
		</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Load Entry</li>
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
					<h3 class="box-title">Add Load Entry</h3>
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
				<form role="form" action="<?= base_url('load/store_load'); ?>" method="post"
					  enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Load#</label>
											<input type="text" class="form-control" name="load_id" readonly
												   value="<?= htmlspecialchars($load_id); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Customer</label>
											<select name="customer_id" class="form-control select2" id="customer_id">
												<?php foreach ($customers as $customer): ?>
													<option
														value="<?= htmlspecialchars($customer->id); ?>"><?= htmlspecialchars($customer->name); ?></option>
												<?php endforeach; ?>
											</select>
											<span>
					<?php echo form_error('customer_id', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Customer Load</label>
											<input type="text" class="form-control" name="customer_load"
												   value="<?= set_value('customer_load'); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('customer_load', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Load Type</label>
											<select name="load_type" class="form-control select2">
												<option value="TL">TL</option>
												<option value="LTL">LTL</option>
											</select>
											<span>
					<?php echo form_error('load_type', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Date</label>
											<input type="text" class="form-control datepicker" name="date" readonly
												   value="<?= date('Y-m-d'); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('date', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Pick Up Date</label>
											<input type="text" class="form-control datepicker" name="pick_up_date"
												   value="<?= set_value('pick_up_date'); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('pick_up_date', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Delivery Date</label>
											<input type="text" class="form-control datepicker" name="delivery_date"
												   value="<?= set_value('delivery_date'); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('delivery_date', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Dispatch</label>
											<select class="form-control select2" name="dispatch_id">
												<?php foreach ($dispatches as $dispatch): ?>
													<option
														value="<?= htmlspecialchars($dispatch->id); ?>"><?= htmlspecialchars($dispatch->first_name) . ' ' . htmlspecialchars($dispatch->last_name); ?></option>
												<?php endforeach; ?>
											</select>
											<span>
					<?php echo form_error('dispatch_id', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Line Haul Rate</label>
											<input type="text" class="form-control" name="line_haul_rate"
												   value="0"
												   id="line_haul_rate">
											<span>
					<?php echo form_error('line_haul_rate', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Unloading$</label>
											<input type="text" class="form-control" name="unloading" value="0"
												   id="unloading">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Reimburse$</label>
											<select class="form-control select2 reimburse" name="reimburse"
													id="reimburse">
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
											<span>
					<?php echo form_error('reimburse', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Detention$</label>
											<input type="text" class="form-control" name="detention" value="0"
												   id="detention">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Layover$</label>
											<input type="text" class="form-control" name="layover" value="0"
												   id="layover">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Other Charges$</label>
											<input type="text" class="form-control" name="other_charges" value="0"
												   id="other_charges">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Total Rate$</label>
											<input type="text" class="form-control" name="total_rate" readonly
												   id="total_rate">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Driver</label>
											<select name="driver_id" class="form-control select2 driver_id"
													id="driver_id">
												<option value="">--Select--</option>
												<?php foreach ($drivers as $driver): ?>
													<option
														value="<?= htmlspecialchars($driver->id); ?>"><?= htmlspecialchars($driver->first_name) . ' ' . htmlspecialchars($driver->last_name); ?></option>
												<?php endforeach; ?>
											</select>
											<span>
					<?php echo form_error('driver_id', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
                                        <input type="hidden" name="oldConsigneeLat" id="oldConsigneeLat">
                                        <input type="hidden" name="oldConsigneeLong" id="oldConsigneeLong">
                                        <input type="hidden" name="oldConsigneeCity" id="oldConsigneeCity">
										<div class="form-group">
											<label for="exampleInputPassword1">Truck</label>
											<input type="text" class="form-control" name="truck"
												   id="truck">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Trailer</label>
											<input type="text" class="form-control" name="trailer"
												   id="trailer">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Rate</label>
											<input type="text" class="form-control" name="rate"
												   id="rate">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Shipper</label>
											<select class="form-control select2" name="shipper_id" id="shipper_id">
												<option value="">--Select--</option>
												<?php foreach ($shippers as $shipper): ?>
													<option value="<?= htmlspecialchars($shipper->id); ?>"><?= htmlspecialchars($shipper->name); ?></option>
												<?php endforeach; ?>
											</select>
											<span>
					<?php echo form_error('shipper_id', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Address</label>
											<textarea class="form-control" name="address"
													  id="address"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">City</label>
											<input type="text" class="form-control" name="city"
												   id="city">
											<input type="hidden" value="" name="latitude" id="latitude">
											<input type="hidden" value="" name="longitude" id="longitude">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Zip Code</label>
											<input type="text" class="form-control" name="zip_code"
												   id="zip_code">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">State</label>
											<input type="text" class="form-control" name="state"
												   id="state">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Weight</label>
											<input type="text" class="form-control" name="weight"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Qty</label>
											<input type="text" class="form-control" name="qty"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Shipper Contact</label>
											<input type="text" class="form-control" name="shipper_contact"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Note</label>
											<textarea class="form-control" name="note"
													  id="exampleInputPassword1"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Consignee</label>
											<select class="form-control select2" name="consignee_id" id="consignee_id">
												<option value="">--Select--</option>
												<?php foreach ($consignees as $consignee): ?>
													<option
														value="<?= htmlspecialchars($consignee->id); ?>"><?= htmlspecialchars($consignee->name); ?></option>
												<?php endforeach; ?>
											</select>
											<span>
					<?php echo form_error('consignee_id', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Address</label>
											<textarea class="form-control" name="con_address"
													  id="con_address"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">City</label>
											<input type="text" class="form-control" name="con_city"
												   id="con_city">
											<input type="hidden" value="" name="clatitude" id="clatitude">
											<input type="hidden" value="" name="clongitude" id="clongitude">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Zip Code</label>
											<input type="text" class="form-control" name="con_zip_code"
												   id="con_zip_code">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">State</label>
											<input type="text" class="form-control" name="con_state"
												   id="con_state">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Consignee Contact</label>
											<input type="text" class="form-control" name="con_contact"
												   id="con_contact">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Con. Note</label>
											<textarea class="form-control" name="con_note"
													  id="con_note"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Empty M</label>
											<input type="text" class="form-control" name="empty_m" value="0"
												   id="empty_mile">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Loaded M</label>
											<input type="text" class="form-control" name="loaded_m" value="0"
												   id="loaded">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Per Mile</label>
											<input type="text" class="form-control" name="per_mile"
												   id="per_mile">
										</div>
									</div>
								</div>
							</div>
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



