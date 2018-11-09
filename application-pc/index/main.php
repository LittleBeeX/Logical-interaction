<section class="home">
	<div class="home-banner">
		<div class="banner-container">
			<div class="banner-group">
				<div class="banner-body">
					<h2><?=$main['list1']['text1']?></h2>
					<h2><?=$main['list1']['text2']?></h2>
				</div>
				<div class="banner-layer"></div>
			</div>
		</div>
	</div>
</section>
<section class="platform">
	<div class="container">
		<div class="title">
			<h2><?=$main['list2']['text1']?></h2>
			<p><?=$main['list2']['text2']?></p>
		</div>
		<div class="platform-item">
			<div class="items items1 scrollChange">
				<div class="icon"></div>
				<h3><?=$main['list2']['text3']?></h3>
				<p><?=$main['list2']['text4']?></p>
				<a class="item-layer" target="_blank" href="javascript:void(0)" target="_blank"></a>
			</div>
			<div class="items items2 scrollChange">
				<div class="icon "></div>
				<h3><?=$main['list2']['text5']?></h3>
				<p><?=$main['list2']['text6']?></p>
				<a class="item-layer" target="_blank" href="javascript:void(0)" target="_blank"></a>
			</div>
			<div class="items items3 scrollChange">
				<div class="icon"></div>
				<h3><?=$main['list2']['text7']?></h3>
				<p><?=$main['list2']['text8']?></p>
				<a class="item-layer" target="_blank" href="javascript:void(0)" target="_blank"></a>
			</div>
		</div>
	</div>
</section>
<section class="littlebee-form">
	<div class="form-title">
		<h4><?=$main['list3']['text1']?></h4>
		<p><?=$main['list3']['text2']?></p>
	</div>
	<div class="form-board">
		<form action="">
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			<span id="button"><?=$main['list3']['text3']?></span>
		</form>
	</div>
</section>

<script type="text/javascript">
	$('#button').click(function() {
		var email = $('#exampleInputEmail1').val();
		$.ajax({
			url : '/index.php/cn/home/index/main_ajax',
			type : 'POST',
			data : {email:email},
			dataType : "json",
			success:function(e){
				alert(e.state);
			} 
		})
	});
</script>