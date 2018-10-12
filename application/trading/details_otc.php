<div id="echarts" class="echarts bg00i"></div>
		<div class="page-night-r-togle">
			<div class="page-night-r-tit plr30">
				<a href="javascript:;"class=" ub ub-ac"><i  class="iconfont icon-right"></i><?=$details_otc['details1']?></a>
			</div>
			<div class="page-night-r-con p30">
				<h5><?=$arr['title1']?></h5>
				<div class="page-night-intro">
					<div class="night-intro-tit ub ub-ac">
						<i class="iconfont icon-info"></i>
						<b><?=$details_otc['details2']?></b>
					</div>
					<div  class="night-intro-main"><?=$arr['brief']?></div>
				</div>
				<div class="page-night-capital">
					<div  class="night-intro-tit ub ub-ac">
						<i class="iconfont icon-coin"></i>
						<b class="pb8"><?=$details_otc['details3']?></b>
					</div>
					<ul class="page-night-capital-list clear">
						<li class="ub">
							<b><?=$details_otc['details4']?></b>
							<span class="ub-f1 "><?=$arr['data']?></span>
						</li>
						<li class="ub">
							<b><?=$details_otc['details5']?></b>
							<span class="ub-f1 "><?=$arr['industry']?></span>
						</li>
						<li class="ub">
							<b><?=$details_otc['details6']?></b>
							<span class="ub-f1 "><?=$arr['market']?></span>
						</li>
						<li class="ub">
							<b><?=$details_otc['details7']?></b>
							<span class="ub-f1 "><strong><?=$arr['price']?></strong></span>
						</li>
						<li class="ub ub-ac">
							<b><?=$details_otc['details8']?></b>
							<span class="ub-f1 "><strong><?=$arr['number']?></strong></span>
						</li>
					</ul>
				</div>
			</div>
		</div>

<script type="text/javascript" src="/public/assets/home/js/echarts.min.js"></script>
<script type="text/javascript">
$(function() {
	$(".page-night-r-tit a").on("click", function() {
		$(this).parent().toggleClass("active");
		$(".page-night-r-con").toggleClass("active");
	});
	
	var isShowMobile = false;
	var myChart = echarts.init(document.getElementById('echarts'));
	option = {
		title: {
			show:false,
			text: 'K'
		},
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross'
            },
            backgroundColor: 'rgba(245, 245, 245, 0.8)',
            borderWidth: 1,
            borderColor: '#ccc',
            padding: 10,
            textStyle: {
                color: '#000'
            },
            position: function (pos, params, el, elRect, size) {
                var obj = {};
                obj[['top', 'bottom'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
                obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
                return obj;
            }
            // extraCssText: 'width: 170px'
        },
		legend: {
			show:false,
			data: ['K']
		},
		grid: {
			left: '0',
			right: '0',
			top: '0',
			bottom: '0',
			containLabel: true
		},
		toolbox: {
			show:false,
			feature: {
				saveAsImage: {}
			}
		},
		xAxis: {
			type: 'category',
			axisLine: {
				lineStyle: {
					color: '#8392A5'
				}
			},
			splitLine: {
				show: true,
				lineStyle: {
					color: '#30384e'
				}
			},
			data: <?=$data?>
		},
		yAxis: {
			type: 'value',
			scale: true,
			position:'right',
			axisLabel:{
				inside:true
			},
			axisLine: {
				lineStyle: {
					color: '#8392A5'
				}
			},
			splitLine: {
				lineStyle: {
					color: '#30384e'
				}
			}
		},
		series: [{
			color:"#992f30",
				name: 'K',
				type: 'line',
				step: 'start',
				data: <?=$high?>
			}
		]
	};
	myChart.setOption(option);
});
</script>