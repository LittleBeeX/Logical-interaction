<div class="pt110 plr30 fz28">
	<div class="littlebee-tit fz28 c28 pt30 ub ub-ac mt30">
		<b class="fw-b"><?= $sel_pay['title']?></b>
	</div>
<div class="bgff mt20">
	<?foreach ($nopayser as $key => $value) {?>
		<?foreach ($service as $k => $val) {?>
			<?if ($value == $val['id']) {?>
				<div class="bb p30 order-pay-item">
					<div class="ub">
						<div class="ub-f1">
						<?= $val['project_'.$this->languageName]?>
						</div>
						<div class="fz20 c66">
							<?= $sel_pay['money']?><b class="c-f76959 fz28 fw-b rmbs"><?= sprintf("%.0f",$val['money_rmb']);?></b><?= $val['unit_'.$this->languageName]?>
						</div>
					</div>
				</div>	
			<?}?>
		<?}?>
	<?}?>
	<div class="mt20">
		<div class="bgff order-pay-item plr15">
			<div class="ub ub-ac bb relative">
				<b class="fz36 c28 fw-b"><?= $sel_pay['sum']?></b>
				<div class="ub-f1">
					<div class="selectbox order-pay-currency">
					<!--支付币种 1 rmb 2 little 3 eth -->
						<div class="select-txt ub ub-ac pay_cur" data-value="1"><strong class="fz36 c-f76959 fw-b pr10 rmb"></strong><?= $sel_pay['RMB']?></div>
						<div class="select-list">
							<div class="select-item ub-te plr30 ub-ac ub active" data-value="1"><strong class="fz36 c-f76959 fw-b pr10 rmb"></strong><?= $sel_pay['RMB']?></div>
							<div class="select-item ub-te plr30 ub-ac ub " data-value="2"><strong class="fz36 c-f76959 fw-b pr10 little"></strong><?= $sel_pay['LITTLE']?></div>
							<!-- <div class="select-item ub-te plr30 ub-ac ub " data-value="3"><strong class="fz36 c-f76959 fw-b pr10 eth"></strong><?= $sel_pay['ETH']?></div> -->
						</div>
					</div>
				</div>
			</div>
			<p class="fz20 c-0070ba pt10"><?= $sel_pay['p']?></p>
		</div>
		<div class="order-pay-type-box">
			<div class="order-pay-type-main active">
				<div class="bgff pb30">
					<ul class="apply-reg-list order-pay-type-list fz26 c66 plr15">
						<li class="bb ub ub-ac pt10">
							<div class="db"><?= $sel_pay['ul1']['div']?></div>
							<div class="selectbox pl36 ub-f1">
								<div class="select-txt ub ub-ac digital-currency-type" data-value="1"><?= $sel_pay['ul1']['div1']?></div>
								<div class="select-list">
									<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?= $sel_pay['ul1']['div1']?></div>
									<!-- <div class="select-item ub-te plr30 ub-ac ub" data-value="1">BTC2</div> -->
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="order-pay-type-btns pt30">
					<div class="ptb50 mb40">
						<a href="javascript:void(0)" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30 btn"><?= $sel_pay['ul1']['gopay']?></a>
						<a href="<?= $this->url('order/my_order')?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30"><?= $sel_pay['ul1']['nopay']?></a>
					</div>
				</div>
			</div>
			<div class="order-pay-type-main">
				<div class="bgff pb30">
					<ul class="apply-reg-list order-pay-type-list fz26 c66 plr15">
						<li class="bb ub ub-ac">
							<div class="db"><?= $sel_pay['ul2']['div']?></div>
							<div class="selectbox pl36 ub-f1">
								<div class="select-txt ub ub-ac digital-currency-type" data-value="1"><?= $sel_pay['ul2']['div1']?></div>
								<div class="select-list">
									<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?= $sel_pay['ul2']['div1']?></div>
									<!-- <div class="select-item ub-te plr30 ub-ac ub" data-value="1">BTC2</div> -->
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="RMB-pay-type-box">
					<div class="alipaybox RMB-pay-type-item active">
						<div class="order-pay-type-btns pt30">
							<div class="ptb50 mb40">
								<a href="javascript:void(0)" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30 btn"><?= $sel_pay['ul2']['gopay']?></a>
								<a href="<?= $this->url('order/my_order')?>" class="ub ub-pac bgf76959 fz26 cff lh1 ptb40 mb40 mt30"><?= $sel_pay['ul2']['nopay']?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="order-pay-type-main">
				<div class="bgff pb30">
					<ul class="apply-reg-list order-pay-type-list fz26 c66 plr15">
						<li class="bb ub ub-ac">
							<div class="db"><?= $sel_pay['ul3']['div']?></div>
							<div class="selectbox pl36 ub-f1">
								<div class="select-txt ub ub-ac digital-currency-type" data-value="1"><?= $sel_pay['ul3']['div1']?></div>
								<div class="select-list">
									<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?= $sel_pay['ul3']['div1']?></div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="RMB-pay-type-box">
					<div class="alipaybox RMB-pay-type-item active">
						<div class="order-pay-type-btns pt30">
							<div class="ptb50 mb40">
								<a href="javascript:void(0)" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30 btn"><?= $sel_pay['ul3']['gopay']?></a>
								<a href="<?= $this->url('order/my_order')?>" class="ub ub-pac bgf76959 fz26 cff lh1 ptb40 mb40 mt30"><?= $sel_pay['ul3']['nopay']?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--数字货币 end-->
		</div>
	</div>
