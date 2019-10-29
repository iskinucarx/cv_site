<?php 


include '../db.php';

if (isset($_POST["genel-ayarlar"])) {
	
	$site_id = $GET["site_id"];

	$site_title = $_POST["site_title"];
	$site_url = $_POST["site_url"];
	$site_desc = $_POST["site_desc"];
	$site_keyw =  $_POST["site_keyw"];
	$site_footer = $_POST["site_footer"];


if (!$site_title || !$site_url || !$site_desc || !$site_footer || !$site_keyw ) {
	echo 'boş bırakmayın';
}

}






 ?>