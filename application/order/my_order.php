<div class="pt110">
	<ul class="my-order fz24 c66 pb20">
	<?foreach ($order as $key => $val) {?>
		<li class="bgff ptb24 plr30 mb24">
			<div class="ub pt10">
				<div class="ub ub-f1 ub-te mr20">
				<?= $my_order['coding']?><?= $val['order_coding']?>&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="c-f76959"><?= sprintf("%.0f", $val['number'])?>
				<?if ($val['currency'] == 1) {
					echo "RMB";
				}else if ($val['currency'] == 2) {
					echo "LITTLE";
				}else if ($val['currency'] == 3) {
					echo "ETH";
				}?></span>
				</div>
				<?if($val['state'] == 1) {
					echo "<div class='c-f76959'>".$my_order['nopay']."</div>";
				}else if($val['state'] == 2){
					echo $my_order['pay'];
				}else if($val['state'] == 3){
					echo "<div class='c-f76959'>".$my_order['paying']."</div>";
				}?>
			</div>
			<div class="bb c28 lh16 pt30 pb20 word-break c28">
				<p class="word-break lh14 ptb20"><?= $my_order['date']?><?= date('Y-m-d H:i:s',$val['create_time']);?></p>
			</div>
			
			<div class="tx-r pt20 font-upper">
			<?if ($val['state'] == 1) {?>
				<a href="<?= $this->url('order/project')?>?id=<?= $val['id']?>" class="ptb20 plr50 dib cff bgf76959 ml20"><?= $my_order['gopay']?></a>
			<?}else{?>
				<a href="<?= $this->url('order/project')?>?id=<?= $val['id']?>" class="ptb20 plr50 dib cff bg0070ba ml20"><?= $my_order['see']?></a>
			<?}?>
			</div>
		</li>
	<?}?>
	</ul>

	<?if(empty($order)){?>
		<div class="noneDateMsg" style="display: block;">
		<img src="/public/assets/weixin/images/no-date.png" alt="" />
		<p class="c-afafaf  fz28 mt50 pt80"><?= $my_order['litt']?></p>
		<div class="w100">
			<a href="<?= $this->url('index/business')?>" class="lgrg-btn cff fz26 ub ub-pac" style="margin-top: 2rem;"><?= $my_order['littbtn']?></a>
		</div>
	</div>
	<?}else{?>
		<div class="noneDateMsg" style="display: none;">
		<img src="/public/assets/weixin/images/no-date.png" alt="" />
		<p class="c-afafaf  fz28 mt50 pt80"><?= $my_order['litt']?></p>
		<div class="w100">
			<a href="javascript:void(0)" class="lgrg-btn cff fz26 ub ub-pac" style="margin-top: 2rem;"><?= $my_order['littbtn']?></a>
		</div>
	</div>
	<?}?>



</div>



<script>
	$(".header").addClass("user-hd")
</script>