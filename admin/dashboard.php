	<?php include 'header.php';
        include 'connection.php';

		$query_pending= "select count(*) from tbl_grievance where status='Pending'";
		$res_pending = mysqli_query($dbCon,$query_pending);
		$row_pending = mysqli_fetch_array($res_pending);

		$query_resolve= "select count(*) from tbl_grievance where status='Resolved'";
		$res_resolve = mysqli_query($dbCon,$query_resolve);
		$row_resolve = mysqli_fetch_array($res_resolve);
    ?>



	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<span class="breadcrumb-item active">Dashboard</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
<!-- /page header -->
<!-- Content area -->
	<div class="content">
    <!-- Main charts -->
		<h3 class="text-center" style="font-weight:bold;">Current Status</h3>
		<div class="row">
			<div class="col-sm-4"></div>
			
			<div class="col-sm-2 dashcard text-center mr-3">
				<h3><?php echo $row_pending[0]; ?></h3>
				<h5>Pending Grievances</h5>
			</div>
			<div class="col-sm-2 dashcard text-center ml-3">
				<h3><?php echo $row_resolve[0]; ?></h3>
				<h5>Resolved Grievances</h5>
			</div>

			<div class="col-sm-4"></div>
		</div>
	</div>

	<?php include 'footer.php';?>
