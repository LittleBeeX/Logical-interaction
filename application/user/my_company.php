<div class="pt110">
	<ul class="my-order fz24 c66 pb20">
<?if (!empty($order)) {?>
	<?foreach ($order as $key => $value) {?>
		<li class="bgff ptb24 plr30 mb24">
			<div class="ub pt10">
				<div class="ub ub-f1 ub-te mr20">
					<?= $my_company['type']?>
				<?if ($value['country'] == 1) {
					if ($value['type'] == 1) {
						echo $my_company['type1'];
					}else{
						echo $my_company['type2'];
					}
				}else if($value['country'] == 2){
					echo $my_company['type3'];
				}else if($value['country'] == 3){
					echo $my_company['type4'];
				}else if($value['country'] == 4){
					echo $my_company['type5'];
				}?>
				</div>
<?php
$pays = '';
//判断是否上传个人资料
$pho = '';
//计算董事和股东的数量
$dir = 0;
$mem = 0;
//是否勾选服务
$pro = '';   //if  pro = 1 通过验证  pro = '' 不通过
//psc  1 至少有一个psc  2 可以没有
$psc = '';
//country 1 新加坡  2英国
if ($value['country'] ==1 || $value['country']==3 || $value['country']==4) {
	$xjppaysql = "SELECT order_list.state,register_people.audit_state,register_people.audit_img_state FROM order_list inner join register_people on order_list.oid=register_people.oid  WHERE register_people.state != 2 and order_list.oid=".$value['id'];
	$pay = $this->order->listModel->fetchAll($xjppaysql);
	//判断是否添加人员
	$peosql = "SELECT id,passport,card_a,card_b,type FROM register_people where state != 2 and oid=".$value['id'];
	$xjppeo = $this->register->peopleModel->fetchAll($peosql);
	foreach ($xjppeo as $key => $val) {
		$pho = (empty($val['passport']) ||  empty($val['card_a']) || empty($val['card_b'])) ? '' : 1; 
		if ($val['type'] == 1 || $val['type'] == 3) {
			$dir += 1;
		}
		if($val['type'] == 2 || $val['type'] == 3) {
			$mem += 1;
		} 
	}
	//type = 1  勾选服务  1董事1成员   否 2董事1成员
	if ($value['type'] == 1) {
		if (strstr($value['project'],'4')) {
			if($dir < 1 || $mem < 1){
				$pro = '';
			}else{
				$pro = 1;
			}
		}else{
			if($dir < 2 || $mem < 1){
				$pro = '';
			}else{
				$pro = 1;
			}
		}
		//type = 2  勾选服务  0董事1成员   否 1董事1成员
	}else if($value['type'] == 2){
		if (strstr($value['project'],'9')) {
			if($mem < 1){
				$pro = '';
			}else{
				$pro = 1;
			}
		}else{
			if($dir < 1 || $mem < 1){
				$pro = '';
			}else{
				$pro = 1;
			}
		}
	}
}else if($value['country'] ==2){
	//订单
	$gbrpaysql = "SELECT order_list.state,register_order.audit_state FROM order_list inner join register_order on order_list.oid=register_order.id WHERE order_list.oid=".$value['id'];
	$pay = $this->order->listModel->fetchAll($gbrpaysql);
	//判断是否添加人员
	$peosql = "SELECT id,audit_state from register_member where sort = 1 and type in(1,2) and state = 1 and oid=".$value['id'];
	$gbrpeo = $this->register->memberModel->fetchAll($peosql);
	$gbrsta = '';
	foreach ($gbrpeo as $key => $val) {
		$gbrsta .=  $val['audit_state'];
	}
	//判断是否添加股本  psc  1 至少有一个psc  2 可以没有  判断是否有信息留存 register_directors register_address
	$bsql = "SELECT id,psc,register_directors,register_address,apply_way,number from register_basic where oid=".$value['id'];
	$gbrb = $this->register->basicModel->fetchRow($bsql);
	$peoplsql = "SELECT id,number from register_member where sort = 3 and state = 1 and oid=".$value['id'];
	$peopl = $this->register->memberModel->fetchAll($peoplsql);

	if ($gbrb['psc'] == 1) {
		if (count($peopl)) {
			$psc = '';
		}else{
			$psc = 1;
		}
	}else{
		$psc = 1;
	}
	//判断所有的股份是否分出
	$sum = 0;
	$gosql = "SELECT id,number from register_member where sort = 2 and state = 1 and oid=".$value['id'];
	$go = $this->register->memberModel->fetchAll($gosql);
	if (!empty($go)) {
		foreach ($go as $key => $val) {
			$sum += $val['number'];
		}
	}
	//判断是否有信息留存 register_directors register_address
	$msg = '';
	$msg = empty($gbrb['register_directors']) ||  empty($gbrb['register_address']) ? '' : 1; 
	//判断是否添加符合性声明apply_way
	$apply_way = '';
	$apply_way = empty($gbrb['apply_way']) ? '' : 1; 
	//判断是否添加经营范围
	$scopesql = "SELECT id from register_scope_business where oid=".$value['id'];
	$gbrscope = $this->register->scope_businessModel->fetchAll($scopesql);
}

if ($value['country'] == 1 || $value['country'] == 3 || $value['country'] == 4) {
	if (empty($pay) || empty($pro) || empty($pho)) {
		$pays = $my_company['msg'];
	}else{
		$imgsta = '';
		$peosta = '';
		foreach ($pay as $k => $val) {
			$imgsta .= ','.$val['audit_img_state'];
			$peosta .= ','.$val['audit_state'];
		}
		if ($val['state'] == 1) {
			$pays = $my_company['msg4'];
		}else if($val['state'] == 2){
			if((strpos($imgsta,'3') != false) || (strpos($peosta,'3') != false)){
				$pays = $my_company['msg1'];
			}else{
				$pays = $my_company['msg2'];
			}
		}else if($val['state'] == 3){
			$pays = $my_company['msg3'];
		}
	}
}else if($value['country'] == 2){
	if (empty($pay) || empty($gbrpeo) || empty($gbrscope) || empty($gbrb) || empty($psc) || empty($msg) || empty($apply_way) || ($sum != $gbrb['number'])) {
		$pays = $my_company['msg'];
	}else{
		foreach ($pay as $k => $val) {
			if($val['state'] == 1) {
				$pays = $my_company['msg4'];
			}else if($val['state'] == 2){
				if($val['audit_state'] == 3 || strstr($gbrsta,'3')){
					$pays = $my_company['msg1'];
				}else{
					$pays = $my_company['msg2'];
				}
			}else if($val['state'] == 3){
				$pays = $my_company['msg3'];
			}
		}
	}
}

if($value['state'] == 6 and $val['state'] == 2){
	$pays = $my_company['msg5'];
}
?>
				<div class="<?if($pays == $my_company['msg4']){echo "c-f76959";}else if($pays == $my_company['msg1']){echo "c-f76959";}else if($pays == $my_company['msg']){echo "c-f76959";}else if($pays == $my_company['msg3']){echo "c-f76959";}?>"><?=$pays?></div>
			</div>

			<div class="bb c28 lh16 pt30 pb20 word-break c28">
				<?= $my_company['name']?>
				<?echo str_replace('@','&nbsp;',$value['name']);?>
			</div>
			<p class="word-break lh14 ptb20">
				<?if ($value['country'] == 1) {
					if ($value['type'] == 1) {
						echo $my_company['time1'];
					}else{
						echo $my_company['time2'];
					}
				}else if($value['country'] == 2 || $value['country'] == 3 || $value['country'] == 4){
					echo $my_company['time2'];
				}?>
			</p>
			<div class="tx-r pt20">
				<?if ($pays == $my_company['msg3'] || $pays == $my_company['msg2'] || $pays == $my_company['msg3'] || $pays == $my_company['msg1']) {?>
			   		<a href="javascript:void(0)" class="ptb20 plr50 dib c66 bgf2f2f4 ml20"><?= $my_company['msg6']?></a>	
			   	<?}else if($pays == $my_company['msg4']){?>
			   		<a href='<?= $this->url('order/sel_pay')?>?oid=<?= $value['id']?>' class='ptb20 plr50 dib cff bgf76959 ml20'><?= $my_company['pay']?></a>
			   	<?}else if($pays == $my_company['msg']){?>
			   		<a id="btntt" date-id='<?= $value['id']?>' class="removeBtn  ptb20 plr50 dib cff bgf76959 ml20"><?= $my_company['del']?></a>
			   	<?}?>
				<a href="javascript:void(0)" id="sel" data-type="<?=$value['type']?>" data-country="<?=$value['country']?>" data-id="<?=$value['id']?>" class="ptb20 plr50 dib cff bg0070ba ml20"><?= $my_company['see']?></a>
			</div>
		</li>
	<?}?>
<?}?>
	</ul>
			
		
	<?if(empty($order)){?>
		<div class="noneDateMsg" style="display: block;">
		<img src="/public/assets/weixin/images/no-date.png" alt="" />
		<p class="c-afafaf  fz28 mt50 pt80"><?= $my_company['litt']?></p>
		<div class="w100">
			<a href="<?= $this->url('index/business')?>" class="lgrg-btn cff fz26 ub ub-pac" style="margin-top: 2rem;"><?= $my_company['littbtn']?></a>
		</div>
	</div>
	<?}else{?>
		<div class="noneDateMsg" style="display: none;">
		<img src="/public/assets/weixin/images/no-date.png" alt="" />
		<p class="c-afafaf  fz28 mt50 pt80"><?= $my_company['litt']?></p>
		<div class="w100">
			<a href="javascript:void(0)" class="lgrg-btn cff fz26 ub ub-pac" style="margin-top: 2rem;"><?= $my_company['littbtn']?></a>
		</div>
	</div>
	<?}?>
</div>


<script>
	$(".header").addClass("user-hd")
</script>
<script type="text/javascript">

$(document).on('click','.removeBtn',function(){
	var _this = $(this);
	var id = _this.attr('date-id');
	$.ajax({
		url : '<?=$this->url("user/order_del")?>',
		type : 'POST',
		data : {id:id},
		dataType : "json",
        success:function(e){
        	if (e.state == 0) {
        		tips(e.info,'success',3000);
        		_this.parents('li').remove();
        	}
        } 
	})
})





$(document).on('click',"#sel",function(){
	var oid = $(this).attr('data-id');
	var type = $(this).attr('data-type');
	var country = $(this).attr('data-country');
	var data = {type:type,country:country};
	tips('','','0',{
		type: "loading",
		cb: function() {
			$.ajax({
			url : '<?=$this->url("user/sel_con")?>',
			type : 'POST',
			data : data,
			dataType : "json",
	        success:function(e){
	        	window.location.href=e.url+'?oid='+oid+'&code=1';
	        } 
		})
	}
})
	
})

</script>