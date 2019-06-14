<div class="container-fluid worker-toolbar" >
	<div class="row">
		<div class="col-12 w-100 fixed-top bg-success" >
			<div class="row w-100">
				<div class="col-1 my-auto">
					<img class="toggle-btn btn p-0" src="asset/threeBar.png" height="50">
				</div>
				<div class="col-9 ml-3 my-auto"> 
					<input class="d-none form-control toolbar-search" type="text" name="" placeholder="Search">
					<p class="col-8 text-center my-auto h5 titleLabel">GAS</p>
				</div>
				<!-- <p class="d-none col-8 text-center my-auto h5 titleLable">GAS</p> -->
				<!-- <input class=" text-center my-auto form-control" type="text" name="" placeholder="Search"> -->
				<div class="col-1">
					<img class="btn btn-toolbar-search mt-1" src="asset/search.png" height="40">
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(".btn-toolbar-search").on("click",function(){
		var toolSearch = $(".toolbar-search");
		var titleLabel = $(".titleLabel");
		if(toolSearch.hasClass("d-none"))
		{
			titleLabel.addClass("d-none");
			toolSearch.removeClass("d-none");
		}
		else
		{
			titleLabel.removeClass("d-none");
			toolSearch.addClass("d-none");
		}
	});
</script>