<?php

class ProductAction extends Action
{
	public function index()
	{
		$product = M('Product');
		$datas = $product->select();

		$this->ajaxReturn($datas, 'JSON');
	}

	public function show()
	{
		$product = M('Product');
		$datas = $product->find(1);

		$this->ajaxReturn($datas, 'JSON');
	}
}