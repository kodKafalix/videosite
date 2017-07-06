<?php 
include ("config.php");
	$embed = $_POST['embed'];
	$sorgu=mysql_query("INSERT INTO videolar (videoadres) VALUES ('$embed')");

	if($sorgu){
	echo '<script>alert("İşlem Başarılı")</script>';
	}else{
	echo '<script>alert("İşlem Başarısız")</script>';}
	
?>