<?php
include("connection.php");
$query="select * from tbl_grievance order by id desc";
$res=mysqli_query($dbCon,$query);
?>

<?php include 'header.php';?>

<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="#" class="breadcrumb-item"><i class="icon-copy"></i> Manage Grievances</a>
                <span class="breadcrumb-item active">View Grievances</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Basic initialization -->
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
        <table class="table datatable-button-init-basic datatable-reorder">
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
                    <th>Date</th>
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
                    <td><?php echo $row['message'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><a href="tdel.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
                <?php
		  }
		?>
            </tbody>
        </table>
    </div>
    <!-- /basic initialization -->
    <!-- /main charts -->
    <!-- Dashboard content -->
    <!-- /dashboard content -->
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







<script>
// function editmodal(p) {

//     var a = p.value;
//     // alert(a);
//     jQuery.ajax({
//         url: "fetchrecord.php",
//         method: "post",
//         data: {
//             t: 'teacher',
//             id: a
//         },

//         beforeSend: function() {
//             p.innerText = "Please Wait....";
//         },
//         success: function(v) {

//             var a = JSON.parse(v);
//             p.innerText = "Edit";
//             console.log(a);
//             $('#stu_id').val(a.stu_id);
//             $('#name').val(a.name);
//             $('#dob').val(a.dob);
//             var gen = "<option selected  hidden>" + a.gender + "</option>";
//             $('#gender').append(gen);
//             $('#fname').val(a.fname);
//             $('#mobile').val(a.mobile);
//             $('#email').val(a.email);
//             var dep = "<option value='" + a.dept_id + "' selected  hidden>" + a.dept_name + "</option>"
//             $('#dept').append(dep);
//             $('#designation').val(a.designation);
//             $('#quali').val(a.qualification);
//             $('#address').val(a.address);
//             $("#toldpic").attr("src", "idproof/" + a.pic);
//             $('#edittechmodal').modal('toggle');
//         }
//     });
// }
</script>








<?php include 'footer.php';?>