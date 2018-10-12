<div class="pt110 plr30">
	<div class="littlebee-tit fz28 c28 pt30 ub ub-ac">
		<b class="fw-b"><?=$control_people['title1']?></b>
	</div>

	<div class="c66  fz24 lh16 mt24">
	<?=$control_people['title2']?>
	</div>
	<div class=" pt10">
		<div class="apply-toggle-main">
			<ul class="apply-reg-list fz26 c66 pt40 mt20">
				<li class="bb ub ub-ac">
					<div class="db"><?=$control_people['title3']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="box" data-value="0"></div>
							<div class="select-list">
								<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?=$control_people['title4']?></div>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="2"><?=$control_people['title5']?></div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<p class="fz26 mb20"><?=$control_people['title6']?></p>
	<ul class="service-list c66 fz22  mt10">
		<li class="mb10i">
			<label class="c28 ub ub-ac">
				<input type="checkbox" class="form-checkbox mr10 itemtop"/>
				<span class="c66 pl20"><?=$control_people['title7']?><b class="apply-change-item1 hidei"><?=$control_people['title8']?></b><?=$control_people['title9']?></span>
			</label>
		</li>
	</ul>
</div>
<div class="ptb50 mb40 plr30 apply-foot-submit font-upper">
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people['title10']?></a>
</div>
<script>
	$(".select-list .select-item").on("click", function() {
		var index = Number($(this).attr("data-value"));
		index==1?$('.apply-change-item1').addClass('hidei'):$('.apply-change-item1').removeClass('hidei')
	})
</script>
<script type="text/javascript">
$(".header").addClass("user-hd");
$('#btn').click(function(){
	var oid = "<?= $oid?>";
	var code = "<?= $code?>";
	var checks = $('#box').attr('data-value');
	if (checks == 0) {
		tips("<?=$control_people['title11']?>",'warning',1000);return false;
	}
	tips('','','0',{
		type: "loading",
		cb: function() {
			if($('.service-list input').prop('checked')){
				$.ajax({
					url:"<?=$this->url("pte_gb/control_people_ajax")?>",
			        type:'post',
			        data:{oid:oid,psc:checks,code:code},
			        dataType:'json',
			        success:function(e){
			        	if (e.state == 0) {
			        		if (e.nums == 1) {
			        			tips("<?=$control_people['title12']?>",'success',2000);
				        		setTimeout(function(){
				        			 window.location.href="<?=$this->url("pte_gb/control_people1")?>?oid="+oid+'&code='+code;
				        		},2000)
			        			return false;
			        		}else if(e.nums == 2){
			        			tips("<?=$control_people['title12']?>",'success',2000);
				        		setTimeout(function(){
				        			window.location.href="<?=$this->url("pte_gb/control_people2")?>?oid="+oid+'&code='+code;
				        		},2000)
			        			return false;	
			        		}
			        	}
			        	if(e.state == 1){
			        		tips(e.info,'warning',1000);
			        	}
			        	
			        } 
				})
			}else{
				tips("<?=$control_people['title13']?>",'warning',1000);
			}
		}
	})
})

</script>