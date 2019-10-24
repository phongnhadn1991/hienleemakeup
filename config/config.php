<?php

/*	Constant
--------------------------------------------------------------*/
//ローカル&テスト
if(empty($_SERVER['HTTPS'])){
	define('LOCATION', 'http://'.$_SERVER['SERVER_NAME'].str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)."/.."))).'/', true);
} else {
	define('LOCATION', 'https://'.$_SERVER['SERVER_NAME'].str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)."/.."))).'/', true);
}

// 公開の際は絶対パスへ
// if(empty($_SERVER['HTTPS'])){
// 	define('LOCATION','http://www.example.com/', true);
// } else {
// 	define('LOCATION','https://www.example.com/', true);
// }

define('LOCATION_FILE', LOCATION.'files/', true);

define('LOCATION_ROOT_DIR', __DIR__.'/..'. DIRECTORY_SEPARATOR, true);
define('LOCATION_FILE_DIR', __DIR__.'/../files/'. DIRECTORY_SEPARATOR, true);

/* normalPages */
$PageList = array(
	'contact',			#お問い合わせ(contact/index.php)
	'copy',				#コピー1　(copy/index.php)
	'copy__copy',		#コピー2 (copy/copy.php)
	'copy_copy',		#コピー3 (copy/copy/index.php)
	'copy_copy__copy'	#コピー4 (copy/copy/copy.php)
);

definitionLink($PageList,false);

/* Reservations */
define('LOCATION_RSV', '', true);
define('LOCATION_PLAN', '', true);
define('LOCATION_CHANGE', '', true);
define('LOCATION_CANCEL', '', true);
define('LOCATION_LOGIN', '', true);


/* リンク振り分け */
if(!$phone) {
	//pcSite
	define('LOCATION_XXX', '', true);
}else {
	//spSite
	define('LOCATION_XXX', '', true);
}


/* Other */
define('FB_APPID','',true);
define('LOCATION_TEL','tel:00000000000',true);


?>
