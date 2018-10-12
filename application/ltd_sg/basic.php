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
		<b class="fw-b"><?= $basic['h1']?></b>
	</div>
	<div class="apply-info ub ub-ver plr30 cff pt40 pb34 fz28 mt30">
		<div class="ub">
			<div class="ub-f1">
				<h6 class="apply-info-name op8"><?= $basic['div1']['h6']?></h6>
				<p class="lh18 mt24">
					<?= $basic['div1']['p']?>
				</p>
			</div>
			<div class="tx-r">
				<strong class="fz72 fw-b db lh1 mt20"><?= $basic['div2']['money']?></strong>
				<p class="op8 mt10 lh16 fz26"><?= $basic['div2']['p1']?></p>
				<p class="mt10"><?= $basic['div2']['p2']?></p>
			</div>
		</div>
		<div class="ub ub-pj ub-ac mt24">
			<div class="apply-more-btn c21 ub ub-pac bgff fw-b"><?= $basic['div1']['div']?></div>
			<p class="fz24 op8 "><?= $basic['div2']['p3']?></p>
		</div>
		<div class="apply-info-mask"></div>
	</div>
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?= $basic['div3']['b']?></b>
	</div>

	<ul class="apply-reg-list fz26 c66 plr30 pt40 mt30">
		<li>
			<label>
			<b><?= $basic['div3']['b1']?></b>
			<input type="text" reg="enNomarl" id="name" value="<?= $basics['name']?>"/>
			<i id="cop" data-value="<?= $basic['div3']['i']?>"><?= $basic['div3']['i']?></i>
		</label>
			<p><span><?= $basic['div3']['p1']?></span></p>
		</li>
		</ul>
</div>
<div class="fz28 c28 pt30 plr30 ub ub-ac">
	<b class="fw-b"><?= $basic['input']['b']?></b>
</div>
<ul class="apply-reg-list fz26 c66 plr30 pt40 mt30">
	<li>
		<label>
			<b><?= $basic['input']['b1']?></b>
			<input type="text" reg="nomarl" id="contact_name" value="<?= $basics['contact_name']?>"/>
		</label>
		<p><span><?= $basic['input']['p1']?></span></p>
	</li>

	<li>
		<label>
			<b><?= $basic['input']['b2']?></b>
			<input type="text" reg="email" id="contact_email" value="<?= $basics['contact_email']?>"/>
		</label>
		<p><span><?= $basic['input']['p2']?></span></p>
	</li>
		<li>
		<div class="ubi ub-ac apply-reg-hint">
			<div class="selectbox" style="width:3rem;">
				<div class="select-txt fz24 c66i" id="mobile_code" data-value="<?=$phone_codes[1]['code']?>">+<?=$phone_codes[1]['code']?></div>
				<div class="select-list phone">
					<?foreach ($phone_codes as $key => $val) {?>
						<div class="select-item ub-te plr30 ub-ac ub-pj ub" data-value="<?= $val['code']?>">
							<strong><?= $val['en']?></strong>
							<strong>+<?= $val['code']?></strong>
						</div>
					<?}?>
				</div>
			</div>
			<label class="ml20">
				<b><?= $basic['input']['b3']?></b>
				<input type="text" reg="number" id="contact_mobile"  value="<?= $basics['contact_mobile']?>"  maxlength="16"/>
			</label>
		</div>
		<p><span><?= $basic['input']['p3']?></span></p>	
	</li>
	<li>
		<label>
			<b><?= $basic['input']['b4']?></b>
			<input type="text" reg="nomarl" id="address" value="<?= $basics['address']?>"/>
		</label>
		<p><span><?= $basic['input']['p4']?></span></p>
	</li>
</ul>
<div class="ptb50 mb40 plr30">
<!-- $is_pay NULL 正常操作下一步  else 订单已支付无法修改 按钮改为返回 -->
<?if (empty($is_pay)) {?>
	<?if(empty($oid)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $basic['next']?></a>
	<?}else{?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $basic['upd']?></a>
	<?}?>
<?}else{?>
	<a href="<?=$this->url('ltd_sg/order_show')?>?oid=<?= $oid?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $basic['back']?></a>
<?}?>
	
