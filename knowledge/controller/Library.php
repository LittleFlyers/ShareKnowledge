<?php
namespace app\knowledge\controller;

class Library{
	//获取文库中全部的信息
	public function all()
	{
		$L = db('document');
		$list = $L->select();
		$result['err_code'] = 0;
		$result['data'] = $list;
		
		return json_encode($result);
	}
	//获取文库中的单个文件
	public function one()
	{
		
	}
	//向文库中上传文件
	public function add()
	{
		
	}
    //删除文件
	public function delete()
	{
		
	}
}