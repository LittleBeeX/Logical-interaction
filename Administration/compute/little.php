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
                        BTC兑换LITTLE
                    </h3>
                   
                </div>
                
                <div id="btcdiv" class="box-content nopadding" style="overflow: hidden;">
                <div style="width: 80%;float: left; margin: 10px 0 0 30px;">
                    <label style="display: inline;margin-right: 30px;">BTC单价(美元)</label>
                    <input id="input1" type="text" placeholder="请输入BTC单价(美元)"  />
                    <span style="margin-left: 18px; font-size: 16px;">参考网址：</span>
                    <a style="text-decoration: none; font-size: 16px;" target="_blank" href="https://www.huobi.pro/zh-cn/btc_usdt/exchange/">火币网</a><br>

                    <label style="display: inline;margin-right: 30px;">ETH单价(美元)</label>
                    <input id="input2" type="text" placeholder="请输入BTC单价(美元)"  />
                    <span style="margin-left: 18px; font-size: 16px;">参考网址：</span>
                    <a style="text-decoration: none; font-size: 16px;" target="_blank" href="https://www.huobi.pro/zh-cn/eth_usdt/exchange/">火币网</a><br>
               
                    <label style="display: inline;margin-right: 38px;">BTC投资数量</label>
                    <input  type="text" placeholder="请输入BTC投资数量" id="input3"/>
                    <span style="margin-left: 14px; font-size: 16px; color: red;"  id="price00"></span>
                    <span style="font-size: 16px; ">个BTC=</span>
                    <span style=" font-size: 16px; color: red;"  id="price01"></span>
                    <span style="font-size: 16px;">个LITTLE</span>
                    <br>

                
                    <select  id="select1" style="margin-left: 116px;" >
                        <option value="101">选择具体锁仓时间</option>
                        <option value="103"  class="op">锁仓3个月(无优惠)</option>
                        <option value="106"  class="op"  >锁仓6个月(优惠2%)</option>
                        <option value="109"  class="op" >锁仓9个月(优惠4%)</option>
                        <option value="1012" class="op" >锁仓12个月(优惠6%)</option>
                    </select>
                    <button id="btn1" class="btn btn-primary" >
                        重置数据
                    </button>
                    <span style="font-size: 16px; color: red;">锁仓至少投资</span>
                    <span id="BTCC1" style="font-size: 16px; color: red;"></span>
                    <span style="font-size: 16px; color: red;">个BTC</span>
                </div>  
           
                </div>



                <!-- 人民币兑换LITTLE -->

                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        CNY兑换LITTLE
                    </h3>
                   
                </div>
                <div id="cnydiv" class="box-content nopadding" style="overflow: hidden;">
                <div style="width: 70%;float: left; margin: 10px 0 0 30px;">
                    <label style="display: inline;margin-right: 30px;">ETH单价(美元)</label>
                    <input id="input4" type="text" placeholder="请输入ETH单价(美元)"  />
                    <span style="margin-left: 18px; font-size: 16px;">参考网址：</span>
                    <a style="text-decoration: none; font-size: 16px;" target="_blank" href="https://www.huobi.pro/zh-cn/eth_usdt/exchange/">火币网</a><br>

                    <label id="none2" style="display: inline;margin-right: 17px;">ETH单价(人民币)</label>
                    <input id="input5" type="text" placeholder="请输入ETH单价(人民币)"  />
                    <span id="mes1" style="margin-left: 18px; font-size: 16px; color: red;" >提示：锁仓至少投资</span>
                    <span id="none22" style="margin-left: 18px; font-size: 16px;"></span>
                    <span id="mes2" style="margin-left: 18px; font-size: 16px;color: red;" >元人民币</span>
                    <a id="none222" style="text-decoration: none; font-size: 16px;" target="_blank" href=""></a><br>
                   
                    <label id="none3" style="display: inline;margin-right: 23px;">人民币投资金额</label>
                    <input id="input6" type="text" placeholder="请输入人民币投资金额"/>
                    <span id="none33" style="margin-left: 14px; font-size: 16px; color: red;" ></span>
                    <span id="none333" style="font-size: 16px; ">元人民币=</span>
                    <span id="none3333" style=" font-size: 16px; color: red;" ></span>
                    <span id="none33333" id="iii" style="font-size: 16px;">个LITTLE</span><br>
                    
                    
                    <select  id="select2" style="margin-left: 116px;" >
                        <option value="201">选择具体锁仓时间</option>
                        <option value="213"  class="op">锁仓3个月(无优惠)</option>
                        <option value="216"  class="op"  >锁仓6个月(优惠2%)</option>
                        <option value="219"  class="op" >锁仓9个月(优惠4%)</option>
                        <option value="2012" class="op" >锁仓12个月(优惠6%)</option>
                    </select>
                    <button id="btn2" class="btn btn-primary" >
                        重置数据
                    </button>

                </div>  


                </div>

                <!-- ETH兑换LITTLE -->


                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        ETH兑换LITTLE
                    </h3>
                   
                </div>
                <div id="ethdiv" class="box-content nopadding" style="overflow: hidden;">
                <div style="width: 80%;float: left; margin: 10px 0 0 30px;">
                    <label style="display: inline;margin-right: 30px;">ETH单价(美元)</label>
                    <input id="input7" type="text" placeholder="请输入ETH单价(美元)"  />
                    <span style="margin-left: 18px; font-size: 16px;">参考网址：</span>
                    <a style="text-decoration: none; font-size: 16px;" target="_blank" href="https://www.huobi.pro/zh-cn/eth_usdt/exchange/">火币网</a><br>
               
                    <label style="display: inline;margin-right: 38px;">ETH投资数量</label>
                    <input  type="text" placeholder="请输入ETH投资数量" id="input8"/>
                    <span style="margin-left: 14px; font-size: 16px; color: red;"  id="price2"></span>
                    <span style="font-size: 16px; ">个ETH=</span>
                    <span style=" font-size: 16px; color: red;"  id="price3"></span>
                    <span style="font-size: 16px;">个LITTLE</span>
                    <br>
                
                    <select  id="select3" style="margin-left: 116px;" >
                        <option value="301">选择具体锁仓时间</option>
                        <option value="323"  class="op">锁仓3个月(无优惠)</option>
                        <option value="326"  class="op"  >锁仓6个月(优惠2%)</option>
                        <option value="329"  class="op" >锁仓9个月(优惠4%)</option>
                        <option value="3012" class="op" >锁仓12个月(优惠6%)</option>
                    </select>
                    <button id="btn3" class="btn btn-primary" >
                        重置数据
                    </button>
                    <span style="font-size: 16px; color: red;">锁仓至少投资2000个ETH</span>
                   
                </div>  


                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- BTC -->
 <script type="text/javascript">
        $(document).ready(function(){
            var shuzu = new Array();
            $("#btcdiv input").keyup(function(){//给input添加键盘监听事件
            var a = $("#input1").val();//当天BTC美元价格
            var b = $("#input3").val();//BTC投资数量
            var c = $("#input2").val();//当天ETH美元价格
            var m = a/1.5;//得出BTC对little币的兑换比例
                t = c/a;//得出ETH对BTC兑换比例
                n = a/c;//得出BTC对ETH兑换比例
                v = b*n;//得出ETH的数量
                xx = t*2000;
            if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input1").val(1);
            }
            if(isNaN(b)==true)
            {
                $("#input3").val(1);
             }
              if(isNaN(c)==true)
            {
                $("#input2").val(1);
             }
            if(v<2000&&b!==''&&a!==''&&c!==''){
                $("#price01").text((m*b).toFixed(6));
                $("#price00").text(b.toFixed(6));
            }else if(v>=2000&&b<5000&&b!==''&&a!==''&&c!==''){
                $("#price01").text(((m*b)/0.95).toFixed(6));
                $("#price00").text(b.toFixed(6));
            }else if(v>=5000&&b<8000&&b!==''&&a!==''&&c!==''){
                $("#price01").text(((m*b)/0.9).toFixed(6));
                $("#price00").text(b.toFixed(6));
            }else if(v>=8000&&b<12000&&b!==''&&a!==''&&c!==''){
                $("#price01").text(((m*b)/0.85).toFixed(6));
                $("#price00").text(b.toFixed(6));
            }else if(v>=12000&&b!==''&&a!==''&&c!==''){
                $("#price01").text(((m*b)/0.8).toFixed(6));
                $("#price00").text(b.toFixed(6));
            }

             if(a!==''&&c!==''){
                $("#BTCC1").text(xx);
            }

             })


            $("#select1").change(function(){
            var a = $("#input1").val();//当天BTC美元价格
            var b = $("#input3").val();//BTC投资数量
            var c = $("#input2").val();//当天ETH美元价格
            var m = a/1.5;//得出BTC对little币的兑换比例
                n = a/c;//得出BTC对ETH兑换比例
                t = c/a;//得出ETH对BTC兑换比例
                v = b*n;//得出ETH的数量
                xx = t*2000;
                
             var sss = $("#price01").text();
             shuzu.push(sss);
             if(a==''||b==''){
                alert("请填写完整信息");
                $("#select1").val(101);
                shuzu = shuzu.splice(shuzu.length,0);
             }
            if(v<2000){
             var lllll = (shuzu[0])*1;
             var llll = (shuzu[0])*1;
             var lll = (shuzu[0])*1;
             var ll = (shuzu[0])*1;
            }else if(v>=2000&&v<5000){
             var lllll = (shuzu[0]*0.95)/0.89;
             var llll = (shuzu[0]*0.95)/0.91;
             var lll = (shuzu[0]*0.95)/0.93;
             var ll = (shuzu[0]*0.95)/0.95;
            }else if(v>=5000&&v<8000){
             var lllll = (shuzu[0]*0.9)/0.84;
             var llll = (shuzu[0]*0.9)/0.86;
             var lll = (shuzu[0]*0.9)/0.88;
             var ll = (shuzu[0]*0.9)/0.9;
            }else if(v>=8000&&v<12000){
             var lllll = (shuzu[0]*0.85)/0.79;
             var llll = (shuzu[0]*0.85)/0.81;
             var lll = (shuzu[0]*0.85)/0.83;
             var ll = (shuzu[0]*0.85)/0.85;
            }else if(v>12000){
             var lllll = (shuzu[0]*0.8)/0.74;
             var llll = (shuzu[0]*0.8)/0.76;
             var lll = (shuzu[0]*0.8)/0.78;
             var ll = (shuzu[0]*0.8)/0.8;
            }
            var kkk = $(this).val();
            if (kkk==103) {
                $("#price01").text(ll.toFixed(6));
            }else if(kkk==106){
                $("#price01").text(lll.toFixed(6));
            }else if(kkk==109){
                $("#price01").text(llll.toFixed(6));
            }else if(kkk==1012){
                $("#price01").text(lllll.toFixed(6));
            }
            

             $(function () {
                $("#input1,#input2,#input3").bind("input propertychange", function () {
                   shuzu = shuzu.splice(shuzu.length,0);
                   $("#select1").val(101);
                   var a = $("#input1").val();//当天BTC美元价格
            var b = $("#input3").val();//BTC投资数量
            var c = $("#input2").val();//当天ETH美元价格
            var m = a/1.5;//得出BTC对little币的兑换比例
                n = a/c;//得出BTC对ETH兑换比例
                t = c/a;//得出ETH对BTC兑换比例
                v = b*n;//得出ETH的数量
                xx = t*2000;
            if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input1").val(1);
            }
            if(isNaN(b)==true)
            {
                $("#input3").val(1);
             }
             if(isNaN(c)==true)
            {
                $("#input2").val(1);
             }
            if(v<2000&&b!==''&&a!==''&&c!==''){
                $("#price01").text(m*b);
                $("#price00").text(b);
            }else if(v>=2000&&b<5000&&b!==''&&a!==''&&c!==''){
                $("#price01").text((m*b)/0.95);
                $("#price00").text(b);
            }else if(v>=5000&&b<8000&&b!==''&&a!==''&&c!==''){
                $("#price01").text((m*b)/0.9);
                $("#price00").text(b);
            }else if(v>=8000&&b<12000&&b!==''&&a!==''&&c!==''){
                $("#price01").text((m*b)/0.85);
                $("#price00").text(b);
            }else if(v>=12000&&b!==''&&a!==''&&c!==''){
                $("#price01").text((m*b)/0.8);
                $("#price00").text(b);
            }
            
              var ssss = $("#price01").text();
                shuzu.push(ssss);
             
            if(v<2000){
             var lllll = (shuzu[0])*1;
             var llll = (shuzu[0])*1;
             var lll = (shuzu[0])*1;
             var ll = (shuzu[0])*1;
            }else if(v>=2000&&v<5000){
             var lllll = (shuzu[0]*0.95)/0.89;
             var llll = (shuzu[0]*0.95)/0.91;
             var lll = (shuzu[0]*0.95)/0.93;
             var ll = (shuzu[0]*0.95)/0.95;
            }else if(v>=5000&&v<8000){
             var lllll = (shuzu[0]*0.9)/0.84;
             var llll = (shuzu[0]*0.9)/0.86;
             var lll = (shuzu[0]*0.9)/0.88;
             var ll = (shuzu[0]*0.9)/0.9;
            }else if(v>=8000&&v<12000){
             var lllll = (shuzu[0]*0.85)/0.79;
             var llll = (shuzu[0]*0.85)/0.81;
             var lll = (shuzu[0]*0.85)/0.83;
             var ll = (shuzu[0]*0.85)/0.85;
            }else if(v>12000){
             var lllll = (shuzu[0]*0.8)/0.74;
             var llll = (shuzu[0]*0.8)/0.76;
             var lll = (shuzu[0]*0.8)/0.78;
             var ll = (shuzu[0]*0.8)/0.8;
            }



             var kkk = $(this).val();
            if (kkk==103) {
                $("#price01").text(ll.toFixed(6));
            }else if(kkk==106){
                $("#price01").text(lll.toFixed(6));
            }else if(kkk==109){
                $("#price01").text(llll.toFixed(6));
            }else if(kkk==1012){
                $("#price01").text(lllll.toFixed(6));
            }

            if(a!==''&&c!==''){
                $("#BTCC1").text(xx);
            }


            })

       })

            })

            $("#btn1").click(function(){
                window.location.reload();
            })
            
            })
    </script>


    <!-- CNY -->

      <script type="text/javascript">
        $(document).ready(function(){
            var shuzu = new Array();
            $("#cnydiv input").keyup(function(){//给input添加键盘监听事件
                var a = $("#input4").val();//以太币单价(美元)
                var b = $("#input5").val();//以太币单价(人民币)
                var c = $("#input6").val();//人民币投资金额
                var d = a/1.5;//little币单价1.5美元,得出以太币对LITTLE币兑换比例
                    e = c/b;//得出投资若干人民币的以太币的数量
                    f = e*d;//得出用人民币投资的LITTLE币的数量
            if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input4").val(1);
            }
            if(isNaN(b)==true)
            {
                $("#input5").val(1);
            }
            if(isNaN(c)==true)
            {
                $("#input6").val(1);
            }
            //折扣方案
            if(e<2000&&a!==''&&b!==''&c!==''){
                $("#none3333").text(f.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=2000&&e<5000&&a!==''&&b!==''&c!==''){
                 var j = (f)/0.95;
                $("#none3333").text(j.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=5000&&e<8000&&a!==''&&b!==''&c!==''){
                 var k = (f)/0.9;
                $("#none3333").text(k.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=8000&&e<12000&&a!==''&&b!==''&c!==''){
                 var l = (f)/0.85;
                $("#none3333").text(l.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=12000&&a!==''&&b!==''&c!==''){
                 var m = (f)/0.8;
                $("#none3333").text(m.toFixed(6));
                $("#none33").text(c.toFixed(6));
            } 
            if(b!==''){
                    $("#none22").text(b*2000);
            }
            })
             
            $("#select2").change(function(){//select选择改变事件
             var a = $("#input4").val();//以太币单价(美元)
             var b = $("#input5").val();//以太币单价(人民币)
             var c = $("#input6").val();//人民币投资金额
             var d = a/1.5;//little币单价1.5美元,得出以太币对LITTLE币兑换比例
                 e = c/b;//得出投资若干人民币的以太币的数量
                 f = e*d;//得出用人民币投资的LITTLE币的数量
             var sss = $("#none3333").text();
             shuzu.push(sss);
             //判断验证
            if(a==''&&b==''&&c==''){
                alert("请填写完整信息！");
                $("#select2").val(201);
                shuzu = shuzu.splice(shuzu.length,0);
            }else if(a==''&&b==''&&c!==''){
                alert("请填写完整信息！");
                $("#select2").val(201);
                shuzu = shuzu.splice(shuzu.length,0);
            }else if(a!==''&&b==''&&c!==''){
                alert("请输入以太币人民币单价");
                $("#select2").val(201);
                shuzu = shuzu.splice(shuzu.length,0);
            }else if(a!==''&&b!==''&&c==''){
                alert("请输入人民币投资金额");
                $("#select2").val(201);
                shuzu = shuzu.splice(shuzu.length,0);
            }else if(a==''&&b!==''&&c!==''){
                alert("请输入以太币美元币单价");
                $("#select2").val(201);
                shuzu = shuzu.splice(shuzu.length,0);
            }else  if(a==''||b==''||c==''){
                alert("请填写完整信息！");
                $("#select2").val(201);
                shuzu = shuzu.splice(shuzu.length,0);
            }
             if(e<2000){
             var lllll = (shuzu[0])*1;
             var llll = (shuzu[0])*1;
             var lll = (shuzu[0])*1;
             var ll = (shuzu[0])*1;
            }else if(e>=2000&&e<5000){
             var lllll = (shuzu[0]*0.95)/0.89;
             var llll = (shuzu[0]*0.95)/0.91;
             var lll = (shuzu[0]*0.95)/0.93;
             var ll = (shuzu[0]*0.95)/0.95;
            }else if(e>=5000&&e<8000){
             var lllll = (shuzu[0]*0.9)/0.84;
             var llll = (shuzu[0]*0.9)/0.86;
             var lll = (shuzu[0]*0.9)/0.88;
             var ll = (shuzu[0]*0.9)/0.9;
            }else if(e>=8000&&e<12000){
             var lllll = (shuzu[0]*0.85)/0.79;
             var llll = (shuzu[0]*0.85)/0.81;
             var lll = (shuzu[0]*0.85)/0.83;
             var ll = (shuzu[0]*0.85)/0.85;
            }else if(e>12000){
             var lllll = (shuzu[0]*0.8)/0.74;
             var llll = (shuzu[0]*0.8)/0.76;
             var lll = (shuzu[0]*0.8)/0.78;
             var ll = (shuzu[0]*0.8)/0.8;
            }
             var kkk = $(this).val();
            if (kkk==213) {
                $("#none3333").text(ll.toFixed(6));
            }else if(kkk==216){
                $("#none3333").text(lll.toFixed(6));
            }else if(kkk==219){
                $("#none3333").text(llll.toFixed(6));
            }else if(kkk==2012){
                $("#none3333").text(lllll.toFixed(6));
            }
          
             $(function () {//input输入框值改变后重新算
                $("#input4,#input5,#input6").bind("input propertychange", function () {
                   shuzu = shuzu.splice(shuzu.length,0);
                   $("#select2").val(201);
                   var a = $("#input4").val();//以太币单价(美元)
                   var b = $("#input5").val();//以太币单价(人民币)
                   var c = $("#input6").val();//人民币投资金额
                   var d = a/1.5;//little币单价1.5美元,得出以太币对LITTLE币兑换比例
                       e = c/b;//得出投资若干人民币的以太币的数量
                       f = e*d;//得出用人民币投资的LITTLE币的数量

             if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input4").val(1);
            }
            if(isNaN(b)==true)
            {
                $("#input5").val(1);
            }
            if(isNaN(c)==true)
            {
                $("#input6").val(1);
            }

             if(e<2000&&a!==''&&b!==''&c!==''){
                $("#none3333").text(f.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=2000&&e<5000&&a!==''&&b!==''&c!==''){
                 var j = (f)/0.95;
                $("#none3333").text(j.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=5000&&e<8000&&a!==''&&b!==''&c!==''){
                 var k = (f)/0.9;
                $("#none3333").text(k.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=8000&&e<12000&&a!==''&&b!==''&c!==''){
                 var l = (f)/0.85;
                $("#none3333").text(l.toFixed(6));
                $("#none33").text(c.toFixed(6));
            }else if(e>=12000&&a!==''&&b!==''&c!==''){
                 var m = (f)/0.8;
                $("#none3333").text(m.toFixed(6));
                $("#none33").text(c.toFixed(6));
            } 
             var sssss = $("#none3333").text();
             shuzu.push(sssss);
             if(e<2000){
             var lllll = (shuzu[0])*1;
             var llll = (shuzu[0])*1;
             var lll = (shuzu[0])*1;
             var ll = (shuzu[0])*1;
            }else if(e>=2000&&e<5000){
             var lllll = (shuzu[0]*0.95)/0.89;
             var llll = (shuzu[0]*0.95)/0.91;
             var lll = (shuzu[0]*0.95)/0.93;
             var ll = (shuzu[0]*0.95)/0.95;
            }else if(e>=5000&&e<8000){
             var lllll = (shuzu[0]*0.9)/0.84;
             var llll = (shuzu[0]*0.9)/0.86;
             var lll = (shuzu[0]*0.9)/0.88;
             var ll = (shuzu[0]*0.9)/0.9;
            }else if(e>=8000&&e<12000){
             var lllll = (shuzu[0]*0.85)/0.79;
             var llll = (shuzu[0]*0.85)/0.81;
             var lll = (shuzu[0]*0.85)/0.83;
             var ll = (shuzu[0]*0.85)/0.85;
            }else if(e>12000){
             var lllll = (shuzu[0]*0.8)/0.74;
             var llll = (shuzu[0]*0.8)/0.76;
             var lll = (shuzu[0]*0.8)/0.78;
             var ll = (shuzu[0]*0.8)/0.8;
            }
             var kkk = $(this).val();
            if (kkk==213) {
                $("#none3333").text(ll.toFixed(6));
            }else if(kkk==216){
                $("#none3333").text(lll.toFixed(6));
            }else if(kkk==219){
                $("#none3333").text(llll.toFixed(6));
            }else if(kkk==2012){
                $("#none3333").text(lllll.toFixed(6));
            }  
                });
            })
           
            })
            $("#btn2").click(function(){
                window.location.reload();
            })
    
})
           
    </script>





<!-- ETH -->



       <script type="text/javascript">
        $(document).ready(function(){
            var shuzu = new Array();
            
            $("#ethdiv input").keyup(function(){//给input添加键盘监听事件
            var a = $("#input7").val();//当天以太币美元价格
            var b = $("#input8").val();//ETH投资数量
            var m = a/1.5;//Lit_Eth 得出以太币对little币的兑换比例()
            if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input7").val(1);
            }
            if(isNaN(b)==true)
            {
                $("#input8").val(1);
             }
            if(b<2000&&b!==''&&a!==''){
                $("#price3").text((m*b).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=2000&&b<5000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.95).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=5000&&b<8000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.9).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=8000&&b<12000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.85).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=12000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.8).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }
             })


            $("#select3").change(function(){
             var a = $("#input7").val();//当天以太币美元价格
             var b = $("#input8").val();//ETH投资数量
             var sss = $("#price3").text();
             shuzu.push(sss);
             if(a==''||b==''){
                alert("请填写完整信息");
                $("#select3").val(301);
                shuzu = shuzu.splice(shuzu.length,0);
             }
            if(b<2000){
             var lllll = (shuzu[0])*1;
             var llll = (shuzu[0])*1;
             var lll = (shuzu[0])*1;
             var ll = (shuzu[0])*1;
            }else if(b>=2000&&b<5000){
             var lllll = (shuzu[0]*0.95)/0.89;
             var llll = (shuzu[0]*0.95)/0.91;
             var lll = (shuzu[0]*0.95)/0.93;
             var ll = (shuzu[0]*0.95)/0.95;
            }else if(b>=5000&&b<8000){
             var lllll = (shuzu[0]*0.9)/0.84;
             var llll = (shuzu[0]*0.9)/0.86;
             var lll = (shuzu[0]*0.9)/0.88;
             var ll = (shuzu[0]*0.9)/0.9;
            }else if(b>=8000&&b<12000){
             var lllll = (shuzu[0]*0.85)/0.79;
             var llll = (shuzu[0]*0.85)/0.81;
             var lll = (shuzu[0]*0.85)/0.83;
             var ll = (shuzu[0]*0.85)/0.85;
            }else if(b>12000){
             var lllll = (shuzu[0]*0.8)/0.74;
             var llll = (shuzu[0]*0.8)/0.76;
             var lll = (shuzu[0]*0.8)/0.78;
             var ll = (shuzu[0]*0.8)/0.8;
            }
            var kkk = $(this).val();
            if (kkk==323) {
                $("#price3").text(ll.toFixed(6));
            }else if(kkk==326){
                $("#price3").text(lll.toFixed(6));
            }else if(kkk==329){
                $("#price3").text(llll.toFixed(6));
            }else if(kkk==3012){
                $("#price3").text(lllll.toFixed(6));
            }
            


             $(function () {//input输入框值改变后重新算
                $("#input7,#input8").bind("input propertychange", function () {
                   shuzu = shuzu.splice(shuzu.length,0);
                   $("#select3").val(301);
                   var a = $("#input7").val();//当天以太币美元价格
                   var b = $("#input8").val();//ETH投资数量
                   var m = a/1.5;//得出以太币对little币的兑换比例
                   if(isNaN(a)==true)//判断input的value是否为字符串
            {
                $("#input7").val(1);
            }
            if(isNaN(b)==true)
            {
                $("#input8").val(1);
             }
              if(b<2000&&b!==''&&a!==''){
                $("#price3").text((m*b).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=2000&&b<5000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.95).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=5000&&b<8000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.9).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=8000&&b<12000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.85).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }else if(b>=12000&&b!==''&&a!==''){
                $("#price3").text(((m*b)/0.8).toFixed(6));
                $("#price2").text(b.toFixed(6));
            }
            
              var ssss = $("#price3").text();
                shuzu.push(ssss);
             // var lllll = shuzu[0]/0.94;
             // var llll = shuzu[0]/0.96;
             // var lll = shuzu[0]/0.98;
             // var ll = shuzu[0]/1;

            if(b<2000){
             var lllll = (shuzu[0])*1;
             var llll = (shuzu[0])*1;
             var lll = (shuzu[0])*1;
             var ll = (shuzu[0])*1;
            }else if(b>=2000&&b<5000){
             var lllll = (shuzu[0]*0.95)/0.89;
             var llll = (shuzu[0]*0.95)/0.91;
             var lll = (shuzu[0]*0.95)/0.93;
             var ll = (shuzu[0]*0.95)/0.95;
            }else if(b>=5000&&b<8000){
             var lllll = (shuzu[0]*0.9)/0.84;
             var llll = (shuzu[0]*0.9)/0.86;
             var lll = (shuzu[0]*0.9)/0.88;
             var ll = (shuzu[0]*0.9)/0.9;
            }else if(b>=8000&&b<12000){
             var lllll = (shuzu[0]*0.85)/0.79;
             var llll = (shuzu[0]*0.85)/0.81;
             var lll = (shuzu[0]*0.85)/0.83;
             var ll = (shuzu[0]*0.85)/0.85;
            }else if(b>12000){
             var lllll = (shuzu[0]*0.8)/0.74;
             var llll = (shuzu[0]*0.8)/0.76;
             var lll = (shuzu[0]*0.8)/0.78;
             var ll = (shuzu[0]*0.8)/0.8;
            }


             var kkk = $(this).val();
            if (kkk==323) {
                $("#price3").text(ll.toFixed(6));
            }else if(kkk==326){
                $("#price3").text(lll.toFixed(6));
            }else if(kkk==329){
                $("#price3").text(llll.toFixed(6));
            }else if(kkk==3012){
                $("#price3").text(lllll.toFixed(6));
            }

            })

       })

            })

            $("#btn3").click(function(){
                window.location.reload();
            })
            
            })
    </script>