<?php
	global $guide;//问题指引
	global $basic;//基本信息
	global $basic_ajax;//基本信息ajax返回
	global $projects;//服务项目
	global $project_ajax;//服务项目ajax返回
	global $add_director;//董事添加
	global $people_ajax;//董事添加ajax返回
	global $director_list;//董事信息展示
	global $people_del_ajax;//董事成员删除ajax
	global $dir_next_ajax;//懂事下一步ajax
	global $add_member;//成员添加
	global $dir_pass_ajax;//跳过董事添加ajax
	global $member_pass_ajax;//跳过成员添加ajax
	global $member_list;//成员信息展示
	global $mem_next_ajax;//成员下一步ajax
	global $dir_mem_list;//董事成员上传信息页
	global $uploads;//董事成员上传信息页
	global $uploads_ajax;//董事成员上传信息页
	global $new_order;//跳转订单支付
	global $order_show;//展示


	$guide = array(
		'title' => 'Problem Guidelines',
		'h1' => 'Registration instructions',
		'nav1' => array(
			'title' => 'Basic',
			'div1' => 'limited company\'s proposed name',
			'p1' => 'The proposed name of limited company is limited to the English name. For example: ABC FOUNDATION LTD. This name must be approved by ACRA before it is valid. If the proposed name fails to pass, We will remind you to change the name by phone or system message.',
			'div2' => 'Order recipient',
			'p2' => 'The only recipient of information and material during the registration process of a limited company,must ensure that the email address, telephone number, and mailing address are true and valid.',
			'div3' => 'Directors/Shareholders',
			'p3' => '1. The directors are decision makers of the limited company and are responsible for signing all relevant matters of the company. <br/>
			2. At least one director is required for this registration and must be a Singapore citizen or PR. If you choose to purchase the “Local nominal Director” service, we will provide you with a local nominal director. The directors we provide will not be shareholder.<br/>
			3. The shareholder, also known as the guarantor, assumes the pre-agreed debt liability for the limited company, which can be at least 1SGD, but it is recommended to increase the amount, such as 1000SGD. <br/>
			4. At least one shareholder is required for this registration. Directors may serve as shareholders, except for the nominal directors we provide. ',
			'div4' => 'registration process',
		),
		'nav2' => array(
			'title' => 'Material',
			'div1' => 'Director/Shareholder Information',
			'p1' => '1. Prepare a clear electronic picture of your valid passport and ID card.<br/>
			2. The picture is in jpeg format. You can select upload from the mobile phone album.',
			'div2' => 'Documents that need to be signed',
			'p2' => 'After the basic information of the registration application is approved, we will notify you by email and send the documents that require signature confirmation by the directors to the recipient\'s e-mail. After the completion of the signature confirmation, the scanned copy of signed document need to be sent back.<br/>
			Please keep the paper version of the signed documents and the provided director/member documents, such relevant documents must be mailed to the assigned address after the registration is completed.',
		),
		'nav3' => array(
			'title' => 'Price',
			'div1' => 'Local registration ¥5800/one time (required)',
			'p1' => 'If the registration of the CLG is rejected due to the project, no refund can be made.',
			'div2' => ' Legal secretarial service ¥5800/year (required)',
			'p2' => 'A limited company must have a Singaporean citizen as secretary.',
			'div3' => 'Registration address and mail management annual fee ¥1500/year (required)',
			'p3' => 'Services include control panel, standard office address, mail collection, etc.',
			'div4' => 'Local nominal director service ¥28,000/year',
			'p4' => 'A limited company must at least have a director who is a Singapore citizen or PR. Select this service. We will provide you with one Singaporean director. The directors provided by this service will not be shareholder.',
			'div5' => 'Bank account assistance service ¥1500/room',
			'p5' => 'After the bank account opening application is submitted, we will make an appointment for you to open an bank account. After receiving the bank appointment notice, the directors are required to go to the local site to sign relevant documents. Please keep the mobile phone open and the customer service staff will contact you. ',
		),
		'nav4' => array(
			'title' => 'Payment',
			'div1' => 'Alipay',
			'p1' => 'Alipay accepts RMB payment. The payment limit is set according to your personal banking online bank quota. Please ensure that your payment limit can complete this payment.',
			'div2' => 'Bank Transfer',
			'p2' => 'When the payment amount is limited, you can choose to complete the payment through personal bank account or Corporate bank account transfer.',
			'div3' => 'Digital payment',
			'p3' => 'Support LT TOKEN payment',
		),
		'nav5' => array(
			'title' => 'Other',
			'div1' => 'Open a Bank Account',
			'p1' => 'After the bank account opening application is submitted, we will make an appointment for you to open an bank account. After receiving the bank appointment notice, the directors are required to go to the local site to sign relevant documents. Please keep the mobile phone open and the customer service staff will contact you.',
			'div2' => 'registration original',
			'p2' => 'The registration original is a ACRA\'s stamped print version document, which has the same legal effect as the electronic document. If you did not choose bank account opening/registration original service at the time of application, you can also apply at the user center after registration.',
		),
	);

	$basic = array(
		'title' => 'Basic Information',
		'h1' => 'Apply for a Singapore limited company',
		'div1' => array(
			'h6' => 'Singapore Limited company',
			'p' => 'Registration is completed on 1 working days after submission of materials.<br /> Average time is 1 working days.<br /> Registration fee ¥5800/one time.',
			'div' => 'MORE'
		),
		'div2'  => array(
			'money' => '¥13100',
			'p1' => 'Minimum fee',
			'p2' => '',
			'p3' => '* Support LT TOKEN payment',
		),
		'div3'  => array(
			'b' => 'Fill in the basic information',
			'b1' => 'limited company’s proposed name',
			'i' => 'PTE LTD',
			'p1' => 'Please fill in the limited company\'s proposed name in English',
		),
		'input' => array(
			'b' => 'Order recipient information',
			'b1' => 'Name',
			'p1' => 'Please fill in the name of the recipient of the order',
			'b2' => 'Email',
			'p2' => 'Please fill in the correct email address',
			'b3' => 'contact number',
			'p3' => 'Please fill in the correct contact number',
			'b4' => 'Mailing address',
			'p4' => 'Please fill in the recipient\'s mailing address',
		),
		'next' => 'Next, select the service item',
		'back' => 'return',
		'upd' => 'Determine'
	);

	$basic_ajax = array(
		'name1' => 'Limited company\'s proposed name cannot be empty',
		'name2' => 'Please fill in the full proposed name of limited company in English',
		'contact_name' => 'Order recipient\'s name cannot be empty',
		'contact_email1' => 'Order recipient\'s email cannot be empty',
		'contact_email2' => 'Please enter the correct email format',
		'contact_mobile1' => 'Order recipient\'s mobile phone number cannot be empty',
		'contact_mobile2' => 'Please enter the correct contact information',
		'address' => 'Order recipient\'s mailing address cannot be empty',
		'return_error' => 'Failed to fill in the basic information',
		'return_success' => 'The basic information is filled in successfully',
	);


	$projects = array(
		'title' => 'Service items',
		'b' => 'Select service item',
		'con' => 'confirm',
		'back' => 'return',
		'year' => '/Year',
		'yn_choice' => '(required)',
		'next' => 'Next, fill in the director',
	);

	$project_ajax = array(
		'error' => 'Unable to modify',
		'return_error' => 'Service item selection failed',
		'return_success' => 'Service item selection succeed',
	);


	$add_director = array(
		'title' => 'Director Information',
		'h1' => 'Basic information of directors',
		'div' => 'Special Note:<br /> 
		1. The directors are decision makers of the limited company and are responsible for signing all relevant matters of the company.<br /> 
		2. At least 2 directors are required for this registration, at least one of them must be a Singapore citizen or PR. If you have already purchased a local nominal director service, we will provide you with a local nominal director. The directors we provide are not As a shareholder.',
		'is_pass' => '<br />3. If you need to add a director, you can fill in the information of the director on this page. If you don\'t need to add it, you can<a href="javascript:void(0)" id="pass" class="c-f76959 di">Click here to skip>></a>',
		'div1' => array(
			'b' => 'Passport information',
			'labe' => 'Upload passport',
			'b1' => 'Types',
			'p1' => 'Please fill in the type',
			'b2' => 'Country code',
			'p2' => 'Please fill in the country code',
			'b3' => 'Passport number',
			'p3' => 'Please fill in your passport number',
			'b4' => 'Name',
			'p4' => 'Please fill in your name',
			'b5' => 'gender',
			'p5-1' => 'Male',
			'p5-2' => 'Female',
			'b6' => 'Country of Citizenship',
			'b7' => 'Date of birth',
			'p7' => 'Please fill in date of birth',
			'b8' => 'Birth place',
			'p8' => 'Please fill in the place of birth',
			'b9' => 'Date of issue',
			'p9' => 'Please fill in the date of issue',
			'b10' => 'issue place ',
			'p10' => 'Please fill in the place of issuance',
		),
		'div2' => array(
			'b' => 'other information',
			'b1' => 'Current residence',
			'p1' => 'The above address requires proof of address',
			'b2' => 'Email',
			'p2' => 'Please fill in the correct email',
			'b3' => 'contact number',
			'p3' => 'Please fill in the correct contact number',
			'b4' => 'WeChat',
			'p4' => 'Please fill in the correct WeChat number',
			'b5' => 'Whether it is set as a limited company shareholders',
			'p5-1' => 'Yes',
			'p5-2' => 'No',
		),
		'back' => 'return',
		'button' => 'Submit'
	);


	$people_ajax = array(
		'passport_type' => 'Passport type cannot be empty',
		'country_code' => 'Country code cannot be empty',
		'passport_no1' => 'Passport number cannot be empty',
		'passport_no2' => 'Incorrect passport number format',
		'name' => 'Name cannot be empty',
		'sex' => 'Gender cannot be empty',
		'nationality' => 'Nationality cannot be empty',
		'date_birth' => 'Birth date cannot be empty',
		'date_birth_time' => 'Incorrect birth date filled in',
		'place_birth' => 'Place of birth cannot be empty',
		'date_issue' => 'Date of issue cannot empty null',
		'date_issue_time' => 'Incorrect date of issue',
		'place_issue' => 'Place of issue cannot be empty',
		'address' => 'current residence cannot be empty',
		'email1' => 'Email cannot be empty',
		'email2' => 'Email format is incorrect',
		'mobile1' => 'Phone number could not be empty',
		'mobile2' => 'Contact phone format is incorrect',
		'return_error' => 'Failed to fill in the basic information',
		'return_success' => 'The basic information is filled in successfully',
	);

	$director_list = array(
		'title' => 'Director Information',
		'h1' => 'Special Note:<br /> 
		1. The directors are decision makers of the limited company and are responsible for signing all relevant matters of the company.<br /> 
		2. At least 2 directors are required for this registration,one of them must be a Singapore citizen or PR. If you have already purchased a local nominal director service, we will provide you with a local nominal director. The directors we provide are not as a shareholder.',
		'dis' => 'nominal director',
		'del' => 'Delete',
		'upd' => 'Modify',
		'con' => 'confirm',
		'back' => 'return',
		'look' => 'View',
		'new' => 'Add a director information',
		'next' => 'Next, fill in the shareholders',
	);


	$people_del_ajax = array(
		'return_error' => 'failed to delete',
		'return_success' => 'successfully deleted',
	);


	$dir_next_ajax = array(
		'return_error' => 'Must meet a director',
		'return_success' => 'success'
	);

	$add_member = array(
		'title' => 'Shareholder information',
		'h1' => 'Basic information of shareholders',
		'div' => 'Special Note:<br /> 
		1. The shareholder, also known as the guarantor, assumes the pre-agreed debt liability for the limited company, which can be at least 1SGD, but it is recommended to increase the amount, such as 1000SGD.<br /> 
		2. At least one shareholder is required for this registration. Directors may serve as shareholders, except for nominal directors we provide.',
		'is_pass' => '<br />3. If you still need to add a shareholder, you can fill in the shareholder information on this page, if you do not need to add it,you can<a href="javascript:void(0)" id="pass" class="c-f76959 di">Click here to skip>></a>',
		'div1' => array(
			'b' => 'Passport information',
			'labe' => 'Upload passport',
			'b1' => 'Types',
			'p1' => 'Please fill in the type',
			'b2' => 'Country code',
			'p2' => 'Please fill in the country code',
			'b3' => 'Passport number',
			'p3' => 'Please fill in your passport number',
			'b4' => 'Name',
			'p4' => 'Please fill in the name',
			'b5' => 'gender',
			'p5-1' => 'Male',
			'p5-2' => 'Female',
			'b6' => 'Country of Citizenship',
			'b7' => 'Date of birth',
			'p7' => 'Please fill in date of birth',
			'b8' => 'Birth place',
			'p8' => 'Please fill in the place of birth',
			'b9' => 'Date of issue',
			'p9' => 'Please fill in the date of issue',
			'b10' => 'issue place',
			'p10' => 'Please fill in the place of issuance',
		),
		'div2' => array(
			'b' => 'other information',
			'b1' => 'Current residence',
			'p1' => 'The above address requires proof of address',
			'b2' => 'Email',
			'p2' => 'Please fill in the correct email address',
			'b3' => 'contact number',
			'p3' => 'Please fill in the correct contact number',
			'b4' => 'WeChat',
			'p4' => 'Please fill in the correct WeChat number'
		),
		'back' => 'return',
		'button' => 'Submit'
	);

	$dir_pass_ajax = array(
		'return_error' => 'You have not checked the local director service and cannot skip',
		'return_success' => 'Skip success'
	);

	$member_pass_ajax = array(
		'return_error' => 'You did not set directors as shareholders and cannot skip',
		'return_success' => 'Skip success'
	);


	$member_list = array(
		'title' => 'Shareholder information',
		'h1' => 'Special instructions: <br /> 
		1. The shareholder, also known as the guarantor, assumes the pre-agreed debt liability for the limited company, which can be at least 1SGD, but it is recommended to increase the amount, such as 1000SGD.<br />
		 2.  At least one shareholder is required for this registration. Directors may serve as shareholders, except for nominal directors we provide.',
		'del' => 'Delete',
		'upd' => 'Modify',
		'con' => 'confirm',
		'back' => 'return',
		'look' => 'View',
		'new' => 'Add a shareholder information',
		'next' => 'Next, upload information'
	);


	$mem_next_ajax = array(
		'return_error' => 'Must satisfy one director and one shareholder',
		'return_success' => 'Success'
	);


	$dir_mem_list = array(
		'title' => 'Upload information',
		'b' => 'Upload personal information',
		'dl' => '<dt> Files requirements:</dt><dd>1, Proof of ID: Clear electronic pictures of valid passport. </dd><dd>2, Proof of address: Clear electronic pictures of valid ID card. </dd><dd>3. upload files only support jpeg format.</dd>',
		'upload' => 'Upload',
		'upd' => 'Modify',
		'btn' => 'Submit',
		'look' => 'View',
		'con' => 'confirm',
		'back' => 'Return'
	);

	$uploads = array(
		'title' => 'Upload information',
		'b1' => 'Upload',
		'b2' => 'personal information',
		'dl' => '<dt>Files requirements:</dt><dd>1, Proof of ID: Clear electronic pictures of valid passport.</dd><dd>2, Proof of address: Clear electronic pictures of valid ID card.</dd><dd>3. upload files only support jpeg format.</dd>',
		'passport' => 'Upload passport',
		'card_a' => 'Upload the front of the ID card',
		'card_b' => 'Upload the back of the ID card',
		'btn' => 'Submit',
		'back' => 'Return'
	);

	$uploads_ajax = array(
		'passport' => 'Passport failed to upload',
		'card_a' => 'Failed to upload the front of the ID card',
		'card_b' => 'Failed to upload the back of the ID card',
		'passport_ajax' => 'Please upload a clear electronic pictures of valid passport',
		'card_a_ajax' => 'Please upload a clear electronic pictures of the front of ID card',
		'card_b_ajax' => 'Please upload a clear electronic pictures of the back of ID card',
		'return_success' => 'Upload successful'
	);

	$new_order = array(
		'return_error' => 'Please upload all personal information',
		'return_success' => 'Orders submitted successfully'
	);

	$order_show = array(
		'title' => 'Order view',
		'state' => array(
			'sta1' => 'application',
			'sta2' => 'processing',
			'sta2_sp' => 'under review',
			'sta3' => 'signing',
			'sta4' => 'declaration',
			'sta4_sp' => 'Reported',
			'sta5' => ' review',
			'sta5_sp' => 'About 5-7 working days',
			'sta6' => 'complete',
		),
		'option' => array(
			'basic' => 'Registration basic information',
			'project' => 'View/Add Service Items',
			'dir' => 'Director Information',
			'mem' => 'Shareholders Information',
			'msg' => 'personal profile',
		),
		'choice' => array(
			'see' => 'View',
			'audit' => 'under review',
			'passed' => 'passed',
			'nopassed' => 'Did not pass',
			'pleaseadd' => 'Please add on',
		),
		'addproject' => 'Please select a service item'
	);

?>