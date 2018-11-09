<div class="pt110">
	<div class="order-status bgff fz22">
		<div class="order-status-main">
			<div class="order-status-item">
				<b class="ub ub-pac bright">1</b>
				<p><?= $order_show['state']['sta1']?></p>
			</div>
			<div class="order-status-item">
				<b class="ub ub-pac bright">2</b>
				<p><?= $order_show['state']['sta2']?></p>
				<span><?= $order_show['state']['sta2_sp']?></span>
			</div>

			<div class="order-status-item">
				<b class="ub ub-pac bright">3</b>
				<p><?= $order_show['state']['sta3']?></p>
			</div>
			<div class="order-status-item">
				<b class="ub ub-pac bright">4</b>
				<p><?= $order_show['state']['sta4']?></p>
				<span><?= $order_show['state']['sta4_sp']?></span>

			</div>
			<div class="order-status-item">
				<b class="ub ub-pac bright">5</b>
				<p><?= $order_show['state']['sta5']?></p>
				<span><?= $order_show['state']['sta5_sp']?></span>
			</div>
			<div class="order-status-item">
				<b class="ub ub-pac bright">6</b>
				<p><?= $order_show['state']['sta6']?></p>
			</div>
		</div>
	</div>
	<div class="fz24 plr30 pb50">
	<!-- 注册基本信息 -->
		<a href="<?= $this->url('ltd_cym/basic')?>?oid=<?= $oid?>&code=1&is_pay=<?= $is_pay?>" class="ub ub-ac c28 ptb36 bb">
			<b class="ub-f1 c28"><?= $order_show['option']['basic']?></b>
			<?if (empty($is_pay)) {
				echo "<span class='c-66 pr10'>".$order_show['choice']['see']."</span>";
			}else{
				if ($order['audit_state'] == 1) {
					echo "<span class='c-f76959 pr10'>".$order_show['choice']['audit']."</span>";
				}else if ($order['audit_state'] == 2) {
					echo "<span class='c-66 pr10'>".$order_show['choice']['passed']."</span>";
				}else if ($order['audit_state'] == 3) {
					echo "<span class='c-f76959 pr10'>".$order_show['choice']['nopassed']."</span>";
				}
			}?>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<!-- 查看／新增服务项目 -->
		<a href="<?= $this->url('ltd_cym/project')?>?oid=<?= $oid?>&code=1" class="ub ub-ac c28 ptb36 bb">
			<b class="ub-f1 c28"><?= $order_show['option']['project']?></b>
			<?if (empty($order['project'])) {
				echo "<span class='c-f76959 pr10'>".$order_show['addproject']."</span>";
			}else{
				echo "<span class='c-66 pr10'>".$order_show['choice']['see']."</span>";
			}?>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<!-- 董事信息 -->
		<a href="<?= $this->url('ltd_cym/director_list')?>?oid=<?= $oid?>&code=1&is_pay=<?= $is_pay?>" class="ub ub-ac c28 ptb36 bb">
			<b class="ub-f1 c28"><?= $order_show['option']['dir']?></b>
			<?
				if (empty($is_pay)) {
					if (!$is_dir) {
						if (count($dir) < 1) {
							echo "<span class='c-f76959 pr10'>".$order_show['choice']['pleaseadd']."</span>";
						}else{
							echo "<span class='c-66 pr10'>".$order_show['choice']['see']."</span>";
						}
					}else{
						echo "<span class='c-66 pr10'>".$order_show['choice']['see']."</span>";
					}
				}else{
					if ($dirs == 1) {
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['audit']."</span>";
					}else if($dirs == 2){
						echo "<span class='c-66 pr10'>".$order_show['choice']['passed']."</span>";
					}else if($dirs == 3){
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['nopassed']."</span>";
					}
				}
			?>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<!-- 成员信息 -->
		<a href="<?= $this->url('ltd_cym/member_list')?>?oid=<?= $oid?>&code=1&is_pay=<?= $is_pay?>" class="ub ub-ac c28 ptb36 bb">
			<b class="ub-f1 c28"><?= $order_show['option']['mem']?></b>
			<?
				if (empty($is_pay)) {
					if (empty($mem)) {
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['pleaseadd']."</span>";
					}else{
						echo "<span class='c-66 pr10'>".$order_show['choice']['see']."</span>";
					}
				}else{
					if ($mems == 1) {
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['audit']."</span>";
					}else if($mems == 2){
						echo "<span class='c-66 pr10'>".$order_show['choice']['passed']."</span>";
					}else if($mems == 3){
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['nopassed']."</span>";
					}
				}
			?>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<!-- 个人资料 -->
		<a href="<?= $this->url('ltd_cym/dir_mem_list')?>?oid=<?= $oid?>&code=1&is_pay=<?= $is_pay?>" class="ub ub-ac c28 ptb36">
			<b class="ub-f1 c28"><?= $order_show['option']['msg']?></b>
			<?
				if (empty($is_pay)) {
					if (empty($pho)) {
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['pleaseadd']."</span>";
					}else{
						echo "<span class='c-66 pr10'>".$order_show['choice']['see']."</span>";
					}
				}else{
					if ($photos == 1) {
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['audit']."</span>";
					}else if($photos == 2){
						echo "<span class='c-66 pr10'>".$order_show['choice']['passed']."</span>";
					}else if($photos == 3){
						echo "<span class='c-f76959 pr10'>".$order_show['choice']['nopassed']."</span>";
					}
				}
			?>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	</div>
</div>
<script>
	$(".header").addClass("user-hd");
		$(function(){
		var state = ("<?= $order['state']?>");
		for (var i = 0; i < 6; i++) {
			$('.order-status-main div').eq(i).addClass('active');
			if($('.bright').eq(i).html() == state){
				return false;
			}
		}
	})
</script>