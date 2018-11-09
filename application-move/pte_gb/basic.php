<div class="pt110">
	<div class="ub ub-ac p30">
		<b class="fz58 c28 fw-b lh1 thisTimeHint"></b>
		<div class="day-time">
			<img src="/public/assets/weixin/images/morning.png" class="morning" alt="" />
			<img src="/public/assets/weixin/images/afternoon.png" class="afternoon" alt="" />
			<img src="/public/assets/weixin/images/night.png" class="night" alt="" />
		</div>
	</div>
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$basic['registgbr']?></b>
		<?if($audit_state==3){?>
			<span style="margin-left: 5%;" class="c-f76959 pr10"><?=$basics['audit_note']?></span>
		<?}?>
	</div>
	<div class="apply-info ub ub-ver plr30 cff pt40 pb34 fz28 mt30">
		<div class="ub">
			<div class="ub-f1">
				<h6 class="apply-info-name op8"><?=$basic['gbrcompany']?></h6>
				<p class="lh18 mt24">
				<?=$basic['time_money']?>
					</p>
				<p class="ptb30 ip"></p>
			</div>
			<div class="tx-r">
				<strong class="fz72 fw-b db lh1 mt20"><?=$basic['money_rmb']?></strong>
				<p class="op8 mt10 lh16 fz26"><?=$basic['money_min']?></p>
				<p class="ptb20"></p>
				<p class="mt10"><?=$basic['money_little']?></p>
			</div>
		</div>
		<div class="ub ub-pj ub-ac mt24">
			<div class="apply-more-btn c21 ub ub-pac bgff fw-b"><?=$basic['know_more']?></div>
			<p class="fz24 op8"><?=$basic['littlepay_nb']?></p>
		</div>
		<div class="apply-info-mask"></div>
	</div>
</div>

<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
	<b class="fw-b"><?=$basic['basic_data']?></b><i class="apply-hint-tit" promptId="hint1"></i>
</div>
<ul class="apply-reg-list fz26 c66 plr30 pt40 mt30">
	<li >

		<div class="ubi ub-ac apply-reg-hint">

			<label>
				<b><?=$basic['name']?></b>
				<input type="text" reg="enNomarl" id="names" value="<?=$basics['name']?>" />

			</label>

			<div class="selectbox ub-f1">
				<div class="select-txt" id="cop" data-value="<?=$basics['last_list']?>"><?=$basics['last_list']?></div>
				<div class="select-list">
				<?foreach ($company_lastname as $key_a => $value_a) {?>
					<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_a?>"><?=$value_a?></div>
				<?}?>
				</div>
			</div>
		</div>
		<p><span><?=$basic['name_msg']?></span></p>	
	</li>
	<li class="bb ub ub-ac">
		<div class="db"><?=$basic['region']?></div>
		<div class="ub-f1 ml30">
			<div class="selectbox">
				<div class="select-txt ub ub-ac" id="rege" data-value="<?=$basics['region']?>"><?=$basics['region']?></div>
				<div class="select-list">
				<?foreach ($countrys as $key_b => $value_b) {?>
					<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_b?>"><?=$value_b?></div>
				<?}?>
				</div>
			</div>
		</div>
	</li>
</ul>
<div class="fz28 c28 pt30 plr30 ub ub-ac" >
	<b class="fw-b"><?=$basic['address_data']?></b><i class="apply-hint-tit" promptId="hint2"></i>
