	
   <?php
   		include '../../configure/lrcbcore.php';
   ?>
    
   
                
                
                	
                    
                    <?php
						$data=$lrcb->lrcbExecuteSQl("select msgid,userid,to_userid,msg_content from lrcbmsg WHERE CREATED_DATE='".date('Y-m-d')."'");
						while($rs=mysql_fetch_array($data))
						{
							$rsuser=mysql_fetch_array(mysql_query("SELECT USERFULLNAME FROM LRCBUSER WHERE USERID='".$rs[1]."'"));
							
					?>
                    	<div class="msg-item">
                    	<div class="user-img"><img src="images/user/user.png" /><span style="float:left; padding:2px 0 0 0; color:#98001d;"><?php echo ($rsuser[0]==NULL)?'UNKNOWN':$rsuser[0];?></span></div>
                        <div class="user-text">
                        	<?php echo $rs[3];?>
                        </div>
                    </div>
                    <?php
						}
				   ?>
                
                