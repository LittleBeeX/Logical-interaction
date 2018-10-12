<div class="apply-more-main-list">
	<div class="apply-more-main ub ub-ver cff">
		<div class="apply-more-tab ub plr30 fz28">
			<div class="ub-f1 ub">
				<b class="active ub-f1"><?=$guide['nav1']['title']?></b>
				<b class="ub-f1"><?=$guide['nav2']['title']?></b>
				<b class="ub-f1"><?=$guide['nav3']['title']?></b>
				<b class="ub-f1"><?=$guide['nav4']['title']?></b>
				<div class="apply-more-line"></div>
			</div>
		</div>
		<div class="ub-f1 ub cff">
			<div class="apply-slide-main ub-f1 w100">
				<div class="bs-wrapper apply-wrapper">

					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-tc fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav1']['div1']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav1']['p1']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav1']['div2']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav1']['p2']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav1']['div3']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav1']['p3']?></p>
							</div>
						</div>
					</div>

					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav2']['div1']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav2']['p1']?></p>
							</div>
						</div>
					</div>

					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav3']['div1']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav3']['p1']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav3']['div2']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav3']['p2']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav3']['div3']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav3']['p3']?></p>
							</div>
						</div>
					</div>

					<div class="bs-slide apply-slide plr30 pb40">
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav4']['div1']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav4']['p1']?></p>
							</div>
						</div>
						<div class="apply-slide-item pt40 mt20">
							<div class="apply-slide-tit ub ub-ac fz28 fw-b">
								<i class="iconfont icon-start fz24 pr10"></i><?=$guide['nav4']['div2']?>
							</div>
							<div class="apply-slide-con fz26 pl30 lh16 word-break pt10">
								<p><?=$guide['nav4']['p2']?></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var mySwiper = new Swiper('.apply-slide-main', {
		loop: false,
		speed: 700,
		autoplayDisableOnInteraction: false,
		wrapperClass: 'apply-wrapper',
		slideClass: 'apply-slide',
		paginationClickable: true,
		observer: true,
		observeParents: true,
		onSlideChangeStart: function(swiper) {
			$(".apply-more-tab b").eq(swiper.activeIndex).addClass("active").siblings("b").removeClass("active");
			$(".apply-more-line").css("left", $(".apply-more-tab").find("b.active").position().left)
		}
	});
	$(".apply-more-line").css("width", $(".apply-more-tab").find("b").width())
	$(".apply-more-tab b").on("click", function() {
		mySwiper.slideTo($(this).index())
	})
	$(".apply-more-btn").on("click", function() {
		$("body,html").addClass("apply-more-main-show");
		return false;
	})
	$(".apply-more-close").on("click", function() {
		$("body,html").removeClass("apply-more-main-show");
		return false;
	})
</script>