<?php
	include "../../configure/lrcbcore.php";
	$TMPVAL=explode("|",$_POST['val']);
	$FULLNAME=$TMPVAL[0];
	$USERNAME=$TMPVAL[1];
	$PASSWORD=md5($TMPVAL[2]);
	$IDX=$lrcb->lrcbGetMaxID("SELECT IDX FROM LRCBUSER ORDER BY IDX DESC LIMIT 1");
	$USERID=date("d-M-Y").'-'.$IDX;
$lrcb->lrcbExecuteSQl("insert into lrcbuser(userid,idx,userfullname,username,password,CREATED_DATE,status) values('".$USERID."','".$IDX."','".$FULLNAME."','".$USERNAME."','".$PASSWORD."','".date("Y-m-d")."','1')");
?>