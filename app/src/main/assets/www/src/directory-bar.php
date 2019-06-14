<div class="row px-3 py-1 bg-info div-directory fixed-top" style="position: relative;z-index: 1">
	<div class="bg-info col-2 text-white btn" disabled>GARDEN</div>
	<div class="col-8 directory text-left"> <text class="dir-1-div d-none">/</text>	
		<button class="btn dir-1 d-none btn-success text-white"></button> <text class="dir-2-div d-none">/</text>
		<button class="btn dir-2 d-none btn-success text-white"></button>
	</div>
	<div class="col-2 my-auto text-right">
		<button class="btn btn-back-main p-0 mx-0 my-auto btn-warning">
			<img src="asset/home.png" height="25">
		</button>
	</div>

	<script>
		$(document).ready(function(){	
			$(".btn.d-none").on("click",function(){
				var btnNode = $(this).text();
				if(btnNode == "Place")
				{
					window.location.href = "worker-garden.php";
					$(".dir-2").addClass("d-none");
					$(".dir-2-div").addClass("d-none");
					$(".dir-2").text("");
				}
			});
			$(".btn-back-main").on("click",function(){
				window.location.href = "worker.php";
			});
		});
	</script>
</div>