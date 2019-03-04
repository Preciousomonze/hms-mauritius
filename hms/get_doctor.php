<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{
$sql=$db_query->get("select doctorName,id from doctors where specilization= ?",[$_POST['specilizationid']]);
 ?>
 <option selected="selected">Select Doctor </option>
 <?php
 $rows = $db_query->get_records();
 foreach($rows as $row)
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  <?php
}
}

if(!empty($_POST["doctor"])) 
{
 $sql=$db_query->get("select docFees from doctors where id=?",[$_POST['doctor']]);
 $rows = $db_query->get_records();
 foreach($rows as $row)
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

