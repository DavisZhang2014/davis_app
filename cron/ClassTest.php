<?php 
error_reporting(0);
include('common.php');

$instance = new SimpleClass();

$assigned   =  $instance;
$reference  = &$instance;
$clone = clone $instance;

$instance->var = '$assigned will have this value';
$instance = 'a';
var_dump($clone);
var_dump($instance);
var_dump($reference);
var_dump($assigned);
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}


/*class Foo
{
	// private $name;
    function Foo($name)
    {
        // 在全局数组 $globalref 中建立一个引用
        global $globalref;
        $globalref[] = &$this;
        //print_r($globalref);
        // 将名字设定为传递的值
        $this->setName($name);
        // 并输出之
        $this->echoName();
        //$globalref[] = &$this;
        print_r($globalref);
    }

    function echoName()
    {
        echo "<br>",$this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }
}

$obj = new Foo('davis');*/


Class Test{
	private $val ;
	function Test($val){
		global $globalref;
        $globalref = &$this;
		$this->val = $val;
	}

	public function display(){
		echo $this->val,"\n";
	}
}

Class SubTest extends Test{

}

// $obj = new SubTest(11);

// //dump($obj instanceof Test);
// $a = $obj instanceof SubTest;
// var_dump(get_parent_class($obj));
// var_dump(is_a($obj,'Test'));
// $Obj1 = New Test(111);
// $Obj3 = $Obj1;
// //$globalref->Test(333);
// $Obj2 = clone $Obj1;
// $Obj2->Test('222');
// echo 'global: ';
// //$globalref->display();
// echo "clone: ";
// $Obj2->display();
// echo "source: ";
// $Obj1->display();
