<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$share_shop_insert['title1']?></b>
		<?if($ppp==3&&empty($return)){?>
		<span style="margin-left: 5%;" class="c-f76959 pr10"><?=$info['audit_note']?></span>
		<?}?>
	</div>
</div>
<div class="c66 plr30 fz24 lh16 mt24"><?=$share_shop_insert['title2']?>
</div>
<div class="apply-toggle-box plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac">
				<div class="db"><?=$share_shop_insert['title3']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<?if (!empty($id)) {?>
							<div class="ub ub-ac" id="type" data-value="<?= $info['type']?>"><? if($info['type']==1){echo $share_shop_insert['title4'];}else{echo $share_shop_insert['title5'];}?></div>
						<?}else{?>
							<div class="select-txt ub ub-ac" id="type" data-value="<?= $info['type']?>"><? if($info['type']==1){echo $share_shop_insert['title4'];}else{echo $share_shop_insert['title5'];}?></div>
							<div class="select-list">
								<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?=$share_shop_insert['title4']?></div>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="2"><?=$share_shop_insert['title5']?></div>
							</div>
						<?}?>
					</div>
				</div>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$share_shop_insert['title6']?></b>
					<input type="text" reg="nomarl" class="name" value="<?=$info['name']?>" />
				</label>
				<p><span><?=$share_shop_insert['title7']?></span></p>
			</li>
			<li class="apply-change-item1 hidei">
				<label>
					<b><?=$share_shop_insert['title8']?></b>
					<input type="text" reg="nomarl" class="surname" value="<?=$info['surname']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title9']?></span></p>
			</li>
			<li class="apply-change-item2 hidei">
				<label>
					<b><?=$share_shop_insert['title10']?></b>
					<input type="text" reg="nomarl" id="enterprise_name" value="<?=$info['enterprise_name']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title11']?></span></p>
			</li>
			<li class="apply-change-item2 hidei">
				<label>
					<b><?=$share_shop_insert['title12']?></b>
					<input type="text" reg="nomarl" class="names" value="<?=$info['name']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title13']?></span></p>
			</li>
			<li class="apply-change-item2 hidei">
				<label>
					<b><?=$share_shop_insert['title14']?></b>
					<input type="text" reg="nomarl" class="surnames" value="<?=$info['surname']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title15']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$share_shop_insert['title16']?></b><i class="apply-hint-tit btm" promptId="hint1"></i>
	</div>
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac">
				<div class="db"><?=$share_shop_insert['title17']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="nation" data-value="<?=$info['nation']?>"><?=$info['nation']?></div>
						<div class="select-list">
							<?foreach ($phone_codes as $key => $val) {?>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $val['en']?>"><?= $val['en']?></div>
							<?}?>
						</div>
					</div>
				</div>
			</li>
			<li>
				<label>
					<b><?=$share_shop_insert['title18']?></b>
					<input type="text" reg="nomarl" id="building_a" value="<?=$info['building_a']?>" />
				</label>
				<p><span><?=$share_shop_insert['title19']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$share_shop_insert['title20']?></b>
					<input type="text" reg="nomarl" id="address_a" value="<?=$info['address_a']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title21']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$share_shop_insert['title22']?></b>
					<input type="text" reg="nomarl" id="area_a" value="<?=$info['area_a']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title23']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$share_shop_insert['title24']?></b><i class="apply-hint-tit btm" promptId="hint2"></i>
	</div>
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac">
				<div class="db"><?=$share_shop_insert['title25']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="shares" data-value="<?= $sbinfo[0]['currency_type']?>-<?= $sbinfo[0]['shares_type']?>"><?= $sbinfo[0]['currency_type']?>-<?= $sbinfo[0]['shares_type']?></div>
						<div class="select-list">
							<?php foreach ($sbinfo as $key => $val): ?>
								<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $val['currency_type']?>-<?= $val['shares_type']?>"><?= $val['currency_type']?>-<?= $val['shares_type']?></div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</li>
			<li>
				<label>
					<b><?=$share_shop_insert['title26']?></b>
					<input type="number" reg="number" id="number" value="<?=$info['number']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title27']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$share_shop_insert['title28']?></b>
					<input type="number" reg="number" id="has_pay" value="<?=$info['has_pay']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title29']?></span></p>
			</li>
			<li>
				<label>
					<b><?=$share_shop_insert['title30']?></b>
					<input type="number" reg="number" id="not_pay" value="<?=$info['not_pay']?>"/>
				</label>
				<p><span><?=$share_shop_insert['title31']?></span></p>
			</li>
		</ul>
	</div>
</div>

<div class="plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?=$share_shop_insert['title32']?></b><i class="apply-hint-tit btm" promptId="hint3"></i>
	</div>
	<ul class="apply-reg-list fz26 c66 pt40 mt20">
		<li>
			<label>
				<b><?=$share_shop_insert['title33']?></b>
				<input type="number" reg="number" id="mobile_three" value="<?=$info['mobile_three']?>"/>
			</label>
			<p><span><?=$share_shop_insert['title34']?></span></p>
		</li>
		<li>
			<label>
				<b><?=$share_shop_insert['title35']?></b>
				<input type="text" reg="nomarl" id="mother_name" value="<?=$info['mother_name']?>"/>
			</label>
			<p><span><?=$share_shop_insert['title36']?></span></p>
		</li>
		<li>
			<label>
				<b><?=$share_shop_insert['title37']?></b>
				<input type="text" reg="nomarl" id="father_name" value="<?=$info['father_name']?>"/>
			</label>
			<p><span><?=$share_shop_insert['title38']?></span></p>
		</li>
		<li>
			<label>
				<b><?=$share_shop_insert['title39']?></b>
				<input type="text" reg="nomarl" id="passport_three" value="<?=$info['passport_three']?>"/>
			</label>
			<p><span><?=$share_shop_insert['title40']?></span></p>
		</li>
	</ul>
	
	<p class="fz26 mb20 c66 apply-change-item2"><?=$share_shop_insert['title41']?></p>
	<ul class="service-list c66  mt10 apply-change-item2">
		<li class="mb10i">
			<label class="c28 ub ub-tc">
				<input type="checkbox" class="form-checkbox itemtop mr10"<?if(!empty($id)){echo 'checked="checked"';}?>/>
				<span class="c66 pl20 fz26 lh14">
					<?=$share_shop_insert['title42']?>
				</span>
			</label>
		</li>
	</ul>
	
