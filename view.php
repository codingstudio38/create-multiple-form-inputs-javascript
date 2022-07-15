<?php
error_reporting(0);
include_once('dbdb.php');
$method=$_REQUEST['method'];
$id=$_REQUEST['id'];
if($method=='viewall') 
{
$query = "SELECT * FROM `product_tbl` WHERE id='$id'";
foreach($dbConnection->query($query, PDO::FETCH_ASSOC) as $row){
$response['pname']=$row['name'];
$response['pmrp']=$row['MRP'];
$response['pprice']=$row['price'];
}
echo JSON_encode($response);
exit;
}






?>

