<?php
$host = "localhost";
$user = "root";
$pass = "";
$db ="tokobajudb";
$koneksi = mysql_connect($host, $user, $pass);
if (!$koneksi) {
echo "Koneksi ke server tidak berhasil";
};
$database = mysql_select_db($db);
if (!$database) {
echo "Koneksi ke database tidak berhasil";
}
mysql_select_db($db) or die ("Database not Found !");
//kalian pasti sudah tau fungsi ini, fungsi ini digunakan untuk membuat koneksi ke database
?>