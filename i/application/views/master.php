<?php
$id = $this->session->userdata('id');
$details = $this->MAdmin->get_admin_records($id);
//$type = $this->MAdmin->get_type_record($details->id);
?>
<!DOCTYPE html>
<html style="height: 100% !important;">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet"
		  href="<?= base_url('assets/backend/bower_components/'); ?>bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"
		  href="<?= base_url('assets/backend/bower_components/'); ?>font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url('assets/backend/bower_components/'); ?>Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet"
		  href="<?= base_url('assets/backend/bower_components/'); ?>datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/backend/dist/'); ?>css/AdminLTE.min.css">

	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?= base_url('assets/backend/dist/'); ?>css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?= base_url('assets/backend/bower_components/'); ?>morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?= base_url('assets/backend/bower_components/'); ?>jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet"
		  href="<?= base_url('assets/backend/bower_components/'); ?>bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet"
		  href="<?= base_url('assets/backend/bower_components/'); ?>bootstrap-daterangepicker/daterangepicker.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?= base_url('assets/backend/'); ?>bower_components/select2/dist/css/select2.min.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet"
		  href="<?= base_url('assets/backend/plugins/'); ?>bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link href="<?php echo base_url('assets/backend/plugins/datatable/buttons/css/buttons.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/plugins/datatable/datatables.responsive.css') ?>" rel="stylesheet" type="text/css" />
	<!-- custom css-->
	<link rel="stylesheet" href="<?= base_url('assets/backend/dist/'); ?>css/custom.css">
	<!-- Google Font -->
	<link rel="stylesheet" href="<?php echo base_url('assets/backend/dist/css/googlefont.css') ?>">
	<script defer src="<?php echo base_url('assets/backend/dist/js/googlemapapi.js') ?>" type="text/javascript"></script>
</head>
<body class="hold-transition skin-red sidebar-mini" style="height: 100% !important;">
<div class="nexo-overlay"
	 style="width: 100%; height: 100%; background: rgba(255, 255, 255, 1); z-index: 5000; position: fixed; top: 0px; left: 0px;">
	<i class="fa fa-refresh fa-spin nexo-refresh-icon"
	   style="color: rgb(0, 0, 0); font-size: 50px; position: absolute; top: 50%; left: 50%; margin-top: -25px; margin-left: -25px; width: 44px; height: 50px;"></i>
