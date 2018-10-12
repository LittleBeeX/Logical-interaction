<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$control_statement['txt1']?></b>
	</div>

	<div class="c66 plr30 fz24 lh16 mt24">
		<?=$control_statement['txt2']?>
	</div>
	<div class="apply-toggle-box plr30 pt10">
		<div class="apply-toggle-main">
			<ul class="apply-reg-list fz26 c66 pt40 mt20">
				<li class="bb ub ub-ac">
					<div class="db"><?=$control_statement['txt3']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="apply_way" data-value="<?= $sbinfo['apply_way']?>"><?= $sbinfo['apply_way']?></div>
							<div class="select-list">
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$control_statement['txt4']?>"><?=$control_statement['txt4']?></div>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$control_statement['txt5']?>"><?=$control_statement['txt5']?></div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class=" plr30 apply-foot-submit font-upper">
	<?if(empty($code)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_statement['btn1']?></a>
	<?}else if(!empty($code)){?>
		<?if(!empty($id)){?>
			<a href="javascript:void(0)" id="btn"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_statement['btn3']?></a>
		<?}else if(empty($id)){?>
			<a href="<?=$this->url("pte_gb/order_show")?>?oid=<?=$oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?=$control_statement['btn2']?></a>
		<?}?>
	<?}?>
	</div>
</div>

<script>
	$(".header").addClass("user-hd");
	//展开收缩
	$(".apply-toggle-tit b").on("click", function() {
		$(this).parent().toggleClass("active");
		$(this).parent().siblings(".apply-toggle-main").stop().slideToggle(600)
	});
	$(".upload-in input[type=file]").change(function(e) {
		var file = $(this).get(0).files[0]
		var apendobj = $(this).parents(".upload-in").siblings(".upload-finished")
		imgView(file, apendobj)

	});
</script>

<script type="text/javascript">
	$('#btn').click(function(){
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		var id = "<?= $id?>";
		var apply_way = $('#apply_way').attr('data-value');
		tips('','','0',{
		type: "loading",
		cb: function() {
		if (apply_way == 0) {
			tips("<?=$control_statement['alert1']?>",'warning',1000);return false;
		}
		$.ajax({
        url:"<?=$this->url("pte_gb/control_statement_ajax")?>?oid="+oid,
        type:'post',
        data:{apply_way:apply_way,oid:oid},
        dataType:'json',
        success:function(e){
        	if(e.state == 0) {
        		tips(e.info,'success',2000);
        		setTimeout(function(){
        			 window.location.href="<?=$this->url("pte_gb/control_statement2")?>?oid="+oid+'&code='+code+'&id='+id;
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


	$('#upd').click(function(){
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		var apply_way = $('#apply_way').attr('data-value');
		if (apply_way == 0) {
			tips("<?=$control_statement['alert1']?>",'warning',1000);return false;
		}
		$.ajax({
        url:"<?=$this->url("pte_gb/control_statement_ajax")?>?oid="+oid,
        type:'post',
        data:{apply_way:apply_way},
        dataType:'json',
        success:function(e){
        	if(e.state == 0) {
        		tips(e.info,'success',2000);
        		setTimeout(function(){
        			window.location.href="<?=$this->url("pte_gb/order_show")?>?oid="+oid+'&code='+code;
        		},2000)
		        return false;
	        }
	        if(e.state == 1){
	        	tips(e.info,'warning',2000);
	        }	
        } 
    })
	})


</script>