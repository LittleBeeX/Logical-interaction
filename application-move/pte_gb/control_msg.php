<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?=$control_msg['title1']?></b>
	</div>
	<div class="c66 plr30 fz24 lh16 mt24">
		<?=$control_msg['title2']?>
	</div>
	<ul class="user-info-list plr30 fz24 cff">
		<li class="ub ub-ac">
			<span class="user-label w-r55 w-r66"><?=$control_msg['title3']?></span>
			<div class="ub-f1 user-input">
				<input type="text" value="<?=$control_msg['title4']?>" disabled>
			</div>
		</li>
		<li class="ub ub-ac">
			<span class="user-label w-r55 w-r66"><?=$control_msg['title5']?></span>
			<div class="ub-f1 user-input">
				<span id="adre"><?= $sbinfo['register_directors']?></span>
			</div>
			<?if (empty($code)) {?>
				<a href="<?= $this->url('pte_gb/director_roster')?>?oid=<?= $oid?>&code=<?= $code?>" class="user-info-del ub ub-pac cff"><?=$control_msg['btn2']?></a>
			<?}else if (!empty($code)) {?>
				<?if(!empty($basicid)){?>
					<a href="<?= $this->url('pte_gb/director_roster')?>?oid=<?= $oid?>&code=<?= $code?>&id=<?=$basicid?>" class="user-info-del ub ub-pac cff"><?=$control_msg['btn2']?></a>
				<?}else if(empty($basicid)){?>
					<a href="<?= $this->url('pte_gb/director_roster')?>?oid=<?= $oid?>&code=<?= $code?>" class="user-info-del ub ub-pac cff"><?=$control_msg['btn1']?></a>
				<?}?>
			<?}?>
			
		</li>
		<li class="ub ub-ac">
			<span class="user-label w-r55 w-r66"><?=$control_msg['title6']?></span>
			<div class="ub-f1 user-input">
				<span id="adres"><?= $sbinfo['register_address']?></span>
			</div>
			<?if (empty($code)) {?>
				<a href="<?= $this->url('pte_gb/director_address')?>?oid=<?= $oid?>&code=<?= $code?>" class="user-info-del ub ub-pac cff"><?=$control_msg['btn2']?></a>
			<?}else if (!empty($code)) {?>
				<?if(!empty($basicid)){?>
					<a href="<?= $this->url('pte_gb/director_address')?>?oid=<?= $oid?>&code=<?= $code?>&id=<?=$basicid?>" class="user-info-del ub ub-pac cff"><?=$control_msg['btn2']?></a>
				<?}else if(empty($basicid)){?>
					<a href="<?= $this->url('pte_gb/director_address')?>?oid=<?= $oid?>&code=<?= $code?>" class="user-info-del ub ub-pac cff"><?=$control_msg['btn1']?></a>
				<?}?>
			<?}?>
			
		</li>
	</ul>
	<div class="ptb50 mb40 plr30 font-upper">
		<?if (empty($code)) {?>
			<a href="javascript:void(0)" id="next" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_msg['btn5']?></a>
		<?}else if (!empty($code)) {?>
			<?if (empty($basicid)) {?>
				<a href="<?=$this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?=$control_msg['btn3']?></a>
			<?}else if (!empty($basicid)) {?>
				<a href="<?=$this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?=$code?>" id="off" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_msg['btn4']?></a>
			<?}?>
			
		<?}?>	
		
	</div>
</div>
<script>
	$(".header").addClass("user-hd");

	$('#next').on('click',function(){
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		var id = "<?=$basicid?>";
	
    tips('','','0',{
		type: "loading",
		cb: function() {
				$.ajax({
		        url:"<?=$this->url("pte_gb/control_msg_check")?>",
		        type:'post',
		        data:{oid:oid,code:code},
		        dataType:'json',
		        success:function(e){
		        	if (e.state == 0) {
			        		setTimeout(function(){
			        			 window.location.href="<?=$this->url("pte_gb/control_statement")?>?oid="+oid+'&code='+code;
			        		},2000)
		        		return false;
		        	}
		        	if (e.state == 1) {
						tips(e.info,'warning',1000);
		        	}
		        		
		        } 
		    })
		}
	})
})

</script>
