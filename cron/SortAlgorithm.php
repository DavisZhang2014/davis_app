<?php 
/**
 * php 实现排序算法
 */
include('common.php');

//生成随机数数组

echo 'start time: '.microtime()."\n";
$numbers = range(1,9999);

echo 'end time: '.microtime()."\n";
shuffle($numbers);

//冒泡排序
//$numbers = BubbleSort($numbers,'DESC');

//快速排序
// $numbers = QuickSort($numbers,'ASC');
// dump($numbers);

/**
 * [FindElem description]
 * @AuthorHTL
 * @DateTime  2016-11-18T15:09:49+0800
 * @param     [type]                   $arr   [description]
 * @param     [type]                   $val   [description]
 * @param     [type]                   $model [1,循环;2:Isset,3:in_array]
 */

// for($i=0;$i<10000;$i++){
// 	 FindElem($numbers,888,3);
// }
// $model=1,11秒，=2,7秒，=3，17秒
function FindElem($arr,$val,$model){
	if(empty($arr)) return ;

	if($model ==1){
		foreach ($arr as $key => $value) {
			if($value == $val){
				return $key;
			}
		}
	}elseif($model==2){
		$arr = array_flip($arr);
		return isset($arr[$val])?$arr[$val]:'';
	}else{
		$flag = in_array($val, $arr);
		if($flag !== false){
			return array_flip($arr)[$val];
		}
	}


}

/**
 * [QuickSort description]
 * @AuthorHTL
 * @DateTime  2016-11-15T15:57:13+0800
 * @param     [type]                   $data [description]
 * @param     string                   $mode [ASC/DESC]
 * 快速排序
 */
function QuickSort($data,$mode = 'ASC'){
	if($mode!='ASC' && $mode!='DESC'){
		die("Soct mode is error\n");
	}

	$len = count($data);
	if($len <=1)	return $data;

	$key = $data[0];
	$left_arr = array();
	$right_arr = array();
	for($i=1;$i<$len;$i++){
		if($mode =='ASC'){
			if($data[$i]>$key){
				$right_arr[] = $data[$i];
			}else{
				$left_arr[] = $data[$i];
			}
		}else{
			if($data[$i]>$key){
				$left_arr[] = $data[$i];
			}else{
				$right_arr[] = $data[$i];
			}
		}
	}

	$left_arr = QuickSort($left_arr,$mode);
	$right_arr = QuickSort($right_arr,$mode);
	return array_merge($left_arr,array($key),$right_arr);
}

/**
 * [BubbleSort description]
 * @AuthorHTL
 * @DateTime  2016-11-15T15:00:46+0800
 * @param     数组   $data [description]
 * @param     string  $mode [ASC/DESC]
 */
function BubbleSort($data,$mode='ASC'){
	if($mode!='ASC' && $mode!='DESC'){
		die("Soct mode is error\n");
	}

	$len = count($data);
	if($len<=1)		return $data;
	for($i=0; $i<$len;$i++){
		for($j=1;$j<$len-$i;$j++){
			if($mode == 'DESC' && $data[$j]>$data[$j-1]){
				Swap($data[$j],$data[$j-1]);
			}elseif($mode == 'ASC' && $data[$j]<$data[$j-1]){
				Swap($data[$j],$data[$j-1]);
			}else{
				continue;
			}
		}
	}

	return $data;
}

/**
 * [Swap description] 
 * @AuthorHTL
 * @DateTime  2016-11-15T15:35:50+0800
 * @param     [type]                   &$var1 [description]
 * @param     [type]                   &$var2 [description]
 * 交换数据
 */
function Swap(&$var1,&$var2){
	if(isset($var1,$var2)){
		$tmp = $var1;
		$var1 = $var2;
		$var2 = $tmp;
	}
}