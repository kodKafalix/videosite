<?php
$dbhost ='localhost'; /*Veritabanı host adresi Eğer sunucuda hostingde çalışıyorsa sunucunun ip adresi */
$dbuser ='root'; /*veritabanı kullanıcı adınız*/
$dbpass =''; /*veritabanı kullanıcı  şifreniz  ,localhost olduğu için boş*/
$dbadi ='video'; /*oluşturduğunuz veritabanın adı*/
@mysql_connect($dbhost,$dbuser,$dbpass) or die ('Bağlantı başarısız...'); /* veri tabanı bağlantısını yapıyoruz. */
@mysql_select_db($dbadi) or die ('Veritabanı bulanamadı...');  /*Bağlantı yaptıktan sonra  veritabanını seçiyoruz. */
?>