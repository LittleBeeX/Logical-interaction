<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$control_personal['title1']?></b>
		<?if($ppp==3&&empty($return)){?>
		<span style="margin-left: 5%;" class="c-f76959 pr10"><?=$control['audit_note']?></span>
		<?}?>
	</div>
</div>
<div class="c66 plr30 fz24 lh16 mt24">
	<?=$control_personal['title2']?>
</div>
<div class="apply-toggle-box plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20" >
			<li>
				<label>
					<b><?=$control_personal['title3']?></b>
					<input type="text" reg="nomarl" id="name" value="<?=$control['name']?>" />
				</label>
				<p><span><?=$control_personal['title4']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$control_personal['title5']?></b>
					<input type="text" reg="nomarl" id="surname" value="<?=$control['surname']?>"/>
				</label>
				<p><span><?=$control_personal['title6']?></span></p>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?=$control_personal['title7']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="nation" data-value="<?=$control['nation']?>"><?=$control['nation']?></div>
						<div class="select-list">
						<?foreach ($phone_codes as $key_c => $value_c) {?>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_c['en']?>"><?=$value_c['en']?></div>
						<?}?>
						</div>
					</div>
				</div>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?=$control_personal['title8']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="nationality" data-value="<?=$control['nationality']?>"><?=$control['nationality']?></div>
						<div class="select-list">
						<?foreach ($phone_codes as $key_c => $value_c) {?>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_c['en']?>"><?=$value_c['en']?></div>
						<?}?>
						</div>
					</div>
				</div>
			</li>
			<li class="success">
				<label>
					<b><?=$control_personal['title9']?></b>
					<input type="text" reg="nomarl" id="date_birth" value="<?if(!empty($id)){echo date('Y-m-d',$control['date_birth']);}else if(empty($id)){echo '';}?>" onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})"  class="input-medium datepick valid Wdate" />
				</label>
				<p><span><?=$control_personal['title10']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$control_personal['title11']?></b><i class="apply-hint-tit btm" promptId="hint1"></i>
	</div>
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac" id="apply-change-item1">
				<div class="db"><?=$control_personal['title12']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" data-value="<?=$control['service_a']?>" id="service_a"><?=$control['service_a']?></div>
						<div class="select-list">
							<div class="select-item ub-te plr30 ub-ac ub" data-value="10"><?=$control_personal['title13']?></div>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="11"><?=$control_personal['title14']?></div>
						</div>
					</div>
				</div>
			</li>
			<li class="bb ub ub-ac apply-change-item1 hidei">
				<div class="db"><?=$control_personal['title15']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" data-value="<?=$control['nation_a']?>" id="nation_a"><?=$control['nation_a']?></div>
						<div class="select-list">
							<?foreach ($phone_codes as $key_c => $value_c) {?>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_c['en']?>"><?=$value_c['en']?></div>
							<?}?>
						</div>
					</div>
				</div>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$control_personal['title16']?></b>
					<input type="text" reg="nomarl" id="building_a" value="<?=$control['building_a']?>" />
				</label>
				<p><span><?=$control_personal['title17']?></span></p>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$control_personal['title18']?></b>
					<input type="text" reg="nomarl" id="address_a" value="<?=$control['address_a']?>" />
				</label>
				<p><span><?=$control_personal['title19']?></span></p>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$control_personal['title20']?></b>
					<input type="text" reg="nomarl" id="area_a" value="<?=$control['area_a']?>" />
				</label>
				<p><span><?=$control_personal['title21']?></span></p>
			</li>
		</ul>
	</div>
</div>

