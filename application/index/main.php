<div class="index-banner">
	<h2 class="plr20"><?= $main['text1']?></h2>
	<div class="index-banner-btns">
		<a href="javascript:;" class="ub ub-pac p30 c21 bgff index-understanding font-upper"><?= $main['text2']?></a>
		<a href="<?= $this->url('index/business')?>?type=1" class="ub ub-pac cff bgf76 p30 mt30 font-upper"><?= $main['text3']?></a>
	</div>
</div>
<div class="index-c1 plr20 bgff c21 fz28 tx-c">
	<?= $main['text4']?>
</div>
<div class="index-c2 cff">
	<ul>
		<li>
			<i class="iconfont icon-global"></i>
			<h2><?= $main['text5']?></h2>
			<p><?= $main['text6']?></p>
		</li>
		<li>
			<i class="iconfont icon-easy"></i>
			<h2><?= $main['text7']?></h2>
			<p><?= $main['text8']?></p>
		</li>
		<li>
			<i class="iconfont icon-alltime"></i>
			<h2><?= $main['text10']?></h2>
			<p><?= $main['text9']?></p>
		</li>
		<li>
			<i class="iconfont icon-service"></i>
			<h2><?= $main['text11']?></h2>
			<p><?= $main['text12']?></p>
		</li>
	</ul>
</div>
<script type="text/javascript">

	var iNow = 0
	var msg = ["<?= $main['text13']?>", "<?= $main['text14']?>", "<?= $main['text15']?>"]

	typewriterHandle(msg)

	function typewriterHandle(msg) {
		if(msg.length > 0) {
			txtWriter({
				el: ".txt",
				analog: ".analog",
				msg: msg[iNow],
				cb: function() {
					iNow++
					iNow %= msg.length
					typewriterHandle(msg)
				}
			})
		}
	}

</script>