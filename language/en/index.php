<?php
	global $main;//首页
	global $login;//登录
	global $login_ajax;//登录提交
	global $yzcode;//发送验证码
	global $register;//用户注册
	global $register_ajax;//用户注册提交
	global $forget;//忘记密码
	global $forget_ajax;//忘记密码提交
	global $business;//公司注册业务
	global $exit_ajax;//退出
	global $wait;//开发中...
	global $privacy;//隐私保护
	global $law;//法律协议
	global $disclaimer;//免责声明
	global $user;//用户协议

	$main = array(
		'title' => 'Change future Enterprise ',
		'text1' => 'Run Your Company <br/>On The Blockchain',
		'text2' => 'know more',
		'text3' => 'Register now',
		'text4' => 'LittleBeeX helps you globally <b><span class="txt"></span><span class="analog"></span></b> based on blockchain technology<br/>
		LittleBeeX is the world\'s first enterprise value-chain <br/> ecological network based on blockchain technology<br/>
		which enables corporate participants to establish <br/> trust on the technical level and form the value <br/> of the Internet.<br/>
		LittleBeeX uses Distributed technology and<br/> change future of enterprise.',
		'text5' => 'Global registration, only need to move your hand, no need to leave',
		'text6' => 'We help you set up an international company within 24 hours<br> Order now, set up company in more than 100 countries and regions including Singapore, Hong Kong, UK, BVI, Seychelles, Caribbean, and Switzerland ',
		'text7' => 'Quick, simple, no trouble',
		'text8' => 'LittleBeeX provides company secretary services for you.<br>You have only to place an order online, LittleBeeX will take care of the rest.<br/>via KYC and private key can be used for signature in corporate governance and digital asset issuance',
		'text9' => '24 hours online, no matter where you are, our service is at your fingertips<br/>Technology changes the world, Blockchain changes the future and make life better...',
		'text10' => '7×24 hours, enjoy services anytime, anywhere',
		'text11' => 'More services, more favorable prices',
		'text12'=> 'Get your first company for as LT as $500!<br/>
					LittleBeeX offers cost-effective value added services for businesses.<br/>
					TOKEN payment enjoys more discounts and is more convenient.',
		'text13' => 'Set up company',
		'text14' => 'Conduct business',
		'text15' => 'Equity trading',
	);

	$login = array(
		'title' => 'Login',
		'input1' => 'E-mail/phone number',
		'input2' => 'Password',
		'button1' => 'Login',
		'button2'=> 'Forget password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
		'button3' => 'No account? Quick registration',
		'pub' => array(
			'text1' => 'Loading...',
			'text2' => 'Please swipe right to verify',
			'text3' => 'Verification passed',
			'text4' => 'Sorry, there was an error...',
			'text5' => 'Verification failed',
			'text6' => 'Having detected the risk of your current operating environment, please enter the verification code',
			'text7' => 'Verification code error, please re-enter',
		),
	);

	$login_ajax = array(
		'account' => 'please enter user name',
		'password' => 'Please enter your password',
		'return_1' => 'wrong user name or password',
		'return_2' => 'Login successful',
	);

	$yzcode = array(
		'phone' => 'Please enter the correct phone number',
		'email' => 'Please enter the correct email format',
		'userid_1' => 'Current user name is not registered',
		'userid_2' => 'The current username already exists',
		'theme' => 'LittleBeeX user email verification code',
		'return_1' => 'Please enter the correct account number',
		'return_2' => 'Verification code sent successfully',
	);

	$register = array(
		'title' => 'Register',
		'text1' => 'Country of Citizenship',
		'phone' => 'Phone number',
		'phone_text' => 'Please enter your phone number',
		'email' => 'email address',
		'email_text' => 'Please enter your email',
		'firstpassword' => 'Login password',
		'firstpassword_text' => 'Enter 6-14 digits password',
		'secondpassword' => 'Confirm password',
		'secondpassword_text' => 'Please confirm your password',
		'code' => 'verification code',
		'code_text' => 'code',
		'button1' => 'Get code',
		'button1_2'=> 's',
		'button2'=> 'Registration',
		'text2'=> 'Registration represents you have read and agree',
		'text3' => 'LittleBeeX User Agreement'
	);

	$register_ajax = array(
		'phone' => 'Please enter the correct mobile phone number format',
		'email' => 'Please enter the correct email format',
		'account' => 'The current username already exists',
		'phone' => 'Please enter the correct mobile phone number format',
		'firstpassword' => 'Password length between 6 and 14 digits',
		'secondpassword' => 'Please ensure that you enter the same password twice',
		'yzmcode' => 'Verification code must be filled',
		'yzmcode_2' => 'Verification code must be filled',
		'return_1' => 'Registration failed',
		'return_2' => 'Registration succeeded',
	);

	$forget = array(
		'title' => 'Forgot password',
		'account' => 'Account number',
		'account_text' => 'Please enter your Login account',
		'firstpassword' => 'new password',
		'firstpassword_text' => 'Enter 6-14 digits password',
		'secondpassword' => 'Confirm password',
		'secondpassword_text' => 'Please confirm your password',
		'yzmcode' => 'Verification code',
		'yzmcode_text' => 'code',
		'button1' => 'Get code',
		'button1_2' => 's',
		'button2' => 'Make sure to modify',
	);

	$forget_ajax = array(
		'account' => 'Please enter your Login account',
		'firstpassword' => 'Enter 6-14 digits password',
		'secondpassword' => 'Inconsistent password entry twice',
		'userinfo' => 'The current account is not registered',
		'password' => 'The new password cannot be the same as the old password',
		'yzmcode_1' => 'Verification code must be filled',
		'yzmcode_2' => 'Verification code error',
		'return_1' => 'Modification failed. Please try again!',
		'return_2' => 'Modified successfully, please Login! ',
	);

	$business = array(
		'title' => 'Company registration',
		'banner' => array(
			'h3' => 'Hello',
			'p' => 'We help you set up an international company within 24 hours',
		),
		'line1' => array(
			'b1' => 'Foundation',
			'b2' => 'Global Business',
		),
		'line2' => array(
			'b' => 'Singapore <br />Foundation',
			'p1' => 'The registration period is 7 days after submitting the materials',
			'p2' => 'The basic conditions for Singapore Foundation registration: At least one local director & local secretarial service are required. LittleBeeX can provide you with the above services.',
			'a1' => 'Apply for registration',
			'a2' => 'see details',
		),
		'line3' => array(
			'b' => 'Singapore <br />Ltd.',
			'p1' => 'The registration period is 1 days after submitting the materials',
			'p2' => 'The basic conditions for Singapore Limited company registration: At least one local director & one shareholder are required, and LittleBeeX can provide you with local secretarial services.',
			'a1' => 'Apply for registration',
			'a2' => 'see details',
		),
		'line4' => array(
			'b' => 'United Kingdom <br /> Private Limited Company',
			'p1' => '24 hours after the registration materials is submitted',
			'p2' => 'The basic conditions for UK Private Limited Company registration: To set up a private limited company, you need at least one director who is over the age of 16 years.',
			'a1' => 'Apply for registration',
			'a2' => 'see details',
		),
		'line5' => array(
			'b' => 'BVI<br />Companies Limited<br/>by Shares',
			'p1' => 'The registration period is 15 working days after submitting the materials',
			'p2' => 'The basic conditions for BVI companies limited by shares: At least one local director & one shareholder are required, directors and shareholders may be natural or legal persons. Natural persons shall have no nationality restriction and must be aged 18 or above.',
			'a1' => 'Apply for registration',
			'a2' => 'see details',
		),
		'line6' => array(
			'b' => 'Cayman<br />Limited Company',
			'p1' => 'The registration period is 30 working days after submitting the materials',
			'p2' => 'The basic conditions for BVI companies limited by shares: At least one local director & one shareholder are required, directors and shareholders may be natural or legal persons. Natural persons shall have no nationality restriction and must be aged 18 or above.',
			'a1' => 'Apply for registration',
			'a2' => 'see details',
		),
	);

	$exit_ajax = array(
		'return' => 'exit successfully!'
	);

	$wait = array(
		'title' => 'under development',
		'text' => 'Strive for developing......'
	);

	$privacy = array(
		'title' => 'Privacy Policy',
		'div1' => '1、General Principles',
		'p1' => '1.1 This Privacy Statement applies to all LittleBeeX related services. LittleBeeX respects and protects the privacy rights of all users using LittleBeeX Platform Services.<br/><br/>
		1.2 In order to provide you with more accurate and more personalized services, we will use and disclose your personal information in accordance with the provisions of this Privacy Policy, but LittleBeeX will treat such information with a high degree of diligence and prudence;<br/><br />
		1.3 Except as otherwise provided in this Privacy Policy, LittleBeeX will not disclose such information to third parties without prior permission from you. LittleBeeX will update this privacy policy from time to time. ',
		'div2' => '2、Scope of application',
		'p2' => '2.1 When you register for the LittleBeeX platform account, your personal registration information provided by the LittleBeeX platform or its affiliates (in addition to the related business registration information and the natural person\'s manager\'s information required by laws and regulations, etc.)<br/><br/>
		2.2 When you use LittleBeeX Platform Services, or visit the LittleBeeX Platform Website, LittleBeeX automatically receives and records information on your browser and computer, including but not limited to your IP address, browser type, language used, access Date and time, hardware and software feature information, and web page records for your needs;<br/><br/>
		2.3 User\'s personal data the LittleBeeX obtained from business partners through legal means. ',
		'div3' => '3、Use of Information',
		'p3' => '3.1 LittleBeeX will not provide, sell, rent, share or trade your personal information to any unrelated third party unless obtained your prior permission, or the third party and LittleBeeX (including LittleBeeX affiliates) provide services to you individually or jointly. And after the service is over, it will be banned from accessing all of the information it previously had access to;<br/><br/>
		3.2 LittleBeeX also does not allow any third party to collect, edit, sell or distribute your personal information by any means.',
		'div4' => '4、Information Disclosure',
		'p4' => 'Under the following circumstances, LittleBeeX will disclose all or part of your personal information in accordance with your personal wishes or the provisions of the law:<br/><br/>
		4.1 Disclosure to a third party with your prior consent;<br/><br/>
		4.2 If you are an appropriate intellectual property right complainant and have filed a complaint, you should be required by the complainant to disclose it to the respondent so that the parties can handle possible rights disputes;<br/><br/>
		4.3 According to the relevant provisions of the law, or the requirements of administrative or judicial bodies, disclosure to third parties or administrative and judicial bodies;<br/><br/>
		4.4 If you are in violation of relevant laws, regulations or LittleBeeX service agreements or related rules, you need to disclose to third parties;<br/><br/>
		4.5 To provide your requested products and services, you must share your personal information with third parties;<br/><br/>
		4.6 In a transaction created on the LittleBeeX platform, LittleBeeX shall have the right to decide to provide the user with necessary information, such as contact details of the counterparty, to facilitate completion of the transaction or settlement of disputes if any party to the transaction performs or partially fulfills the transaction obligations and submits information disclosure requests;<br/><br/>
		4.7 Other LittleBeeX deems appropriate disclosure in accordance with laws, regulations or website policies. ',
		'div5' => '5、 Information Storage and Exchange',
		'p5' => 'The information and materials collected by LittleBeeX about you will be kept on LittleBeeX and/or its affiliates\' servers. Such information and materials may be sent to your country, region or abroad LittleBeeX collects information and materials and is accessed,saved and displayed abroad.',
		'div6' => '6、 Use of Cookie',
		'p6' => '6.1 If you do not refuse to accept cookies, LittleBeeX will set or access cookies on your computer so that you can Login or use the LittleBeeX Platform Services or features that rely on cookies;<br /> <br/>
		6.2 LittleBeeX uses cookies to provide you with more thoughtful personalized services including promotion services;<br/><br/>
		6.3 You have the right to choose to accept or refuse cookies. You may refuse to accept cookies by modifying your browser settings. However, if you choose not to accept cookies, you may not be able to Login or use LittleBeeX Platform Services or features that rely on cookies.<br/><br/>
		6.4 This policy will apply to information obtained through LittleBeeX\'s cookies.',
		'div7' => '7、Information Security',
		'p7' => '7.1 Your account has security protection function. Please keep your account and password information safe.<br/><br/>
		7.2 LittleBeeX will ensure that your information is not lost or misused or altered by backing up other servers and encrypting user passwords.<br/><br/>
		7.3 In spite of the aforementioned security measures, please also note that there are no "perfect security measures" on the information network;<br/><br/>
		7.4 If you find that your personal information is compromised, especially if your account and password is known by others, you can contact us at support@littlebeex.com to take appropriate action.',
		'div8' => '8、Revision of the Privacy Statement',
		'p8' => '8.1 We reserve the right to modify this privacy statement at any time. We tell you that we have revised the privacy statement by updating and issuing the effective date of the new version, highlighting the revision, and sometimes we will issue a notice telling you that the privacy statement has been revised, but this is not an obligation of ours.<br/><br/>
		8.2 You should regularly review the privacy statement and follow the revisions. If you do not agree with the revised content, you should stop visiting this site immediately.<br/><br/>
		8.3 When an updated version of the Privacy Statement is released, you continue to visit the LittleBeeX website which display and indicate your agreement to the updated content and agree to abide by this updated privacy policy.',
	);

	$law = array(
		'title' => 'Legal Agreement',
		'div1' => 'Article 1',
		'p1' => 'The purpose of this website is to provide users with global company registration, corporate governance, and digital asset trading services based on blockchain technology without violating relevant laws and regulations of the Republic of Singapore. It is forbidden to use this website for all illegal transactions such as money laundering, smuggling, and commercial bribery. If such an incident is found, this website will freeze the account and immediately report it to the competent authority.',
		'div2' => 'Article 2',
		'p2' => 'When the competent authority presents the relevant investigation documents and requests this site to cooperate with the investigation of designated users, or when measures such as seizure, freezing, or transfer of user accounts are taken, the site will assist in providing corresponding user data in accordance with the requirements of the competent authority, or perform the appropriate operation. Therefore, this site does not assume any responsibility for the leakage of user privacy, account inoperability, and the resulting loss.',
		'div3' => 'Article 3',
		'p3' => 'Users of this site violate the relevant provisions of the Republic of Singapore by violating the provisions of this statement,as a service provider, this site is obliged to improve the rules and services of the platform, but this site has no motives and facts to violate the relevant laws of the Republic of Singapore, this site does not assume any joint and several liability for the user\'s behavior.',
		'div4' => 'Article 4',
		'p4' => 'Any person who login on this website in any way or directly or indirectly uses the service of this website shall be deemed to voluntarily accept the restrictions of this website statement. ',
		'div5' => 'Article 5',
		'p5' => 'The issues not covered by this statement refer to the relevant laws and regulations of the Republic of Singapore. When this statement conflicts with the relevant laws and regulations of the Republic of Singapore, the relevant laws and regulations of the Republic of Singapore shall prevail.',
	);

	$disclaimer =array(
		'title' => 'Disclaimer',
		'p1' => 'LittleBeeX is a non-profit system. The system\'s future internal rewards,operation and maintenance mechanisms all use virtual digital assets (ie. virtual goods) rather than monetary rewards. The digital currency generated by the system itself can be used as a reward for system maintenance. However, in order to satisfy the resource exchange between the system and other systems or other social entities, the intervention of a certain amount of other virtual digital assets such as Ethernet coins is required. According to this, LittleBeeX\'s listed assets are only similar to virtual digital assets such as Bitcoin, Ethereum, and Quantum.',
		'p2' => 'LT is a digital currency that uses LittleBeeX as one of its usage scenarios. It is a virtualized reward mechanism for system operations, rather than monetary rewards. Therefore redemption of LT is not an investment. Holding LT does not represent ownership of LittleBeeX or LittleBeeX applications. LittleBeeX does not grant any individual any right to participate in, control, or make any decision about LittleBeeX and LittleBeeX applications. LT holders can participate in the use of the LittleBeeX platform, but LT cannot be directly realized.',
		'p3' => 'LT\'s value proposition is to create a LittleBeeX application platform and use case\'s application value and scarcity experience of virtual goods, rather than monetary value or transaction value, for participants and holders. We can\'t guarantee that LT will add value. It may also have a decline in psychological cognitive value under certain circumstances. Due to unpredictable circumstances, the goals outlined in the LittleBeeX white paper may change. Although the team will do its best to achieve all the goals of the LittleBeeX White Paper, all individuals and groups purchasing LT will be at their own risk. The LittleBeeX White Paper is intended only for the purpose of conveying information and does not constitute any investment advice, investment intentions or teaching investment. The LittleBeeX White Paper does not constitute or understand any sale, or any invitation to buy or sell, any form of securities, nor any form of contract or commitment.',
		'p4' => 'For LittleBeeX listed project participants, please read the LittleBeeX white paper carefully to fully understand LittleBeeX\'s technical characteristics and listed risk-return characteristics, and fully consider its own risk tolerance, rational judgment, and careful decision making. Once participating in the project, it means understanding and accepting the project risks and is willing to bear all corresponding results or consequences for this purpose.'
	);

	$user = array(
		'title' => 'User Agreement',
		'div1' => '1、Confirmation and acceptance of service terms',
		'p1' => 'LittleBeeX’s user fills in the information according to the tips of the registration page , reads and agrees to this agreement and completes all registration procedures. Those means that the user has known and agreed to the legally binding agreement in accordance with the terms of service regarding the use of services provided by LittleBeeX.',
		'div2' => '2、Service Delivery',
		'p2' => 'LittleBeeX provides internet services for users through the international Internet. The service content includes, but is not limited to, providing information, company registration or services, etc. Some services provided by LittleBeeX are provided by qualified third parties.<br/><br/>
		LittleBeeX does not guarantee that the network service will satisfy all the user\'s usage requirements, nor does it guarantee that the network service will not be interrupted for a short time, nor will it guarantee the timeliness, security, and accuracy of the network service. LittleBeeX reserves the right to modify or discontinue services at any time without prior notice to users.<br/><br/>
		In order to use the above services, users must provide their own hardware and software equipment required for accessing the Internet, and bear the relevant costs. At the same time, they must provide LittleBeeX with detailed and accurate personal data and continuously update their personal data. ',
		'div3' => '3、Modification of service terms',
		'p3' => 'LittleBeeX reserves the right to modify the terms of service at any time in accordance with operational needs. The revised terms of service will be effective as soon as they are publicized on LittleBeeX. LittleBeeX no longer sends amendment notices to users. Users can check the latest service terms at any time with Login LittleBeeX. Users are obliged to pay attention to and read the latest version of service terms and website announcements from time to time. If the user disagrees with the modification of the terms of service, it may voluntarily cancel or give up the network services already acquired; if the user continues to enjoy the network services, the user is deemed to have accepted the modification of the terms of service. ',
		'div4' => '4、Intellectual Property Declaration',
		'p4' => 'LittleBeeX has the corresponding rights to the provided network services and the software systems (including those protected by intellectual property or other laws) used by the network services.<br/><br/>
		Any information and content published by LittleBeeX is protected by copyright laws, trademark laws, patent laws, or other laws; users may not modify, rent, distribute, or derive other works without LittleBeeX’s explicit license. <br/><br/>
		LittleBeeX\'s name, logo, picture, and other content on LittleBeeX are all owned by LittleBeeX or related content providers. No one may use, copy or use for any other purpose without the legal written authorization of LittleBeeX. <br/><br/>
		Users shall be responsible for the authenticity and legitimacy of the content they upload or publish through this website, ensure that they have complete and innocent ownership and intellectual property rights or have complete authorization, and that there is no infringement of the legitimate rights and interests of third parties,include but not limited to copyrights, portrait rights, trademark rights, patent rights, business name rights, trade name rights, trade secrets, personal privacy, and other rights. All responsibility for damage to any third party or LittleBeeX caused by the user\'s illegal uploading of content shall be the sole responsibility of the user and LittleBeeX shall not be liable for any damages.',
		'div5' => '5、User Information Protection',
		'p5' => 'During the use of the LittleBeeX service, the user needs to provide LittleBeeX with personal information according to the specific transaction needs. Respecting users\' personal privacy is a basic LittleBeeX policy. LittleBeeX will take all necessary and reasonable measures to protect the personal information provided by users. LittleBeeX will not disclose the user\'s personal information to third parties without the user\'s consent, except in the following cases:<br />
		(1) Disclosure to a third party with your prior consent;<br/>
		(2) Disclosure to a third party or an administrative or judicial body in accordance with the relevant provisions of the law or the requirements of an administrative or judicial body;<br/>
		(3) If you have violated China\'s relevant laws, regulations or LittleBeeX service agreement or related rules, you need to disclose to third parties;<br/>
		(4) To provide your requested products and services, you must share your personal information with third parties;<br/>
		(5) Other LittleBeeX deems suitable disclosure in accordance with laws, regulations or website policies.<br/><br/>
		LittleBeeX shall not be responsible for the leakage of personal information in the following circumstances:<br/>
		(1) The user informs another person or shares the registered account with others;<br/>
		(2) Government departments, judicial organs, etc., in accordance with legal procedures require this site to disclose personal information;<br/>
		(3) Any leakage, loss, misappropriation or falsification of personal information caused by force majeure affecting the normal operation of the network due to computer problems, hacker attacks, computer virus intrusion or outbreak, temporary closure due to government control, etc.; <br/>
		(4) The disclosure of personal information due to other websites linked to this site.',
		'div6' => '6、User\'s account, password and security',
		'p6' => 'After registration, user will obtain LittleBeeX\'s account number and password. User should keep the account number and password properly and be responsible for the actions performed through the account. If a user finds any illegal use of an account or security breach, should notify LittleBeeX immediately',
		'div7' =>'7、Email, SMS service rules',
		'p7' => 'The user agrees that LittleBeeX has the right to send order information, promotional campaign announcements, etc. to the user via email, SMS, etc. If the user does not want to receive emails and text messages other than LittleBeeX\'s order information, the user needs to promptly notify LittleBeeX. ',
		'div8' => '8、Limitation of Liability',
		'p8' => 'LittleBeeX shall not be liable for any direct, indirect, incidental, special and consequential damages suffered by users as a result of the use of network services, nor is it responsible for the deletion or failure of storage of user-issued information.',
		'div9' => '9、User\'s obligations',
		'p9' => 'Users must comply with the following obligations in the use of network services:<br/>
		(1) When releasing information, it must comply with relevant Singapore laws and regulations, and must not transmit any illegal, harassing, slanderous, abusive, intimidating, harmful, vulgar, obscene, and other information materials;<br/>
		(2) Do not use Internet services for illegal purposes, such as teaching others to commit crimes or infringements;<br/>
		(3) Do not interfere with or destroy network services or servers and networks connected to network services;<br/>
		(4) Compliance with all network protocols, regulations, and procedures involving the use of network services. <br/>
		Users must take legal responsibility for their own actions in the use of services. If the user violates any of the above obligations, LittleBeeX has the right to make an independent judgment, immediately cancel the user service account, and reserves the right to pursue the legal liability of the user. The user’s use of LittleBeeX’s records will serve as evidence of the user’s violation of the law.',
		'div10' => '10、Law Application and Dispute Resolution',
		'p10' => 'The terms of the mail service must be consistent with the country\'s national laws, including content that is in conflict with the legal provisions. Users and LittleBeeX agree to submit to the jurisdiction of the user service area. If any terms of service contravene the law, then these terms will be re-parsed as closely as possible, while other terms will remain legally valid and influential to the user. Any dispute arising from the user\'s interpretation of this agreement, or the booking of any product through LittleBeeX, will agree to accept the jurisdiction of the user\'s place of service.',
	);





?>