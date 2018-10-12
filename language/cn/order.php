<?php
	global $my_order;//我得订单
	global $sel_pay; //选择支付方式
	global $yh_pay; //银行支付方式
	global $yh_ajax; //银行ajax
	global $little_pay; //little支付方式
	global $little_ajax; //little ajax
	global $pay_success; //支付成功
	global $pay_fail; //支付失败
	global $pro; //服务项目


	$my_order = array(
		'title' => '我的订单',
		'coding' => '订单号:',
		'pay' => '已支付',
		'nopay' => '待支付',
		'paying' => '已支付，待确认',
		'date' => '日期：',
		'see' => '查看',
		'gopay' => '支付',
		'litt' => '区块链改变未来，LittleBeeX改变未来企业',
		'littbtn' => '探索未来',
	);
	
	$sel_pay = array(
		'title' => '订单支付',
		'money' => '￥',
		'msg' => '/一次性',
		'sum' => '应付合计：',
		'RMB' => 'RMB',
		'LITTLE' => 'LT',
		'ETH' => 'ETH',
		'p' => '请选择支付币种',
		'ul1' => array(
			'div' => '选择支付方式',
			'div1' => '银行转账',
			'gopay' => '去支付',
			'nopay' => '暂不支付',
		),
		'ul2' => array(
			'div' => '选择支付方式',
			'div1' => 'LT',
			'gopay' => '使用数字钱包支付',
			'nopay' => '暂不支付',
		),
		'ul3' => array(
			'div' => '选择支付方式',
			'div1' => 'ETH',
			'gopay' => '使用数字钱包支付',
			'nopay' => '暂不支付',
		)
	);

	$yh_pay = array(
		'title' => '订单支付',
		'b' => '应付合计：',
		'money' => 'RMB',
		'type' => '支付方式',
		'yh' => '银行转账',
		'khyh' => '开户银行',
		'yhname' => '工行北京金树街支行',
		'zh' => '账户名称',
		'zhname' => '九八锎科技（北京）有限公司',
		'payname' => '打款账户',
		'payzh' => '0200 2914 0920 0036 304',
		'fkm' => '付款确认码',
		'sucpay' => '转账已完成',
		'nopay' => '暂不支付'
	);

	$yh_ajax = array(
		'return_error' => '付款失败',
		'return_success' => '到账可能需要一点时间，请耐心等待',
	);

	$little_pay = array(
		'title' => '订单支付',
		'b' => '应付合计：',
		'LITTLE' => 'LT',
		'type' => '支付方式',
		'addre' => '收款地址',
		'address' => '0x5fA881A4632922c012de88Aac566d1E8d8E0F651',
		'cop' => '复制',
		'coptips' => '转账地址复制成功！',
		'sucpay' => '扫码支付已完成',
		'nopay' => '暂不支付'
	);

	$little_ajax = array(
		'return_error' => '请支付',
		'return_success' => '支付成功',
	);

	$pay_success = array(
		'title' => '支付成功',
		'p' => '您已支付完成，业务受理中',
		'a' => '查看订单'
	);


	$pay_fail = array(
		'title' => '支付失败',
		'p' => '您的支付未完成，请重新支付',
		'a' => '重新支付'
	);

	$pro = array(
		'title' => '服务项目',
		'mon' => '￥',
		'back' => '返回',
		'year' => '/一年',
		'gopay' => '去支付',
	);
?>