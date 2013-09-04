<?php

class ProductAction extends Action
{
	public function index()
	{
		// 模拟数据库数据
		$products = array(
			array(
				"id" => 1,
				"name" => "Google",
				"country" => "USA"
			),
			array(
				"id" => 2,
				"name" => "华为",
				"country" => "RPC"
			)
		);

		var_dump($products);
	}

	public function show()
	{
		echo "show";
	}
}