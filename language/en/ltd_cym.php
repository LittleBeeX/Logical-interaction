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
			'div1' => 'Proposed name',
			'p1' => 'The company name may use the following ending: Limited, Corporation, Incorporated, Societe, Anonyme, Ltd., Inc., Corp. S.A; Example: ABC LTD. Company names cannot appear the following words: Royal, Imperial, Government, Chartered. If the company name needs to include Bank, Insurance and Trust, it needs to apply to the Cayman official registry for approval. We will check the proposed name. If the name fails to pass, we will remind you to change the name by email or system message.',
			'div2' => 'Order Recipient',
			'p2' => 'The only recipient of information and material during the registration process of a limited company,must ensure that the email address, telephone number, and mailing address are true and valid.',
			'div3' => 'Directors/Shareholders',
			'p3' => '1、At least one director and shareholder shall be required for this registration. Directors and shareholders both can be natural or legal person;<br/>
			2、The chairman of the board of directors is the person in charge of the board, elected by the shareholders. It can be more than one person;<br/>
			3、The list of shareholders shall be retained in the registration agent, and the company shall issue registered stocks without the need to disclose the identity information of beneficiary;',
			'div4' => 'Registration Process',
			'div5' => 'Registered Capital',
			'p5' => ' The standard authorized capital is USD 50,000, which is divided into 50,000 shares, 1 dollar per share. Additional taxes for excess of capital are as follows (establishment and annual maintenance fee):<br/>
			Registered capital (US$)<-51,200, additional tax 855 USD<br/>
			Registered capital (US$)51,201-<-1,000,000, additional tax 1,220 USD<br/>
			Registered capital (US$)1,000,001<-2,000,000, additional tax 2,420 USD<br/>
			Registered capital (US$)>2,000,000 <br/>
			注：registered capital does not need to be verified and in place.',
			'div6' => 'Registered agent/registered address',
			'p6' => '1、The company shall appoint a registered agent (provided by LittleBeeX);<br/>
			2、The registered address of the company is the office of the local agent.',
			'div7' => 'Business Scope',
			'p7' => 'In principle, the company\'s business scope does not have too much restriction, under the legal premise you can operate any kind of business; Special industries such as finance, banking, credit and insurance require special government approval.',
		),
		'nav2' => array(
			'title' => 'Material',
			'div1' => 'Director/Shareholder Information',
			'p1' => '1. Prepare clear electronic pictures of valid passport and ID card.<br/>
			2. The picture should be in jpeg format, and you can select and upload it from your mobile album.',
			'div2' => 'Documents that need to be signed',
			'p2' => 'After the basic information of the registration application is approved, we will notify you by email and send the documents that require signature confirmation by the directors to the recipient\'s e-mail. After the completion of the signature confirmation, the scanned copy of signed document need to be sent back.<br/>
			Please keep the paper version of the signed documents and the provided director/member documents, such relevant documents must be mailed to the assigned address after the registration is completed.',
		),
		'nav3' => array(
			'title' => 'Price',
			'div1' => 'Basic fee of registering Cayman limited company: ￥30800/ one-time（required）',
			'p1' => 'Services include policy interpretation, application fee for company registration, first year fee for providing standard office address, first year fee for appointing company secretary, guiding to complete government questionnaire review, and collecting mail for customers.',
			'div2' => 'The annual management fee is ￥24600 / year',
			'p2' => ' ',
			'div3' => 'Certificate notarization for shareholders/directors: ￥3410 (one-time fee)',
			'p3' => ' ',
			'div4' => 'Bank account assistance: ￥6820 for each one',
			'p4' => 'We will make an appointment for you after submitting the bank account application. After receiving the bank appointment notice, documents should be signed and directors should sign in person. Please keep the mobile phone unblocked and the customer service staff will contact you',
		),
		'nav4' => array(
			'title' => 'Payment',
			'div1' => 'Alipay',
			'p1' => 'Alipay accepts RMB payment. The payment limit is set according to your personal banking online bank quota. Please ensure that your payment limit can complete this payment.',
			'div2' => 'Bank Transfer',
			'p2' => 'When the payment amount is limited, you can choose to complete the payment through personal bank account or Corporate bank account transfer.',
			'div3' => 'Digital Payment',
			'p3' => 'Support LT TOKEN',
		),
		'nav5' => array(
			'title' => 'Other',
			'div1' => 'Open bank account',
			'p1' => 'It is difficult to open a local account. If you need to do so, please choose banks in Singapore or Hong Kong.',
			'div2' => 'Original Registration Documents',
			'p2' => 'The original version of the registration is a hard copy stamped by the official institute, which has the same legal effect as the electronic version. If you do not select the bank account/original registration documents at the time of application, you may also apply at the user center after registration is completed.',
		),
	);

	$basic = array(
		'title' => 'Basic Information',
		'h1' => 'Apply for Cayman limited company',
		'div1' => array(
			'h6' => 'Cayman Limited Company',
			'p' => 'The registration period is 30 working days after submitting the materials.<br /> The average length takes 25 working days. <br /> One time registration fee is ¥30800.',
			'div' => 'MORE'
		),
		'div2'  => array(
			'money' => '¥30800',
			'p1' => 'Minimum fee',
			'p2' => ' ',
			'p3' => '* Support LT TOKEN payment',
		),
		'div3'  => array(
			'b' => 'Fill in the basic information',
			'b1' => 'limited company’s proposed name',
			'i' => 'LTD.',
			'p1' => 'Please fill in the limited company\'s proposed name in English',
		),
		'input' => array(
			'b' => 'Order Recipient',
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
		'date_birth_18' =>'The date of birth is not legal! Must be 18 years old.',
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