<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$control_personal['title22']?></b><i class="apply-hint-tit btm" promptId="hint2"></i>
	</div>
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac" id="apply-change-item2">
				<div class="db"><?=$control_personal['title23']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="service_b" data-value="<?=$control['service_b']?>"><?=$control['service_b']?></div>
						<div class="select-list">
							<div class="select-item ub-te plr30 ub-ac ub" data-value="20"><?=$control_personal['title24']?></div>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="21"><?=$control_personal['title25']?></div>
						</div>
					</div>
				</div>
			</li>
			<li class="bb ub ub-ac apply-change-item2 hidei">
				<div class="db"><?=$control_personal['title15']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="nation_b" data-value="nation_b"><?=$control['nation_b']?></div>
						<div class="select-list">
							<?foreach ($phone_codes as $key_c => $value_c) {?>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_c['en']?>"><?=$value_c['en']?></div>
							<?}?>
						</div>
					</div>
				</div>
			</li>
			<li class="apply-change-item2 hidei"> 
				<label>
					<b><?=$control_personal['title16']?></b>
					<input type="text" reg="nomarl" id="building_b" value="<?=$control['building_b']?>"/>
				</label>
				<p><span><?=$control_personal['title17']?></span></p>
			</li>
			<li class="apply-change-item2 hidei">
				<label>
					<b><?=$control_personal['title20']?></b>
					<input type="text" reg="nomarl" id="area_b" value="<?=$control['area_b']?>"/>
				</label>
				<p><span><?=$control_personal['title21']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$control_personal['title26']?></b>
	</div>
	<p class="mt30 c33 fz26"><?=$control_personal['title27']?></p>
	<ul class="service-list c66 fz22 mt10">
		<li class="mb10i">
			<label class="c28 ub ub-tc">
				<input type="checkbox" data-value="1" name="disclosure" class="form-checkbox itemtop mr10"<?if($control['disclosure']==1){echo 'checked="checked"';}?>/>
				<span class="c66 pl20" style="width: 94%;"><?=$control_personal['title28']?></span>
			</label>
		</li>
		<li class="mb10i">
			<label class="c28 ub ub-tc">
				<input type="checkbox" data-value="2" name="disclosure" class="form-checkbox itemtop mr10"<?if($control['disclosure']==2){echo 'checked="checked"';}?>/>
				<span class="c66 pl20" style="width: 94%;"><?=$control_personal['title29']?></span>
			</label>
		</li>
	</ul>
