<?php
$config=[
			'add_product_rules'	=> [
										[
											'field'=>'upc_code',
											'label'=>'UPC Code',
											'rules'=>'required|trim'
										],

										[
											'field'=>'product_name',
											'label'=>'Product Name',
											'rules'=>'required|trim|alpha_numeric_spaces',
										],
										[
											'field'=>'tax_id',
											'label'=>'Product Tax',
											'rules'=>'required|trim',
										],
										[
											'field'=>'category_name',
											'label'=>'Category Name',
											'rules'=>'required|trim',
										],
										[
											'field'=>'sub_category',
											'label'=>'Sub Category',
											'rules'=>'required|trim',
										],
										[
											'field'=>'brand',
											'label'=>'Brand',
											'rules'=>'required|trim',
										],
										[
											'field'=>'category_size',
											'label'=>'Category Size',
											'rules'=>'required|trim',
										],
										[
											'field'=>'category_color',
											'label'=>'Category Color',
											'rules'=>'required|trim',
										],
										[
											'field'=>'mrp',
											'label'=>'Product MRP',
											'rules'=>'required|numeric|trim',
										],
										[
											'field'=>'purchase_margin',
											'label'=>'Product Purchase Margin',
											'rules'=>'required|numeric|trim',
										],
										[
											'field'=>'sale_margin',
											'label'=>'Product Sale Margin',
											'rules'=>'required|numeric|trim',
										],
										[
											'field'=>'alert_unit',
											'label'=>'Product Alert Unit',
											'rules'=>'required|numeric|trim',
										],

								   ],

			'admin_login'		=>	[
										[
											'field'=>'username',
											'label'=>'User Name',
											'rules'=>'required|alpha|max_length[10]|trim'
										],

										[
											'field'=>'password',
											'label'=>'Password',
											'rules'=>'required|trim'
										]
									],
												


];