<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$ms_insert['text1_a']?></b>
		<?if($ppp==3&&empty($return)){?>
		<span style="margin-left: 5%;" class="c-f76959 pr10"><?=$ms['audit_note']?></span>
		<?}?>
	</div>
</div>
<div class="c66 plr30 fz24 lh16 mt24">
<?if (empty($code)) {?>
	<?=$ms_insert['text2']?><a class="c-f76959" href="<?= $this->url('pte_gb/equity_insert')?>?oid=<?= $oid?>&code="><?=$ms_insert['text3']?></a>
<?}?>
</div>
<div class="apply-toggle-box plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li>
				<label>
					<b><?=$ms_insert['name']?></b>
					<input type="text" reg="nomarl" id="name" value="<?=$ms['name']?>" />
				</label>
				<p><span><?=$ms_insert['name_span']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$ms_insert['surname']?></b>
					<input type="text" reg="nomarl" id="surname" value="<?=$ms['surname']?>" />
				</label>
				<p><span><?=$ms_insert['surname_span']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$ms_insert['text4']?></b><i class="apply-hint-tit btm" promptId="hint1"></i>
	</div>
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac">
				<div class="db"><?=$ms_insert['text5']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="service_a" data-value="<?=$ms['service_a']?>"><?=$ms['service_a']?></div>
						<div class="select-list">
							<div class="select-item ub-te plr30 ub-ac ub" data-value="0"><?=$ms_insert['text6']?></div>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?=$ms_insert['text7']?></div>
						</div>
					</div>
				</div>
			</li>
			<li class="bb ub ub-ac apply-change-item1 hidei">
				<div class="db"><?=$ms_insert['nation_a']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="nation_a" data-value="<?= $phone_codes[1]['en']?>"><?=$ms['nation_a']?></div>
						<div class="select-list">
							<?foreach ($phone_codes as $key => $value) {?>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $value['en']?>"><?= $value['en']?></div>
							<?}?>
						</div>
					</div>
				</div>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$ds_insert['title13']?></b>
					<input type="text" reg="nomarl" id="building_a" value="<?=$ms['building_a']?>" />
				</label>
				<p><span><?=$ds_insert['title13_msg']?></span></p>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$ds_insert['title14']?></b>
					<input type="text" reg="nomarl" id="address_a" value="<?=$ms['address_a']?>" />
				</label>
				<p><span><?=$ds_insert['title14_msg']?></span></p>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$ds_insert['title15']?></b>
					<input type="text" reg="nomarl" id="area_a" value="<?=$ms['area_a']?>" />
				</label>
				<p><span><?=$ds_insert['title15_msg']?></span></p>
			</li>
		</ul>
	</div>
</div>


<ul class="service-list c66 fz22 plr30 mt10">
	<li class="mb10i">
		<label class="c28 ub ub-ac">
			<input type="checkbox" class="form-checkbox itemtop mr10"<?if(!empty($id)){echo 'checked="checked"';}?>/>
			<span class="c66 pl20"><?= $ms_insert['ms_insert_span']?></span>
		</label>
	</li>
</ul>

<div class="ptb50 mb40 plr30 font-upper">
<?if(empty($code)){?>
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ms_insert['submit1']?></a>
<?}else if(!empty($code)){?>
	<?if(!empty($upd)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ms_insert['submit1']?></a>
	<?}else if(empty($upd)){?>
		<?if(!empty($ppp)){?>
			<?if($ppp==1||$ppp==2){?>
				<a href="<?=$this->url('pte_gb/ms_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ms_insert['submit2']?></a>
			<?}else if($ppp==3){?>
				<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ms_insert['submit1']?></a>
			<?}?>
		<?}else if(empty($ppp)){?>
			<?if(!empty($det)){?>
				<a href="<?=$this->url('pte_gb/ms_list')?>?oid=<?=$oid?>&code=<?=$code?>&det=<?=$det?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ms_insert['submit2']?></a>
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
				<h4 class="tx-c fz28 fw-b"><?=$ms_insert['text4_title']?></h4>
				<p><?=$ms_insert['text4_prompt']?></p>
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
	
	/*下拉框显隐*/
	$(".select-list .select-item").on("click", function() {
		var index = Number($(this).attr("data-value"));
		if(index==0){
			$('.apply-change-item1').removeClass('hidei')
		}else if(index == 1){
			$('.apply-change-item1').addClass('hidei')
		}
	})
</script>
<script type="text/javascript">
var iid ="<?=$id?>";
if(iid!=''){
	$('.apply-reg-list li').addClass('success');
}
$('#btn').on('click',function(){
	tips('','','0',{
		type: "loading",
		cb: function() {
	if($('.service-list input').prop('checked')){
		var id = "<?= $id?>";
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		var upd = "<?=$upd?>";
		var ppp = "<?=$ppp?>";
		var det = "<?=$det?>";
		var surname = $('#surname').val();
		var name = $('#name').val();
		var service_a = $('#service_a').attr('data-value');
		var nation_a = $('#nation_a').attr('data-value');
		var building_a = $('#building_a').val();
		var address_a = $('#address_a').val();
		var area_a = $('#area_a').val();
		var data = {
			id:id,
			oid:oid,
			surname:surname,
			name:name,
			service_a:service_a,
			nation_a:nation_a,
			building_a:building_a,
			address_a:address_a,
			area_a:area_a,
			sort:1,
			type:2,
			upd:upd,
			det:det,
			code:code,
			ppp:ppp,
		};
	
	
		$.ajax({
	        url:'<?=$this->url("pte_gb/ms_ajax")?>?oid='+oid,
	        type:'post',
	        data:data,
	        dataType:'json',
	        success:function(e){
	        	if (e.state == 0) {
	        		tips("<?=$ms_insert['info3']?>",'success',2000);
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
	}else{
		tips("<?= $ms_insert['ms_insert_span_ajax']?>",'warning',1000);
	}
	}
})
})
</script>