</div>
<div class="ptb50 mb40 plr30 font-upper">

<?if(empty($code)){?>
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$share_shop_insert['title43']?></a>
<?}else if(!empty($code)){?>
	<?if(!empty($upd)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$share_shop_insert['title43']?></a>
	<?}else if(empty($upd)){?>
		<?if(!empty($ppp)){?>
			<?if($ppp==1||$ppp==2){?>
				<a href="<?=$this->url('pte_gb/share_shop_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$share_shop_insert['submit2']?></a>
			<?}else if($ppp==3&&empty($return)){?>
				<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$share_shop_insert['title43']?></a>
			<?}else if($ppp==3&&!empty($return)){?>
				<a href="<?=$this->url('pte_gb/share_shop_list')?>?oid=<?=$oid?>&code=<?=$code?>&ppp=<?=$ppp?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$share_shop_insert['submit2']?></a>
			<?}?>
		<?}else if(empty($ppp)){?>
			<?if(!empty($det)){?>
				<a href="<?=$this->url('pte_gb/share_shop_list')?>?oid=<?=$oid?>&code=<?=$code?>&det=<?=$det?>"  class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$share_shop_insert['submit2']?></a>
			<?}else if(empty($det)){?>
				<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$share_shop_insert['title43']?></a>
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
				<h4 class="tx-c fz28 fw-b"><?=$share_shop_insert['title44']?></h4>
				<p><?=$share_shop_insert['title45']?></p>
			</div>
		</div>			
	</div>		
</div>
<div class="alertDialog" id="hint2">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$share_shop_insert['title46']?></h4>
				<p><?=$share_shop_insert['title47']?></p>
			</div>
		</div>			
	</div>		
</div>
<div class="alertDialog" id="hint3">			
	<div class="tips-main promptWrap">				
		<div class="tips-in">	
			<i class="tip-close iconfont icon-error c-red fz20"></i>
			<div>
				<h4 class="tx-c fz28 fw-b"><?=$share_shop_insert['title48']?></h4>
				<p><?=$share_shop_insert['title49_p1']?></p>
				<p><?=$share_shop_insert['title49_p2']?></p>
				<p><?=$share_shop_insert['title49_p3']?></p>
				<p><?=$share_shop_insert['title49_p4']?></p>
			</div>
		</div>			
	</div>		
</div>

<script type="text/javascript">
	var iid ="<?=$id?>";
	if(iid!=''||$('#has_pay').val()!=''||$('#not_pay').val()!=''){
		$('.apply-reg-list li').addClass('success');
	}
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
		if(index){
			var $item1 = $('.apply-change-item1');
			var $item2 = $('.apply-change-item2');
			switch(index){
				case 1:
					$item1.removeClass('hidei');
					$item2.addClass('hidei');
					break;
				case 2:
					$item1.addClass('hidei');
					$item2.removeClass('hidei');
					break;
			}
		}
		
	})
	
	





$('#btn').on('click',function(){
	var changeSelect = $('.service-list input').prop('checked');
	var oid = "<?= $oid?>";
	var id = "<?= $id?>";
	var code = "<?= $code?>";
	var upd = "<?= $upd?>";
	var ppp = "<?= $ppp?>";
	var ret = "<?=$return?>";
	var type = $('#type').attr('data-value');
	var nation = $('#nation').attr('data-value');
	var shares = $('#shares').attr('data-value');
	var name = $('.name').val();
	var surname = $('.surname').val();
	var names = $('.names').val();
	var surnames = $('.surnames').val();
	var enterprise_name = $('#enterprise_name').val();
	var building_a = $('#building_a').val();
	var address_a = $('#address_a').val();
	var area_a = $('#area_a').val();
	var number = $('#number').val();
	var has_pay = $('#has_pay').val();
	var not_pay = $('#not_pay').val();
	var mobile_three = $('#mobile_three').val();
	var mother_name = $('#mother_name').val();
	var father_name = $('#father_name').val();
	var passport_three = $('#passport_three').val();
	// if (type == '') {
	// 	tips('<?=$share_shop_insert['title50']?>','warning',2000);return false;
	// }
	var data = {
		id:id,
		oid:oid,
		type:type,
		upd:upd,
		ppp:ppp,
		return:ret,
		code:code,
		nation:nation,
		shares:shares,
		name:name,
		surname:surname,
		names:names,
		surnames:surnames,
		enterprise_name:enterprise_name,
		building_a:building_a,
		address_a:address_a,
		area_a:area_a,
		number:number,
		has_pay:has_pay,
		not_pay:not_pay,
		mobile_three:mobile_three,
		mother_name:mother_name,
		father_name:father_name,
		passport_three:passport_three,
		changeSelect:changeSelect
	}
	// console.log(data);return false;
	tips('','','0',{
		type: "loading",
		cb: function() {
	$.ajax({
        url:'<?=$this->url("pte_gb/equity_shop_ajax")?>',
        type:'post',
        data:data,
        dataType:'json',
        success:function(e){
        	if(e.state == 0) {
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
