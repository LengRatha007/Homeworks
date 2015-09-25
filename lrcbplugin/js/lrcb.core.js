// JavaScript Document
var d=setInterval(function(){silentRepalce('0','msg/msg.php','LRCB-AJAX')},5000);
var s=setInterval(function(){getCookieToSetTabIndex()},1000);
$(document).ready(function(){
	$("#s").text($(".msg .msg-item").length)
	setInterval(function(){getSound()},1000);	
	$("#signupclick").click(function(){
		$("#signup").toggle();
		$("#setting").hide();
		$("#symbol").hide();
		$("#about").hide();
		$("#login").hide()
	});
	$("#settingclick").click(function(){
		$("#signup").hide();
		$("#setting").toggle();
		$("#symbol").hide();
		$("#about").hide();
		$("#login").hide()
	});
	$("#aboutclick").click(function(){
		$("#signup").hide();
		$("#setting").hide();
		$("#symbol").hide();
		$("#about").toggle();
		$("#login").hide()
	});
	$("#symbolclick").click(function(){
		$("#signup").hide();
		$("#setting").hide();
		$("#symbol").toggle();
		$("#about").hide();
		$("#login").hide()
	});
	$("#loginclick").click(function(){
		$("#login").toggle();
		$("#signup").hide();
		$("#setting").hide();
		$("#symbol").hide();
		$("#about").hide();
	});

	
	$("#submit").click(function(){
		var fullname=document.getElementsByName("fullname").item(0).value;
		var username=document.getElementsByName("username").item(0).value;
		var password=document.getElementsByName("password").item(0).value;
		silentExec('core_functions/signup.php',0,fullname+'|'+username+'|'+password);
		document.getElementsByName("fullname").item(0).value="";
		document.getElementsByName("username").item(0).value="";
		document.getElementsByName("password").item(0).value="";
		alert('User Created successfuly!');
	});
	
	function silentExec(filepath,idx, val)
	{
		var datastring="id="+ idx+"&val="+val;
		//if(confirm("Sure you want to delete this data ? There is NO Undo!" ))
		//{
		$.ajax({
			type: "POST",
			url: filepath,
			data: datastring,
			cache: false,
			success: function(html){}
		});
		//}
	}	
	
	$("#lrcbChartBox").keydown(function(e){
		var msg=document.getElementsByName("lrcbChartBox").item(0).value;
		if (msg.length>=1)
		{
			if(e.keyCode==13)
			{
				silentExec('core_functions/sendmsg.php',0,msg);
				document.getElementsByName("lrcbChartBox").item(0).value="";	
			}
			setTimeout(function(){document.getElementById("LRCB-AJAX").scrollTop+=10000,d},2000);
		}
	});	
	
	function getSound(){
		
		if($(".msg .msg-item").length > $("#s").text())
		{
			//setTimeout(function(){document.getElementById("LRCB-AJAX").scrollTop+=10000,d},2000);
			
			var audio = {};
			audio = new Audio();
			audio.src = "sound/notify.wav";
			audio.src = "sound/notify.ogg";
			//audio.src = "sound/notify.mp3";
			audio.play();
			$("#s").text($(".msg .msg-item").length);	
		}
		else
		{	
			$("#s").text($(".msg .msg-item").length);
		}
	}
	
	
	
});

function appendSymbol(Id)
{
	var s=document.getElementsByName("lrcbChartBox").item(0).value+"):"+Id+"):";
	document.getElementsByName("lrcbChartBox").item(0).value=s;
	document.getElementsByName("lrcbChartBox").item(0).focus();
}

function silentRepalce(str,path,demo)
{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById(demo).innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById(demo).innerHTML=xmlhttp.responseText;
		}
	  }  
	///document.getElementById(demo).scrollTop=10000;
	xmlhttp.open("GET",path+"?jid="+str,true);
	xmlhttp.send();
	//-------------
}

function getCookieToSetTabIndex()
{
	var allcookies = document.cookie;
	cookiearray  = allcookies.split(';');
	valueOfCookie=cookiearray[0].split('=');
	if(valueOfCookie[1]==0)
	{
		$(".chart-box").addClass("LRCB-ACTIVE");
		$(".chart-box").css("z-index","10");
		$(".login").css("z-index","9");
		$(".login").removeClass("LOGIN-ACTIVE");
		silentRepalce('0','msg/msg.php','LRCB-AJAX');	
	}
	else
	{
		$(".chart-box").removeClass("LRCB-ACTIVE");
		$(".login").css("z-index","10");
		$(".chart-box").css("z-index","9");
		$(".login").addClass("LOGIN-ACTIVE");
		silentRepalce("0",'login/signup.php','LRCB-AJAX');	
		clearInterval(d);
	}	
	
}

function login(t)  
{
	if(t==='Log In')
	{
		var user = document.getElementById("usr").value;
		var pwd=document.getElementById("pwd").value;
		var datastring="usr="+ user+"&pwd="+pwd;
		//if(confirm("Sure you want to delete this data ? There is NO Undo!" ))
		//{
			$.ajax({
				type: "POST",
				url: "login/autologin.php",
				data: datastring,
				cache: false,
				success: function(html){}
			});
		//}
		//return false;
		document.getElementById("usr").value=""
		document.getElementById("pwd").value=""
	}
	else
	{
		var datastring="u";
		//if(confirm("Sure you want to delete this data ? There is NO Undo!" ))
		//{
			$.ajax({
				type: "POST",
				url: "signout/autologin.php",
				data: datastring,
				cache: false,
				success: function(html){}
			});
	}
}



