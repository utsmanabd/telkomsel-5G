<?php
$host     = "localhost";
$username = "root";
$password = "";
$Dbname   = "5g_telkomsel";
$db       = new mysqli($host, $username, $password, $Dbname);

$query = $db->query("SELECT * FROM data_lokasi ORDER BY lokasi ASC");
$cluster = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Cluster Residensial'");
$cl = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Cluster Residensial'");
$hotspot = $db->query("SELECT * FROM data_lokasi WHERE kategori = '5G Hotspot'");
$hs = $db->query("SELECT * FROM data_lokasi WHERE kategori = '5G Hotspot'");
$pendidikan = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Pendidikan'");
$pd = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Pendidikan'");
$perkantoran = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Perkantoran'");
$pk = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Perkantoran'");
$event = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Event'");
$ev = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Event'");
$pemerintahan = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Pemerintahan'");
$pem = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Pemerintahan'");
$pariwisata = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Pariwisata'");
$par = $db->query("SELECT * FROM data_lokasi WHERE kategori = 'Pariwisata'");

?>