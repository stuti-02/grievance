<?php

$id=$_REQUEST['id'];
//echo $id;

session_start();
$user = $_SESSION["user"];

include("connection.php");
$q="select approve_status from tbl_student where stu_id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);

if($rown[0]=='N'){
    $query="update tbl_student set approve_status='Y', approve_by='$user' where stu_id='$id'";
    if(mysqli_query($dbCon,$query)){
        header("Location:viewstudent.php?msg=Approved");
    }else{
        header("Location:viewstudent.php?msg=Not Approved!");
    }
}else{
    $query="update tbl_student set approve_status='N', approve_by='$user' where stu_id='$id'";
    if(mysqli_query($dbCon,$query)){
        header("Location:viewstudent.php?msg=Disapprove");
    }else{
        header("Location:viewstudent.php?msg=Not Approved!");
    }
}


?>