</div>
<div class="wrapper" style="height: 100% !important;">

	<header class="main-header">
		<!-- Logo -->
		<a href="<?= base_url('admin'); ?>" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>A</b>D</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Admin</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?= base_url("$details->image"); ?>" class="user-image"
								 alt="User Image">
							<span class="hidden-xs"><?= $details->name; ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?= base_url("$details->image"); ?>"
									 class="img-circle" alt="User Image">

								<p>
									<?= $details->name; ?>
								</p>
							</li>
							<!-- Menu Body -->
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="<?= base_url("admin/edit_user/$id"); ?>"
									   class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a href="<?= base_url("login/logout"); ?>" class="btn btn-default btn-flat">Sign
										out</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?= base_url("$details->image"); ?>" class="img-circle"
						 alt="User Image">
				</div>
				<div class="pull-left info">
					<p><?= $details->name; ?></p>
					<i class="fa fa-circle text-success"></i> Online
				</div>
			</div>
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li>
					<a href="<?= base_url('admin'); ?>">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						<span class="pull-right-container">
            </span>
					</a>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-bicycle"></i> <span>Load Entry</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('load/add_load_entry'); ?>"><i class="fa fa-circle-o"></i> Add
								Load Entry</a>
						</li>
						<li><a href="<?= base_url('load/view_load_entry'); ?>"><i class="fa fa-circle-o"></i>View
								Load Entry</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i> <span>Customers</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('customer/add_customer'); ?>"><i class="fa fa-circle-o"></i> Add
								Customer</a>
						</li>
						<li><a href="<?= base_url('customer/view_customer'); ?>"><i class="fa fa-circle-o"></i>View
								Customer</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-user"></i> <span>Shippers</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('shipper/add_shippers'); ?>"><i class="fa fa-circle-o"></i> Add
								Shippers</a>
						</li>
						<li><a href="<?= base_url('shipper/view_shippers'); ?>"><i class="fa fa-circle-o"></i>View
								Shippers</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-user"></i> <span>Consignee</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('consignee/add_consignee'); ?>"><i class="fa fa-circle-o"></i> Add
								Consignee</a>
						</li>
						<li><a href="<?= base_url('consignee/view_consignee'); ?>"><i class="fa fa-circle-o"></i>View
								Consignee</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i> <span>Drivers</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('driver/add_driver'); ?>"><i class="fa fa-circle-o"></i> Add
								Driver</a>
						</li>
						<li><a href="<?= base_url('driver/view_driver'); ?>"><i class="fa fa-circle-o"></i>View
								Driver</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-android"></i> <span>Equipment</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('equipment/add_equipment'); ?>"><i class="fa fa-circle-o"></i> Add
								Equipment</a>
						</li>
						<li><a href="<?= base_url('equipment/view_equipment'); ?>"><i class="fa fa-circle-o"></i>View
								Equipment</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-share"></i> <span>Dispatch</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('dispatch/add_dispatch'); ?>"><i class="fa fa-circle-o"></i> Add
								Dispatch</a>
						</li>
						<li><a href="<?= base_url('dispatch/view_dispatch'); ?>"><i class="fa fa-circle-o"></i>View
								Dispatch</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-sticky-note"></i> <span>Report</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('report/driver_pay_summary'); ?>"><i class="fa fa-circle-o"></i>
								Driver Pay
								Summary</a>
						</li>
						<li><a href="<?= base_url('report/dispatch_pay_summary'); ?>"><i class="fa fa-circle-o"></i>Dispatch
								Pay Summary</a>
						</li>
						<li><a href="<?= base_url('report/driver_pay_report'); ?>"><i class="fa fa-circle-o"></i>Driver
								Pay
								Report</a></li>
						<li><a href="<?= base_url('report/customer_report'); ?>"><i class="fa fa-circle-o"></i>Customer
								Revenue Report</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-sticky-note"></i> <span>Account Holder</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('account/add_account_holder'); ?>"><i class="fa fa-circle-o"></i>Add
								Account Holder</a>
						</li>
						<li><a href="<?= base_url('account/view_account_holder'); ?>"><i class="fa fa-circle-o"></i>View
								Account Holder</a>
						</li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-sticky-note"></i> <span>Expense</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('expense/add_expense'); ?>"><i class="fa fa-circle-o"></i>Add
								Expense</a>
						</li>
						<li><a href="<?= base_url('expense/view_expense'); ?>"><i class="fa fa-circle-o"></i>View
								Expense</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?= base_url('admin/edit_settings'); ?>">
						<i class="fa fa-cog"></i> <span>Settings</span>
						<span class="pull-right-container">
            </span>
					</a>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>User</span>
						<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('admin/add_user'); ?>"><i class="fa fa-circle-o"></i>Add
								User</a>
						</li>

						<li><a href="<?= base_url('admin/view_user'); ?>"><i class="fa fa-circle-o"></i>View User</a>
						</li>
					</ul>
				</li>

			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<?= $container; ?>
	</div>
	<!-- /.content-wrapper -->


	<!-- /.control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets/backend/bower_components/'); ?>jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/backend/bower_components/'); ?>jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/backend/bower_components/'); ?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/backend/'); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/backend/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/backend/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatable/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatable/datatables.responsive.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatable/buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatable/buttons/js/buttons.flash.min.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatable/buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatable/buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatable/buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/backend/bower_components/'); ?>moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/backend/bower_components/'); ?>bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url('assets/backend/bower_components/'); ?>bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url('assets/backend/plugins/'); ?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/backend/dist/'); ?>js/adminlte.js"></script>
<script src="<?= base_url('assets/backend/dist/'); ?>js/jspdf.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/backend/dist/'); ?>js/pages/dashboard.js"></script>
<!-- Custom Js-->
<script src="<?php echo base_url('assets/backend/dist/js/custom.js') ?>"></script>
</body>
</html>