</div>
	</div>
	<div class="apply-more-main ub ub-ver cff">
		<div class="clear">
			<div class="apply-more-close p30 fl">
				<i class="iconfont icon-error fz40 lh1"></i>
			</div>
		</div>
		<h2 class="fz50 plr30"><?= $guide['h1']?></h2>
		<div class="apply-more-tab ub plr30 fz28">
			<div class="ub-f1 ub">
				<b class="active ub-f1"><?= $guide['nav1']['title']?></b>
				<b class="ub-f1"><?= $guide['nav2']['title']?></b>
				<b class="ub-f1"><?= $guide['nav3']['title']?></b>
				<b class="ub-f1"><?= $guide['nav4']['title']?></b>
				<b class="ub-f1"><?= $guide['nav5']['title']?></b>
				<div class="apply-more-line"></div>
			</div>

		</div>
		<div class="ub-f1 ub cff">
			<div class="apply-slide-main ub-f1 w100">
				<div class="bs-wrapper apply-wrapper">
					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav1']['div1']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav1']['p1']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav1']['div2']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav1']['p2']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav1']['div3']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav1']['p3']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav1']['div4']?>
							</div>
							<div class="apply-slide-con fz22 lh16 word-break pt10">
								<div class="apply-flow pb40">
									<img src="/public/assets/weixin/images/ltd_sg_<?=$this->languageName?>.png" alt="<?= $guide['nav1']['div4']?>" />
								</div>
							</div>
						</div>
					</div>
					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav2']['div1']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav2']['p1']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav2']['div2']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav2']['p2']?></p>
							</div>
						</div>
					</div>
					<div class="bs-slide apply-slide plr30 pb40 swiper-slide-active" style="width: 375px;">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-tc fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav3']['div1']?></div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav3']['p1']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-tc fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav3']['div2']?></div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav3']['p2']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-tc fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav3']['div3']?></div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav3']['p3']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-tc fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav3']['div4']?></div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav3']['p4']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-tc fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav3']['div5']?></div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav3']['p5']?></p>
							</div>
						</div>
					</div>
					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav4']['div1']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav4']['p1']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav4']['div2']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav4']['p2']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav4']['div3']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav4']['p3']?></p>
							</div>
						</div>
					</div>
					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav5']['div1']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav5']['p1']?> </p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?= $guide['nav5']['div2']?>
							</div>
							<div class="apply-slide-con fz22 pl30 lh16 word-break pt10">
								<p><?= $guide['nav5']['p2']?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<script>
	$(".header").addClass("user-hd");
	var oid = '<?= $oid?>';
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

	tick();
	//以获取系统的时间
	function tick() {
		var ap,intHours,today;
		$('.day-time img').hide();
		today = new Date();
		intHours = today.getHours();
		//获取系统时间的小时数
		if(intHours <= 12 && intHours > 6) {
			ap = "<?= $greetings[0]?>";
			$('.morning').show();
		} else if(intHours < 18 && intHours > 12) {
			ap = "<?= $greetings[1]?>";
			$('.afternoon').show();
		}else {
			ap = "<?= $greetings[2]?>";
			$('.night').show();
		}
		$('.thisTimeHint').text(ap)
	}
</script>

<script type="text/javascript">



$('#btn').on('click',function(){
	var oid = "<?= $oid?>";
	var code = "<?= $code?>";
	var name = $('#name').val();
	var cop = $('#cop').attr('data-value');
	var mobile_code = $('#mobile_code').attr('data-value');
	var contact_name = $('#contact_name').val();
	var contact_email = $('#contact_email').val();
	var contact_mobile = $('#contact_mobile').val();
	var address = $('#address').val();
	var data = {oid:oid,code:code,name:name,cop:cop,contact_name:contact_name,contact_email:contact_email,mobile_code:mobile_code,contact_mobile:contact_mobile,address:address}
	tips('','','0',{
		type: "loading",
		cb: function() {
			$.ajax({
				url : '<?=$this->url("ltd_sg/basic_ajax")?>',
				type : 'POST',
				data : data,
				dataType : "json",
		        success:function(e){
		        	if (e.state == 0) {
		        		tips(e.info,'success',2000);
		        		setTimeout(function(){
		        			if (e.code == '') {
		        				window.location.href="<?=$this->url("ltd_sg/project")?>?oid="+e.oid+'&code='+'';
		        			}else{
		        				window.location.href="<?=$this->url("ltd_sg/order_show")?>?oid="+e.oid;
		        			}
		        		},2000)
		        		return false;
		        	}
		        	tips(e.info,'error',1000)
		        } 
			})
		}
	})
	
})

</script>
