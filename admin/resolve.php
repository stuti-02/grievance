<?php
include("connection.php");
$query="select * from tbl_grievance where status='Resolved' order by id desc";
$res=mysqli_query($dbCon,$query);
?>

<?php include 'header.php';?>

<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="#" class="breadcrumb-item"><i class="icon-copy"></i> Pending Grievances</a>
                <span class="breadcrumb-item active">Pending Grievances</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>

<div class="content">

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Student's Record</h5>
            <span id="msg" style="color:red;"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg'];} ?></span>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload" href="/Admin/ViewTeacher"></a>

                </div>
            </div>
        </div>
        <div class="card-body">
        </div>
        <table class="table table-bordered datatable datatable-button-init-basic datatable-reorder">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Enroll Id</th>
                    <th>Batch</th>
                    <th>College</th>
                    <td>Mobile</td>
                    <td>Email</td>
                    <th>Complain Against</th>
                    <th>Subject</th>
                    <th style="width:400px;">Message</th>
                    <th style="width:120px;">Date</th>
                    <th>Status</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
		  $a=1;
		  while($row=mysqli_fetch_array($res))
		  {
	    ?>
                <tr >
                    <td><?php echo $a; $a++; ?></td>
                    <td><strong><?php echo ucwords($row['name'])?></strong></td>
                    <td><?php echo($row['enroll_id'])?></td>
                    <td><?php echo $row['batch'];?></td>
                    <td><?php echo $row['college'];?></td>
                    <td><a href="tel:<?php echo $row['mobile'];?>"><?php echo $row['mobile'];?></a></td>
                    <td><a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></td>
                    <td><?php echo $row['complain_against'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td style="width:400px;min-width:400px;"><?php echo $row['message'];?></td>
                    <td style="width:120px;min-width:120px;"><?php echo $row['date'];?></td>
                    <td><button class="btn border-success text-success bg-white font-bold">Resolved</button></td>
                    <td><a href="tdel.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
                <?php
		  }
		?>
            </tbody>
        </table>
    </div>

</div>



<script>
function deluser(p) {
    var id = jQuery(p).next().text();
    var status = confirm("Do you want to delete record?");
    if (status == true) {
        window.location.href = '../Admin/deluser?id=' + id;
    }
}
</script>




<script>
jQuery(document).ready(function() {

    jQuery("#msg").fadeIn("fast");
    jQuery("#msg").fadeOut(20000);
});
</script>





<?php include 'footer.php';?>

