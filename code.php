<?php

$name=$_POST['name'];
//echo "$name";
$enroll=$_POST['enroll'];
$batch=$_POST['batch'];
$college=$_POST['college'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$complain_against=$_POST['complain_against'];
$subject=$_POST['subject'];
$message=$_POST['message'];

include "admin/connection.php";

 $query= "insert into tbl_grievance (name,enroll_id,mobile,email,batch,college,complain_against,subject,message,date,status) values ('$name','$enroll','$mobile','$email','$batch','$college','$complain_against','$subject','$message',curdate(),'Pending')";


$res=mysqli_query($dbCon,$query);

if($res)
{
header('Location:index.php?msg=1');
}
else
{
header('Location:index.php?msg=2');
}
