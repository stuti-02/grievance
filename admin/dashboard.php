	<?php include 'header.php';
        include 'connection.php';
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
    <div class="row">
        <div class="col-xl-12">
      

            <!-- Traffic sources -->
            <div class="card">
              
                <div class="card-body py-0">
                   
                <div class="row">
                <div class="col-sm-3 pt-2">
                        <div class="mb-3">
                                <h2 class="font-weight-semibold mb-0 text-danger">

                                <?php
                                    $qn="select count(*) from tbl_student";
                                    $res= mysqli_query($dbCon,$qn);
                                    $row=mysqli_fetch_array($res);
                                    echo $row[0];
                                ?>
                                </h3>
                                <span class="text-muted font-size-sm">Total Students</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                
                
                    <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#9d75ef6f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                                <?php
                                        $qn_compf="select count(*) from tbl_student where year='first' and branch='1'";
                                        $res_compf= mysqli_query($dbCon,$qn_compf);
                                        $row_compf=mysqli_fetch_array($res_compf);
                                        echo $row_compf[0];
                                    ?>
                                </h1>
                                <h5>Computer Science (first year)</h5>
                            </div>
                        </div>

                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#9d75ef6f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_comps="select count(*) from tbl_student where year='second' and branch='1'";
                                        $res_comps= mysqli_query($dbCon,$qn_comps);
                                        $row_comps=mysqli_fetch_array($res_comps);
                                        echo $row_comps[0];
                                    ?>
                                </h1>
                                <h5>Computer Science (second year)</h5>
                            </div>
                        </div>
                     
                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#9d75ef6f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_elct="select count(*) from tbl_student where year='third' and branch='1'";
                                        $res_elct= mysqli_query($dbCon,$qn_elct);
                                        $row_elct=mysqli_fetch_array($res_elct);
                                        echo $row_elct[0];
                                    ?>
                                </h1>
                                <h5>Computer Science (third year)</h5>
                            </div>
                        </div>
                     
                       
                </div>

                  

                <div class="row">

                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#1ae9e16f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_compf="select count(*) from tbl_student where year='first' and branch='2'";
                                        $res_compf= mysqli_query($dbCon,$qn_compf);
                                        $row_compf=mysqli_fetch_array($res_compf);
                                        echo $row_compf[0];
                                    ?>
                                </h1>
                                <h5>Information Technology (first year)</h5>
                            </div>
                        </div>
                     
                     
                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#1ae9e16f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_comps="select count(*) from tbl_student where year='second' and branch='2'";
                                        $res_comps= mysqli_query($dbCon,$qn_comps);
                                        $row_comps=mysqli_fetch_array($res_comps);
                                        echo $row_comps[0];
                                    ?>
                                </h1>
                                <h5>Information Technology (second year)</h5>
                            </div>
                        </div>
                     
                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#1ae9e16f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_elct="select count(*) from tbl_student where year='third' and branch='2'";
                                        $res_elct= mysqli_query($dbCon,$qn_elct);
                                        $row_elct=mysqli_fetch_array($res_elct);
                                        echo $row_elct[0];
                                    ?>
                                </h1>
                                <h5>Information Technology (third year)</h5>
                            </div>
                        </div>
                     
                       
                </div>

                  
                  

                <div class="row">

                <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#fee5436f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_compf="select count(*) from tbl_student where year='first' and branch='3'";
                                        $res_compf= mysqli_query($dbCon,$qn_compf);
                                        $row_compf=mysqli_fetch_array($res_compf);
                                        echo $row_compf[0];
                                    ?>
                                </h1>
                                <h5>Electrical Engineering (first year)</h5>
                            </div>
                        </div>
                     
                <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#fee5436f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_comps="select count(*) from tbl_student where year='second' and branch='3'";
                                        $res_comps= mysqli_query($dbCon,$qn_comps);
                                        $row_comps=mysqli_fetch_array($res_comps);
                                        echo $row_comps[0];
                                    ?>
                                </h1>
                                <h5>Electrical Engineering (second year)</h5>
                            </div>
                        </div>
                     
                <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#fee5436f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_elct="select count(*) from tbl_student where year='third' and branch='3'";
                                        $res_elct= mysqli_query($dbCon,$qn_elct);
                                        $row_elct=mysqli_fetch_array($res_elct);
                                        echo $row_elct[0];
                                    ?>
                                </h1>
                                <h5>Electrical Engineering (third year)</h5>
                            </div>
                        </div>
                     
                       
                </div>

                  

                <div class="row">

                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#9d75ef6f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_compf="select count(*) from tbl_student where year='first' and branch='4'";
                                        $res_compf= mysqli_query($dbCon,$qn_compf);
                                        $row_compf=mysqli_fetch_array($res_compf);
                                        echo $row_compf[0];
                                    ?>
                                </h1>
                                <h5>Electronics (first year)</h5>
                            </div>
                        </div>
                     
                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#9d75ef6f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_comps="select count(*) from tbl_student where year='second' and branch='4'";
                                        $res_comps= mysqli_query($dbCon,$qn_comps);
                                        $row_comps=mysqli_fetch_array($res_comps);
                                        echo $row_comps[0];
                                    ?>
                                </h1>
                                <h5>Electronics (second year)</h5>
                            </div>
                        </div>
                     
                        <div class="col-sm-4 my-counts py-2 card">
                            <div class="card-body card-body d-flex align-items-center justify-content-center flex-column" style="background:#9d75ef6f;box-shadow:  20px 20px 40px #cfcfcf, -20px -20px 40px #ffffff;height:150px;">
                            <h1 style="font-size:3em; font-weight:bold;">
                            <?php
                                        $qn_elct="select count(*) from tbl_student where year='third' and branch='4'";
                                        $res_elct= mysqli_query($dbCon,$qn_elct);
                                        $row_elct=mysqli_fetch_array($res_elct);
                                        echo $row_elct[0];
                                    ?>
                                </h1>
                                <h5>Electronics (third year)</h5>
                            </div>
                        </div>
                     
                       
                </div>

                  

                  
                </div>
                <div class="chart position-relative" id="traffic-sources"></div>
            </div>
            <!-- /traffic sources -->
        </div>

    </div>




    <!-- /main charts -->
    <!-- Dashboard content -->
    <!-- /dashboard content -->
</div>

		   <?php include 'footer.php';?>
