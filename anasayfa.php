<?php 
include ("config.php");
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM videolar WHERE id='".$id."' ");
while($oku = mysql_fetch_array($sql)){
	echo $oku['videoadres'];
	echo $oku['aciklama'];
}
?>