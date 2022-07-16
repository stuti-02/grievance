<?php
error_reporting(0);
$flg=$_REQUEST['flg'];
if($flg==1)
{
	$flgerr="Your Old Password is not matched with Current Password";
}
if($flg==2)
{
	$flgerr="Your Old Password and New Password is same";
}
if($flg==3)
{
	$flgerr="Your New Password and Confirm New Password is not same";
}

include 'header.php';
include 'connection.php';
?>

        
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <span class="breadcrumb-item active">Change Password</span>
                        </div>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->
            <div class="content">

                <!-- Main charts -->

                <div class="row">
                    <div class="col-xl-12">

                        <!-- Traffic sources -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Change Password</h5>
                                <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <form action="pass.php" method="post" enctype="multipart/form-data" >
                            <span style="margin-left:2%;color:red;font-weight:bold;"><?php echo $flgerr; ?></span>
                                <div class="card-body">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" placeholder="Enter Old Password" name="op" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" placeholder="Enter New Password" name="np" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" placeholder="Confirm New Password" name="cnp" required />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Change</button>
                                    </div>

                                </div>
                            </form>
                            <!-- /traffic sources -->
                        </div>
                    </div>


                </div>
                <!-- /main charts -->
                <!-- Dashboard content -->
                <!-- /dashboard content -->

            </div>
<script>


    jQuery(document).ready(function () {

        jQuery("#msg").fadeIn("fast");
        jQuery("#msg").fadeOut(20000);
    });
</script>
<script>
    function deluser(p) {
        var id = jQuery(p).next().text();
        var status = confirm("Do you want to delete record?");
        if (status == true) {
            window.location.href = '../Admin/delnotice?id=' + id;
        }
    }
</script>

           
            <!-- /content area -->
            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        Designed & Developed By | <a target="_blank" href="http://www.softproindia.in" style="">Softpro India Computer Technologies (P) Ltd.</a>
                    </span>


                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>