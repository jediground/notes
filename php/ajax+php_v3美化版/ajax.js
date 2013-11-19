//=============================判断是否为IE浏览器
var xmlHttp;
function S_xmlhttprequest(){
	if(window.ActiveXObject) {
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	} else if(window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	}
}

//=========================检查用户名方法
function checkName(){
	var id_val=document.regFm.user.value;

	if(id_val != ""){
		S_xmlhttprequest();
		xmlHttp.open("GET","check.php?id="+id_val,true);
		xmlHttp.onreadystatechange = changeuser;
		xmlHttp.send(null);
		}else{
			var nameDiv=document.getElementById('check_name')
			nameDiv.innerHTML="<font color=red>用户名不能为空！</font>";
		}
	
}

function changeuser(){
	var nameDiv=document.getElementById('check_name')
  	if(xmlHttp.readyState == 1) {32
//		nameDiv.innerHTML = "<img src='./images/loading.gif'>";//等待进度条
	}

    	if(xmlHttp.readyState == 4 ){
			if(xmlHttp .status == 200) {
				var tt =  xmlHttp.responseText;
					nameDiv.innerHTML = tt;
			}
		}
}


//=========================用户名提示

function alertName(){
	var val=document.regFm.user.value;
	var nameDiv=document.getElementById('check_name')
	//alert(val);
	nameDiv.innerHTML="<font color=green>用户名长度为6-18位！</font>";	
	
}




//=====================================检查邮箱方法
function checkEmail(){
	var em_val=document.regFm.email.value;

	if(em_val != ""){
		S_xmlhttprequest();
		xmlHttp.open("GET","check.php?em="+em_val,true);
		xmlHttp.onreadystatechange = changemail;
		xmlHttp.send(null);
		}else{
			var nameDiv=document.getElementById('check_email')
			nameDiv.innerHTML="<font color=red>邮箱不能为空！</font>";
		}
	
}

function changemail(){
	var nameDiv=document.getElementById('check_email')
  	if(xmlHttp.readyState == 1) {32
//		 nameDiv.innerHTML = "<img src='./images/loading.gif'>";//等待进度条
	}

    	if(xmlHttp.readyState == 4 ){
			if(xmlHttp .status == 200) {
				var tt =  xmlHttp.responseText;
					nameDiv.innerHTML = tt;
			}
		}
}




//=====================================检查密码方法
function checkPw(){
	var val=document.regFm.password.value;
	var nameDiv=document.getElementById('check_pw')
	//alert(val);

	if(val != ""){
		var len=val.length;
		if(len>18 || len<6 ){
			nameDiv.innerHTML="<font color=red>密码应为6-18个字符！</font>";	
		}else{
				nameDiv.innerHTML="<img src='./images/check_right.gif' />";	
			
		}
	}else{
			nameDiv.innerHTML="<font color=red>密码不能为空！</font>";	
	
	}	
}

//=====================================检查确认密码方法
function checkRePw(){
	var nameDiv=document.getElementById('check_reRw')
	var val=document.regFm.password.value;
	var re_val=document.regFm.repassword.value;
	if(re_val != ""){
		if(val == re_val){
				nameDiv.innerHTML="<img src='./images/check_right.gif' />";	
		}else{
				nameDiv.innerHTML="<font color=red>两次输入密码不一致！</font>";
		}

	}else{
			nameDiv.innerHTML="<font color=red>确认密码不能为空！</font>";
	}
}