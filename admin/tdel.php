<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q="select * from tbl_grievance where id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);
$query="delete from tbl_grievance where id='$id'";
    if(mysqli_query($dbCon,$query)){
        header("Location:viewgrievance.php?msg=Student Record Deleted");
    }
?>