<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$equity_list['title']?></b>
	</div>
</div>
<div class="apply-toggle-box plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac">
				<div class="db"><?=$equity_list['title2']?></div>
				<div class="ub-f1 ml30 c00"><?= $sbinfo['currency_type']?></div>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?=$equity_list['title3']?></div>
				<div class="ub-f1 ml30 c00"><?= $sbinfo['shares_type']?></div>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?=$equity_list['title4']?></div>
				<div class="ub-f1 ml30 c00"><?= $sbinfo['number']?></div>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?=$equity_list['title5']?></div>
				<div class="ub-f1 ml30 c00"><?= $sbinfo['facevalue']?></div>
			</li>
			<?if(!empty($code)){?>
				<div class="apply-list-textarea">
					<div class="db"><?=$equity_list['title18']?></div>
					<textarea rows="10" id="details" disabled="disabled" placeholder="Each share has full rights in the company with respect to voting, dividends and distributions."><?= $sbinfo['details']?></textarea>
				</div>
			<?}?>
		</ul>
	</div>
</div>
<?if(empty($code)){?>
<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
	<b class="fw-b"><?=$equity_list['title6']?></b><i class="apply-hint-tit" promptid="hint1"></i>
</div>
<div class="plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="apply-change-item1 success">
				<label>
					<b><?=$equity_list['title7']?></b>
					<input type="text" reg="number" id="unpaid" value="<?= $sbinfo['unpaid'];?>" <?if(!empty($code)){echo 'disabled="disabled"';}?>/>
				</label>
				<p><span><?=$equity_list['title8']?></span></p>
			</li>
		</ul>
	</div>
</div>
<?}?>

<div class="ptb50 mb40 plr30 font-upper">
<? if (empty($code)) {?>
<a href="javascript:void(0)" id="btn" data-id="<?= $sbinfo['id']?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$equity_list['title9']?></a>
<?}else if (!empty($code)) {?>
	<a href="<?=$this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?=$equity_list['title10']?></a>
<?}?>
</div>
<div class="alertDialog" id="hint1">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$equity_list['title12']?></h4>
				<p><?=$equity_list['title13_p1']?></p>
				<p><?=$equity_list['title13_p2']?></p>
			</div>
		</div>			
	</div>		
</div>


<script>
	$(".header").addClass("user-hd");	
	//提示弹窗
	$('.apply-hint-tit').click(function(){
		$('#'+$(this).attr('promptId')).addClass('active');
	})
	$('.alertDialog .tip-close').click(function(){
		$('.alertDialog').removeClass('active');
	})
	
</script>

<script type="text/javascript">
$('#btn').on('click',function(){
	var oid = "<?= $oid?>";
	var code ="<?=$code?>";
	var id = $(this).attr('data-id');
	var unpaid = $('#unpaid').val();
	tips('','','0',{
		type: "loading",
		cb: function() {
	if (unpaid == '') {
		tips("<?=$equity_list['title14']?>",'warning',1000);return false;
	}
	$.ajax({
		url:'<?=$this->url("pte_gb/equity_unpaid")?>',
        type:'post',
        data:{id:id,unpaid:unpaid},
        dataType:'json',
        success:function(e){
        	if (e.state == 0) {
        		tips(e.info,'success',2000);
	        		setTimeout(function(){
	        			 window.location.href="<?=$this->url("pte_gb/share_shop_insert")?>?oid="+oid+'&code='+code;
	        		},2000)
        		return false;
        	}
        	if(e.state == 1){
	        	tips(e.info,'warning',2000);
	        }
        } 
	})
	} 
	})
})

$(function(){
	if(("<?=$code?>")==''){
	    history.pushState(null, null, document.URL);
	    window.addEventListener('popstate', function () {
			if(confirm("<?= $nobacks?>")){
				window.location.href = '/index.php/<?=$this->languageName?>/weixin';
			}else{
				history.pushState(null, null, document.URL);
			}
		});
	}
})


</script>