</div>
<ul class="apply-reg-list fz26 c66 plr30 pt40 mt30">
	<li>
		<label>
			<b><?=$basic['register_address1']?></b>
			<input type="text" reg="nomarl" id="register_address1" value="<?=$basics['register_address1']?>"/>
		</label>
		<p><span><?=$basic['register_address1_msg']?></span></p>
	</li>

	<li>
		<label>
			<b><?=$basic['register_address2']?></b>
			<input type="text" reg="enNomarl" id="register_address2" value="<?=$basics['register_address2']?>"/>
		</label>
		<p><span><?=$basic['register_address2_msg']?></span></p>
	</li>
	<li>
		<label>
			<b><?=$basic['register_address3']?></b>
			<input type="text" reg="nomarl" id="register_address3" value="<?=$basics['register_address3']?>"/>
		</label>
		<p><span><?=$basic['register_address3_msg']?></span></p>
	</li>
	<li class="bb ub ub-ac">
		<div class="db"><?=$basic['register_address4']?></div>
		<div class="ub-f1 ml30">
			<div class="selectbox">
				<div class="select-txt ub ub-ac" id="register_address4" data-value="<?=$basics['register_address4']?>"><?=$basics['register_address4']?></div>
				<div class="select-list">
				<?foreach ($phone_codes as $key_c => $value_c) {?>
					<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_c['en']?>"><?=$value_c['en']?></div>
				<?}?>
				</div>
			</div>
		</div>
	</li>
</ul>
<div class="fz28 c28 pt30 plr30 ub ub-ac">
	<b class="fw-b"><?=$basic['contact_data']?></b>
</div>
<ul class="apply-reg-list fz26 c66 plr30 pt40 mt30">
	<li>
		<label>
			<b><?=$basic['contact_name']?></b>
			<input type="text" reg="nomarl" id="contact_name" value="<?=$basics['contact_name']?>"/>
		</label>
		<p><span><?=$basic['contact_name_msg']?></span></p>
	</li>

	<li>
		<label>
			<b><?=$basic['contact_email']?></b>
			<input type="text" reg="email" id="contact_email" value="<?=$basics['contact_email']?>"/>
		</label>
		<p><span><?=$basic['contact_email_msg']?></span></p>
	</li>
	<li>
		<div class="ubi ub-ac apply-reg-hint">
			<div class="selectbox" style="width:3rem;">
				<div class="select-txt fz24 c66i" id="mobile_code" data-value="<?=$phone_codes[1]['code']?>">+<?=$phone_codes[1]['code']?></div>
				<div class="select-list phone">
					<?foreach ($phone_codes as $key_d => $value_d) {?>
						<div class="select-item ub-te plr30 ub-ac ub-pj ub" data-value="<?= $value_d['code']?>">
							<strong><?= $value_d['en']?></strong>
							<strong>+<?= $value_d['code']?></strong>
						</div>
					<?}?>
				</div>
			</div>
			<label class="ml20" style="width: 15rem;">
				<b ><?=$basic['contact_mobile']?></b>
				<input type="text" reg="number" id="contact_mobile" value="<?=$basics['contact_mobile']?>" maxlength="16"/>
			</label>
		</div>
		<p><span><?=$basic['contact_mobile_msg']?></span></p>	
	</li>
	<li>
		<label>
			<b><?=$basic['address']?></b>
			<input type="text" reg="nomarl" id="address" value="<?=$basics['address']?>" />
		</label>
		<p><span><?=$basic['address_msg']?></span></p>
	</li>
