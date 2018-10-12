
<div class="common-banner common-banner03 ub ub-tc active">
   <div class="wrap" style="margin-top: 6rem;">
        <b class="mt30"><?=$main['banner']['text1']?></b>
        <h2><?=$main['banner']['text2']?></h2>
        <p><?=$main['banner']['text3']?></p>
	    <img style="position: absolute;left: 0;right: 0;width: 7rem;margin: 4rem auto 0 auto;"  src="/public/assets/weixin/images/common-bannericon1.png"/>
   </div>
</div>

<div class="common-cont01-wrap">
    
    <div class="common-deal-title mb10 font-upper">
        <b class="ub-f1 ub ub-pac ptb30"><?=$main['line4']['text1']?></b>
        <b class="ub-f1 ub ub-pac ptb30"><?=$main['line3']['text1']?></b>
        <div class="reg-type-tab-line"></div>
    </div>
   <div class="common-deal-wrap">
        <div class="common-deal-content bs-wrapper">
            
            <!--竞价交易市场 begin-->
            <ul class="common-type-slide bs-slide">
            <?foreach ($list_b as $key_b => $value_b) {?>
                <li>
                    <a href="/index.php/<?=$this->languageName?>/weixin/trading/details_bid?id=<?=$key_b?>">
                        <span><strong><?=$value_b['title1']?></strong><!-- /<?=$value_b['title2']?> --></span>
                        <div><?=$value_b['price']?></div>
                        <?if($value_b['p_chg'] > 0){?>
                            <i class="color-blue">+<?=$value_b['p_chg']?>%</i>
                        <?}else{?>
                            <i class="color-red"><?=$value_b['p_chg']?>%</i>
                        <?}?>
                    </a>
                </li>
            <?}?>
            </ul>
            <!--竞价交易市场 end-->
			 <!--OTC交易市场 begin-->
            <ul class="common-type-slide bs-slide">
            <?foreach ($list_a as $key_a => $value_a) {?>
                <li>
                    <a href="/index.php/<?=$this->languageName?>/weixin/trading/details_otc?id=<?=$key_a?>">
                        <span><strong><?=$value_a['title1']?></strong><!-- /<?=$value_a['title2']?> --></span>
                        <div><?=$value_a['price']?></div>
                        <?if($value_a['p_chg'] > 0){?>
                            <i class="color-blue">+<?=$value_a['p_chg']?>%</i>
                        <?}else{?>
                            <i class="color-red"><?=$value_a['p_chg']?>%</i>
                        <?}?>
                    </a>
                </li>
            <?}?>
            </ul>
            <!--OTC交易市场 end-->
        </div>
   </div>
   
</div>
<ul class="common-c6">
    <li class="ub ub-pac ub-ver">
        <img class="common-c6-pic" src="/public/assets/weixin/images/common-c6-pic01.gif" alt="">
        <div class="common-c6-txt">
            <h6><?=$main['line3']['text1']?></h6>
            <p><?=$main['line3']['text2']?></p>
        </div>
    </li>
    <li class="ub ub-pac ub-ver">
        <img class="common-c6-pic" src="/public/assets/weixin/images/common-c6-pic02.gif" alt="">
        <div class="common-c6-txt">
            <h6><?=$main['line4']['text1']?></h6>
            <p><?=$main['line4']['text2']?></p>
        </div>
    </li>
</ul>

<script>
    var mySwiper = new Swiper('.common-deal-wrap', {
            loop: false,
            speed: 500,
            autoplayDisableOnInteraction: false,
            wrapperClass: 'common-deal-content',
            slideClass: 'common-type-slide',
            paginationClickable: true,
            observer: true,
            observeParents: true,
            onSlideChangeStart: function(swiper) {
                $(".common-deal-title").find("b").eq(swiper.activeIndex).addClass("active").siblings("b").removeClass("active")
                $(".reg-type-tab-line").css("left", $(".common-deal-title").find("b.active").position().left)
            }
        });
    $(".common-deal-title b").on("click", function() {
        mySwiper.slideTo($(this).index()) 
    })
</script>