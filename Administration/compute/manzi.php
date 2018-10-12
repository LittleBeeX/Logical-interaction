<style type="text/css">
   .btn.btn-primary{
                
               margin-bottom: 10px;
                font-size: 14px;
                margin-left: 14px;
                cursor: pointer
            }
</style>
<div id="main">
<div class="container-fluid">
    <div class="page-header">
    	<div class="pull-left">
    		<h1><?=$this->menu?></h1>
    	</div>
    	<div class="pull-right">
    		<ul class="stats">
    			<li class='lightred'>
    				<i class="icon-calendar"></i>
    				<div class="details">
    					<span class="big"></span>
    					<span></span>
    				</div>
    			</li>
    		</ul>
    	</div>
    </div>
    <div class="breadcrumbs">
    	<ul>
    		<li>
    			<a href="javascript:();"><?=$headname?></a>
    			<i class="icon-angle-right"></i>
    		</li>
    		<li>
    			<a href="javascript:();"><?=$this->title?></a>
    			<i class="icon-angle-right"></i>
    		</li>
    		<li>
    			<a href="javascript:();"><?=$this->menu?></a>
    		</li>
    	</ul>
    	<div class="close-bread">
    		<a href="javascript:();"><i class="icon-remove"></i></a>
    	</div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        BTC兑换MANZI
                    </h3>
                </div>
                
                <div class="box-content nopadding" style="overflow: hidden;">
                 <div id="sdf" style="width: 70%;float: left; margin: 10px 0 0 30px;">
                   <label style="display: inline;margin-right: 17px;">BTC单价(人民币)</label>
                   <input id="input1" type="text" placeholder="请输入BTC单价(人民币)"  />
                   <span style="margin-left: 18px; font-size: 16px;">参考网址：</span>
                    <a style="text-decoration: none; font-size: 16px;" target="_blank" href="https://www.huobi.pro/zh-cn/btc_usdt/exchange/">火币网</a>
                   <br>
                   <label style="display: inline;margin-right: 38px;">BTC投资数量</label>
                    <input id="input2" type="text" placeholder="请输入BTC投资数量"  />
                    <span style="font-size: 16px;color: red; margin-left: 10px;" id="price1"></span>
                    <span style="font-size: 16px;">个BTC=</span>
                    <span style=" font-size: 16px; color: red;"  id="price01"></span>
                    <span style="font-size: 16px;">个MANZI</span>
                    <br>
                </div>  
           
                </div>

               
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        ETH兑换MANZI
                    </h3>
                   
                </div>
                <div class="box-content nopadding" style="overflow: hidden;">
                <div style="width: 70%;float: left; margin: 10px 0 0 30px;">
                    <div id="sdf2" style="float: left;">
                   <label style="display: inline;margin-right: 17px;">ETH单价(人民币)</label>
                   <input id="input3" type="text" placeholder="请输入BTC单价(人民币)"  />
                   <span style="margin-left: 18px; font-size: 16px;">参考网址：</span>
                    <a style="text-decoration: none; font-size: 16px;" target="_blank" href="https://www.huobi.pro/zh-cn/eth_usdt/exchange/">火币网</a>

                   <br>
                   <label style="display: inline;margin-right: 38px;">ETH投资数量</label>
                    <input id="input4" type="text" placeholder="请输入BTC投资数量"  />
                    <span style="font-size: 16px;color: red; margin-left: 10px;" id="price222"></span>
                    <span style="font-size: 16px;">个ETH=</span>
                    <span style=" font-size: 16px; color: red;"  id="price2222"></span>
                    <span style="font-size: 16px;">个MANZI</span><br>
                    </div>
                   
                </div> 


                </div>
                

            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
     $(document).ready(function(){
        $("#sdf input").keyup(function(){
            var a = $("#input1").val();//BTC单价(人民币)
            var b = $("#input2").val();//BTC投资数量
           
                f = a*b;//BTC兑换的MANZI总数
               
            if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input1").val(1);
            }
            if(isNaN(b)==true)//判断input的value是否为字符串
            {
                $("#input2").val(1);
            }
           

            if(a!==''&&b!==''){
                $("#price1").text(b);
                $("#price01").text(f);
            }

            


            //input输入框值改变后重新算
                $("#input1,#input2").bind("input propertychange", function () {
                    var a = $("#input1").val();//BTC单价(人民币)
                    var b = $("#input2").val();//BTC投资数量
                    
                    if(a!==''&&b!==''){
                $("#price1").text(b);
                $("#price01").text(f);
            }

           
                })

            })
})
 $(document).ready(function(){
         $("#sdf2 input").keyup(function(){
            var a = $("#input3").val();//BTC单价(人民币)
            var b = $("#input4").val();//BTC投资数量
           
                f = a*b;//BTC兑换的MANZI总数
               
            if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input3").val(1);
            }
            if(isNaN(b)==true)//判断input的value是否为字符串
            {
                $("#input4").val(1);
            }
           

            if(a!==''&&b!==''){
                $("#price222").text(b);
                $("#price2222").text(f);
            }

            


            //input输入框值改变后重新算
                $("#input3,#input4").bind("input propertychange", function () {
                    var a = $("#input3").val();//BTC单价(人民币)
                    var b = $("#input4").val();//BTC投资数量
                    f = a*b;//BTC兑换的MANZI总数
                    if(a!==''&&b!==''){
                $("#price222").text(b);
                $("#price2222").text(f);
            }

           
                })

            })




})

        
     
</script>