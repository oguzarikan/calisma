<?php
$dbserver="localhost";
$dbuser="root";
$dbuserpass ="";
$db ="odevim";

$baglanti=@mysql_connect($dbserver,$dbuser,$dbuserpass);
if (!$baglanti) {
    echo "mysql baglantısı yok";
}
$db_select =mysql_select_db($db,$baglanti);
if (!$db_select) {
    echo "veri tabanı baglantısı yapılamadı";
}
mysql_query("SET NAMES 'utf8'  ");
?>