<?php
include('common.php');
$var1 = "Example variable";
$var2 = '';

global_references(false);
echo "var2 is set to '$var2'\n"; // var2 is set to ''
global_references(true);
echo "var2 is set to '$var2'\n"; // var2 is set to 'Example variable'


// foo($var1);
// dump($var1);
// function foo(&$var)
// {
// 	$GLOBALS['baz'] = 'a';
//     $var =& $GLOBALS["baz"];

// }

function global_references($use_globals)
{
    global $var1, $var2;
    if (!$use_globals) {
        $var2 = &$var1; // visible only inside the function
    } else {
        $GLOBALS["var2"] =& $var1; // visible also in global context
    }
 
}

