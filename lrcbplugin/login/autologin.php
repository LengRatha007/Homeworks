<?php
	include '../../configure/lrcbcore.php';
	$usr=$_POST['usr'];
	$pwd=$_POST['pwd'];
	$lrcb->login($usr,$pwd);
?>