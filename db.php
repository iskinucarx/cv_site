<?php 


try {
	$db = new PDO("mysql:host=localhost;dbname=cv;charset=utf8","root","");
} catch (PDOException $e) {
	echo $e->getMessage();
}
 ?>
