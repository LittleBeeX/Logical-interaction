<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?=$scope['title_1']?></b>
	</div>
	<div class="c66 plr30 fz24 lh16 mt24"></div>
	<div class="apply-toggle-box plr30 pt10">
		<div class="apply-toggle-main">
			<ul class="apply-reg-list fz26 c66 pt40 mt20">
				<li class="bb ub ub-ac">
					<div class="db"><?=$scope['title_2']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox select1">
							<div class="select-txt ub ub-ac" id="opt" data-value="nochoice"><?=$scope['select']?></div>
							<div class="select-list" >
								<?foreach ($scope_business as $key_a => $value_a){?>
									<div class="select-item zk ub-te plr30 ub-ac ub sele" data-value="<?=$key_a?>"><?=$value_a['name']?></div>
								<?}?>
							</div>
						</div>
					</div>
				</li>
				<li class="bb ub ub-ac">
					<div class="db"><?=$scope['title_3']?></div>
					<div class="ub-f1 ml30">
						<div class="selectbox">
							<div class="select-txt ub ub-ac" id="code" data-value="0"><?=$scope['select']?></div>
							<div class="select-list mybox"></div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class=" plr30 apply-foot-submit font-upper">
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$scope['button']?></a>
	</div>
</div>
<script type="text/javascript">
$(".header").addClass("user-hd");
$(function(){
	$(".select1").on("click",'.select-list .select-item', function(){			
			var key = $(this).attr('data-value');
			var code1 = $('.mybox .active').attr('data-value');
			$('#describe').text("-- Please select --");
			$('#code').attr('data-value','')
			$.ajax({
	        url:'<?= $this->url("pte_gb/scope_choice_ajax")?>',
		        type:'post',
		        data:{key:key},
		        dataType:'json',
		        success:function(e){
		        	$('.mybox').html(e.info);
		        } 
	    	})
		});
})

$(document).on('click','#btn',function(){
	var oid = "<?= $oid?>";
	var codes = "<?=$code?>";
	var upd = "<?=$upd?>";
	var code = $('.mybox div').attr('data-value');//大数组下标下面的list下面的键值
	var opt = $('#opt').attr('data-value');//大数组下标
	var describe = $('#describe').text();//大数组下标下面的list下面的键值对应的具体描述
	var code1 = $('#code').attr('data-value');
	var describe1 = $('#describe h3').html();
	tips('','','0',{
		type: "loading",
		cb: function() {
	$.ajax({
    url:'<?= $this->url("pte_gb/scope_ajax")?>',
    type:'post',
    data:{oid:oid,describe:describe,code:code1,opt:opt,upd:upd,},
    dataType:'json',
        success:function(e){
        	if (e.state == 0) {
        		tips(e.info,'success',2000);
        		setTimeout(function(){
		            window.location.href="<?=$this->url('pte_gb/scope_list')?>?oid="+e.oid+"&code="+codes+'&upd='+upd;
		        },2000)
        		return false;
        	}else if(e.state == 1){
        		tips(e.info,'warning',1000);
        	}
        	
        }
	})
	}
	})
});	
</script>
<script type="text/javascript">
$(function(){
	if(("<?=$code?>")==''){
	    history.pushState(null, null, document.URL);
	    window.addEventListener('popstate', function () {
			if(confirm("<?= $nobacks?>")){
				window.location.href = '/index.php/<?=$this->languageName?>/weixin';
			}else{
				history.pushState(null, null, document.URL);
			}
		});
	}
})
</script>