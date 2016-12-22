<?php 
include('common.php');
error_reporting(E_ALL);

$a = array( 'meaning' => 'life', 'number' => 42 );
$a[] = &$a;
xdebug_debug_zval('a');



// $var1 = 1;
// $var2 = 2;
// test(); // 输出 1
// echo $var2,"\n"; // 输出 2
// echo $var1,"\n"; // 输出 snsgou.com
function test(){
	global $var1, $var2;
	$var2 = &$var1;
	echo $var2,"\n";
	$var2 = 'snsgou.com';
}
