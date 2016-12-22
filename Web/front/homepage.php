<?php

if (!defined('IN_DS')) {
	die('Hacking attempt');
}

ob_start(); //打开缓冲区
echo "Hello World"; //输出
header("location:index.php"); //把浏览器重定向到index.php
//ob_end_flush();//输出全部内容到浏览器
 $str = ob_get_contents();
 ob_end_clean();
echo  $str;
// // set cache
// $cacheFileName = MEM_PREX . 'index';
// $objCache = new Cache($cacheFileName);

// if (DEBUG || isset($_GET['forcerefresh']))
//     $mainContent = '';
// else{
// 	$mainContent = $objCache->getCache();
// 	set_batch_impressions($objCache->getCacheByKey($cacheFileName));
// }

// $tpl->assign('page_title','首页');
// $tpl->display(TPL_PREFIX.'homepage.html');