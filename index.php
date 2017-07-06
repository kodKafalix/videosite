<?php include "header.php"; ?>
  <div class="container">
  <div class="row">
  <div class="col-md-12" style="background: white;">
  <div style="width:100% padding:10px;">
    <h3>Video Kısmı</h3>
  </div>
<?php 
include ("config.php");
$sql = mysql_query("SELECT * FROM videolar ");
while($oku = mysql_fetch_array($sql)){
	echo '
  	<div class="col-md-2">
    <div class="thumbnail" style="border-radius:0px; border:none;">
    <img src="https://mw2.google.com/mw-panoramio/photos/small/89223334.jpg" alt="...">
    <div class="caption" style="padding:1px;">
    <h5>
	';
	echo '<a href="anasayfa.php/?id='.$oku['id'].'">'.$oku['aciklama'].'</a>';
	echo '
	</h5>
    </div>
    </div>
  	</div>
	';
}
?></div>
</div>

</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>