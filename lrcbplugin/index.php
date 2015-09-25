<?php
	include "../configure/lrcbcore.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery.js"></script>
<style>
	html{width:100%; height:100%; background:#036;}
	.sec{width:1000px; height:500px; margin: 0 auto 0 auto; background:#06F;}
	.lrcb-main-box{font-family:"Arial", Helvetica, sans-serif; font-size:12px; position: absolute; right:0; bottom:0;}
	.lrcb-main-box
	{
		width:288px;
		height:488px;
	}
	.lrcb-main-box ul{padding:0; margin:0; list-style:none; height:27px;}
	.lrcb-main-box li{float:left; margin-top:0px; position:absolute; z-index:0; color:#FFF; text-align:justify;}
	 .chart-box{width:132px; height:27px; background:url(images/commons/lrcb-box.png) no-repeat; float:left;padding-top:5px;}
	.chart-box:hover, .LRCB-ACTIVE{background:url(images/commons/lrcb-box-active.png) no-repeat; z-index:9; cursor:pointer; }
	 .login{width:88px; height:27px; background:url(images/commons/login-bg.png) no-repeat; float:left; padding-top:5px; margin-left:123px;}
	.login:hover,.LOGIN-ACTIVE{background:url(images/commons/login-bg-active.png) no-repeat; z-index:9; cursor:pointer;}
	.lrcb-box{width:288px; height:461px; background:url(images/commons/lrcb-bg.png) no-repeat; z-index:10; position:absolute;}
	.msg{width:96%; height:345px; margin:6px auto 0 auto; overflow-y:scroll; font-size:11px;}
	.lrcb-box input{ width:90%; height:32px; outline:none; border:1px solid #dcdcdc; margin:6px 7px; background:#efefef; font-size:11px; padding:0 2% 0 2%;}
	.lrcb-box #symbolclick{ float:right; margin-right:10px;}
	.lrcb-box span{color:#FFF; text-decoration:none; cursor:pointer;}
	.msg .msg-item{width:94%; height:auto; border-bottom:1px solid #dcdcdc; float:left; padding:3%;}
	.msg img{}
	.user-img{width:100%; height:16px; float:left;}
	.user-img img{ float:left;}
	.user-text{width:100%; height:auto; white-space:normal; line-height:22px;}
	
	/********* child form *********/
	.lrcb-signup{font-family:"Arial", Helvetica, sans-serif; font-size:12px; position: absolute;width:288px;height:302px; right:289px; bottom:0; z-index:10; background:url(images/commons/child-box.png) no-repeat;}
	#signup, #setting, #symbol, #about, #login{ display:none;}
	.lrcb-box-child{width:288px; height:302px;  z-index:10; position:absolute;}
	.lrcb-child-box{width:249px; height:220px;float:left; margin:15px 0 0 7px; padding:10px 10px 0 15px; overflow:auto; background:#e6e6e6; border-radius:4px;}
	.lrcb-child-box label{width:100%; height:15px; color:#525252; float:left; margin:5px 0 5px 0;}
	.lrcb-child-box input{width:98%; height:25px; color:#FFF; float:left; outline:none; border:1px solid #dcdcdc; background:#efefef; color:#585858;}
	.lrcb-child-box button{ margin:10px 0 0 0; float:right; }

#setting table tr td span{ margin-left:0px; float:left; padding-left:20px; background: url(images/commons/folder.png) no-repeat; cursor:pointer;}

</style>
</head>

<body>

	<div class="sec">
    
		<?php session_start();
			$_SESSION['tabIndex']='hello';
		?>
    	<script src="js/lrcb.core.js"></script>
    	<?php include LRCB_SIGNUP.SIGNUP;?>

    	<?php include LRCB_SETTING.SETTING;?>

    	<?php include LRCB_SYMBOL.SYMBOL;?>

    	<?php include LRCB_ABOUT.ABOUT;?>
        
        <?php include LRCB_LOGIN.LOGIN;?>
        <script>
        	function switchingTab(tabIndex)
			{
				document.cookie="tabIndex=" + tabIndex;	
			}
        </script>
       
    	<div class="lrcb-main-box">
         <div class="lrcb-menu">
            	<ul>
                	<li class="chart-box" onclick="switchingTab(0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LRChart-Box</li>
                    <li class="login" onclick="switchingTab(1);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profile</li>
                </ul>
         </div>
         <div class="lrcb-box" id="innerBox">
            	<div class="msg"  id="LRCB-AJAX">
                </div>
                <input type="text" name="lrcbChartBox" placeholder="Type text here..." id="lrcbChartBox" />
                <img src="images/symbol/smiley.png" id="symbolclick" />
                <span style="margin:35px 0 0 15px; float:left; color:#FFF;"><span id="signupclick">Sign up</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span id="loginclick">Log In</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span id="settingclick">Setting</span><p id="s" style="display:none;">0</p></span>
            </div>
        </div>
    </div>
</body>
</html>