</ul>
<div class="ptb50 mb40 plr30 font-upper">
<?if(empty($code)){?>
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$basic['submit']['button']?></a>
<?}?>
<?if(!empty($code)){?>
	<?if(!empty($upd)){?>
		<a href="<?=$this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?=$code?>" id="upd" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$basic['submit']['yes']?></a>
	<?}else if(empty($upd)){?>
		<?if(!empty($audit_state)){?>
			<?if($audit_state==1||$audit_state==2){?>
				<a href="<?=$this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?=$basic['submit']['return']?></a>
			<?}else if($audit_state==3){?>
				<a href="<?=$this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?=$code?>" id="upd" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$basic['submit']['yes']?></a>
			<?}?>
		<?}else if(empty($audit_state)){?>
			<a href="<?=$this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?=$basic['submit']['return']?></a>
		<?}?>
	<?}?>
<?}?>
</div>
<div class="apply-more-main ub ub-ver cff">
	<div class="clear">
		<div class="apply-more-close p30 fl">
			<i class="iconfont icon-error fz40 lh1"></i>
		</div>
	</div>
	<h2 class="fz50 plr30"><?=$guide['title']?></h2>
	<div class="apply-more-tab ub plr30 fz28">
		<div class="ub-f1 ub">
			<b class="active ub-f1"><?=$guide['nav1']['title']?></b>
			<b class=" ub-f1"><?=$guide['nav2']['title']?></b>
			<b class=" ub-f1"><?=$guide['nav3']['title']?></b>
			<b class=" ub-f1"><?=$guide['nav4']['title']?></b>
			<div class="apply-more-line"></div>
		</div>

	</div>
	<div class="ub-f1 ub cff">
				<div class="apply-slide-main ub-f1 w100">
					<div class="bs-wrapper apply-wrapper">
						<div class="bs-slide apply-slide plr30 pb40">
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav1']['div1']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav1']['p1']?>
									</p>
								</div>
							</div>
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav1']['div2']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav1']['p2']?>
									</p>
								</div>
							</div>
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav1']['div3']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav1']['p3']?>
									</p>
								</div>
							</div>
						</div>
						<div class="bs-slide apply-slide plr30 pb40">
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav2']['div1']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav2']['p1']?> </p>
								</div>
							</div>
						</div>
						<div class="bs-slide apply-slide plr30 pb40">
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav3']['div1']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav3']['p1']?>
									</p>
								</div>
							</div>
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav3']['div2']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav3']['p2']?>
									</p>
								</div>
							</div>
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav3']['div3']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav3']['p3']?>
									</p>
								</div>
							</div>
						</div>
						<div class="bs-slide apply-slide plr30 pb40">
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav4']['div1']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p>
										<?=$guide['nav4']['p1']?> </p>
								</div>
							</div>
							<div class="apply-slide-item pt40 mt20">
								<div class="apply-slide-tit ub ub-ac fz28 fw-b">
									<i class="iconfont icon-start fz24 pr10"></i> <?=$guide['nav4']['div2']?>
								</div>
								<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
									<p><?=$guide['nav4']['p2']?>
									</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="alertDialog" id="hint1">			
			<div class="tips-main promptWrap">				
				<div class="tips-in">	
					<i class="tip-close iconfont icon-error c-red fz20"></i>
					<div>
						<h4 class="tx-c fz28 fw-b"><?=$guide['nav1']['div1']?></h4>
						<p><?=$guide['nav1']['p1']?></p>
					</div>
				</div>			
			</div>		
		</div>
		<div class="alertDialog" id="hint2">			
			<div class="tips-main promptWrap">				
				<div class="tips-in">	
					<i class="tip-close iconfont icon-error c-red fz20"></i>
					<div>
						<h4 class="tx-c fz28 fw-b"><?=$guide['nav2']['div1']?></h4>
						<p><?=$guide['nav2']['p1']?></p>
					</div>
				</div>			
			</div>		
		</div>
		
		
<script>
	$(".header").addClass("user-hd");
	var oid = "<?= $oid?>";
	if (oid != '') {
		$('.apply-reg-list li').addClass("success")
	}
	//表单验证
	var mySwiper = new Swiper('.apply-slide-main', {
		loop: false,
		speed: 700,
		autoplayDisableOnInteraction: false,
		wrapperClass: 'apply-wrapper',
		slideClass: 'apply-slide',
		paginationClickable: true,
		observer: true,
		observeParents: true,
		onSlideChangeStart: function(swiper) {
			$(".apply-more-tab b").eq(swiper.activeIndex).addClass("active").siblings("b").removeClass("active");
			$(".apply-more-line").css("left", $(".apply-more-tab").find("b.active").position().left)
		}
	});
	$(".apply-more-tab b").on("click", function() {
		mySwiper.slideTo($(this).index())
	})
	$(".apply-more-btn").on("click", function() {
		$("body,html").addClass("apply-more-main-show");
		return false;
	})
	$(".apply-more-close").on("click", function() {
		$("body,html").removeClass("apply-more-main-show");
		return false;
	})
	//提示弹窗
	$('.apply-hint-tit').click(function(){
		$('#'+$(this).attr('promptId')).addClass('active');
	})
	$('.alertDialog .tip-close').click(function(){
		$('.alertDialog').removeClass('active');
	})

	tick();
	//以获取系统的时间
	function tick() {
		var ap,intHours,today;
		$('.day-time img').hide();
		today = new Date();
		intHours = today.getHours();
		//获取系统时间的小时数
		if(intHours <= 12 && intHours > 6) {
			ap = "<?=$greetings[0]?>";
			$('.morning').show();
		} else if(intHours < 18 && intHours > 12) {
			ap = "<?=$greetings[1]?>";
			$('.afternoon').show();
		}else {
			ap = "<?=$greetings[2]?>";
			$('.night').show();
		}
		$('.thisTimeHint').text(ap);
	}
