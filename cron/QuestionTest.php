<?php 

include('common.php');
error_reporting(1);

bar();

//Equal();
//IsEmpty();

//Is_Set();

//Quote();


// $var1 = "Example variable";
// $var2 = "";
// global_references(false);
// echo "var2 is set to '$var2'\n"; // var2 is set to ''
// global_references(true);
// echo "var2 is set to '$var2'\n"; // var2 is set to 'Example variable'

//引用传递
// foo(bar());

function bar()
{
    echo __NAMESPACE__;
    $a = 0;
    return $a;
}

function foo(&$var)
{
    $var++; echo $var;
}

/**
 * 如果在一个函数内部给一个声明为 global 的变量赋于一个引用，
 * 该引用只在函数内部可见。可以通过使用 $GLOBALS 数组避免这一点。
 * @var string
 */
function global_references($use_globals)
{
    global $var1, $var2;
    if (!$use_globals) {
        $var2 = &$var1; // visible only inside the function
    } else {
        $GLOBALS["var2"] =& $var1; // visible also in global context
    }
}


//引用
function Quote(){
	$test = 'aaaaaa';
    $abc = & $test;
    unset($test);
    echo $abc;
    echo '$test: '.$test;
}

function Is_Set(){
	$a1 = null;
    $a2 = false;
    $a3 = 0;
    $a4 = '';
    $a5 = '0';
    $a6 = 'null';
    $a7 = array();
    $a8 = array(array());
    $a9 = ' ';
    echo isset($a1) ? 'true' : 'false',"\n";
    echo isset($a2) ? 'true' : 'false',"\n";
    echo isset($a3) ? 'true' : 'false',"\n";
    echo isset($a4) ? 'true' : 'false',"\n";
    echo isset($a5) ? 'true' : 'false',"\n";
    echo isset($a6) ? 'true' : 'false',"\n";
    echo isset($a7) ? 'true' : 'false',"\n";
    echo isset($a8) ? 'true' : 'false',"\n";
    echo isset($a9) ? 'true' : 'false',"\n";
}
function IsEmpty(){
	$a1 = null;
    $a2 = false;
    $a3 = 0;
    $a4 = '';
    $a5 = '0';
    $a6 = 'null';
    $a7 = array();
    $a8 = array(array());
    $a9 = ' ';
    echo empty($a1) ? 'true' : 'false',"\n";
    echo empty($a2) ? 'true' : 'false',"\n";
    echo empty($a3) ? 'true' : 'false',"\n";
    echo empty($a4) ? 'true' : 'false',"\n";
    echo empty($a5) ? 'true' : 'false',"\n";
    echo empty($a6) ? 'true' : 'false',"\n";
    echo empty($a7) ? 'true' : 'false',"\n";
    echo empty($a8) ? 'true' : 'false',"\n";
    echo empty($a9) ? 'true' : 'false',"\n";
}

function Equal(){
	$str1 = null;
    $str2 = false;
    echo $str1==$str2 ? '相等' : '不相等',"\n";
    $str3 = '';
    $str4 = 0;
    echo $str3==$str4 ? '相等' : '不相等',"\n";
    $str5 = 0;
    $str6 = '0';
    echo $str5===$str6 ? '相等' : '不相等',"\n";
}
 	