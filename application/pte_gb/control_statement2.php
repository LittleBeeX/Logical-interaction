<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$control_statement2['txt1']?></b>
	</div>
	<div class="c66 plr30 fz24 lh16 mt24">
		<?=$control_statement2['txt2']?>
	</div>
	<div class="plr30 pt40 mt20">
		<ul class="service-list c66 fz22 mt10">
			<li class="mb10i c28 ub ub-tc">
				<input type="checkbox" id="checkbox-id" checked="" class="form-checkbox itemtop mr10"/>
				<span class="c66 pl20" style="width: 94%;"><?=$control_statement2['txt3']?><br/><b class="c-red apply-hint" promptId="hint1"><?=$control_statement2['txt4']?></b></span>
			</li>
		</ul>
		<p class="mt30 mb20 c66 fz26"><?=$control_statement2['txt5']?></p>
		<ul class=" c66 fz26 mt10">
		<?foreach ($sbinfo as $key => $val) {?>	
			<li class="mb20 c28 ub ub-ac">
				<i class="mr10 list-hint-icon bg-blue"></i>
				<tr>
					<span class="c66 pl20"><?= $val['surname']?>&nbsp;<?= $val['name']?></span>
				</tr>
			</li>
			<?}?>
		</ul>
	</div>
	
	<div class=" plr30 apply-foot-submit font-upper">
	<?if(empty($code)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_statement2['btn1']?></a>
	<?}else if(!empty($code)){?>
		<?if(empty($id)){?>
			<a href="<?=$this->url("pte_gb/order_show")?>?oid=<?=$oid?>&code=<?=$code?>"   class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_statement2['btn2']?></a>
		<?}else if(!empty($id)){?>
			<a href="<?=$this->url("pte_gb/order_show")?>?oid=<?=$oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?=$control_statement2['btn3']?></a>
		<?}?>
	<?}?>

	</div>
</div>
<div class="alertDialog" id="hint1">			
			<div class="tips-main promptWrap">				
				<div class="tips-in">	
					<i class="tip-close iconfont icon-error c-red fz20"></i>
					<div>
						<h2 class="tx-c fz28 fw-b"><?=$control_statement2['txt6']?></h2>
						<h3 class="fz26 fw-b mt20"><?= $name?><?=$control_statement2['txt7']?></h3>
						<p><?=$control_statement2['txt8']?></p>
						<table class="fz26 w100 mt30 mb40" >

							<tr >
								<th class="tx-l pb10 pl20 bb"><?=$control_statement2['txt9']?></th>
								<th class="tx-l pb10 pl20 bb"><?=$control_statement2['txt10']?></th>
							</tr>
						
						<?foreach ($sbinfo as $key => $val) {?>							
							<tr>
								<td class="pt20 pl20 c66"><?= $val['surname']?>&nbsp;<?= $val['name']?></td>
								<td class="pt20 pl20 c66"><?=$control_statement2['txt11']?></td>
							</tr>
						<?}?>
						</table>
						<h4 class="tx-r c66 fz26"><?=$control_statement2['txt12']?><?=date('Y/m/d')?></h4>
					</div>
				</div>			
			</div>		
		</div>
<script>
	$(".header").addClass("user-hd");
	//提示弹窗
	$('.apply-hint').click(function(){
		$('#'+$(this).attr('promptId')).addClass('active');
	})
	$('.alertDialog .tip-close').click(function(){
		$('.alertDialog').removeClass('active');
	})
	
	
</script>
<script type="text/javascript">
$('#btn').click(function(){
	var oid = "<?= $oid?>";
	var code = "<?=$code?>";
	var id = "<?=$id?>";
	tips('','','0',{
		type: "loading",
		cb: function() {
	if ($('#checkbox-id').is(':checked')) {
		$.ajax({
	        url:'<?=$this->url("pte_gb/control_statement2_ajax")?>?oid='+oid,
	        type:'post',
	        data:{oid:oid},
	        dataType:'json',
	        success:function(e){
		        if (e.state == 0) {
		        	tips(e.info,'success',2000);
	        		setTimeout(function(){
	        			 window.location.href = "<?= $this->url('order/project')?>?oid="+oid+'&id='+e.id+'&code='+code;
	        		},2000)
			        return false;
		        }	
		        if(e.state == 1){
	        	tips(e.info,'warning',2000);
	        }
	        } 
    	})

   		
	}else{
		tips("<?=$control_statement2['alert1']?>",'warning',1000);
	}
	}
	})
})
	

</script>