<?php

class ProductAction extends Action
{
	public function index()
	{
		// 模拟数据库数据
		$product = M('Product');
		$datas = $product->select();

		// echo json_encode($products);
		$this->ajaxReturn($datas, 'JSON');
	}

	public function show()
	{
		echo "show";
	}
}