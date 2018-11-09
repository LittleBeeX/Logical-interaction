<div class="pt110 page-edit">
		<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
			<b class="fw-b"><?=$control_people2['txt1']?></b>
		</div>
	<div class="c66 plr30 fz24 lh16 mt24">
	             <?=$control_people2['txt2']?>
	</div>
	
	<div class="ptb50 mb40 plr30 apply-foot-submit font-upper">

		
		<?if(empty($code)){?>
		<a href="<?= $this->url('pte_gb/control_people')?>?oid=<?= $oid?>&code=<?= $code?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people2['txt3']?></a>
		<a href="<?= $this->url('pte_gb/control_msg')?>?oid=<?= $oid?>&code=<?= $code?>" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people2['btn1']?></a>
		<?}else if(!empty($code)){?>
			<a href="<?= $this->url('pte_gb/control_people')?>?oid=<?= $oid?>&code=<?= $code?>&upd=1" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people2['txt3']?></a>
			<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?= $code?>" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people2['btn1']?></a>
		<?}?>
	</div>
</div>
</div>
<script type="text/javascript">
$(".header").addClass("user-hd");
// $('#btn').on('touchstart',function(){
// 	var oid = "<?= $oid?>";
// 	$.ajax({
// 		url:'<?=$this->url("pte_gb/is_control_people")?>',
//         type:'post',
//         data:{oid:oid},
//         dataType:'json',
//         success:function(e){
//         	if (e.state == 0) {
//         		window.location.href="<?= $this->url('pte_gb/control_msg')?>?oid="+oid;
//         	}
//         	tips(e.info,'warning',1000);
//         } 

// 	})
// })

$(function(){
	if(("<?=$code?>")==''){
	    window.addEventListener('popstate', function () {
			history.pushState(null, null, document.URL);
		    window.addEventListener('popstate', function () {
				if(confirm("<?= $nobacks?>")){
					window.location.href = '/index.php/<?=$this->languageName?>/weixin';
				}else{
					history.pushState(null, null, document.URL);
				}
			});
		});
	}
})
</script>