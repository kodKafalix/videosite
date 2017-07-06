<?php 
include ("config.php");
	if($_POST){
	$embed = $_POST['embed'];
	$aciklama = $_POST['aciklama'];
	$etiket = $_POST['etiket'];
	$sorgu=@mysql_query("INSERT INTO videolar (videoadres, aciklama, etiket) VALUES ('$embed', '$aciklama', '$etiket')");

	if($sorgu){
	echo '<div style="width:7%; margin:auto; height:25px; background:black; color:white;">İşlem Başarılı</div>';
	header("Refresh : 1;");
	}else{
	echo '<script>alert("İşlem Başarısız")</script>';}
	}else{
?>

<div style="width:500px; margin:auto; height: 225px; border:1px solid; border-radius: 5px; text-align: center;">
	<form action="" method="post">
	<div style="width:50%; float:left;">
		<h3 style="margin:auto; width:200px;">Video Embed Kod</h3>
		<textarea name="embed" placeholder="Video Embed Ekle" style="text-align: center; height:100px; width:100%; resize:none;"></textarea>
	</div>
	<div style="width:50%; float:left;">
		<h3 style="margin-top:0; margin-bottom: 0;">Video Açıklaması</h3>
		<textarea name="aciklama" placeholder="Açıklama Ekle" style="text-align: center; height:50px; width:100%; resize:none;"></textarea>
		<h3>Video Etikeleri</h3>
		<textarea name="etiket" placeholder="Etiket Ekle" style="text-align: center; height:50px; width:100%; resize:none;"></textarea>
	</div>
		<input type="submit" name="gonder" value="Gönder">
	</form>
</div>
<?php } ?>
