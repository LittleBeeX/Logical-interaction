<?php
	global $main;//首页
	global $details_otc;//OTC交易详情
	global $details_bid;//竞价交易详情

	$main = array(
		'title' => 'Asset transactions',
		'banner' => array(
			'text1' => 'A golden opportunity',
			'text2' => 'Global Digital Asset Real-time Trading',
			'text3' => 'Supporting digitized registration, trading and circulation of the underlying assets such as corporate equity, creditor\'s rights and cash flow rights in different regions of the world.Processing the digital asset transactions securely and stably.',
			'button1' => 'OTC',
			'button2' => 'Auction Tradining'
		)
	);

	$main['line1'] = array(
		'title' => 'OTC',
		'list' => array(
			1 => array(
				'title1'=>'Zavvi','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300001','data'=>'1998-02-06','industry'=>'Record company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Zavvi is a large sales chain that specialises in music, games and DVDs. It has 125 stores in the UK and Ireland, and employs 3,400 long-term employees and temporary employees.'
			),
			2 => array(
				'title1'=>'Universal Music Austria','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300002','data'=>'2001-05-15','industry'=>'Record company','market'=>'$5956.9','price'=>'$28','number'=>'2 billion shares',
				'brief'=>'Universal Music Austria is a wholly-owned subsidiary of the Universal Music Group, which is the worlds largest group of recording (audiovisual product production, publishing, and distribution) in the 20th century.'
			),
			3 => array(
				'title1'=>'Purina Peru','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300003','data'=>'1987-9-14','industry'=>'Feed company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Purina is one of the largest pet food companies in the world and has always been dedicated to improving the quality of life of pets with great enthusiasm.'
			),
			4 => array(
				'title1'=>'Prim','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300004','data'=>'1998-02-06','industry'=>'Dry cleaning company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Prim is a start-up company in the field of laundry services.'
			),
			5 => array(
				'title1'=>'Lighting Source','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300005','data'=>'1997-02-06','industry'=>'Printing company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Lighting Source is one of the largest on-demand printing companies in the United States and is a subsidiary of Ingram, the largest mid-tier company in the United States. Lightning Source was founded in 1997 and initially had only 3 employees. In 2008, it had more than 500 employees. Lighting Source is located in Allentown, Pa., United States (and Milton Keynes, England, also has a large factory building. The expansion of the 65,000-square-foot building at La Vergne has also been incorporated into Lighting Source\'s plan. Its digital library has 50 More than 10,000 volumes of e-books, more than 2,000 kinds of weekly digital scanning books.'
			),
			6 => array(
				'title1'=>'Eastern Princess','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300006','data'=>'1990-02-06','industry'=>'Cosmetic company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'ORIENTAL PRINCESS was founded in 1990 and has enjoyed a long-standing reputation in the bodybuilding industry. Mainly engaged in the extraction and refining of the essence of flower plants and herbs, and then manufactured and processed into body-building products, is a pioneer in Thailand.'
			),
			7 => array(
				'title1'=>'Rosebud Perfume Co.','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300007','data'=>'1892-02-06','industry'=>'Cosmetics company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Rosebud Perfume Co. is a 100-year-old company founded in Maryland in 1892. The SMITH family has been in business for a century and has created SMITH\'s most famous star products: rosebud cream, strawberry bud lip balm and magical mint.'
			),
			8 => array(
				'title1'=>'Miko','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300008','data'=>'1996-06-06','industry'=>'Cloth company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Miko is the world\'s leading manufacturer of microfiber fabrics and a partner of the Japanese giant Asahi Kasei Corporation, and is actively developing innovative solutions for the production of chemical and new materials. Miko was established in June 1996 and has about 30 employees. Today, Miko’s main foreign markets are Germany, Scandinavia, Benelux, and the United States. In addition, Miko also expects to enter the French (car), British (automotive and marine) and Eastern European markets. With Dinamica Evolution, Miko’s turnover increased by 15% in less than a year, reaching 11.5 million Euros at the end of 2008. Double-digit growth rates in 2009: The target for revenue is 13 million euros.'
			),
			9 => array(
				'title1'=>'ZiLOG','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300009','data'=>'1974-02-06','industry'=>'Instrument company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'ZiLOG was founded in 1974 by industrial pioneers Federico Faggin and Ralph Ungermann. The company\'s Z80 series controller has been widely used. In 1998, TPG (the Texas Pacific Group) acquired ZiLOG, based on ZiLOG\'s design and manufacturing experience, positioning the market in three areas: communications, home entertainment, and integrated control.'
			),
			10 => array(
				'title1'=>'BodyMedia','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300011','data'=>'1999-02-06','industry'=>'Instrument company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'BodyMedia is a company that specializes in developing and selling body monitors. Founded in 1999, BodyMedia is headquartered in Pittsburgh, Pennsylvania, USA. BodyMedia has launched a number of health monitoring products, which have been well received by the market and widely acclaimed by consumers.'
			),
			11 => array(
				'title1'=>'Lavasoft','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300012','data'=>'1999-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Lavasoft is a software developer and is often referred to as the "first" anti-spyware company. Its iconic product, Ad-Aware, has 200 million users worldwide. The free and downloadable version of Ad-Aware is called Personal, and the three paid versions are named Plus, Professional, and Enterprise. The company also sells firewall software Lavasoft Personal Firewall. Lavasoft was founded in Germany in 1999 by Nicolas Stark, creator of Ad-Aware, and set up headquarters in Gothenburg, Sweden, after 2002.'
			),
			12 => array(
				'title1'=>'Questionmark','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300014','data'=>'1988-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Questionmark is headquartered in Stanford, Connecticut, and has offices in London and Belgium. Questionmark\'s goal is to provide products and support services for education and training. Questionmark company has maintained a good momentum of development since its establishment in 1988. Questionmark software is available in many languages,such as Spanish, French, German, Dutch, etc. and has many authorized agents worldwide. Questionmark has more than 2,000 customers and nearly 14,000 systems have installed this software. More than 10 million users worldwide have participated in the various tests and assessments created by Questionmark. Customers come from all walks of life and educational institutions around the world.'
			),
			13 => array(
				'title1'=>'Xero','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300015','data'=>'1998-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Xero is a New Zealand company that provides simple cloud accounting software for SMEs. It currently has 60,000 paid users and 240,000 users. In 2010, the company launched a round of financing to expand the US market.'
			),
			14 => array(
				'title1'=>'Sphero','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300016','data'=>'1998-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Sphero developer Orbotix is a startup company in Denver, USA. For Orbotix\'s 28-year-old founders Ian Burns and Adam Wilson, a small ball can represent the pinnacle of robotics and can become the future of smartphone interaction. Model. When science and technology are combined in novel and interesting ways, wonderful things will happen. Orbotix\'s goal is to programmatically combine real and virtual worlds to extend the boundaries of technological possibilities. With intelligent robots and innovative software, we are exploring and defining a mixed reality game, the next generation of entertainment reform.'
			),
			15 => array(
				'title1'=>'Stormpath','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300017','data'=>'1998-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Stormpath, a startup company dedicated to developing unified identity management software for businesses, received $1.5 million in seed funding from San Mateo, California. The enterprise identification system is a business technique that improves the corporate image. It systematically displays and disseminates various characteristics of its own enterprise to the public, so that the public has a standardization and differentiation in a market environment for a specific company. Impression and recognition in order to better identify and leave a good impression.'
			),
			16 => array(
				'title1'=>'ThinkBuzan','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300018','data'=>'2010-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'ThinkBuzan was founded in January 2010 and was founded by Tony Buzan. He is the founder of mind mapping tools that are popular in the world, and the establishment of ThinkBuzan has created a new era of mind mapping software. The company mainly provides various mind mapping software tools.'
			),
			17 => array(
				'title1'=>'Dassault System','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300019','data'=>'1981-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Dassault Systemes is a French software company dedicated to the 3D experience, providing a virtual world for sustainable innovation for companies and people. It is the world\'s leading 3D design software, 3D digital entity model, and product lifecycle management ( PLM) solution provider. Dassault Systemes has a full suite of PLM software that provides software system services and technical support for a variety of industries including aerospace, automotive, and mechanical electronics. Dassault Systemes is a company owned by Dassault Systemes. It was founded by Dassault Aviation in 1981.'
			),
			18 => array(
				'title1'=>'Simperium','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300020','data'=>'1998-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Simperium is a San Francisco-based start-up company that is creating a data layer for the development of applications and services that convert data between different devices, people, and applications. Simperium has accumulated rich experience in establishing and designing Simplenote. Simperium is a company that develops cross-platform synchronization tools. The product developed includes Simplenote, a cross-platform note tool. There were only 10,000 users in early 2010. By the end of August, there were more than 145,000 users and more than 400 third-party developers. The company obtained revenue through promotion and registration, and it is currently expanding its own products to attract more third-party products.'
			),
			19 => array(
				'title1'=>'TabTale','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300021','data'=>'1998-02-06','industry'=>'A software company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'TabTale is a children\'s educational application start-up company in Israel. The interactive application developed provides a new interactive experience with rich innovative activities. Each TabTale app will inspire children\'s creativity and imagination in a flexible and fun way.'
			),
			20 => array(
				'title1'=>'iEntry','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300022','data'=>'1999-02-06','industry'=>'Education company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'iEntry is a publishing company that provides newsletters, articles and advertising services for clients. Since its establishment in 1999, iEntry is the leader in online publishing and business-to-business advertising resources. The iEntry network is constantly evolving and its readership is growing rapidly, mainly including CXO, business owners, entrepreneur network developers and IT professionals.'
			),
			21 => array(
				'title1'=>'Ividence','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300023','data'=>'2008-02-06','industry'=>'Advertising company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Ividence was co-founded by former chief operating officer Eric Dede (in conjunction with SantéVet founder Eric Purigente in 2008. Ividence\'s main business is an independent email advertising exchange service.'
			),
			22 => array(
				'title1'=>'Bina','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300024','data'=>'2011-02-06','industry'=>'Technology companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Bina Technology was formed in 2011 and it opened in 2013. The average knowledge of the entrepreneurial team is unsurpassed. They are doctors from Stanford University and the University of California, Berkeley. The research direction is big data or biological information. The goal of Bina Technology is to integrate life sciences with computer science. Bina Technology\'s main business is the analysis of human gene sequences using big data analysis methods, and their analysis will become the basic material of downstream medical service industries such as research institutions and clinicians.'
			),
			23 => array(
				'title1'=>'Face++','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300025','data'=>'1998-02-06','industry'=>'Technology companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Face++ is a startup company that specializes in providing face recognition technology support for developers. Face++ product service objects are mostly entertainment, social applications, including face detection, face analysis and face recognition.'
			),
			24 => array(
				'title1'=>'Make Wonder','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300026','data'=>'1998-02-06','industry'=>'Technology companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Make Wonder (Wonder Workshop, makewonder.com) is a startup company that aims to let young children "program" with robots. Make Wonder wants 4-6 years old kids to be able to program in minutes. The two products of the Wonder Workshop are called Dash and Dot, respectively. Both are not ordinary robots and they teach the basics of infant programming.'
			)
		)
	);

	$main['line2'] = array(
		'title' => 'Auction Trading',
		'list' => array(
			1 => array(
				'title1'=>'LaForge Optical','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300101','data'=>'1998-02-06','industry'=>'Technology companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'LaForge Optical is a startup team from Massachusetts dedicated to designing a pro-popular version of Google Glass. LaForge Optical tried to create a streamlined Google Glass device and compete in the market with Google Glass.'
			),
			2 => array(
				'title1'=>'Fluc','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300102','data'=>'1998-02-06','industry'=>'Catering Company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Fluc (Food Lovers United Co) is a startup company that specializes in online ordering in the San Francisco Bay Area. When users place an order, the company uses its own food delivery team to deliver food, usually within 45 minutes.'
			),
			3 => array(
				'title1'=>'Huatong','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300103','data'=>'2002-04-06','industry'=>'Game company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Huatong Company was established in April 2002. It operated early in the broadcasting and data transmission and maintenance business of broadcast and television systems. After years of struggle and accumulation, it has now developed into a integrated service provider major in digital product payment, communications system operation, interactive entertainment operations, and media operations.'
			),
			4 => array(
				'title1'=>'PMANG games','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300104','data'=>'1998-02-06','industry'=>'Game company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'PMANG was opened in August 2003 and is a comprehensive game portal in Korea. PMANG offers a wide range of games, including chess, casual, shooting games (FPS) and large-scale online games.'
			),
			5 => array(
				'title1'=>'BOXC','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300105','data'=>'1998-02-06','industry'=>'Logistics company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'BOXC is a startup company incubating in the Silicon Valley of the United States and is growing at an accelerator of 500 startups. We are committed to helping Chinese sellers sell more and sell products in a smarter way.'
			),
			6 => array(
				'title1'=>'Zipments','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300106','data'=>'2010-02-06','industry'=>'Logistics company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Founded in 2010, Zipments is a logistics service platform that serves the local city on the same day. It connects users and logistics personnel through mobile applications and provides the most convenient day-to-day delivery of logistics services.'
			),
			7 => array(
				'title1'=>'EnSol AS','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300107','data'=>'1998-02-06','industry'=>'Environmental companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'EnSol AS is an environmental company from Norway that can turn your home\'s glass windows into generators. New energy such as solar energy are areas that are currently supported by the government and are welcomed by the capital market'
			),
			8 => array(
				'title1'=>'Land O\'Lakes','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300108','data'=>'1998-02-06','industry'=>'Food companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Land O\'Lakes is a company that offers recipes, baking and cooking ideas using butter, cheese and other dairy products.'
			),
			9 => array(
				'title1'=>'PodPonics','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300109','data'=>'1998-02-06','industry'=>'Agricultural company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'PodPonics is a novel startup company in the field of agriculture. Matt Liotta, founder of PodPonics, formerly a software engineer, designed a program to control light, temperature, and moisture content in an old container, creating an ideal environment for growing lettuce. His company PodPonics turned an unused space into a prolific farm in Atlanta.'
			),
			10 => array(
				'title1'=>'Mysmartfarm','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300111','data'=>'2012-02-06','industry'=>'Agricultural companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Established in 2012, Mysmartfarm was described as the first integration of high-tech agricultural services and the development of high-tech agricultural services on the cloud platform. Mysmartfarm\'s cloud-based solution can tap agricultural data such as weather, soil moisture, satellite data and more. Integrate data from multiple sources (sensors, satellites, GIS maps, weather, and more) and multiple partners onto one platform and generate more agricultural intelligence data.'
			),
			11 => array(
				'title1'=>'SNC-LAVALIN','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300112','data'=>'1911-02-06','industry'=>'Agricultural companies','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'SNC-LAVALIN Group is a large international multinational company that integrates engineering design, equipment procurement and building construction. Founded in 1911, SNC-LAVALIN Group is headquartered in Montreal, Quebec, Canada and is the largest engineering consulting and design company in Canada. Worldwide, it is also a leader in the engineering consulting, design and construction industry. The Group is also a world leader in the operation and management of infrastructure.'
			),
			12 => array(
				'title1'=>'formart Luxembourg S.A.','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300114','data'=>'1998-02-06','industry'=>'Real Estate Company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Formart Luxembourg S.A. is a real estate project development company. In recent years, the development of modern living spaces has played an increasingly important role in Luxembourg. High-quality temporary housing has become a core component of life. As an old Luxembourg company, formart Luxembourg S.A. designs and builds high-quality living spaces for suburbs and urban areas based on the company\'s internal market perspective.'
			),
			13 => array(
				'title1'=>'Tourfactory','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300115','data'=>'1998-02-06','industry'=>'Real Estate Company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Tourfactory is a real estate marketing company that we use to capitalize on the web. We will achieve our goal through positioning, demonstration and photography. Real estate professionals are responsible for using the best systems to promote real estate resources on behalf of their clients. Tourfactory allows real estate professionals to use their marketing engine to achieve optimal results.'
			),
			14 => array(
				'title1'=>'Cozy','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300116','data'=>'1998-02-06','industry'=>'Real Estate Company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Founded in 2012, Cozy aims to fundamentally reform the way people handle rental housing and create the best quality experience for all users.'
			),
			15 => array(
				'title1'=>'White Road Investments','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300117','data'=>'1998-02-06','industry'=>'investment company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Is a White Road Investments The investment company, began in 2008. In terms of market selection, White Road as far as possible choose familiar areas, for those who are able to provide a healthy, organic and sustainable development of consumer products companies.'
			),
			16 => array(
				'title1'=>'Onex','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300118','data'=>'1998-02-06','industry'=>'investment company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Onex Communications, headquartered in Toronto, Canada, is a diversified investment company and one of the largest companies in Canada. The company\'s annual combined sales revenue is about 20 billion Canadian dollars. Onex operates in the medical, service, manufacturing and technology industries around the world. Onex\'s stock is traded on the Toronto Stock Exchange under the ticker symbol OCX. Onex manages third-party private equity investments through Onex Partners and ONCAP funds. It also manages a real estate fund and a public market fund. Through these activities, Onex receives annual management fee income, and can also receive commissions from approximately 3.5 billion Canadian dollars in third-party capital gains.'
			),
			17 => array(
				'title1'=>'ReadyForZero','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300119','data'=>'2011-02-06','industry'=>'Financial Services','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'ReadyForZero was founded in February 2011, and its solution is quite different from traditional debt management or credit card consulting service companies. It collects the user\'s account credentials (including username and password) and obtains the user\'s balance and payment information from credit card companies, loan service providers and mortgage service providers. Users submit their own income information and the company provides them with the best repayment plan. The company’s vision is not to fully administer the user’s accounting management, but to give consumers some tools they may use to keep them in control of their debt.'
			),
			18 => array(
				'title1'=>'AS Colour','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300120','data'=>'1998-02-06','industry'=>'Fashion Company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'AS Colour is an innovative clothing company and found that most consumers are not so sure about wearing colorful clothes, but they often face a dilemma when they choose to buy clothes. Therefore, the vast majority of consumers bought neutral colors such as black and white.As Colour counts its own sales and finds that in 50 colors of clothing, sales of black and white tricolor clothing have reached an astonishing 83%. In order to help customers choose the right clothing color more directly and conveniently, they developed a set of evaluation system named Colour Matic. This series was displayed at the Oakland store. Customers simply stood by the designated location in front of the shop window, chose a good gender and other information, waited a few minutes to get a review of the system, and finally the system will give advice on the color of the dress.'
			),
			19 => array(
				'title1'=>'Smart PJs','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300121','data'=>'1998-02-06','industry'=>'Fashion Company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Smart PJs is a start-up company in Idaho, USA. Smart PJs, an innovative company, is committed to creating the world\'s first and only interactive pajamas.'
			),
			20 => array(
				'title1'=>'Kuato Studios','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300122','data'=>'1998-02-06','industry'=>'Game company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Kuato Studios is a game startup company. Behind Kuato Studios is a strong star team. R&D staff comes from SRI who is Siri. Designers come from Sony\'s Playstation, IdeaWorks, Blitz and other companies. Kuato Studios is dedicated to the development of new game platforms, which will enable interesting and attractive game experiences. Kuato Studios\'s team is based in London and Palo Alto. They are all experts in artificial intelligence and senior talents from large game studios.'
			),
			21 => array(
				'title1'=>'iWon','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300123','data'=>'1998-02-06','industry'=>'Game company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'IWon is a free internet game company under IAC. The company website offers more than 100 free games. Joining the site community also has the opportunity to make money. Among the new portal sites that have already paid to visitors, the ones that users find most interesting are those invested by CBS, iWon.com Inc. in Irvington, New York. The idea of ​​iWon is actually very simple: the more you use their portals, the more chances you will get their three grand prizes. The iWon site is built entirely in accordance with common contractual methods on the Internet, that is, most of its content is provided by its partners, including InfoSpace, Mail.com, Jfax, Realtor.com, and Inktomi, and many other portals. Behind them can actually see them. You can find a complete list of these collaborators in the company information on the iWon site.'
			),
			22 => array(
				'title1'=>'Vostu','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300124','data'=>'2007-02-06','industry'=>'Game company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Vostu is the largest social gaming company in Brazil. Its social games are popular in South America. According to statistics, the number of its game players has exceeded half of Brazil\'s total population. Vostu has taken fourth place among global social game developers. Vostu was co-founded in 2007 by Joshua Kushner, Daniel Kafie, and Mario Schlosser of Thrive Capital. The company is headquartered in Buenos Aires and has development studios in New York and São Paulo, respectively. The company currently employs approximately 580 employees.'
			),
			23 => array(
				'title1'=>'Goko','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300125','data'=>'1998-02-06','industry'=>'Game company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Goko is a game development company. Although the HTML5 standard has not yet been unified, there are already many startup companies that are beginning to try this type of product. To this end, Goko launched a development platform to help developers use HTML5 technology to create cross-platform games. This aspect can help developers to make trial and error. On the other hand, they want to prove the future possibilities of HTML5 through successful cases.'
			),
			24 => array(
				'title1'=>'Flaregames','title2'=>'OTC','price'=>'000.00','p_chg'=>'0.00','code'=>'sz','f_code'=>'300126','data'=>'1998-02-06','industry'=>'Game company','market'=>'$3856.8','price'=>'$14','number'=>'2 billion shares',
				'brief'=>'Flaregames is a German company that specializes in free-to-air game development on mobile devices. Free-to-play (F2P, free-to-play) is a free download, but you can purchase value-added prop games during the game. This kind of game is different from a one-time paid download or trial game. It requires the game itself to have a good initial experience, high playability, and excellent monetization incentives. Only in this way can players continue to spend money on various virtual equipment or privilege during the game.'
			)
		)
	);
	$main['line3'] = array(
		'text1' => 'OTC',
		'text2' => 'LittleBeeX\'s equity trading platform adopts a similar approach to advertising: to achieve a peer-to-peer trading mode that is buyers and sellers can publish trading information on the platform and use the platform\'s payment Token (LT) to complete the payment; After the payment is completed, the settlement will be done from the LittleBeeX equity trading platform, and the transaction will be recorded on the blockchain immutably.'
	);
	$main['line4'] = array(
		'text1' => 'Auction Trading',
		'text2' => 'LittleBeeX has leading digital asset trading services. Company asset is priced in cryptocurrency so that it enables seamless digital asset trading, smart matching, instant execution with no waiting time. Professional distributed architecture design and anti-DDOS attack system ensure the security of digital assets throughout the transaction process.<br/>T + 0 free trade, 7x24 hours stable trading.'
	);

	$details_otc = array(
		'title' => 'OTC',
		'text1' => 'Advertising transactions',
		'text2' => 'Bidding transaction',
		'li1' => 'Currency',
		'li2' => 'Prices',
		'li3' => 'Gains',
		'details1' => 'Product Information',
		'details2' => 'Introduction',
		'details3' => 'Bankroll',
		'details4' => 'Founded Time',
		'details5' => 'Industry',
		'details6' => 'market capitalization',
		'details7' => 'Issue price',
		'details8' => 'issue number'
	);

	$details_bid = array(
		'title' => 'Auction Tradin',
		'text1' => 'Advertising transactions',
		'text2' => 'Bidding transaction',
		'li1' => 'Currency',
		'li2' => 'Prices',
		'li3' => 'Gains',
		'details1' => 'Product Information',
		'details2' => 'Introduction',
		'details3' => 'Bankroll',
		'details4' => 'Founded Time',
		'details5' => 'Industry',
		'details6' => 'market capitalization',
		'details7' => 'Issue price',
		'details8' => 'issue number'
	);


?>