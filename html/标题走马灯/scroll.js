function scrollLeft(){	//向左滚动
	var title = document.title;
	var firstChar = title.charAt(0);
	var remainStr = title.substring(1,title.length);
	document.title = remainStr + firstChar;
}

function scrollRight(){	//向右滚动
	var title = document.title;
	var lastChar = title.charAt(title.length-1);
	var remainStr = title.substring(0,title.length-1);
	document.title = lastChar +  remainStr;
}


//setInterval("scrollLeft()",500);
setInterval("scrollRight()",500);





