<div class="pt110">
		<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
			<b class="fw-b"><?=$ds_insert['title1']?></b>
			<?if($ppp==3&&empty($return)){?>
		<span style="margin-left: 5%;" class="c-f76959 pr10"><?=$sbinfo['audit_note']?></span>
		<?}?>
		</div>
	</div>
	<div class="c66 plr30 fz24 lh16 mt24"><?=$ds_insert['title1_msg']?></div>
	<div class="apply-toggle-box plr30 pt10">
		<div class="apply-toggle-main">
			<ul class="apply-reg-list fz26 c66 pt40 mt20">
				<li>
					<label>
						<b><?=$ds_insert['title2']?></b>
						<input type="text" reg="nomarl" id="name" value="<?= $sbinfo['name']?>"/>
					</label>
					<p><span><?=$ds_insert['title2_msg']?></span></p>
				</li>
				<li>
					<label>
						<b><?=$ds_insert['title3']?></b>
						<input type="text" reg="nomarl" id="surname"  value="<?= $sbinfo['surname']?>"/>
					</label>
					<p><span><?=$ds_insert['title3_msg']?></span></p>
				</li>
				
				<li class="bb ub ub-ac">
					<div class="db"><?=$ds_insert['title4']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="nation" data-value="<?= $sbinfo['nation']?>"><?= $sbinfo['nation']?></div>
							<div class="select-list">
							<?foreach ($phone_codes as $key_a => $value_a) {?>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $value_a['en']?>"><?=$value_a['en']?></div>
							<?}?>
						</div>
					</div>
				</li>
				
				<li class="bb ub ub-ac">
					<div class="db"><?=$ds_insert['title5']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="nationality" data-value="<?= $sbinfo['nationality']?>"><?= $sbinfo['nationality']?></div>
							<div class="select-list">
							<?foreach ($phone_codes as $key_b => $value_b) {?>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $value_b['en']?>"><?= $value_b['en']?></div>
							<?}?>
							</div>
						</div>
					</div>
				</li>
				
				<li>
					<label>
						<b><?=$ds_insert['title6']?></b>
						<input type="text" reg="nomarl" id="date_birth" value="<?if(!empty($id)){echo date('Y-m-d',$sbinfo['date_birth']);}else if(empty($id)){echo '';}?>" onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})"  class="input-medium datepick valid Wdate" />
					</label>
					<p><span><?=$ds_insert['title6_msg']?></span></p>
				</li>
				<li>
					<label>
						<b><?=$ds_insert['title7']?></b>
						<input type="text" reg="nomarl" id="profession"value="<?= $sbinfo['profession']?>" />
					</label>
					<p><span><?=$ds_insert['title7_msg']?></span></p>
				</li>
			</ul>
		</div>
	</div>
	<div class="plr30 pt10">
		<div class="pt10">
			<b class="fw-b fz28 c28"><?=$ds_insert['title8']?></b><i class="apply-hint-tit btm" promptId="hint1"></i>
		</div>
		<div class="apply-toggle-main">
			<ul class="apply-reg-list fz26 c66 pt40 mt20">
				<li class="bb ub ub-ac" id="apply-change-item1">
					<div class="db"><?=$ds_insert['title9']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="service_a" data-value="<?= $sbinfo['service_a']?>"><?= $sbinfo['service_a']?></div>
							<div class="select-list">
								<div class="select-item ub-te plr30 ub-ac ub" data-value="10"><?=$ds_insert['title10']?></div>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="11"><?=$ds_insert['title11']?></div>
							</div>
						</div>
					</div>
				</li>
				<li class="bb ub ub-ac apply-change-item1 hidei">
					<div class="db"><?=$ds_insert['title12']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="nation_a" data-value="<?= $sbinfo['nation_a']?>"><?= $sbinfo['nation_a']?></div>
							<div class="select-list">
								<?foreach ($phone_codes as $key_c => $value_c) {?>
									<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $value_c['en']?>"><?= $value_c['en']?></div>
								<?}?>
							</div>
						</div>
					</div>
				</li>
				<li class="apply-change-item1 hidei">
					<label>
						<b><?=$ds_insert['title13']?></b>
						<input type="text" reg="nomarl" id="building_a"  value="<?= $sbinfo['building_a']?>"/>
					</label>
					<p><span><?=$ds_insert['title13_msg']?></span></p>
				</li>
				<li class="apply-change-item1 hidei">
					<label>
						<b><?=$ds_insert['title14']?></b>
						<input type="text" reg="nomarl" id="address_a" value="<?= $sbinfo['address_a']?>" />
					</label>
					<p><span><?=$ds_insert['title14_msg']?></span></p>
				</li>
				<li class="apply-change-item1 hidei">
					<label>
						<b><?=$ds_insert['title15']?></b>
						<input type="text" reg="nomarl" id="area_a" value="<?= $sbinfo['area_a']?>" />
					</label>
					<p><span><?=$ds_insert['title15_msg']?></span></p>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="plr30 pt10">
		<div class="pt10">
			<b class="fw-b fz28 c28"><?=$ds_insert['title16']?></b><i class="apply-hint-tit btm" promptId="hint2"></i>
		</div>
		<div class="apply-toggle-main">
			<ul class="apply-reg-list fz26 c66 pt40 mt20">
				<li class="bb ub ub-ac" id="apply-change-item2">
					<div class="db"><?=$ds_insert['title17']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="service_b" data-value="<?= $sbinfo['service_b']?>"><?= $sbinfo['service_b']?></div>
							<div class="select-list">
								<div class="select-item ub-te plr30 ub-ac ub" data-value="20"><?=$ds_insert['title10']?></div>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="21"><?=$ds_insert['title11']?></div>
							</div>
						</div>
					</div>
				</li>
				<li class="bb ub ub-ac apply-change-item2 hidei">
					<div class="db"><?=$ds_insert['title12']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="nation_b" data-value="<?= $sbinfo['nation_b']?>"><?= $sbinfo['nation_b']?></div>
							<div class="select-list">
								<?foreach ($phone_codes as $key_d => $value_d) {?>
									<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value_d['en']?>"><?=$value_d['en']?></div>
								<?}?>
							</div>
						</div>
					</div>
				</li>
				<li class="apply-change-item2 hidei"> 
					<label>
						<b><?=$ds_insert['title13']?></b>
						<input type="text" reg="nomarl" id="building_b" value="<?= $sbinfo['building_b']?>"/>
					</label>
					<p><span><?=$ds_insert['title13_msg']?></span></p>
				</li>
				<li class="apply-change-item2 hidei">
					<label>
						<b><?=$ds_insert['title14']?></b>
						<input type="text" reg="nomarl" id="address_b" value="<?= $sbinfo['address_b']?>"/>
					</label>
					<p><span><?=$ds_insert['title14_msg']?></span></p>
				</li>
				<li class="apply-change-item2 hidei">
					<label>
						<b><?=$ds_insert['title15']?></b>
						<input type="text" reg="nomarl" id="area_b" value="<?= $sbinfo['area_b']?>"/>
					</label>
					<p><span><?=$ds_insert['title15_msg']?></span></p>
				</li>
			</ul>
		</div>
	</div>
	<ul class="service-list c66 fz22 plr30 mt10">
		<li class="mb10i">
			<label class="c28 ub ub-ac">
				<input type="checkbox" class="form-checkbox mr10"<?if(!empty($id)){echo 'checked="checked"';}?>/>
				<span class="c66 pl20"><?=$ds_insert['title18']?></span>
			</label>
		</li>
	</ul>
	<div class="ptb50 mb40 plr30 font-upper">
		<?if(empty($code)){?>
			<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_insert['submit1']?></a>
		<?}else if(!empty($code)){?>
			<?if(!empty($upd)){?>
				<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_insert['submit1']?></a>
			<?}else if(empty($upd)){?>
				<?if(!empty($ppp)){?>
					<?if($ppp==1||$ppp==2){?>
						<a href="<?=$this->url('pte_gb/ds_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_insert['submit2']?></a>
					<?}else if($ppp==3){?>
						<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_insert['submit1']?></a>
					<?}?>
				<?}else if(empty($ppp)){?>
					<?if(!empty($det)){?>
						<a href="<?=$this->url('pte_gb/ds_list')?>?oid=<?=$oid?>&code=<?=$code?>&det=<?=$det?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_insert['submit2']?></a>
					<?}?>
				<?}?>
				
			<?}?>
		<?}?>
		
		
	</div>
