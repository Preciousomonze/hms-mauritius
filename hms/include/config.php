<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'med_tolu_2');
/* old school :)
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/
/*new school :)*/
require('code_vendors/autoload.php');
$db = new DBCon();//can be left empty, since the default is pdo, leave it this way, the mysqli version is a little buggy :)
$conn = $db->connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$dbq = new Query($conn);//after initializing a connection, make sure you pass the value into the constructor, like new Query($con);
$dbq->set_fetch_mode("assoc");//read on this method

?>