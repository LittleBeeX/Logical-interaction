<style type="text/css">
	.header {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 2018;
    padding: 0.7rem;
    transition: all .2s linear;
    -webkit-transition: all .2s linear;
}
</style>
<div id="echarts" class="echarts"></div>
        <div class="page-night-r-togle">
            <div class="page-night-r-tit plr30">
                <a href="javascript:;" class=" ub ub-ac"><i class="iconfont icon-right"></i><?=$details_bid['details1']?></a>
	</div>
        <div class="page-night-r-con p30">
            <h5>LaForge Optical</h5>
            <div class="page-night-intro">
                <div class="night-intro-tit ub ub-ac">
                    <i class="iconfont icon-info"></i>
				<b><?=$details_bid['details2']?></b>
			</div>
                    <div class="night-intro-main"><?=$arr['brief']?></div>

		</div>
                <div class="page-night-capital">
                    <div class="night-intro-tit ub ub-ac">
                        <i class="iconfont icon-coin"></i>
				<b class="pb8"><?=$details_bid['details3']?></b>
			</div>
                    <ul class="page-night-capital-list clear">
				<li class="ub">
					<b><?=$details_bid['details4']?></b>
					<span class="ub-f1 "><?=$arr['data']?></span>
				</li>
				<li class="ub">
					<b><?=$details_bid['details5']?></b>
					<span class="ub-f1 "><?=$arr['industry']?></span>
				</li>
				<li class="ub">
					<b><?=$details_bid['details6']?></b>
					<span class="ub-f1 "><?=$arr['market']?></span>
				</li>
				<li class="ub">
					<b><?=$details_bid['details7']?></b>
					<span class="ub-f1 "><strong><?=$arr['price']?></strong></span>
				</li>
				<li class="ub">
					<b><?=$details_bid['details8']?></b>
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
	var upColor = '#589065';
	var downColor = '#AE4E54';
	var myData = <?=$json?>;

	function splitData(rawData) {
		var categoryData = [];
		var values = [];
		var volumes = [];
		for(var i = 0; i < rawData.length; i++) {
			categoryData.push(rawData[i].splice(0, 1)[0]);
			values.push(rawData[i]);
			volumes.push([i, rawData[i][4], rawData[i][0] > rawData[i][1] ? 1 : -1]);
		}

		return {
			categoryData: categoryData,
			values: values,
			volumes: volumes
		};
	}

	function calculateMA(dayCount, data) {
		var result = [];
		var daybefore = dayCount-1;
		for(var i = 0, len = data.values.length; i < len; i++) {
			if(i < dayCount) {
				result.push('-');
				continue;
			}
			var sum = 0;
			for(var j = 0; j < dayCount; j++) {
				sum += data.values[i - j][1];
			}
			result.push(+(sum / dayCount).toFixed(3));
		}
		return result;
	}

	var data = splitData(myData);
	myChart.setOption(option = {
		backgroundColor: '#1E1D28',
		animation: false,
        /*legend: {
            top: 10,
            left: 'center',
            textStyle: {
                color: '#ccc'
            },
            data: ['Dow-Jones index', 'MA5', 'MA10', 'MA20']
        },*/
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
		axisPointer: {
			link: {
				xAxisIndex: 'all'
			},
			lineStyle: {
				type: 'dotted'
			}
		},
		visualMap: { //柱状图颜色
			show: false,
			seriesIndex: 4,
			dimension: 2,
			pieces: [{
				value: 1,
				color: downColor
			}, {
				value: -1,
				color: upColor
			}]
		},
		grid: [{
				left: '0',
				right: '0',
				top: '12',
				 height: '70%' 
				// bottom: '-5'
			},
			{
				left: '0',
				right: '0',
				height: '30%',
				bottom: '8%'
			}
		],
		xAxis: [{
				type: 'category',
				data: data.categoryData,
				scale: true,
				boundaryGap: false,
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
				axisLabel: {
					show: false
				},
				splitNumber: 20
			},
			{
				type: 'category',
				gridIndex: 1,
				data: data.categoryData,
				scale: true,
				boundaryGap: false,
				axisLine: {
					show: true,
					lineStyle: {
						color: '#8392A5'
					}
				},
				axisTick: {
					show: false
				},
				splitLine: {
					show: true,
					lineStyle: {
						color: '#30384e'
					}
				},
				splitNumber: 20,
				min: 'dataMin',
				max: 'dataMax'
			}
		],
		yAxis: [{
				scale: true,
				// position:'right',
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
			{
				scale: true,
				// position:'right',
				gridIndex: 1,
				splitNumber: 2,
				axisLabel: {
					show: false
				},
				axisLine: {
					lineStyle: {
						color: '#8392A5'
					}
				},
				axisTick: {
					show: false
				},
				splitLine: {
					show: false
				},
				splitLine: {
					show: true,
					lineStyle: {
						color: '#30384e'
					}
				}
			}
		],
		dataZoom: [{
				type: 'inside',
				xAxisIndex: [0, 1],
				start: 0,//开始
				end: 100//结束
			}
		],
		series: [{
				name: 'K',
				type: 'candlestick',
				data: data.values,
				itemStyle: {
					normal: {
						color: upColor,
						color0: downColor,
						borderColor: null,
						borderColor0: null
					}
				},
				tooltip: {
					formatter: function(param) {
						param = param[0];
						return [
							'Date: ' + param.name + '<hr size=1 style="margin: 3px 0">',
							'Open: ' + param.data[0] + '<br/>',
							'Close: ' + param.data[1] + '<br/>',
							'Lowest: ' + param.data[2] + '<br/>'
						].join('');
					}
				}
			},
			{
				//MA5是5日均线
				name: 'MA5',
				type: 'line',
				data: calculateMA(5, data),
				smooth: true,
            	showSymbol: false,
				lineStyle: {
					normal: {
						opacity: 0.5,
						color:"#FFC132"
					}
				}
			},
			{
				//MA10是10日均线
				name: 'MA10',
				type: 'line',
				data: calculateMA(10, data),
				smooth: true,
            	showSymbol: false,
				lineStyle: {
					normal: {
						opacity: 0.5,
						color:"#80D7F5"
					}
				}
			},
			{
				//MA20是20日均线
				name: 'MA20',
				type: 'line',
				data: calculateMA(20, data),
				smooth: true,
            	showSymbol: false,
				lineStyle: {
					normal: {
						opacity: 0.5,
						color:"#FC5FC8"
					}
				}
			},
			{
				name: 'Volume',
				type: 'bar',
				xAxisIndex: 1,
				yAxisIndex: 1,
				data: data.volumes
			}
		]
	}, true);
	
});
</script>