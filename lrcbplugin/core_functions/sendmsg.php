<?php
	session_start();
	include "../../configure/lrcbcore.php";
	$TMPVAL=explode("):",$_POST['val']);
	$USERID=$_SESSION['USERID'];
	$TOUSER=0;
	$IDX=$lrcb->lrcbGetMaxID("SELECT IDX FROM LRCBMSG ORDER BY IDX DESC LIMIT 1");
	$MSGID=date("d-M-Y").'-'.$IDX;
	$i=0;
	$s="";
	while($i<=count($TMPVAL))
	{
		$s.=$lrcb->checkSymbol($TMPVAL[$i]);
		$i+=1;
	}
	
//$lrcb->lrcbExecuteSQl("insert into lrcbmsg(msgid,idx,userid,touser_id,msg_content,CREATED_DATE) //values('".$MSGID."','".$IDX."','".$USERID."','".$TOUSER."','".$s."','".date("Y-m-d")."')");
$lrcb->lrcbExecuteSQl("insert into lrcbmsg(msgid,idx,userid,to_userid,msg_content,created_date) values('".$MSGID."','".$IDX."','".$USERID."','".$TOUSER."','".$s."','".date("Y-m-d")."')");
?>