<?php

function definitionLink($arr,$sslPage) {
	foreach($arr as $val){
		$dir = str_replace('_','/',$val);
		$index = (!strstr($dir,'//')) ? true : false;
		$s = ($index) ? '/' : '';
		if(!$index) $dir = str_replace('//','/',$dir).'.php';

		if($sslPage)
			define('LOCATION_'.$val, str_replace('http', 'https', LOCATION).$dir.$s, true);
		else
			define('LOCATION_'.$val, LOCATION.$dir.$s, true);
	}
}


// スクリプトの更新日付を返す
function echo_version($filename='',$file_dir=LOCATION_FILE_DIR) {
	$s='';
	$info=pathinfo($filename);
	$n=$info["basename"];
	$d=$info["extension"];
	$name=$d."/".$n;
	if(file_exists($file_dir.$name)) {
		$s = $filename."?v=".date("YmdGis", filemtime($file_dir.$name));
	}else {
		$s = 'file not found';
	}
	return $s;
}

// cssをプリロードで読み込むことができます
// $file_dir部分 第2階層、第3階層へ config.php を設置する場合は別途引数で指定すること 
function CssPreload($csspath="",$file_dir=LOCATION_FILE_DIR){
	$retcss = '';
	// rel
	$rel = "preload";
	// onload
	$onload = " onload=\"this.onload=null;this.rel='stylesheet'\"";
	// as
	$as = " as=\"style\"";
	// preloadjs
	$jspreload = "<script>".PHP_EOL."/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */\n(function(a){if(!a.loadCSS){a.loadCSS=function(){}}var b=loadCSS.relpreload={};b.support=(function(){var d;try{d=a.document.createElement(\"link\").relList.supports(\"preload\")}catch(f){d=false}return function(){return d}})();b.bindMediaToggle=function(e){var f=e.media||\"all\";function d(){if(e.addEventListener){e.removeEventListener(\"load\",d)}else{if(e.attachEvent){e.detachEvent(\"onload\",d)}}e.setAttribute(\"onload\",null);e.media=f}if(e.addEventListener){e.addEventListener(\"load\",d)}else{if(e.attachEvent){e.attachEvent(\"onload\",d)}}setTimeout(function(){e.rel=\"stylesheet\";e.media=\"only x\"});setTimeout(d,3000)};b.poly=function(){if(b.support()){return}var d=a.document.getElementsByTagName(\"link\");for(var e=0;e<d.length;e++){var f=d[e];if(f.rel===\"preload\"&&f.getAttribute(\"as\")===\"style\"&&!f.getAttribute(\"data-loadcss\")){f.setAttribute(\"data-loadcss\",true);b.bindMediaToggle(f)}}};if(!b.support()){b.poly();var c=a.setInterval(b.poly,500);if(a.addEventListener){a.addEventListener(\"load\",function(){b.poly();a.clearInterval(c)})}else{if(a.attachEvent){a.attachEvent(\"onload\",function(){b.poly();a.clearInterval(c)})}}}if(typeof exports!==\"undefined\"){exports.loadCSS=loadCSS}else{a.loadCSS=loadCSS}}(typeof global!==\"undefined\"?global:this));".PHP_EOL."</script>";
	if($csspath != "") {
		$info=pathinfo($csspath);
		$n=$info["basename"];
		$d=$info["extension"];
		$name=$d."/".$n;
		$cssplace = $file_dir.$name;
		if(file_exists($cssplace)){
			$retcss = "<link href=\"".$csspath."?=v".date("YmdGis", filemtime($file_dir.$name))."\" rel=\"".$rel."\" media=\"all\"".$onload.$as.">";
			$retcss .= "<noscript><link href=\"".$csspath."?=v".date("YmdGis", filemtime($file_dir.$name))."\" rel=\"stylesheet\" media=\"all\"></noscript>";
			$retcss .= $jspreload.PHP_EOL;
		}
	}
	return $retcss;
}


/*	userAgent
--------------------------------------------------------------*/

//Decision
$ua = $_SERVER['HTTP_USER_AGENT'];
$phone = strstr($ua, 'iPhone') || strstr($ua, 'Android') && strstr($ua, 'Mobile') || strstr($ua, 'Windows Phone') || strstr($ua, 'BlackBerry') &&  !strstr($ua, 'iPad') &&  !strstr($ua, 'iPod') ? true : false;
$touch = strstr($ua, 'iPhone') || strstr($ua, 'iPad') || strstr($ua, 'iPod') || strstr($ua, 'Android') || strstr($ua, 'Windows Phone') || strstr($ua, 'BlackBerry') ? true : false;
$mouse = (!$touch) ? true : false;
$chrome = strstr($ua, 'Chrome') &&  !strstr($ua, 'Edge') ? true : false;
$firefox = strstr($ua, 'Firefox') ? true : false;
$safari = $mouse && !$chrome && strstr($ua, 'Safari') && strstr($ua, 'AppleWebKit') &&  !strstr($ua, 'Edge') ? true : false;
$iphone = $phone && strstr($ua, 'iPhone') ? true : false;
$ipad = $touch && strstr($ua, 'iPad') ? true : false;
$android = $touch && strstr($ua, 'Android') ? true : false;
$ie = strstr($ua, 'MSIE') || strstr($ua, 'like Gecko') && !$chrome && !$safari && !$iphone && !$ipad && !strstr($ua, 'iPod') ? true : false;
$edge = strstr($ua, 'Edge') && !$chrome && !$safari ? true : false;
$ie11 = strstr($ua, 'rv:11.0') ? true : false;
$ie10 = strstr($ua, 'MSIE 10.0') ? true : false;
$ie9 = strstr($ua, 'MSIE 9.0') ? true : false;
$ie8 = strstr($ua, 'MSIE 8.0') ? true : false;
$homepage = ($page == 'homepage') ? true : false;

//htmlClass
$htmlClass = ($mouse) ? 'mouse' : 'touch';
if($phone) $htmlClass = $htmlClass.' phone';
if(!$homepage) $htmlClass = $htmlClass.' lower';
if(!$ie9 && !$ie8) $htmlClass = $htmlClass.' modern';
if($chrome) $htmlClass = $htmlClass.' chrome';
if($firefox) $htmlClass = $htmlClass.' firefox';
if($safari) $htmlClass = $htmlClass.' safari';
if($iphone) $htmlClass = $htmlClass.' iphone';
if($ipad) $htmlClass = $htmlClass.' ipad';
if($android) $htmlClass = $htmlClass.' android';
if($ie) $htmlClass = $htmlClass.' ie';
if($edge) $htmlClass = $htmlClass.' edge';
if($ie11) $htmlClass = $htmlClass.' ie11';
if($ie10) $htmlClass = $htmlClass.' ie10';
if($ie9) $htmlClass = $htmlClass.' ie9';
if($ie8) $htmlClass = $htmlClass.' ie8';

?>
