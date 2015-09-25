

<div class="lrcb-signup" id="login">
        
            <div class="lrcb-box-child">
            	<span style="margin:5px 0 0 25px; color:#FFF; float:left;"><b>Log In</b></span>  
                <div class="lrcb-child-box">
                        <label for="username">Username</label>
                    	<input type="text" name="username" autocomplete="off" id="usr" />
                        <label for="password">Password</label>
                    	<input type="password" name="password" id="pwd" />
                        <button type="button" id="submit"  onclick="login('<?php echo($_SESSION['FULLNAME'])==null?'Log In':'Log Out'?>')"><?php echo($_SESSION['FULLNAME'])==null?'Log In':'Log Out'?>&nbsp;&nbsp;</button>
                </div>
            </div>
        </div>