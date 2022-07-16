<?php
include("connection.php");
$get_id = $_REQUEST["id"];

$query = "update tbl_grievance set status='Resolved' where id='$get_id'";

$res=mysqli_query($dbCon,$query);
if($res)
{
    header("location:pending.php?msg=1");
}
else
{
    header("location:pending.php?msg=2");
}
?>