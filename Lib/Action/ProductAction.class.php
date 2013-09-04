<?php

class ProductAction extends Action
{
	public function index()
	{
		$product = M('Product');
		$datas = $product->select();

		$this->ajaxReturn($datas, 'JSON');
	}

	public function show($id)
	{
		$product = M('Product');
		$datas = $product->find($id);

		$this->ajaxReturn($datas, 'JSON');
	}
}