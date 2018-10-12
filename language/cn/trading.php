<?php
	global $main;//首页
	global $details_otc;//OTC交易详情
	global $details_bid;//竞价交易详情

	$main = array(
		'title' => '资产交易',
		'banner' => array(
			'text1' => '一个千载难逢的机会',
			'text2' => '全球数字资产实时交易平台',
			'text3' => '支持全球不同地区的企业股权、债权、<br/>收益权等底层资产数字化登记、交易、流通<br />安全稳定运营数字资产交易',
			'button1' => 'OTC交易',
			'button2' => '竞价交易'
		)
	);

	$main['line1'] = array(
		'title' => 'OTC交易',
		'list' => array(
			1 => array(
				'title1'=>'Zavvi','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300001','data'=>'1998-02-06','industry'=>'唱片公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Zavvi是一家主营音乐、游戏和DVD的大型销售连锁公司，在英国和爱尔兰拥有125家店铺，长期雇员和临时雇员达3400人。'
			),
			2 => array(
				'title1'=>'环球音乐奥地利','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300002','data'=>'2001-05-15','industry'=>'唱片公司','market'=>'$5956.9','price'=>'$28','number'=>'20亿股',
				'brief'=>'环球音乐奥地利为环球音乐集团（Universal Music Group）旗下全资子公司，后者是20世纪全球最大的唱片(音像制品制作，出版，发行)集团。'
			),
			3 => array(
				'title1'=>'普瑞纳秘鲁','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300003','data'=>'1987-9-14','industry'=>'饲料公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'普瑞纳（Purina）是全球最大的宠物食品公司之一，始终以极大的热情致力于改善宠物的生活品质。'
			),
			4 => array(
				'title1'=>'Prim','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300004','data'=>'1998-02-06','industry'=>'干洗公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Prim是洗衣服务领域的创业公司。'
			),
			5 => array(
				'title1'=>'Lighting Source','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300005','data'=>'1997-02-06','industry'=>'印刷公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Lighting Source公司是美国最大的按需印刷公司之一，是美国最大的中盘商英格拉姆（Ingram）集团的子公司。Lightning Source公司于1997年创建，最初仅有3名员工，2008年员工超过500人。Lighting Source公司在美国宾夕法尼亚州的阿伦敦（和英国的米尔顿·凯恩斯还建有大型厂房。在La Vergne基地扩建6.5万平方英尺的厂房也已纳入Lighting Source公司的计划。其数字图书馆拥有50多万册电子书，每周数字扫描书籍达2000多种。'
			),
			6 => array(
				'title1'=>'东方公主','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300006','data'=>'1990-02-06','industry'=>'化妆品公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'东方公主（ORIENTAL PRINCESS），成立于1990年，并已在健美业界享负盛名多年。主要从事抽取及提炼花卉植物和草本内的精华，再制造及加工成健美产品，是泰国同业的先驱。'
			),
			7 => array(
				'title1'=>'玫瑰花蕾香氛公司','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300007','data'=>'1892-02-06','industry'=>'化妆品公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'玫瑰花蕾香氛公司（Rosebud Perfume Co.），是创立于1892年美国马里兰州的百年老店。由SMITH家族经营了一个世纪之久，并创造了SMITH最有名的明星商品：玫瑰花蕾膏、草莓花蕾护唇膏以及神奇薄荷膏。'
			),
			8 => array(
				'title1'=>'Miko','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300008','data'=>'1996-06-06','industry'=>'布艺公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Miko是世界领先的超细纤维基布生产商，日本巨型企业旭化成株式会社的合作伙伴，积极开发化学及新材料生产创新解决方案。Miko成立于1996年6月，拥有约有30名雇员。如今，Miko的主要国外市场是德国、斯坎迪纳维亚半岛地区国家、荷比卢和美国。另外Miko还期望进入法国（汽车）、英国（汽车和航海）和东欧国家市场。借助Dinamica Evolution，在不到一年的时间中，Miko营业额增长了15%，2008年底达到1150万欧元。2009年增长率为两位数：收入目标为1300万欧元。'
			),
			9 => array(
				'title1'=>'ZiLOG','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300009','data'=>'1974-02-06','industry'=>'仪器公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'ZiLOG公司由工业先驱Federico Faggin和Ralph Ungermann于1974年共同创立。该公司生产的Z80系列控制器曾得到广泛的应用。1998年，TPG(the Texas Pacific Group)收购了ZiLOG公司，根据ZiLOG公司的设计和生产经验，将市场定位于三个方面：通讯、家庭娱乐和集成控制。'
			),
			10 => array(
				'title1'=>'BodyMedia','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300011','data'=>'1999-02-06','industry'=>'仪器公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'BodyMedia是一家专门开发和销售身体监测器的公司，成立于1999年，总部位于美国的宾夕法尼亚州的匹兹堡市。BodyMedia公司已经推出了一些身体健康监测产品，并受到市场的欢迎和消费者的广泛好评。'
			),
			11 => array(
				'title1'=>'Lavasoft','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300012','data'=>'1999-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Lavasoft是一家软件开发商，常被喻为“首家”反间谍软件公司，其标志性产品Ad-Aware于全球拥有2亿使用者。Ad-Aware免费及可供下载的版本名为Personal，三个收费版分别名为Plus、Professional与Enterprise；该公司亦有销售防火墙软件Lavasoft Personal Firewall。Lavasoft于1999年由Ad-Aware的创作者Nicolas Stark在德国成立，2002年后于瑞典哥特堡设立总部。'
			),
			12 => array(
				'title1'=>'Questionmark','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300014','data'=>'1988-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Questionmark公司总部位于美国康涅狄格州的斯坦福，英国伦敦和比利时都设有办公室。Questionmark公司的目标是为教育和培训提供产品和支持服务。Questionmark公司于1988年成立后就保持着良好的发展势头。Questionmark软件有众多语言版本，如西班牙语，法语，德语，荷兰语等，在全球拥有众多授权代理商。Questionmark拥有超过2000个客户，有将近14,000个系统授权安装了本软件。 全球有超过一千万的用户参与过Questionmark创建的各类测试和评估。客户来自各行各业以及全球的教育机构。'
			),
			13 => array(
				'title1'=>'Xero','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300015','data'=>'1998-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Xero是一家新西兰公司，为中小企业提供简单的云端会计软件，目前已有6万个付费用户和24万使用者。2010年，公司启动了一轮融资用以扩张美国市场。'
			),
			14 => array(
				'title1'=>'Sphero','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300016','data'=>'1998-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Sphero开发商Orbotix是美国丹佛的创业公司。对于Orbotix两位28岁的创始人伊恩·伯恩斯和亚当·威尔逊，一个小小的圆球可以代表机器人(35.000,-1.26,-3.47%)技术的巅峰，可以成为未来智能手机互动前景的样板。当科学技术以新颖和有趣的方式相结合的时候，奇妙的事情将发生。Orbotix公司的目标就是程序地结合真实和虚拟世界，以扩展技术的可能性边界。借助智能化机器人和创新软件，我们正在探索和定义混合现实游戏，即下一代娱乐改革。'
			),
			15 => array(
				'title1'=>'Stormpath','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300017','data'=>'1998-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Stormpath是一家致力于为企业开发统一识别管理软件的初创公司，它获得了150万美元的种子资金，位于加利福尼亚州的圣马特奥市。企业识别系统是一种改善企业形象的经营技法，有计划地将自己企业的各种特征向社会公众主动地展示与传播，使公众在市场环境中对某一个特定的企业有一个标准化、差别化的印象和认识，以便更好地识别并留下良好的印象。'
			),
			16 => array(
				'title1'=>'ThinkBuzan','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300018','data'=>'2010-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'ThinkBuzan创立于2010年1月，创始人是东尼博赞（Tony Buzan）。他是思维导图这种风靡世界的思维工具的创始人，ThinkBuzan的成立开创了思维导图软件的新纪元，该公司主要提供各种思维导图工具软件。'
			),
			17 => array(
				'title1'=>'达索系统','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300019','data'=>'1981-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'达索系统（Dassault Systemes）是一家法国的软件公司，致力于3D体验、为企业和人们的可持续创新提供一个虚拟世界，是世界领先的3D设计软件、3D数字化实体模型和产品生命周期管理（PLM）解决方案供应商。达索系统拥有全套PLM的软件，为包括航空，汽车，机械电子在内的各个行业提供软件系统服务和技术支持。达索系统是达索工业集团旗下的公司，在1981年由达索航空公司创立。'
			),
			18 => array(
				'title1'=>'Simperium','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300020','data'=>'1998-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Simperium是一家位于美国旧金山的创业公司，正在为应用程序和服务的发展创建一个数据层，在不同的设备，人和应用程序之间进行数据转换。Simperium在建立和设计Simplenote的时候积累了丰富的经验。Simperium是一家开发跨平台同步工具的公司，开发的产品包括跨平台便笺工具Simplenote。2010年早些时候仅有1万用户，到8月底用户已超过14.5万，第三方开发商超过400家。该公司通过推广和注册获取营收，目前它正在扩充自身的产品，以吸引更多的第三方产品。'
			),
			19 => array(
				'title1'=>'TabTale','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300021','data'=>'1998-02-06','industry'=>'软件公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'TabTale是以色列的儿童教育应用初创企业，开发的互动式应用程序提供了新的互动式体验，具备丰富的创新活动功能。TabTale的每一款应用都将以灵活和有趣的方式激发儿童的创造力和想象力。'
			),
			20 => array(
				'title1'=>'iEntry','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300022','data'=>'1999-02-06','industry'=>'教育公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'iEntry是一家出版公司，为客户提供了新闻简讯，文章和广告服务。自从1999年成立以来，iEntry就是在线出版和事业对商业广告资源领域的领导者。iEntry网络不断地发展，其读者两也在迅速增长，主要包括CXO，企业主，企业家网络开发人员和IT专业人士。'
			),
			21 => array(
				'title1'=>'Ividence','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300023','data'=>'2008-02-06','industry'=>'广告公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Ividence由前首席运营官埃里克·迪德(和SantéVet创始人埃里克·普瑞根特于2008年联合创办。Ividence主营业务是独立电子邮件广告交换服务。'
			),
			22 => array(
				'title1'=>'Bina','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300024','data'=>'2011-02-06','industry'=>'科技公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Bina Technology于2011年组建，2013年才真正开业。创业团队的平均学识无人能出其右，均是来自斯坦福大学与加州大学伯克利分校的博士，研究方向为大数据或生物信息。Bina Technology的目标就是把生命科学与计算机科学融合起来。Bina Technology主营业务是采用大数据的分析方法分析人类基因序列，他们的分析所得将成为研究机构、临床医师等下游医疗服务行业的基础素材。'
			),
			23 => array(
				'title1'=>'Face++','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300025','data'=>'1998-02-06','industry'=>'科技公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Face++是创业公司，专门为开发者提供提人脸识别技术支持。Face++产品的服务对象多为娱乐、社交类应用，包括人脸检测、人脸分析和人脸识别三类。'
			),
			24 => array(
				'title1'=>'Make Wonder','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300026','data'=>'1998-02-06','industry'=>'科技公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Make Wonder（Wonder Workshop，makewonder.com）是一家创业公司，旨在让幼儿借助机器人“编程”。Make Wonder希望让4-6岁的孩子在分分钟内就能编程。Wonder Workshop旗下的两款产品分别叫做Dash和Dot，二者都不是寻常的机器人，专门教授幼儿编程基础知识。'
			)
		)
	);

	$main['line2'] = array(
		'title' => '竞价交易',
		'list' => array(
			1 => array(
				'title1'=>'LaForge Optical','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300101','data'=>'1998-02-06','industry'=>'科技公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'LaForge Optical是一个来自马萨诸塞州的创业团队，致力于设计一款亲民版的Google Glass。LaForge Optical试图打造一款精简版的Google Glass设备，并在市场上与Google Glass同场竞技。'
			),
			2 => array(
				'title1'=>'Fluc','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300102','data'=>'1998-02-06','industry'=>'餐饮公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Fluc（Food Lovers United Co ）是一家主要在旧金山湾区从事在线订餐的创业公司，用户下单后，该公司利用自己的送餐团队进行配送，通常在45分钟内完成送餐。'
			),
			3 => array(
				'title1'=>'华彤huatong','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300103','data'=>'2002-04-06','industry'=>'游戏公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'华彤公司于2002年04月成立，早期经营广电系统数据传输及维护业务，经过多年的奋斗和积累，现今已发展为以数字产品支付、通讯系统运营、互动娱乐运营、媒体运营等为主营的综合业务运营商。'
			),
			4 => array(
				'title1'=>'PMANG游戏','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300104','data'=>'1998-02-06','industry'=>'游戏公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'PMANG于2003年8月开通，是韩国综合游戏门户。PMANG提供各种各样的游戏，包括棋牌类，休闲类，射击游戏（FPS）以及大型网络游戏。'
			),
			5 => array(
				'title1'=>'BOXC','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300105','data'=>'1998-02-06','industry'=>'物流公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'BOXC在美国硅谷孵化的创业公司，在500 startups的加速器培育成长。我们致力于帮助中国卖家能够卖的更多，以更有智慧的方式和途径销售产品。'
			),
			6 => array(
				'title1'=>'Zipments','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300106','data'=>'2010-02-06','industry'=>'物流公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Zipments成立于2010年，是一家主打本地同城当天送达的物流服务平台，通过手机应用对接用户、物流人员，提供最方便的当天送达物流服务。'
			),
			7 => array(
				'title1'=>'EnSol AS','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300107','data'=>'1998-02-06','industry'=>'环保公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'EnSol AS是来自挪威的一家环保公司，能够把你家的玻璃窗变成发电机。太阳能等新能源创业是当前受政府支持、资本市场欢迎的领域'
			),
			8 => array(
				'title1'=>'蓝多湖','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300108','data'=>'1998-02-06','industry'=>'食品公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'蓝多湖（Land O\'Lakes）是一家提供使用黄油、芝士以及其他乳制品的食谱、烘焙和烹饪创意的公司。'
			),
			9 => array(
				'title1'=>'PodPonics','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300109','data'=>'1998-02-06','industry'=>'农业公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'PodPonics是一家新颖的农业领域创业公司。PodPonics的创始人Matt Liotta之前是一名软件工程师，他在一个旧集装箱内设计了一套程序控制光照、温度和水分含量，创造了一个理想的环境来种植生菜。他的公司PodPonics在亚特兰大把一块未使用的空地转变成了多产农场。'
			),
			10 => array(
				'title1'=>'Mysmartfarm','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300111','data'=>'2012-02-06','industry'=>'农业公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Mysmartfarm公司创立于2012年，被形容为高科技农业服务的首次整合，在云平台上开发高科技农业服务。Mysmartfarm基于云端的解决方案能够挖掘农业数据，比如天气、土壤水分、卫星数据等。将多个来源（传感器、卫星、GIS地图、天气和更多）和多个合作伙伴的数据整合到一个平台上，并生成更多的农业智能数据。'
			),
			11 => array(
				'title1'=>'SNC-LAVALIN','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300112','data'=>'1911-02-06','industry'=>'农业公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'SNC-LAVALIN集团公司是一家大型的集工程设计、设备采购和建筑施工于一体的国际知名跨国公司，创立于1911年，总部设在加拿大魁北克省蒙特利尔市，是加拿大最大的工程咨询设计公司，在世界范围内也是工程咨询设计和建筑业中的佼佼者，该集团在基础设施的运营及管理领域中同样居世界领先地位。'
			),
			12 => array(
				'title1'=>'formart Luxembourg S.A.','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300114','data'=>'1998-02-06','industry'=>'房产公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'formart Luxembourg S.A.是一家房地产项目开发公司。最近几年，现代生活空间的开发在卢森堡扮演着日益重要的角色。高质量临时住房已经成为生活的核心组成部分。作为卢森堡的老牌企业，formart Luxembourg S.A.凭借公司内部的市场观点为郊区和城区设计并建设高品质居住空间。'
			),
			13 => array(
				'title1'=>'Tourfactory','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300115','data'=>'1998-02-06','industry'=>'房产公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Tourfactory是一家房地产营销公司，我们资本化网络的使用。我们将通过定位，演示和摄影的方式来实现目的。房地产专业人士有责任利用最好的系统来代表他们的客户推广房地产资源。Tourfactory公司可以让房地产主业人士使用其营销引擎，实现最优的结果。'
			),
			14 => array(
				'title1'=>'Cozy','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300116','data'=>'1998-02-06','industry'=>'房产公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Cozy成立于2012年，其目标是根本性地改革人们处理租房的方式，为所有用户创造质量最好的体验。'
			),
			15 => array(
				'title1'=>'White Road Investments','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300117','data'=>'1998-02-06','industry'=>'投资公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'White Road Investments是一家投资公司,始于2008.就市场选择而言，White Road尽量选择熟悉的领域，为那些能提供健康的、有机的、可持续发展的消费产品的公司提供资金。'
			),
			16 => array(
				'title1'=>'Onex','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300118','data'=>'1998-02-06','industry'=>'投资公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Onex通讯公司总部位于加拿大多伦多，是一家多元化投资公司，属加拿大规模最大的公司之一，公司年度合并销售收入约200亿加元。Onex公司在全球各地从事医疗、服务、制造和科技行业。Onex的股票在多伦多证券交易市场交易，股票代码为OCX。Onex通过Onex Partners和ONCAP系基金管理第三方私募股权投资。它还管理一个房地产基金和一个公共市场基金。通过这些活动，Onex获得年度管理费收入，而且还可以从约35亿加元的第三方资本的收益中获得提成。'
			),
			17 => array(
				'title1'=>'ReadyForZero','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300119','data'=>'2011-02-06','industry'=>'金融服务','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'ReadyForZero创立于2011年2月，其解决方案与传统的债务管理或者信用卡咨询服务公司有较大的差异。它收集用户的账户凭据(包括用户名和密码)，从信用卡公司、借款服务商和抵押贷款服务商处获得用户的余额和支付信息。用户提交自己的收入信息，公司为其提供最佳还款方案。这家公司的愿景不是全面掌管用户的账务管理，而是给消费者一些可能用到的工具，以便让他们掌控自己的债务。'
			),
			18 => array(
				'title1'=>'AS Colour','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300120','data'=>'1998-02-06','industry'=>'服装公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'AS Colour 是一家创新的服饰公司，发现多数消费者对于穿着彩色的衣服并不那么有把握可以搭配得体，面对选购衣服的时候便常会面临无所适从的窘境。因此，绝大多数的消费者买了黑白灰等中性色彩的衣服。<br/>As Colour统计了自己的销售情况，发现在 50 种颜色的服饰中，黑白灰三色服装的销量达到了惊人的 83%。为了帮助顾客更直接方便地选择到合适自己的服装颜色，他们研发了一套名为Colour Matic的评价系统。这套系在奥克兰门店进行了展示，顾客只需站在橱窗前的指定位置，选择好性别等信息，再等个几分钟就能得到系统的评价，最后系统还会给出着装颜色的建议。'
			),
			19 => array(
				'title1'=>'Smart PJs','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300121','data'=>'1998-02-06','industry'=>'服装公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Smart PJs是美国爱达荷州的初创企业。Smart PJs作为一家创新公司，致力于打造世界上第一款和唯一的一款互动睡衣产品。'
			),
			20 => array(
				'title1'=>'Kuato Studios','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300122','data'=>'1998-02-06','industry'=>'游戏公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Kuato Studios是一家游戏创业公司。Kuato Studios的背后是一支实力雄厚的明星团队，研发人员来自做Siri的SRI公司，设计师则来自索尼的Playstation,IdeaWorks,Blitz等公司。Kuato Studios致力于新的游戏平台开发，这将实现有趣和具有吸引力的游戏体验。Kuato Studios公司的团队分布在英国伦敦和派洛阿尔托，大家都是人工智能领域的专家和来自大型游戏工作室的高级人才。'
			),
			21 => array(
				'title1'=>'iWon','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300123','data'=>'1998-02-06','industry'=>'游戏公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'iWon是IAC旗下一个免费的互联网游戏公司。该公司网站提供了一百多个免费的游戏。加入该网站社区还有机会赚钱。在现在已有的一些付费给访问者的新门户站点中，用户觉得最有趣的是由CBS投资的，位于纽约Irvington的iWon.com公司。iWon的想法实际上很简单：你使用他们的门户越多，那么你获得他们的三项大奖的机会也就越多。iWon站点完全是按照互联网上的常见合同方式建成的，也就是它的绝大多数内容都是由其合作者提供的，包括InfoSpace、Mail.com、Jfax、Realtor.com和Inktomi等，很多其他门户的背后实际上也可以看到他们。在iWon站点的公司信息中，你能找到这些合作者的完整列表。'
			),
			22 => array(
				'title1'=>'Vostu','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300124','data'=>'2007-02-06','industry'=>'游戏公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Vostu是巴西最大的社交游戏公司。它的社交游戏正风靡于南美。据统计，其游戏玩家数已经超过巴西总人口一半。Vostu已经占据了全球社交游戏开发商的第四把交椅。Vostu由成功资本公司（Thrive Capital）的乔舒亚•库什纳（Joshua Kushner）、丹尼尔•凯菲（Daniel Kafie）以及马里奥•施罗塞尔（Mario Schlosser）于2007年联合创立。公司总部设于布宜诺斯艾利斯，在纽约和圣保罗分别设有开发工作室，目前公司共有约580名员工。'
			),
			23 => array(
				'title1'=>'Goko','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300125','data'=>'1998-02-06','industry'=>'游戏公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Goko是一家游戏开发公司。虽然HTML5标准尚未统一，但已经有很多创业公司开始尝试这类产品的可能性了。为此，Goko推出了一个开发平台，帮助开发者使用HTML5技术创建跨平台的游戏。这一方面可以帮助开发者进行试错，另一方面也是想通过成功的案例来证明HTML5未来的可能性。'
			),
			24 => array(
				'title1'=>'Flaregames','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300126','data'=>'1998-02-06','industry'=>'游戏公司','market'=>'$3856.8','price'=>'$14','number'=>'20亿股',
				'brief'=>'Flaregames是德国一家专注移动设备上免费增值游戏开发的公司。免费增值游戏（F2P，free-to-play），是一种免费下载，但在游戏过程中可以购买增值道具的游戏模式。这种游戏和一次性付费下载或试玩游戏不同，它需要游戏本身有良好的初次体验、很高的耐玩性以及优秀的货币化奖励机制。只有这样，玩家才能在游戏过程中不断的花钱购买各种虚拟装备或特权。'
			)
		)
	);
	$main['line3'] = array(
		'text1' => 'OTC交易',
		'text2' => 'LittleBeeX股权交易平台类广告交易方式：实现点对点的用户自由交易模式，买卖双方可在平台发布买卖信息，使用平台的支付工具 LT 券完成支付；<br />支付完成后，卖方股份将从 LittleBeeX 股权管理平台中过户至买家名下，并将交易操作记录在区块链中。'
	);
	$main['line4'] = array(
		'text1' => '竞价交易',
		'text2' => '领先的数字资产交易服务，以数字货币计价，进行数字资产交易，智能匹配，成交订单，无须等待撮合；专业分布式架构和防DDOS攻击系统确保在整个交易过程中，数字资产的安全；<br />T+0自由交易，7x24小时无间断交易，提供稳定交易。'
	);

	$details_otc = array(
		'title' => 'OTC交易',
		'li1' => '币种',
		'li2' => '最新价',
		'li3' => '涨幅',
		'details1' => '商品资料',
		'details2' => '简介',
		'details3' => '资金',
		'details4' => '成立时间',
		'details5' => '所属行业',
		'details6' => '总市值',
		'details7' => '发行价格',
		'details8' => '发行数量'
	);

	$details_bid = array(
		'title' => '竞价交易',
		'li1' => '币种',
		'li2' => '最新价',
		'li3' => '涨幅',
		'details1' => '商品资料',
		'details2' => '简介',
		'details3' => '资金',
		'details4' => '成立时间',
		'details5' => '所属行业',
		'details6' => '总市值',
		'details7' => '发行价格',
		'details8' => '发行数量'
	);


?>