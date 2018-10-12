<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$control_people1['title1']?></b>
	</div>
	<div class="c66 plr30 fz24 lh16 mt24">
	             <?=$control_people1['title2']?>
	</div>
	
	<div class="fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$control_people1['title3']?></b><i class="apply-hint-tit" promptid="hint1"></i>
	</div>
	<ul class="apply-reg-list fz26 c66 plr30 pt40 mt30">
		<li class="bb ub ub-ac">
			<div class="db"><?=$control_people1['title4']?></div>
			<div class="ub-f1 ml30">
				<div class="selectbox">
					<div class="select-txt ub ub-ac" id="type" data-value="0"></div>
					<div class="select-list">
						<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?=$control_people1['title5']?></div>
						<div class="select-item ub-te plr30 ub-ac ub" data-value="2"><?=$control_people1['title6']?></div>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="ptb50 mb40 plr30 apply-foot-submit font-upper">
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people1['title7']?></a>
	</div>
</div>
<div class="alertDialog" id="hint1">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$control_people1['title8']?></h4>
				<p><?=$control_people1['title9']?></p>
			</div>
		</div>			
	</div>		
</div>
<script type="text/javascript">
$(".header").addClass("user-hd");
$('#btn').on('click',function(){
	var oid = "<?= $oid?>";
	var code = "<?= $code?>";
	var upd = "<?= $upd?>";
	var ppp = "<?= $ppp?>";
	var det = "<?= $det?>";
	var id = "<?= $id?>";
	var type = $('#type').attr('data-value');
	tips('','','0',{
		type: "loading",
		cb: function() {
			if (type == 0) {
				tips("<?=$control_people1['title10']?>",'warning',2000);
				return false;
			}
			if (type == 1) {
				tips("<?=$control_people1['title11']?>",'success',2000);
				setTimeout(function(){
					window.location.href="<?= $this->url('pte_gb/control_personal')?>?oid="+oid+'&type='+type+'&code='+code+'&upd='+upd+'&ppp='+ppp+'&det='+det;
				},2000)
				return false;
			}else if(type == 2){
				tips("<?=$control_people1['title11']?>",'success',2000);
				setTimeout(function(){
					window.location.href="<?= $this->url('pte_gb/control_company')?>?oid="+oid+'&type='+type+'&code='+code+'&upd='+upd+'&ppp='+ppp+'&det='+det;
				},2000)
				return false;
			}
		}
	})
})
//提示弹窗
$('.apply-hint-tit').click(function(){
	$('#'+$(this).attr('promptId')).addClass('active');
})
$('.alertDialog .tip-close').click(function(){
	$('.alertDialog').removeClass('active');
})

</script>
<script type="text/javascript">
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