</div>
<div class="plr30 pt10 apply-toggle-box">
	<div class="pt10 apply-toggle-tit active">
		<b class="fw-b fz28 c28"><?=$control_personal['title30']?></b><i class="apply-hint-tit btm" promptId="hint3"></i>
	</div>
	<div class="apply-toggle-main" style="display: none;" id="conp">
	
	<?$mm = explode(",", $control['nature_control']);foreach ($conp as $k1 => $v1) {?>
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
			<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_personal['title31']?></a>
		<?}else if(!empty($code)){?>
			<?if(!empty($upd)){?>
				<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_personal['title31']?></a>
			<?}else if(empty($upd)){?>
				<?if(!empty($ppp)){?>
					<?if($ppp==1||$ppp==2){?>
						<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_personal['title31_1']?></a>
					<?}else if($ppp==3&&empty($return)){?>
						<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_personal['title31']?></a>
					<?}else if($ppp==3&&!empty($return)){?>
						<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_personal['title31_1']?></a>
					<?}?>
				<?}else if(empty($ppp)){?>
					<?if(!empty($det)){?>
						<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=<?=$code?>&det=<?=$det?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_personal['title31_1']?></a>
					<?}else if(empty($det)){?>
						<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_personal['title31']?></a>
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
				<h4 class="tx-c fz28 fw-b"><?=$control_personal['title32']?></h4>
				<p><?=$control_personal['title33_p1']?></p>
				<p><?=$control_personal['title33_p2']?></p>
				<p><?=$control_personal['title33_p3']?></p>
			</div>
		</div>			
	</div>		
</div>
<div class="alertDialog" id="hint2">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$control_personal['title34']?></h4>
				<p><?=$control_personal['title35_p1']?></p>
				<p><?=$control_personal['title35_p2']?></p>
				<p><?=$control_personal['title35_p3']?></p>
				<p><?=$control_personal['title35_p4']?></p>
			</div>
		</div>			
	</div>		
</div>
<div class="alertDialog" id="hint3">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$control_personal['title36']?></h4>
				<p><?=$control_personal['title37_p1']?></p>
				<p><?=$control_personal['title37_p2']?></p>
				<p><?=$control_personal['title37_p3']?></p>
			</div>
		</div>			
	</div>		
</div>
<script>
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


	$('input[name="disclosure"]').change(function(){
		if($(this).prop('checked')){
			$('input[name="disclosure"]').prop('checked',false);
			$(this).prop('checked',true)
		}
	})

	/*下拉框显隐*/
	$(".select-list .select-item").on("click", function() {
		var index = Number($(this).attr("data-value"));
		if(index){
			switch(index){
				case 10:
					$('.apply-change-item1').removeClass('hidei');
					$('.apply-change-item2').addClass('hidei');
					$('#apply-change-item2 .select-item').eq(1).removeClass('hidei');
					$('#apply-change-item2 .select-txt').text('').attr('data-value','');
					break;
				case 11:
					$('.apply-change-item1').addClass('hidei');
					$('.apply-change-item2').removeClass('hidei');
					$('#apply-change-item2 .select-txt').text("<?=$control_personal['title24']?>").attr('data-value',20);
					$('#apply-change-item2 .select-item').eq(1).addClass('hidei');
					break;
				case 20:
					$('.apply-change-item2').removeClass('hidei');
					break;
				case 21:
					$('.apply-change-item2').addClass('hidei');
					break;
			}
		}
		
	})
</script>

<script type="text/javascript">
var iid ="<?=$id?>";
if(iid!=''){
	$('.apply-reg-list li').addClass('success');
}
$(document).on('click','#btn',function(){
	var id = "<?=$id?>";
	var oid = "<?= $oid?>";
	var type = "<?= $type?>";
	var code = "<?= $code?>";
	var upd = "<?=$upd?>";
	var det = "<?=$det?>";
	var ppp = "<?=$ppp?>";
	var ret = "<?=$return?>";
	var surname = $('#surname').val();
	var name = $('#name').val();
	var nation = $('#nation').attr('data-value');
	var nationality = $('#nationality').attr('data-value');
	var date_birth = $('#date_birth').val();

	var service_a = $('#service_a').attr('data-value');
	var nation_a = $('#nation_a').attr('data-value');
	var building_a = $('#building_a').val();
	var address_a = $('#address_a').val();
	var area_a = $('#area_a').val();

	var service_b = $('#service_b').attr('data-value');
	var nation_b = $('#nation_b').attr('data-value');
	var building_b = $('#building_b').val();
	var area_b = $('#area_b').val();

	var disclosure = $("input[name='disclosure']:checked").attr('data-value');

	var nature_control = [];
	$('#conp ul').each(function(){
		var inputCheckedVal = $(this).find("input[name^='nature_control1']:checked");
		if(inputCheckedVal.length!=0){
			nature_control.push(Number(inputCheckedVal.val()))
		}else{
			nature_control.push(0)
		}
	})
	var data = {
		oid:oid,
		id:id,
		ppp:ppp,
		det:det,
		code:code,
		upd:upd,
		surname:surname,
		name:name,
		nation:nation,
		nationality:nationality,
		date_birth:date_birth,
		service_a:service_a,
		nation_a:nation_a,
		building_a:building_a,
		address_a:address_a,
		area_a:area_a,
		service_b:service_b,
		nation_b:nation_b,
		building_b:building_b,
		area_b:area_b,
		sort:3,
		type:type,
		disclosure:disclosure,
		nature_control:nature_control,
		return:ret,
	};
	
tips('','','0',{
		type: "loading",
		cb: function() {
	$.ajax({
        url:"<?=$this->url("pte_gb/control_personal_ajax")?>",
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
	        	tips(e.info,'warning',2000);
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