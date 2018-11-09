<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$director_address['txt1']?></b>
	</div>
<div class="c66 plr30 fz24 lh16 mt24">
	<?=$director_address['txt2']?>
</div>
<div class="apply-toggle-box plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac">
				<div class="db"><?=$director_address['txt3']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="register_address" data-value="<?= $sbinfo['register_address']?>"><?= $sbinfo['register_address']?></div>
						<div class="select-list">
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$director_address['txt4']?>"><?=$director_address['txt4']?></div>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$director_address['txt5']?>"><?=$director_address['txt5']?></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

<div class=" plr30 apply-foot-submit font-upper">
<?if (empty($code)) {?>
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$director_address['btn1']?></a>
<?}else if(!empty($code)){?>
	<?if(!empty($id)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$director_address['btn1']?></a>
	<?}else if(empty($id)){?>
		<a href="<?=$this->url("pte_gb/control_msg")?>?oid=<?=$oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?=$director_address['btn2']?></a>
	<?}?>
<?}?>	
</div>
</div>



<script type="text/javascript">
	$(".header").addClass("user-hd");
	$('#btn').on('click',function(){
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		var id = "<?=$id?>";
		var register_address = $('#register_address').attr('data-value');
		tips('','','0',{
		type: "loading",
		cb: function() {
		if (register_address == 0) {
			tips("<?=$director_address['alert1']?>",'warning',1000);return false;
		}
		$.ajax({
        url:'<?=$this->url("pte_gb/director_address_ajax")?>?oid='+oid,
        type:'post',
        data:{register_address:register_address,oid:oid,code:code},
        dataType:'json',
        success:function(e){
        	if(e.state == 0) {
        		tips(e.info,'success',2000);
        		setTimeout(function(){
        			window.location.href='<?=$this->url("pte_gb/control_msg")?>?oid='+oid+'&code='+code+'&id='+id;
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





</script>