</div>
<script>
	$(".header").addClass("user-hd");
	//表单验证
	$(".apply-toggle-tit b").on("click", function() {
		$(this).parent().toggleClass("active");
		$(this).parent().siblings(".apply-toggle-main").stop().slideToggle(600)
	});
	CheckOrderPayType()
	//支付方式
	function CheckOrderPayType(index) {
		index = index - 1;
		if(index) {
			$(".order-pay-type-main").eq(index).addClass("active").siblings(".order-pay-type-main").removeClass("active")

		} else {
			$(".order-pay-type-main").eq(0).addClass("active").siblings(".order-pay-type-main").removeClass("active")
		}
	}
	$(".order-pay-currency .select-item").on("click", function() {
		var index = $(this).attr("data-value")
		CheckOrderPayType(index)
	});
	$(".order-pay-RMB-type .select-item").on("click", function() {
		var index = $(this).attr("data-value") - 1;
		$(".RMB-pay-type-box .RMB-pay-type-item").eq(index).addClass("active").siblings(".RMB-pay-type-item").removeClass("active")
	})
	$(".digital-currency-type .select-item").on("click", function() {
		var index = $(this).attr("data-value") - 1;
		$(".digital-currency-list-box .digital-currency-list").eq(index).addClass("active").siblings(".RMB-pay-type-item").removeClass("active")
	})
</script>

<script type="text/javascript">
	var num = 0;
	var eths = "<?= $rate['eth']?>";
	var littles = "<?= $rate['little']?>";
	$(".rmbs").each(function(){
		num +=+ $(this).text()
	});
	$('.rmb').html(num);
	$('.eth').html((num*eths).toFixed(0));
	$('.little').html((num*littles).toFixed(0));
</script>

<!--支付币种 1 rmb 2 little 3 eth -->
<script type="text/javascript">
	$(document).on('click','.btn',function(){
		var oid = "<?= $oid?>";
		//支付币种
		var pay_cur = $('.pay_cur').attr("data-value");
		//支付方式
		var pay_type = $('.order-pay-type-main.active .digital-currency-type').attr('data-value')
		//支付金额
		var money = $('strong').html();
		tips('','','0',{
		type: "loading",
		cb: function() {
			$.ajax({
	        	url : '<?=$this->url("order/sel_pay_ajax")?>',
				type : 'POST',
				data : {oid:oid,pay_cur:pay_cur,pay_type:pay_type,money:money},
				dataType : "json",
		        success:function(e){
			        window.location.href=e.url+'?oid='+oid+'&money='+money;
		        } 
	        })
		}
	})
})


</script>