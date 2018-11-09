<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$control_company['txt1']?></b>
		<?if($ppp==3&&empty($return)){?>
		<span style="margin-left: 5%;" class="c-f76959 pr10"><?=$control['audit_note']?></span>
		<?}?>
	</div>
</div>
<div class="c66 plr30 fz24 lh16 mt24">
	<?=$control_company['txt2']?>
</div>
<div class="apply-toggle-box plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li>
				<label>
					<b><?=$control_company['txt3']?></b>
					<input type="text" reg="nomarl" id="enterprise_name" value="<?=$control['enterprise_name']?>" />
				</label>
				<p><span><?=$control_company['txt4']?></span></p>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?=$control_company['txt5']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="nation" data-value="<?= $control['nation']?>"><?= $control['nation']?></div>
						<div class="select-list">
							<?foreach ($phone_codes as $key_c => $value_c) {?>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_c['en']?>"><?=$value_c['en']?></div>
							<?}?>
						</div>
					</div>
				</div>
			</li>
			<li>
				<label>
					<b><?=$control_company['txt6']?></b>
					<input type="text" reg="nomarl" id="building_a" value="<?=$control['building_a']?>"/>
				</label>
				<p><span><?=$control_company['txt7']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$control_company['txt8']?></b>
					<input type="text" reg="nomarl" id="address_a" value="<?=$control['address_a']?>"/>
				</label>
				<p><span><?=$control_company['txt9']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$control_company['txt10']?></b>
					<input type="text" reg="nomarl" id="area_a" value="<?=$control['area_a']?>"/>
				</label>
				<p><span><?=$control_company['txt11']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$control_company['txt12']?></b><i class="apply-hint-tit btm" promptId="hint1"></i>
	</div>
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li>
				<label>
					<b><?=$control_company['txt13']?></b>
					<input type="text" reg="nomarl" id="legal_form" value="<?=$control['legal_form']?>"/>
				</label>
				<p><span><?=$control_company['txt14']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$control_company['txt15']?></b>
					<input type="text" reg="nomarl" id="tube_legal" value="<?=$control['tube_legal']?>"/>
				</label>
				<p><span><?=$control_company['txt16']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$control_company['txt17']?></b>
					<input type="text" reg="nomarl" id="registration_code" value="<?=$control['registration_code']?>"/>
				</label>
				<p><span><?=$control_company['txt18']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="plr30 pt10 apply-toggle-box">
	<div class="pt10 apply-toggle-tit active">
		<b class="fw-b fz28 c28"><?=$control_company['txt19']?></b><i class="apply-hint-tit btm" promptId="hint3"></i>
	</div>
	<div class="apply-toggle-main" id="conc">
		<?$mm = explode(",", $control['nature_control']);foreach ($conc as $k1 => $v1) {?>
		<p class="mt30 mb20 c00 fz26"><?=$v1['name']?></p>
		<ul class=" c66 fz22 mt10">
		<?foreach ($v1['list'] as $k2 => $v2) {?>
			<li class="mb20">
				<label class="c28 ub ub-tc">
					<input type="radio" name="nature_control1['<?=$k1?>']" value="<?=$k2?>" 
					<?foreach ($mm as $k3 => $v3) {
						if($k3==$k1){
							if($v3==$k2){
								echo 'checked="checked"';
							}
						}
					}?>
					class="form-checkbox itemtop mr10"/>
					<span class="c66 pl20 fz26" style="width:94%"><?=$v2?></span>
				</label>
			</li>
			
		<?}?>
		</ul>

	<?}?>
	</div>
</div>

<div class="ptb50 mb40 plr30 font-upper">
	<?if(empty($code)){?>
			<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_company['txt20']?></a>
		<?}else if(!empty($code)){?>
			<?if(!empty($upd)){?>
				<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_company['txt20']?></a>
			<?}else if(empty($upd)){?>
				<?if(!empty($ppp)){?>
					<?if($ppp==1||$ppp==2){?>
						<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_company['txt20_1']?></a>
					<?}else if($ppp==3&&empty($return)){?>
						<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_company['txt20']?></a>
					<?}else if($ppp==3&&!empty($return)){?>
						<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_company['txt20_1']?></a>
					<?}?>
				<?}else if(empty($ppp)){?>
					<?if(!empty($det)){?>
						<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=<?=$code?>&det=<?=$det?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_company['txt20_1']?></a>
					<?}else if(empty($det)){?>
						<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_company['txt20']?></a>
					<?}?>
				<?}?>
				
			<?}?>
		<?}?>
</div>

<div class="alertDialog" id="hint1">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$control_company['txt21']?></h4>
				<p><?=$control_company['txt22_p1']?></p>
				<p><?=$control_company['txt22_p2']?></p>
				<p><?=$control_company['txt22_p3']?></p>
			</div>
		</div>			
	</div>		
</div>
<div class="alertDialog" id="hint3">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$control_company['txt23']?></h4>
				<p><?=$control_company['txt24_p1']?></p>
				<p><?=$control_company['txt24_p2']?></p>
				<p><?=$control_company['txt24_p3']?></p>
			</div>
		</div>			
	</div>		
</div>

<script>
	var iid ="<?=$id?>";
	if(iid!=''){
		$('.apply-reg-list li').addClass('success');
	}
	$(".header").addClass("user-hd");
	//展开收缩
	$(".apply-toggle-tit b").on("click", function() {
		$(this).parent().toggleClass("active");
		$(this).parent().siblings(".apply-toggle-main").stop().slideToggle(600)
	});
	
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
	var id = "<?=$id?>";
	var oid = "<?= $oid?>";
	var type = "<?= $type?>";
	var code = "<?= $code?>";
	var upd = "<?=$upd?>";
	var det = "<?=$det?>";
	var ppp = "<?=$ppp?>";
	var ret = "<?=$return?>";
	var enterprise_name = $('#enterprise_name').val();
	var nation = $('#nation').text();

	var building_a = $('#building_a').val();
	var address_a = $('#address_a').val();
	var area_a = $('#area_a').val();
	var legal_form = $('#legal_form').val();
	var tube_legal = $('#tube_legal').val();
	var registration_code = $('#registration_code').val();


	var nature_control = [];
	$('#conc ul').each(function(){
		var inputCheckedVal = $(this).find("input[name^='nature_control1']:checked");
		if(inputCheckedVal.length!=0){
			nature_control.push(Number(inputCheckedVal.val()))
		}else{
			nature_control.push(0)
		}
	})


	var data = {
		id:id,
		oid:oid,
		ppp:ppp,
		det:det,
		code:code,
		upd:upd,
		enterprise_name:enterprise_name,
		nation:nation,
		building_a:building_a,
		address_a:address_a,
		area_a:area_a,
		legal_form:legal_form,
		tube_legal:tube_legal,
		registration_code:registration_code,
		nature_control:nature_control,
		sort:3,
		type:type,
		return:ret,
	};
	tips('','','0',{
		type: "loading",
		cb: function() {
				$.ajax({
			        url:"<?=$this->url("pte_gb/control_company_ajax")?>?oid="+oid,
			        type:'post',
			        data:data,
			        dataType:'json',
			        success:function(e){
			        	if (e.state == 0) {
			        		tips(e.info,'success',2000);
			        		setTimeout(function(){
			        			window.location.href=e.url;
			        		},2000)
					        return false;
			        	}
			        	if(e.state == 1){
			        		tips(e.info,'warning',1000);
			        	}
			        	
			        } 
			    })
			}

		})




	



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