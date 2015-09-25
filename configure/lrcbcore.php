<?php
	session_start();
	// lrcb core file 
	include("lrcb.conf.php");
	
	class lrcb
	{
		function lrcb()
		{
			$this->lrcbConnection();
		}
		function lrcbConnection()
		{
			$conn=mysql_connect(HOST,USER,PWD) or die("Error Connection string!");
			if(!$conn)
			{
				return false;
			}
			else
			{
				$db=mysql_select_db(DB) or die("Error while connecting to database! Make sure your given database name is correct.");
				if(!$db)
				{
					return false;
				}
				else
				{
					return true;	
				}
			}
		}
	
	
		function lrcbGetSymbols()
		{
			$sqlSymb="SELECT SYMBID, SYMBNAME, NAME FROM LRCBSYMBOL ORDER BY SYMBID";
			$dataRow=mysql_query($sqlSymb);
			echo '<table width="100%" border="0" cellpadding="5" cellspacing="5"><tr>';
			$row=0;
			while($rs=mysql_fetch_array($dataRow))
			{
				echo '<td title="'.$rs[2].'"><img src="'.MEDIA_FILE_ROOT.COMMONS_SYMBOL.$rs[1].'" id="'.$rs[2].'" onClick="appendSymbol(\''.$rs[0].'\')" /></td>';
				$row+=1;
				if($row>=4)
				{
					$row=0;
					echo '</tr><tr>';
				}
			}
			echo '</table>';
		}
		
		function lrcbExecuteSQl($sql)
		{
			mysql_query("set names 'utf8'");
			$data=mysql_query($sql);
			return $data;
		}
		
		function lrcbGetMaxID($sql)
		{
			$data=mysql_query($sql);
			$rs=mysql_fetch_array($data);
			if($rs==0 or $rs==NULL)
			{
				return 1;
			}
			else
			{
				return $rs[0]+1;	
			}
			
		}
		
		function login($user,$pwd)
		{
			$sql="select userid, USERFULLNAME,USERNAME,CREATED_DATE from lrcbuser where username='".$user."' and password='".md5($pwd)."' and status='1'";
			$data=mysql_query($sql);
			if(mysql_num_rows($data)>=1)
			{
				$rs=mysql_fetch_array($data);
				$_SESSION['FULLNAME']=$rs[1];
				$_SESSION['USERNAME']=$rs[2];
				$_SESSION['REGISTERDATE']=$rs[3];
				$_SESSION['USERID']=$rs[0];
			}
		}
		
		function checkSymbol($id)
		{
			$sql="SELECT SYMBID, SYMBNAME FROM LRCBSYMBOL WHERE SYMBID='".$id."'";
			$data=mysql_query($sql);
			if(mysql_num_rows($data)>=1)
			{
				$rs=mysql_fetch_array($data);
				return '<img src="'.MEDIA_FILE_ROOT.COMMONS_SYMBOL.$rs[1].'" />';
			}
			else
			{
				return $id;
			}
			
		}
		
	}
	
	
	$lrcb= new lrcb();
	
?>