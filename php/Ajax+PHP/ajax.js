
var xmlHttp;
function S_xmlhttprequest(){
	if(window.ActiveXObject){
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
		}else if(window.XMLHttpRequest){
			xmlHttp = new XMLHttpRequest();
			}
	}

function funphp100(name){
	var f=document.myform.user.value;
	alert(f);

	S_xmlhttprequest();
	xmlHttp.open("GET","for.php?id="+f,true);
	xmlHttp.onreadystatechange=byphp;
	XmlHttp.send(null);
	}

function byphp(){
	if(xmlHttp.readyState==1){
		document.getElementById('php100').innerHTML = "<img src=loading....>";
		}
	if(xmlHttp.readyState==4){
		if(xmlHttp.readyState==4){
	var byphp100 = xmlHttp.responseText;
	document.getElementById('php100').innerHTML = byphp100;
	 }
	}
}



















