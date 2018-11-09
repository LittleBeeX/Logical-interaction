<div class="pt110 plr30 fz28">
<div class="bgff order-pay-item plr15">
	<div class="ub ub-ac bb">
		<b class="fz36 c28 fw-b"><?= $little_pay['b']?></b>
		<div class="ub-f1">
			<div class="order-pay-currency">
				<div class="ub ub-ac" ><strong class="fz36 c-f76959 fw-b pr10"><?= sprintf("%.0f", $pay['number'])?></strong><span class="fz28 c28"><?= $little_pay['LITTLE']?></span></div>
			</div>
		</div>
	</div>
</div>

<div class="order-pay-type-box">
	<div class="order-pay-type-main active">
		<ul class="apply-reg-list order-pay-type-list fz26 c66 plr15 bgff">
			<li class="bb ub ub-ac">
				<div class="db"><?= $little_pay['type']?></div>
				<div class="selectbox pl36 ub-f1">
					<div class="ub ub-ac digital-currency-type"><?= $little_pay['LITTLE']?></div>
				</div>
			</li>
		</ul>
		<div class="digital-currency-list-box bgff plr15">
			<div class="digital-currency-list active">
				<div class="ub ub-ac">
					<b><?= $little_pay['addre']?></b>
					<div class="ub-f1 plr20">
						<input type="text" id="copy-input" readonly="readonly" value="<?= $little_pay['address']?>" />
					</div>
					<div class="digital-currency-copy ptb20 fz24 c-0070ba" data-copy="copy-input">
						<?= $little_pay['cop']?>
					</div>
				</div>
				<div class="digital-currency-QRcode ub ub-pac">
					<img src="/public/assets/weixin/images/Little.png" alt="" />
				</div>
			</div>
		</div>
		<div class="order-pay-type-btns pt30">
			<div class="ptb50 mb40">
				<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $little_pay['sucpay']?></a>
				<a href="<?= $this->url('order/my_order')?>" class="ub ub-pac bgf76959 fz26 cff lh1 ptb40 mb40 mt30"><?= $little_pay['nopay']?></a>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">

$(".header").addClass("user-hd");

//进入页面每两秒执行一次
setInterval('chlink2()', 2000);

function chlink2() { 
	var oid = "<?= $oid?>";
	$.ajax({
		url : '<?=$this->url("order/little_ajax")?>',
		type : 'POST',
		data : {oid:oid},
		dataType : "json",
        success:function(e){
        	if (e.state == 0) {
        		window.location.href = "<?=$this->url("order/pay_success")?>?oid="+oid;
        	}
        } 
	})
} 

//点击按钮触发
$('#btn').on('touchstart',function(){
 	tips('','loading3','10000',{
 		cb:function(){
 			chlink();
 		}
 	})
})

function chlink() { 
	var oid = "<?= $oid?>";
	$.ajax({
		url : '<?=$this->url("order/little_ajax")?>',
		type : 'POST',
		data : {oid:oid},
		dataType : "json",
        success:function(e){
        	if (e.state == 0) {
        		window.location.href = "<?=$this->url("order/pay_success")?>?oid="+oid;
        	}else{
        		window.location.href = "<?=$this->url("order/pay_fail")?>";
        	}
        } 
	})
} 

$('.digital-currency-copy').on('click',function(){
	$("#copy-input").select();
    document.execCommand("Copy"); // 执行浏览器复制命令 
    tips("<?= $little_pay['coptips']?>",'success',1000);
})
</script>