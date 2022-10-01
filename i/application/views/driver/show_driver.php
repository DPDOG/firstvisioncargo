<style>
	#logo {
		float: left;
		margin-top: 8px;
	}

	#company {
		float: right;
		text-align: right;
	}

	h2.name {
		font-size: 1.4em;
		font-weight: normal;
		margin: 0;
	}

	table .no {
		color: #000;
		font-size: 1.1em;
		/* background: #C4CBC2; */
	}

	table .desc {
		text-align: left;
	}
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Driver | <a href="<?php echo base_url('driver/view_driver'); ?>">
			<button class="btn btn-info btn-sm">View Drivers</button>
		</a>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Driver</li>
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
					<h3 class="box-title">Driver Details</h3>
				</div>
				<!-- /.box-header -->
				<div class="row">
					<div class="col-md-12">
						<div class="box-body">
							<div class="row ">
								<div class="col-md-8 col-md-offset-2">
									<header class="clearfix">
										<div id="logo">
											<img src="<?= base_url("$company->logo"); ?>" width="150px" height="100px">
										</div>
										<div id="company">
											<h2 class="name"><?= htmlspecialchars($company->name); ?></h2>
											<div><?= htmlspecialchars($company->phone); ?></div>
											<div><?= htmlspecialchars($company->email); ?></div>
										</div>
									</header>
									<hr/>

									<main class="invoice_report text-center">
										<table border="0" cellspacing="0" cellpadding="0" style="width: 100%">
											<tbody>
											<tr>
												<td width="30%" class="text-left"><h4>Driver ID : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($driver->driver_id); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>First Name : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($driver->first_name); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Last Name : </h4></td>
												<td class="text-left"><h4><?=htmlspecialchars($driver->last_name); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Address : </h4></td>
												<td class="text-left"><h4><?=htmlspecialchars($driver->address); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>City : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($driver->city); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>State : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($driver->state); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Postal/Zip : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($driver->postal_zip); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Telephone : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($driver->phone); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Email : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($driver->email); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>DOB : </h4></td>
												<td class="text-left"><h4><?=htmlspecialchars($driver->dob); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>SSN : </h4></td>
												<td class="text-left"><h4><?=htmlspecialchars($driver->ssn); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>License Number : </h4></td>
												<td class="text-left"><h4><?=htmlspecialchars($driver->license_number); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>License Expiry : </h4></td>
												<td class="text-left"><?= htmlspecialchars($driver->license_exp); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Medical Date : </h4></td>
												<td class="text-left"><?= htmlspecialchars($driver->medical_date); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Medical Expiry : </h4></td>
												<td class="text-left"><?= htmlspecialchars($driver->medical_exp); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Drug Test : </h4></td>
												<td class="text-left"><?= htmlspecialchars($driver->drug_test); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Pay Type : </h4></td>
												<td class="text-left"><?= htmlspecialchars($driver->pay_type); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Per Mile : </h4></td>
												<td class="text-left"><?= htmlspecialchars($driver->per_mile); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Empty Mile : </h4></td>
												<td class="text-left"><?= htmlspecialchars($driver->empty_mile); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Percentage : </h4>
												</td>
												<td class="text-left"><?= htmlspecialchars($driver->percentage); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Status : </h4>
												</td>
												<td class="text-left"><?= htmlspecialchars($driver->status); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Notes : </h4>
												</td>
												<td class="text-left"><?=htmlspecialchars($driver->notes); ?></td>
											</tr>
											</tbody>
										</table>
									</main>
								</div>
							</div>
						</div>
						<br><br>
						<!-- /.box-body -->
						<div class="box-footer text-center">
							<strong><?= $company->name; ?></strong>&nbsp;&nbsp;&nbsp;<?= $company->address; ?>
						</div>
					</div>
				</div>
				<!-- form start -->
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
