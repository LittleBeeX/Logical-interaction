<div class="reg-type-t ub ub-ver cff plr30">
	<h3 class="fz70 lh1"><?= $business['banner']['h3']?></h3>
	<p class="fz32 mt20"><?= $business['banner']['p']?></p>
	<a href="javascript:;" class="video-btn"></a>
	<div class="reg-video">
		<video src="/public/assets/weixin/video/720p.mp4" poster="/public/assets/weixin/images/video-bg.png"  controls></video>
	</div>
</div>
<div class="reg-type-tab ub fz32 c66 bgff pb10">
	<b class="ub-f1 ub ub-pac ptb30"><?= $business['line1']['b1']?></b>
	<b class="ub-f1 ub ub-pac ptb30"><?= $business['line1']['b2']?></b>
	<div class="reg-type-tab-line"></div>
</div>
<div>
	<div class="reg-type-tab-main fz24 c66">
		<div class="reg-type-wrap bs-wrapper">
			<div class="reg-type-slide bs-slide">
				<div class="m30 ptb40 plr30 bgff">
					<div class="ub">
						<div class="reg-type-pic reg-type-pic-sg"></div>
						<div class="ub-f1 pl30">
							<b class="db fz44 c-0070ba fw-b"><?=$business['line2']['b']?></b>
							<p class="fwb"><?=$business['line2']['p1']?></p>
						</div>
					</div>
					<p class="lh14 mt40 pt20"><?=$business['line2']['p2']?></p>
					<a href="<?= $this->url('foundation_sg/basic')?>" class="ub fz28 ub-pac ptb30 bg0070ba cff mt50 font-upper"><?=$business['line2']['a1']?></a>
					<a href="<?= $this->url('foundation_sg/guide')?>" class="ub fz28 ub-pac pt40 c-0070ba "><?=$business['line2']['a2']?></a>
				</div>
			</div>
			<div class="reg-type-slide bs-slide">

				<div class="m30 ptb40 plr30 bgff">
					<div class="ub">
						<div class="reg-type-pic reg-type-pic-sg"></div>
						<div class="ub-f1 pl30">
							<b class="db fz44 c-0070ba fw-b"><?=$business['line3']['b']?></b>
							<p class="fwb"><?=$business['line3']['p1']?></p>
						</div>
					</div>
					<p class="lh14 mt40 pt20"><?=$business['line3']['p2']?></p>
					<a href="<?= $this->url('ltd_sg/basic')?>" class="ub ub-pac ptb30 fz28 bg0070ba cff mt50 font-upper"><?=$business['line3']['a1']?></a>
					<a href="<?= $this->url('ltd_sg/guide')?>" class="ub ub-pac pt40 fz28  c-0070ba"><?=$business['line3']['a2']?></a>
				</div>

				<div class="m30 ptb40 plr30 bgff">
					<div class="ub">
						<div class="reg-type-pic reg-type-pic-gb"></div>
						<div class="ub-f1 pl30">
							<b class="db fz44 c-0070ba fw-b"><?=$business['line4']['b']?></b>
							<p class="fwb"><?=$business['line4']['p1']?></p>
						</div>
					</div>
					<p class="lh14 mt40 pt20"><?=$business['line4']['p2']?></p>
					<a href="<?= $this->url('pte_gb/basic')?>" class="ub ub-pac ptb30 fz28 bg0070ba cff mt50 font-upper"><?=$business['line4']['a1']?></a>
					<a href="<?= $this->url('pte_gb/guide')?>" class="ub ub-pac pt40 fz28  c-0070ba"><?=$business['line4']['a2']?></a>
				</div>

				<div class="m30 ptb40 plr30 bgff">
					<div class="ub">
						<div class="reg-type-pic reg-type-pic-bvi"></div>
						<div class="ub-f1 pl30">
							<b class="db fz44 c-0070ba fw-b"><?=$business['line5']['b']?></b>
							<p class="fwb"><?=$business['line5']['p1']?></p>
						</div>
					</div>
					<p class="lh14 mt40 pt20"><?=$business['line5']['p2']?></p>
					<a href="<?= $this->url('ltd_bvi/basic')?>" class="ub ub-pac ptb30 fz28 bg0070ba cff mt50 font-upper"><?=$business['line5']['a1']?></a>
					<a href="<?= $this->url('ltd_bvi/guide')?>" class="ub ub-pac pt40 fz28  c-0070ba"><?=$business['line5']['a2']?></a>
				</div>

				<div class="m30 ptb40 plr30 bgff">
					<div class="ub">
						<div class="reg-type-pic reg-type-pic-cym"></div>
						<div class="ub-f1 pl30">
							<b class="db fz44 c-0070ba fw-b"><?=$business['line6']['b']?></b>
							<p class="fwb"><?=$business['line6']['p1']?></p>
						</div>
					</div>
					<p class="lh14 mt40 pt20"><?=$business['line6']['p2']?></p>
					<a href="<?= $this->url('ltd_cym/basic')?>" class="ub ub-pac ptb30 fz28 bg0070ba cff mt50 font-upper"><?=$business['line6']['a1']?></a>
					<a href="<?= $this->url('ltd_cym/guide')?>" class="ub ub-pac pt40 fz28  c-0070ba"><?=$business['line6']['a2']?></a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script>
	$(function() {
		var mySwiper = new Swiper('.reg-type-tab-main', {
			loop: false,
			speed: 500,
			autoplayDisableOnInteraction: false,
			wrapperClass: 'reg-type-wrap',
			slideClass: 'reg-type-slide',
			paginationClickable: true,
			observer: true,
			observeParents: true,
			onSlideChangeStart: function(swiper) {
				$(".reg-type-tab").find("b").eq(swiper.activeIndex).addClass("active").siblings("b").removeClass("active")
				$(".reg-type-tab-line").css("left", $(".reg-type-tab").find("b.active").position().left);
				if($('.bs-wrapper .bs-slide').eq(0).hasClass('swiper-slide-active')){
					$('.bs-wrapper').css('height',$('.swiper-slide-active').outerHeight(true));
				}else{
					$('.bs-wrapper').css('height','auto');
				}
			}
		});
		setTimeout("$('.bs-wrapper').css('height',$('.swiper-slide-active').outerHeight(true))",1000);
		
		$(".reg-type-tab b").on("click", function() {
			mySwiper.slideTo($(this).index())
		})
		$(".video-btn").on("click", function(ev) {
			$('.reg-video').addClass('active');
		})
		$(".reg-video").on("click", function() {
			
			$("video").get(0).currentTime=0;
			$(this).removeClass('active');
		});
		
		
	})
</script>