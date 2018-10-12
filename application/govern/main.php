<div class="common-banner common-banner02 ub ub-pac ub-ver active">
    <b class="mt30"><?= $main['banner']['b']?></b>
    <h2><?= $main['banner']['h2']?></h2>
    <p><?= $main['banner']['p']?></p>
    <div class="common-banner-btns font-upper">
        <a href="javasript:;" class="ub ub-pac"><?= $main['banner']['a1']?></a>
        <a href="javasript:;" class="ub ub-pac"><?= $main['banner']['a2']?></a>
        <a href="javasript:;" class="ub ub-pac"><?= $main['banner']['a3']?></a>
        <a href="javasript:;" class="ub ub-pac"><?= $main['banner']['a4']?></a>
        <a href="javasript:;" class="ub ub-pac"><?= $main['banner']['a5']?></a>
    </div>
</div>
<div class="common-c1 common-style bgff c21 fz28 tx-c">
	<b class="c21i"><?= $main['line1']['b']?></b>
    <h2><?= $main['line1']['h2']?></h2>
    <p><?= $main['line1']['p']?></p>
    <div class="common-c6-pic common-c6-pic01"></div>
</div>
<div class="common-c2 common-style bg-blue cff fz28 tx-c">
	<b><?= $main['line2']['b']?></b>
    <h2><?= $main['line2']['h2']?></h2>
    <p><?= $main['line2']['p']?></p>
    <div class="common-c6-pic common-c6-pic02"></div>
</div>
<div class="common-c3 common-style bgff c21 fz28 tx-c">
    <b><?= $main['line3']['b']?></b>
    <h2><?= $main['line3']['h2']?></h2>
    <p><?= $main['line3']['p']?></p>
    <div class="common-c6-pic common-c6-pic03"></div>
</div>
<div class="common-c4 common-style cff bg-blue fz28 tx-c">
    <b><?= $main['line4']['b']?></b>
    <h2><?= $main['line4']['h2']?></h2>
    <p><?= $main['line4']['p']?></p>
    <div class="common-c6-pic common-c6-pic04"></div>
</div>
<div class="common-c5 common-style bgff c21 fz28 tx-c">
    <b><?= $main['line5']['b']?></b>
    <h2><?= $main['line5']['h2']?></h2>
    <p><?= $main['line5']['p']?></p>
    <div class="common-c6-pic common-c6-pic05"></div>
</div>


<script>
	$('.common-banner-btns a').on('click',function(){
		var indexs = $(this).index()+1;
		$("body,html").animate({
			scrollTop: $(".common-c"+indexs).offset().top-$(".header").height()
		}, 800);
		return false;
	})


</script>