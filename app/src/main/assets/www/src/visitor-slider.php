<div class="row">
	<div class="col-8 bg-light outline slider h-100 fixed-top slider-panel " style="margin-top:50px;">
		<div class="row my-2">
			<div class="col-3">
			</div>
			<div class="col-6 ">
				<center><img src="http://192.168.137.1/gasMobile/asset/user.png" height="70"></center>
				<p><center> <text class="id">W001</text> <br> <text class="fname">Shidanino</text> </center></p>
			</div>
			<div class="col-3">

				<button class="btn-logout btn btn-block btn-outline-info text-center btn-sm"><img src="asset/logout.png" height="20"></button> 
				<br><br><br>
				<button class="btn btn-block btn-outline-info text-center btn-sm"><img src="asset/setting.png" height="20"></button>
			</div>

			
			<div class="col-12 ">
				<button class="btn-garden btn btn-block btn-outline-info text-left btn-sm"><img src="asset/garden.png" height="30"> Garden</button>
			</div>
			<div class="col-12 mb-3">
				<button class="btn-logout btn btn-block btn-outline-info text-left btn-sm"><img src="asset/logout.png" height="30"> Logout</button>
			</div>
		</div>
	</div>
</div>
<script>
	$("body").on("click",function(evt){
		if(!$(evt.target).is(".toggle-btn"))
		{
			if(isOpen)
			{
				$(".toggle-btn").click();
			}
		}
	});
	var panelwidth = $(".slider-panel").outerWidth();
	$(".slider").css("margin-left",-panelwidth);
	$(".id").text(sessionStorage.getItem("id"));
	$(".fname").text(sessionStorage.getItem("fname"));
	var isOpen = false;
	$(".toggle-btn").on("click",function(){

		var slider = $(".slider");
		if (!isOpen){
			$(".slider").animate({left:panelwidth},350); // 200px is the width of the sidebar
			$(".slider").css('display', "auto");
			isOpen=true;
		}
					
		else {
			$(".slider").animate({left:-panelwidth},350); // 200px is the width of the sidebar
			$(".slider").css('display', "auto");
			isOpen=false;
		}
	});
	$(".btn-garden").on("click",function(){
		$(".toggle-btn").click();
		window.setTimeout($(".slider").finish(),3000);
		window.location.href = "visitor.php";

	});
	$(".btn-logout.btn").on("click",function(){
		if(confirm("Are you sure to log out ?"))
		{
			alert("log out");
			sessionStorage.clear();
			window.location.href = "index.php";
			
		}
		// $(".toggle-btn").click();
		// window.setTimeout($(".slider").finish(),3000);
		// window.location.href = "../index.php";
	});
</script>