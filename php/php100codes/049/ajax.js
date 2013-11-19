
var xmlHttp;
function S_xmlhttprequest() {
	if(window.ActiveXObject) {
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	} else if(window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	}
}

function funphp100(url) {
	S_xmlhttprequest();
	xmlHttp.open("GET","for.php?id="+url,true);
	xmlHttp.onreadystatechange = byphp;
	xmlHttp.send(null);
}

function byphp() {

  	if(xmlHttp.readyState == 1) {
		 document.getElementById('php100').innerHTML = "loading....";
	}

    	if(xmlHttp.readyState == 4 ){
		if(xmlHttp.status == 200) {
          var byphp100 =  xmlHttp.responseText;
          document.getElementById('php100').innerHTML = byphp100;
		}
	}


}







