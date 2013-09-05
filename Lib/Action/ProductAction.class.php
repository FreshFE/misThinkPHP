<?php

class ProductAction extends Action
{
	/**
	 * 列出所有的产品
	 */
	public function index()
	{
		$product = M('Product');
		$datas = $product->select();

		$this->ajaxReturn($datas, 'JSON');
	}

	/**
	 * 列出指定id的产品
	 *
	 * @param $id 传入的query值
	 */
	public function show($id)
	{
		$product = M('Product');
		$datas = $product->find($id);

		$this->ajaxReturn($datas, 'JSON');
	}

	/**
	 * 创建一个新的产品
	 * 必须使用POST方法提交请求
	 */
	public function create()
	{
		// 判断是否为POST请求
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

	/**
	 * 编辑一个指定id的产品
	 * 必须使用POST方法提交请求
	 */
	public function edit()
	{
		// 判断是否为POST请求
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

	/**
	 * 删除一个指定id的产品
	 *
	 * @param $id 传入的query值
	 */
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