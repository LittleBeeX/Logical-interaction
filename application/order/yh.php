<div class="pt110 plr30 fz28">
<div class="bgff order-pay-item plr15">
	<div class="ub ub-ac bb">
		<b class="fz36 c28 fw-b"><?= $yh_pay['b']?></b>
		<div class="ub-f1">
			<div class="order-pay-currency">
				<div class="ub ub-ac" data-value="0"><strong class="fz36 c-f76959 fw-b pr10"><?= sprintf("%.0f", $pay['number'])?></strong><span class="fz28 c28"><?= $yh_pay['money']?></span></div>
			</div>
		</div>
	</div>
</div>

<div class="order-pay-type-box">
	<div class="order-pay-type-main active">
		<div class="bgff pb30">
			<ul class="apply-reg-list order-pay-type-list fz26 c66 plr15">
			<li class="bb ub ub-ac">
				<div class="db"><?= $yh_pay['type']?></div>
				<div class="pl36 ub-f1">
					<div class="ub ub-ac"><?= $yh_pay['yh']?></div>
				</div>
			</li>
			<li>
				<div class="ub bb pb20">
					<div class="c66 pr30"><?= $yh_pay['khyh']?></div>
					<div class="ub-f1 c28 ub-te"><?= $yh_pay['yhname']?></div>
				</div>
			</li>
			<li>
				<div class="ub bb pb20">
					<div class="c66 pr30"><?= $yh_pay['zh']?></div>
					<div class="ub-f1 c28 ub-te"><?= $yh_pay['zhname']?></div>
				</div>
			</li>
			<li>
				<div class="ub bb pb20">
					<div class="c66 pr30"><?= $yh_pay['payname']?></div>
					<div class="ub-f1 c28 ub-te"><?= $yh_pay['payzh']?></div>
				</div>
			</li>
			<li>
				<div class="ub bb pb20">
					<div class="c66 pr30"><?= $yh_pay['fkm']?></div>
					<div class="ub-f1 c28 ub-te"><?= $pay['order_coding']?></div>
				</div>
			</li>
			</ul></div>
			<div class="order-pay-type-btns pt30">
				<div class="ptb50 mb40">
					<a href="javascript:void(0)" id="pay" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $yh_pay['sucpay']?></a>
					<a href="<?= $this->url('order/my_order')?>" class="ub ub-pac bgf76959 fz26 cff lh1 ptb40 mb40 mt30"><?= $yh_pay['nopay']?></a>
				</div>
			</div>
		
	</div>
</div>
</div>
<script type="text/javascript">

	$(".header").addClass("user-hd");

</script>

<script type="text/javascript">

$('#pay').on('click',function(){
	var id = "<?= $pay['id']?>";
	$.ajax({
		url : '<?=$this->url("order/yh_ajax")?>',
		type : 'POST',
		data : {id:id},
		dataType : "json",
        success:function(e){
        	if (e.state == 0) {
        		tips(e.info,'success',3000);
        		setTimeout('window.location.href="<?=$this->url("order/my_order")?>";',3500);
        		return false;
        	}
        	tips(e.info,'warning',2000);
        } 
	})
})



</script>