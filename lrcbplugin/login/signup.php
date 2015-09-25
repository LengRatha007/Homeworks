<?php session_start();?>

                <table width="98%" align="center" border="0" cellpadding="2" cellspacing="2" style="margin-top:15px;">
                	<tr>
                    	<td align="center" valign="middle" colspan="2"><img src="images/user/user.gif" /></td>
                    </tr>
                    <tr><td></td><td></td></tr>
                    <tr><td></td><td></td></tr>
                    <tr>
                    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name:</td><td align="right"><?php echo($_SESSION['FULLNAME'])==null?'UNKNOWN':$_SESSION['FULLNAME']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username:</td><td align="right"><?php echo($_SESSION['USERNAME'])==null?'UNKNOWN':$_SESSION['USERNAME']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register Date:</td><td align="right"><?php echo($_SESSION['REGISTERDATE'])==null?'UNKNOWN':$_SESSION['REGISTERDATE']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
             
              </table>