<!-- Content Header (Page header) -->
<section class="content-header" xmlns="http://www.w3.org/1999/html">
	<h1>
		Shippers | <a href="<?php echo base_url('shipper/view_shippers'); ?>">
			<button class="btn btn-info btn-sm">View Shippers</button>
		</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Shippers</li>
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
					<h3 class="box-title">Add Shipper</h3>
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
				<form role="form" action="<?= base_url('shipper/store_shipper'); ?>" method="post"
					  enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Shipper ID</label>
											<input type="text" class="form-control" name="shippers_id" readonly
												   value="<?= htmlspecialchars($shippers_id); ?>"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Name</label>
											<input type="text" class="form-control" name="name"
												   value="<?= set_value('name'); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('name', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Address</label>
											<textarea class="form-control" name="address"
													  id="exampleInputPassword1"><?= set_value('address'); ?></textarea>
											<span>
					<?php echo form_error('address', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">City</label>
											<input type="text" class="form-control" name="city"
												   value="<?= set_value('city'); ?>"
												   id="city">
											<input type="hidden" value="" name="latitude" id="latitude">
											<input type="hidden" value="" name="longitude" id="longitude">
											<span>
					<?php echo form_error('city', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Postal/Zip</label>
											<input type="text" class="form-control" name="postal_zip"
												   value="<?= set_value('postal_zip'); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('postal_zip', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">State</label>
											<input type="text" class="form-control" name="state"
												   value="<?= set_value('state'); ?>"
												   id="exampleInputPassword1">
											<span>
					<?php echo form_error('state', '<div class="error" style="color: red">', '</div>'); ?>
				</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Contact</label>
											<input type="text" class="form-control" name="contact"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Telephone</label>
											<input type="text" class="form-control" name="telephone"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Ext.</label>
											<input type="text" class="form-control" name="ext"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Contact Email</label>
											<input type="text" class="form-control" name="email"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Notes</label>
											<textarea class="form-control" name="notes"
													  id="exampleInputPassword1"></textarea>
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
<!-- google map api call script -->
<script src="<?php echo base_url('assets/backend/dist/js/googlemapapicall.js') ?>"></script>
