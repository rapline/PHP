

<html>
<head>
<script src="http://localhost:8888/js/jquery-1.9.1.js"></script>
<script src="http://localhost:8888/js/jquery-migrate-1.2.1.js"></script>
<script>

jQuery(function ($) {

$("#btn").on("click", function () {

	var cnt = $("#output").children('span').length

	$.getJSON("index.json?offset=" + cnt, function(data){
			for(var i in data){
				$("#output").append("<span>" + data[i].Prefecture.id + " : " + data[i].Prefecture.PREF_KJ_NAME + "</span><br>");
			}
			
			if(data.length < 10){
				$("#btn").css("display", "none");
			}else{
				$("#btn").text("さらに表示");
			}
	});
	
	var targetOffset = $('#bottom').offset().top;
	
	$('html,body').animate({ scrollTop: $('#bottom').offset().top }, { duration: 2000, easing: 'linear', });	
	
});

$("div.btn").hover(
	function(){
		$(this).css("cursor","pointer"); //---カーソルを指に
	},
	function(){
		$(this).css("cursor","default"); //---カーソルを戻す
	}
);

});

</script>

<style type="text/css">
<!--
.btn{
	color:#FFF;
	text-align: center;
	width:100px;
	height:20px;
	background-color:#09C;
}
-->
</style>

</head>
<body>

<div id="output"></div>

<div class="btn" id="btn">表示</div>

<div id="bottom"></div>

</body>
</html>