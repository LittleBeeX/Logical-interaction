<?php
	global $guide;//问题指引
	global $basic;//基本信息
	global $basic_ajax;//基本信息ajax返回
	global $projects;//服务项目
	global $project_ajax;//服务项目ajax返回
	global $add_director;//董事添加
	global $people_ajax;//董事添加ajax返回
	global $director_list;//董事信息展示
	global $people_del_ajax;//董事股东删除ajax
	global $dir_next_ajax;//懂事下一步ajax
	global $add_member;//股东添加
	global $dir_pass_ajax;//跳过董事添加ajax
	global $member_pass_ajax;//跳过股东添加ajax
	global $member_list;//股东信息展示
	global $mem_next_ajax;//股东下一步ajax
	global $dir_mem_list;//董事股东上传信息页
	global $uploads;//董事股东上传信息页
	global $uploads_ajax;//董事股东上传信息页
	global $new_order;//跳转订单支付
	global $order_show;//展示


	$guide = array(
		'title' => '问题指引',
		'h1'   => '注册须知',
		'nav1' => array(
			'title' => '基本信息',
			'div1' => ' 有限公司拟用名称',
			'p1' => '有限公司拟用名称仅限英文名，例如：ABC PTE LTD.，该名称需要注册局核名后方可有效，如遇核名未能通过时，我们会通过电话客服或系统消息提醒您更换名称。',
			'div2' => ' 订单接收人',
			'p2' => '用于有限公司注册过程中信息和材料往来唯一的接收人，必须确保邮箱、电话、邮寄地址真实有效。',
			'div3' => ' 董事／股东',
			'p3' => '1、董事为有限公司决策人，负责签署有限公司所有相关事务。<br/>
			2、本次注册至少需要1名董事，且必须为新加坡公民或PR，如您选择购买“本地名义董事”服务，我们将为您提供1名本地名义董事，我们提供的董事不出任股东。<br/>
			3、股东又名担保人，为有限公司承担提前约定的债务责任，最少可为1SGD，但建议增加数额，比如1000SGD。<br/>
			4、本次注册至少需要1名股东，董事可出任股东，我们提供的名义董事除外。',
			'div4' => ' 注册流程',
		),
		'nav2' => array(
			'title' => '材料清单',
			'div1' => ' 董事／股东资料',
			'p1' => '1、准备有效护照和身份证清晰电子图片。<br/>
			2、图片为jpeg格式，您可以从手机相册选择上传。',
			'div2' => ' 需签署文件',
			'p2' => '注册申请的基本信息审核通过后，我们将以邮件方式通知您并将需要董事签署确认的文件发至订单接收人邮箱，签署完成后需将已签署文件扫描件回执。<br/>
			请妥善保存已签署纸质版文件及提供的董事／股东资料复印件，相关资料需要在注册完成后邮寄至注册地址。',
		),
		'nav3' => array(
			'title' => '服务价格',
			'div1' => ' 本地注册￥5800/一次性（必选项）',
			'p1' => '若CLG注册因项目原因被拒无法退款',
			'div2' => ' 法定秘书服务￥5800/年（必选项）',
			'p2' => '有限公司必须有一位新加坡籍公民担任秘书',
			'div3' => ' 注册地址和邮件管理年费￥1500/年（必选项）',
			'p3' => '服务包含控制面板，标准办公地址，邮件代收自取等内容',
			'div4' => ' 本地名义董事挂名服务￥28000/年',
			'p4' => '有限公司必须有一名董事为新加坡公民或PR，选择该项服务，我们将为您提供1名新加坡籍董事，本项服务提供的董事不出任股东',
			'div5' => ' 银行开户协助服务￥1500/间',
			'p5' => '银行开户申请提交后我们将为您预约开户银行，收到银行预约通知后需文件签署董事进行面签事宜，请保持手机畅通，客服工作人员将联系您。',
		),
		'nav4' => array(
			'title' => '支付方式',
			'div1' => ' 支付宝',
			'p1' => '支付宝接受人民币支付，支付限额根据您的个人银行网上银行限额设置，请确保您的支付限额可以完成本次支付。',
			'div2' => ' 银行转账',
			'p2' => '支付额度受限时，您可以选择通过个人账户或企业账户转账的方式完成支付。',
			'div3' => ' 数字支付',
			'p3' => '支持LT TOKEN支付',
		),
		'nav5' => array(
			'title' => '其他须知',
			'div1' => ' 银行开户',
			'p1' => '银行开户申请提交后我们将为您预约开户银行，收到银行预约通知后，需文件签署董事进行面签事宜，请保持手机畅通，客服工作人员将联系您。',
			'div2' => ' 注册原件',
			'p2' => '注册原件为注册局盖章纸质版文件，与电子文件具同等法律效应。如果您在申请时未选择银行开户／注册原件服务，您也可以在注册完成后在用户中心进行申请。',
		),
	);

	$basic = array(
		'title' => '基本信息',
		'h1'    => '申请一家新加坡有限公司',
		'div1'  => array(
			'h6' => '新加坡有限公司',
			'p'  => '提交材料后1个工作日注册完成<br /> 平均时长1个工作日
				<br /> 注册费¥5800/一次性',
			'div' => '了解更多'
		),
		'div2'  => array(
			'money' => '¥13100',
			'p1'    => '本次服务最低费用',
			'p2'    => '',
			'p3'    => '＊支持LT TOKEN支付',
		),
		'div3'  => array(
			'b'  => '填写基本信息',
			'b1' => '有限公司拟用名称',
			'i'  => 'PTE LTD',
			'p1' => '请填写全英文有限公司拟用名称',
		),
		'input' => array(
			'b'  => '订单接收人信息',
			'b1' => '姓名',
			'p1' => '请填写订单接收人的姓名',
			'b2' => '电子邮箱',
			'p2' => '请填写正确的电子邮箱地址',
			'b3' => '联系电话',
			'p3' => '请填写正确的联系电话',
			'b4' => '邮寄地址',
			'p4' => '请填写订单接收人的邮寄地址',
		),
		'next' => '下一步，选择服务项目',
		'back' => '返回',
		'upd' => '确定'
	);

	$basic_ajax = array(
		'name1' => '有限公司拟用名称不能为空',
		'name2' => '请用全英文填写有限公司拟用名称',
		'contact_name' => '订单接收人姓名不能为空',
		'contact_email1' => '订单接收人邮箱不能为空',
		'contact_email2' => '请输入正确的邮箱格式',
		'contact_mobile1' => '订单接收人手机号码不能为空',
		'contact_mobile2' => '请输入正确的联系方式',
		'address' => '订单接收人邮寄地址不能为空',
		'return_error' => '基本信息填写失败',
		'return_success' => '基本信息填写成功',
	);


	$projects = array(
		'title' => '服务项目',
		'b' => '选择服务项目',
		'con' => '确认',
		'back' => '返回',
		'year' => '/一年',
		'yn_choice' => '(必选项)',
		'next' => '下一步，填写董事基本信息',
	);

	$project_ajax = array(
		'error' => '无法修改',
		'return_error' => '服务项目选择失败',
		'return_success' => '服务项目选择成功',
	);


	$add_director = array(
		'title' => '董事信息',
		'h1'  	=> '董事基本信息',
		'div' 	=> '特别说明：<br /> 1、董事为有限公司决策人，负责签署有限公司所有相关事务。
					<br /> 2、本次注册至少需要2名董事，其中至少1名董事必须为新加坡公民或PR，如您已购买“本地名义董事”服务，我们将为您提供1名本地名义董事，我们提供的董事不出任股东。',
		'is_pass' => '<br />3、如果您还需添加董事，您可以在本页面填写董事信息，如无需新增，则可以<a href="javascript:void(0)" id="pass" class="c-f76959 di">点击此处跳过>></a>',
		'div1' => array(
			'b' => '护照信息',
			'labe' => '试一试上传护照自动识别填写',
			'b1'   => '类型',
			'p1'   => '请填写类型',
			'b2'   => '国家码',
			'p2'   => '请填写国家码',
			'b3'   => '护照号码',
			'p3'   => '请填写护照号码',
			'b4'   => '姓名',
			'p4'   => '请填写姓名',
			'b5'   => '性别',
			'p5-1'   => '男',
			'p5-2'   => '女',
			'b6'   => '国籍',
			'b7'   => '出生日期',
			'p7'   => '请填写出生日期',
			'b8'   => '出生地点',
			'p8'   => '请填写出生地点',
			'b9'   => '签发日期',
			'p9'   => '请填写签发日期',
			'b10'   => '签发地点',
			'p10'   => '请填写签发地点',
		),
		'div2' => array(
			'b' => '其他信息',
			'b1'   => '现居住址',
			'p1'   => '上述地址需提供地址证明',
			'b2'   => '电子邮箱',
			'p2'   => '请填写正确的电子邮箱',
			'b3'   => '联系电话',
			'p3'   => '请填写正确的联系电话',
			'b4'   => '微信',
			'p4'   => '请填写正确的微信号',
			'b5'   => '是否设为有限公司股东',
			'p5-1'   => '是',
			'p5-2'   => '否',
		),
		'back' => '返回',
		'button' => '提交'
	);


	$people_ajax = array(
		'passport_type' => '护照类型不能为空',
		'country_code' => '国家码不能为空',
		'passport_no1' => '护照号码不能为空',
		'passport_no2' => '护照号码格式不正确',
		'name' => '姓名不能为空',
		'sex' => '性别不能为空',
		'nationality' => '国籍不能为空',
		'date_birth' => '出生日期不能为空',
		'date_birth_time' => '你填写的出生日期不正确',
		'place_birth' => '出生地点不能为空',
		'date_issue' => '签发日期不能为空',
		'date_issue_time' => '你填写的签发日期不正确',
		'place_issue' => '签发地点不能为空',
		'address' => '现居住地不能为空',
		'email1' => '邮箱不能为空',
		'email2' => '邮箱格式不正确',
		'mobile1' => '联系电话不能为空',
		'mobile2' => '联系电话格式不正确',
		'return_error' => '基本信息填写失败',
		'return_success' => '基本信息填写成功',
	);

	$director_list = array(
		'title' => '董事信息',
		'h1' 	=> '特别说明：<br /> 1、董事为有限公司决策人，负责签署有限公司所有相关事务。
					<br /> 2、本次注册至少需要2名董事，其中至少1名董事必须为新加坡公民或PR，如您已购买“本地名义董事”服务，我们将为您提供1名本地名义董事，我们提供的董事不出任股东。',
		'dis' => '代理董事',
		'del' => '删除',
		'upd' => '修改',
		'con' => '确认',
		'back' => '返回',
		'look' => '查看',
		'new' => '新增一名董事信息',
		'next' => '下一步，填写股东基本信息',
	);


	$people_del_ajax = array(
		'return_error' => '删除失败',
		'return_success' => '删除成功',
	);


	$dir_next_ajax = array(
		'return_error' => '必须满足一名名董事',
		'return_success' => '成功',
	);

	$add_member = array(
		'title' => '股东信息',
		'h1'  	=> '股东基本信息',
		'div' 	=> '特别说明：<br /> 1、股东又名担保人，为有限公司承担提前约定的债务责任，最少可 为1SGD，但建议增加数额，比如1000SGD。
					<br /> 2、本次注册至少需要1名股东，董事可出任股东，我们提供的名义董事除外。',
		'is_pass' => '<br />3、如果您还需添加股东，您可以在本页面填写股东信息，如无需新增，则可以<a href="javascript:void(0)" id="pass" class="c-f76959 di">点击此处跳过>></a>',
		'div1' => array(
			'b' => '护照信息',
			'labe' => '试一试上传护照自动识别填写',
			'b1'   => '类型',
			'p1'   => '请填写类型',
			'b2'   => '国家码',
			'p2'   => '请填写国家码',
			'b3'   => '护照号码',
			'p3'   => '请填写护照号码',
			'b4'   => '姓名',
			'p4'   => '请填写姓名',
			'b5'   => '性别',
			'p5-1'   => '男',
			'p5-2'   => '女',
			'b6'   => '国籍',
			'b7'   => '出生日期',
			'p7'   => '请填写出生日期',
			'b8'   => '出生地点',
			'p8'   => '请填写出生地点',
			'b9'   => '签发日期',
			'p9'   => '请填写签发日期',
			'b10'   => '签发地点',
			'p10'   => '请填写签发地点',
		),
		'div2' => array(
			'b' => '其他信息',
			'b1'   => '现居住址',
			'p1'   => '上述地址需提供地址证明',
			'b2'   => '电子邮箱',
			'p2'   => '请填写正确的电子邮箱',
			'b3'   => '联系电话',
			'p3'   => '请填写正确的联系电话',
			'b4'   => '微信',
			'p4'   => '请填写正确的微信号',
		),
		'back' => '返回',
		'button' => '提交'
	);

	$dir_pass_ajax = array(
		'return_error' => '您未勾选本地董事服务，无法跳过',
		'return_success' => '跳过成功'
	);

	$member_pass_ajax = array(
		'return_error' => '您未将董事设置为股东，无法跳过',
		'return_success' => '跳过成功'
	);


	$member_list = array(
		'title' => '股东信息',
		'h1' 	=> '特别说明：<br /> 1、股东又名担保人，为有限公司承担提前约定的债务责任，最少可 为1SGD，但建议增加数额，比如1000SGD。
					<br /> 2、本次注册至少需要1名股东，董事可出任股东，我们提供的名义董事除外。',
		'del' => '删除',
		'upd' => '修改',
		'con' => '确认',
		'back' => '返回',
		'look' => '查看',
		'new' => '新增一名股东信息',
		'next' => '下一步，上传资料'
	);


	$mem_next_ajax = array(
		'return_error' => '必须满足一名董事一名股东',
		'return_success' => '成功'
	);


	$dir_mem_list = array(
		'title' => '上传资料',
		'b'    => '上传个人资料',
		'dl' => '<dt>资料要求：</dt><dd>1、身份证明：有效护照清晰电子图片。</dd><dd>2、地址证明：有效身份证清晰电子图片。</dd><dd>3、上传文件仅支持jpeg格式。</dd>',
		'upload' => '上传',
		'upd' => '修改',
		'btn' => '提交',
		'look' => '查看',
		'con' => '确认',
		'back' => '返回'
	);

	$uploads = array(
		'title' => '上传资料',
		'b1'    => '上传',
		'b2'    => '个人资料',
		'dl' => '<dt>资料要求：</dt><dd>1、身份证明：有效护照清晰电子图片。</dd><dd>2、地址证明：有效身份证清晰电子图片。</dd><dd>3、上传文件仅支持jpeg格式。</dd>',
		'passport' => '上传护照',
		'card_a' => '上传身份证正面',
		'card_b' => '上传身份证反面',
		'btn' => '提交',
		'back' => '返回'
	);

	$uploads_ajax = array(
		'passport' => '护照上传失败',
		'card_a' => '身份证正面上传失败',
		'card_b' => '身份证反面上传失败',
		'passport_ajax' => '请上传有效护照清晰电子图片',
		'card_a_ajax' => '请上传有效身份证正面清晰电子图片',
		'card_b_ajax' => '请上传有效身份证反面清晰电子图片',
		'return_success' => '上传成功'
	);

	$new_order = array(
		'return_error' => '请上传所有个人资料',
		'return_success' => '订单提交成功'
	);

	$order_show = array(
		'title' => '订单查看',
		'state' => array(
			'sta1' => '注册申请',
			'sta2' => '订单处理',
			'sta2_sp' => '审核中',
			'sta3' => '文件签署',
			'sta4' => '注册申报',
			'sta4_sp' => '已申报',
			'sta5' => '注册审查',
			'sta5_sp' => '约5-7个工作日',
			'sta6' => '注册完成',
		),
		'option' => array(
			'basic' => '注册基本信息',
			'project' => '查看／新增服务项目',
			'dir' => '董事信息',
			'mem' => '股东信息',
			'msg' => '个人资料',
		),
		'choice' => array(
			'see' => '查看',
			'audit' => '审核中',
			'passed' => '已通过',
			'nopassed' => '未通过',
			'pleaseadd' => '请补充',
		),
		'addproject' => '请选择服务项目'
	);

?>