</div>
<div class="alertDialog" id="hint1">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$ds_insert['title19']?></h4>
				<p><?=$ds_insert['title19_msg_p1']?></p>
				<p><?=$ds_insert['title19_msg_p2']?></p>
				<p><?=$ds_insert['title19_msg_p3']?></p>
			</div>
		</div>			
	</div>		
</div>

<div class="alertDialog" id="hint2">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$ds_insert['title20']?></h4>
				<p><?=$ds_insert['title20_msg_p1']?></p>
				<p><?=$ds_insert['title20_msg_p2']?></p>
				<p><?=$ds_insert['title20_msg_p3']?></p>
			</div>
		</div>			
	</div>		
</div>

<script>
	$(".header").addClass("user-hd");
	//表单验证
	//提示弹窗
	
	$('.apply-hint-tit').on('click',function(){
		$('#'+$(this).attr('promptId')).addClass('active');
	})
	$('.alertDialog .tip-close').on('click',function(){
		$('.alertDialog').removeClass('active');
	})
	/*下拉框显隐*/
	$(".select-list .select-item").on("click", function() {
		var index = Number($(this).attr("data-value"));
		var txt1 = "<?=$ds_insert['title21']?>";
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
					$('#apply-change-item2 .select-txt').text(txt1).attr('data-value',20);
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
$('#btn').click(function(){
	var id = "<?= $id?>";
	var oid = "<?= $oid?>";
	var code = "<?= $code?>";
	var upd = "<?=$upd?>";
	var ppp = "<?=$ppp?>";
	var det = "<?=$det?>";
	var surname = $('#surname').val();
	var name = $('#name').val();
	var nation = $('#nation').attr('data-value');
	var nationality = $('#nationality').attr('data-value');
	var date_birth = $('#date_birth').val();
	var profession = $('#profession').val();

	var service_a = $('#service_a').attr('data-value');

	var nation_a = $('#nation_a').attr('data-value');
	var building_a = $('#building_a').val();
	var address_a = $('#address_a').val();
	var area_a = $('#area_a').val();

	var service_b = $('#service_b').attr('data-value');
	var nation_b = $('#nation_b').attr('data-value');
	var building_b = $('#building_b').val();
	var address_b = $('#address_b').val();
	var area_b = $('#area_b').val();
	var ttt = '<?=$ds_insert['title22']?>';
	tips('','','0',{
		type: "loading",
		cb: function() {
	if(!$('.service-list input').prop('checked')){
		tips(ttt,'warning',1000);
	}else{
		$.ajax({
	        url:'<?=$this->url("pte_gb/ds_insert_ajax")?>',
	        type:'post',
	        data:{
	        		id:id,
					oid:oid,
					surname:surname,
					name:name,
					nation:nation,
					nationality:nationality,
					date_birth:date_birth,
					profession:profession,
					service_a:service_a,
					nation_a:nation_a,
					building_a:building_a,
					address_a:address_a,
					area_a:area_a,
					service_b:service_b,
					nation_b:nation_b,
					building_b:building_b,
					address_b:address_b,
					area_b:area_b,
					upd:upd,
					det:det,
					code:code,
					ppp:ppp,
				},
	        dataType:'json',
	        success:function(e){
	        	if (e.state == 0) {
	        		tips(e.info,'success',1000);
	        		setTimeout(function(){
			           window.location.href=e.url;
			        },2000)
	        	}else{
	        		tips(e.info,'warning',1000);
	        	}
	        } 
	    })
	}
	} 
    	})
})

</script>