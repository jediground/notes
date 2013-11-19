<?
/*
 * Programmer : Alan , Msn - haowubai@hotmail.com
 * PHP100.com Develop a project PHP - MySQL - Apache
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

	function fetch_urlpage_contents($url){
	$c=file_get_contents($url);
	return $c;
	}
	//获取匹配内容
	function fetch_match_contents($begin,$end,$c)
	{
	$begin=change_match_string($begin);
	$end=change_match_string($end);
	if(@preg_match("/{$begin}(.*?){$end}/i",$c,$rs))
	 {return $rs[1];}
	else {return "";}
	}//转义正则表达式字符串
	function change_match_string($str){
	 //注意，以下只是简单转义
	$old=array("/","$");
	$new=array("\/","\$");
	$str=str_replace($old,$new,$str);
	return $str;
	}

	//采集网页
	function pick($url,$ft,$th)
	{
	$c=fetch_urlpage_contents($url);
	foreach($ft as $key => $value)
	  {
	 $rs[$key]=fetch_match_contents($value["begin"],$value["end"],$c);
	 if(is_array($th[$key]))
	  { foreach($th[$key] as $old => $new)
	  {
	  $rs[$key]=str_replace($old,$new,$rs[$key]);
	  }
	  }
	  }
	 return $rs;
	}


    $url="http://www.baidu.com"; //要采集的地址
    $ft["title"]["begin"]="<title>";       //截取的开始点
	$ft["title"]["end"]="</title>";        //截取的结束点
	$th["title"]["百度"]="千度";      //截取部分的替换

///////////////
	$rs=pick($url,$ft,$th);                //开始采集

     echo $rs["title"];                    //输出

	?>