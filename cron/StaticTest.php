<?php 


/*Test();
function Test()
{	
	static $count=1;
	if(FALSE){
		static $count=0;
		unset($count);
	}
	
    $count++;
    echo 'push.:'.$count,"\n";

    if ($count < 10) {
        Test();
    }
    $count--;
    echo 'pop.:'.$count."\r\n";
}*/


static $var = 1;
echo ++$var."\n";
if(false){
    echo 'fasle';
    static $var = 10;
}
$var++;
echo $var."\t";

