<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );

$data_to_change = array('logout'=>'?');
$data_to_bind = array($ldate,$_SESSION['id']);
//user log table doesnt exist, so there'll be an error shaa, put the user log table
$db_query->change("userlog",$data_to_change,"WHERE uid = ? ORDER BY id DESC LIMIT 1",$data_to_bind);
//mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="./user-login.php";
</script>