</script>
<script type="text/javascript">
var iid ="<?=$id?>";
if(iid!=''){
	$('.apply-reg-list li').addClass('success');
}
$('#btn').on('click',function(){
	var code = "<?= $code?>";
	var oid = "<?=$oid?>";
	var name = $('#names').val();
	var audit_state = "<?=$audit_state?>";
	var cop = $('#cop').attr('data-value');//国家
	var region = $('#rege').attr('data-value');//国家
	var register_address1 = $('#register_address1').val();
	var register_address2 = $('#register_address2').val();
	var register_address3 = $('#register_address3').val();
	var register_address4 = $('#register_address4').attr('data-value');
	var contact_name = $('#contact_name').val();
	var contact_email = $('#contact_email').val();
	var mobile_code = $('#mobile_code').attr('data-value');
	var contact_mobile = $('#contact_mobile').val();
	var address = $('#address').val();
	var data = {name:name,last_list:cop,region:region,register_address1:register_address1,register_address2:register_address2,register_address3:register_address3,register_address4:register_address4,contact_name:contact_name,contact_email:contact_email,mobile_code:mobile_code,contact_mobile:contact_mobile,address:address,code:code,oid:oid};
	tips('','','0',{
		type: "loading",
		cb: function() {
			$.ajax({
			        url:"<?=$this->url("pte_gb/basic_ajax")?>",
			        type:'post',
			        data:data,
			        dataType:'json',
			        success:function(e){
			        	if (e.state == 0) {
			        		tips(e.info,'success',1000);
			        		setTimeout(function(){
				            	window.location.href="<?=$this->url("pte_gb/scope")?>?oid="+e.oid+"&code="+code;
				        	},1500)
			        		return false;
			        	}else if(e.state == 1){
			        		tips(e.info,'warning',2000);
			        	}
			        	
			        } 
			})
		}
	})

})

$('#upd').on('click',function(){
	var code1 = "<?= $code?>";
	var oid1 = "<?=$oid?>";
	var name1 = $('#names').val();
	var cop1 = $('#cop').attr('data-value');//国家
	var audit_state = "<?=$audit_state?>";
	var region1 = $('#rege').attr('data-value');//国家
	var register_address11 = $('#register_address1').val();
	var register_address22 = $('#register_address2').val();
	var register_address33 = $('#register_address3').val();
	var register_address44 = $('#register_address4').attr('data-value');
	var contact_name1 = $('#contact_name').val();
	var contact_email1 = $('#contact_email').val();
	var mobile_code1 = $('#mobile_code').attr('data-value');
	var contact_mobile1 = $('#contact_mobile').val();
	var address1 = $('#address').val();
	var data = {name:name1,last_list:cop1,region:region1,register_address1:register_address11,register_address2:register_address22,register_address3:register_address33,register_address4:register_address44,contact_name:contact_name1,contact_email:contact_email1,mobile_code:mobile_code1,contact_mobile:contact_mobile1,address:address1,code:code1,oid:oid1};
	tips('','','0',{
		type: "loading",
		cb: function() {
			$.ajax({
			        url:"<?=$this->url("pte_gb/basic_ajax")?>",
			        type:'post',
			        data:data,
			        dataType:'json',
			        success:function(e){
			        	if (e.state == 0) {
			        		tips(e.info,'success',1000);
			        		setTimeout(function(){
				            	window.location.href="<?=$this->url("pte_gb/order_show")?>?oid="+oid1+"&code="+code1;
				        	},1500)
			        		return false;
			        	}else if(e.state == 1){
			        		tips(e.info,'warning',2000);
			        	}
			        } 
			})
		}
	})

})

</script>
