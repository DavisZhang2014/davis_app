<?php 

class SicknessController extends CommonController{

	function index(){
		$DB = DBlink();
		$sql = "select * from sick ";
		$sickness = $DB->getRows($sql);

		$this->assign('list',$sickness);
		$this->assign('davis','davsas');
		$this->display();
	}
	function add(){
		$this->display();
	}

	function edit(){
		if(empty($_GET['ID'])){
			$this->error('链接错误');
			die;
		}
		$DB = DBlink();
		$sql = "SELECT ID,Name FROM sick WHERE ID=".$_GET['ID'];
		$result = $DB->getRows($sql);

		if(!empty($result[0])){
			$this->assign('Sick',$result[0]);
			//识别码
			$this->assign('OperateCode','edit');
			$this->display();
		}else{
			$this->error('没有该Sick');
			die;
		}

		
	}

}