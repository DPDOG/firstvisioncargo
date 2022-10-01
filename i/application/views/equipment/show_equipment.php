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
		Equipment | <a href="<?php echo base_url('equipment/view_equipment'); ?>">
			<button class="btn btn-info btn-sm">View Equipments</button>
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
					<h3 class="box-title">Equipment Details</h3>
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
												<td width="30%" class="text-left"><h4>Owner First Name : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->first_name); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Owner Last Name : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->last_name); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Unit Number : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->unit_number); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Make : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->make); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Type : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->type); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Year : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->year); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>VIN : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->vin); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Plate Number : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->plate_number); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Plate Expiry : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->plate_expiry); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Mileage : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->mileage); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Province : </h4></td>
												<td class="text-left"><h4><?= htmlspecialchars($equipment->province); ?></h4></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Axels : </h4></td>
												<td class="text-left"><?= htmlspecialchars($equipment->axels); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Fuel Type : </h4></td>
												<td class="text-left"><?= htmlspecialchars($equipment->fuel_type); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Weight : </h4></td>
												<td class="text-left"><?= htmlspecialchars($equipment->weight); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Start Date : </h4></td>
												<td class="text-left"><?= htmlspecialchars($equipment->start_date); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Deactivation Date : </h4></td>
												<td class="text-left"><?= htmlspecialchars($equipment->deactivation_date); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>DOT Inspection Date : </h4></td>
												<td class="text-left"><?= htmlspecialchars($equipment->dot_date); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>IFTA Truck : </h4></td>
												<td class="text-left"><?= htmlspecialchars($equipment->ifta_truck); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>Annual Inspection Date : </h4>
												</td>
												<td class="text-left"><?= htmlspecialchars($equipment->annual_date); ?></td>
											</tr>
											<tr>
												<td width="30%" class="text-left"><h4>90 Days Inspection Date : </h4>
												</td>
												<td class="text-left"><?= htmlspecialchars($equipment->days_inspection_date); ?></td>
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
