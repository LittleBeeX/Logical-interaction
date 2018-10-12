
<div id="pub_edit_bootbox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


<link rel="stylesheet" href="/public/assets/sysadmin/css/plugins/datetimepicker/datetimepicker.css">
<script src="/public/assets/sysadmin/js/plugins/datetimepicker/datetimepicker.js"></script>
<script src="/public/assets/sysadmin/js/plugins/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>



    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">选择时间</h3>
        <div class="modal-body">
			<div class="controls">
					<label class="radio">
						<input type="radio" name="tmradio" value="5" checked > 本周
					</label>
					<label class="radio">
						<input type="radio" name="tmradio" value="1" > 本月
					</label>
					<label class="radio">
						<input type="radio" name="tmradio" value="2" > 本季度
					</label>
					<label class="radio">
						<input type="radio" name="tmradio" value="3" > 本年
					</label>
			</div>
			<div class="control-group">
			        <label class="radio">
						<input type="radio" name="tmradio" value="4" id='tmradio4'> 自定义时间
					</label>			

					<div class="controls">
						<input type="text" class="input-medium datepick" data-rule-required="true"  data-rule-minlength="2" placeholder='开始时间' id="startseltime" value=''  > -
						<input type="text" class="input-medium datepick" data-rule-required="true"  data-rule-minlength="2" placeholder='结束时间' id="endseltime" value=''>
					
					</div>				
			</div>			
			
				
			
				<div class="form-actions">					
					<input type="button" onclick="seltime()" class="btn btn-primary" value="确定" class="btn ">
					<button class="btn" type="button" data-dismiss="modal">取消</button>
				</div>
			
		</div>
    </div>

</div>
<script>
	
	//id seltime 在父页面
	function seltime(){
		var t=$("input[name='tmradio']:checked").val();

		if(t=='4'){
			var startseltime=$("#startseltime").val();
			var endseltime=$("#endseltime").val();
			if(startseltime != ""&&endseltime !="")	{
				 $("#seltime").html(startseltime+"至"+endseltime);
				 $("#timesel").val(startseltime+"@"+endseltime);
				}else
				{
					$("#seltime").html("");
				    $("#timesel").val("");
				}
		}else{	
			var val	;
			if(t==5){
				val	=	"本周";
			}else if(t==1){
				val	=	"本月";
			}else if(t==2){
				 val	=	"本季度";
			}else if(t==3){
				 val	=	"本年";
			}
			$("#seltime").html(val);
			$("#timesel").val(t);
		}
		$("#pub_edit_bootbox").hide();
		$(".modal-backdrop").hide();
		
	}

</script>
<script src="/public/assets/sysadmin/js/eakroko.js"></script>
<script src="/public/assets/sysadmin/js/application.js"></script>
<script src="/public/assets/sysadmin/js/demonstration.js"></script>