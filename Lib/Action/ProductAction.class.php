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

	public function create()
	{
		// 判断是否post
		if ($this->isPost()) {

			$product = M('Product');
			$data = $product->create();
			$id = $product->add($data);

			if ($id) {
				$this->ajaxReturn(array('success'), 'JSON');
			} else {
				$this->ajaxReturn(array('failed'), 'JSON');
			}
		}
	}

	public function edit()
	{
		// 自己写一个
		if ($this->isPost()) {

			$product = M('Product');
			$data = $product->create();
			$id = $product->save($data);

			if ($id) {
				$this->ajaxReturn(array('success'), 'JSON');
			} else {
				$this->ajaxReturn(array('failed'), 'JSON');
			}
		}
	}

	public function remove($id)
	{
		$product = M('Product');
		$result = $product->where(array('id' => $id))->delete();

		if ($result) {
			$this->ajaxReturn(array('success'), 'JSON');
		} else {
			$this->ajaxReturn(array('failed'), 'JSON');
		}
	}
}
 










