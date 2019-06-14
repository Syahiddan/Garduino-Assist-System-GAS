
<div class="container-fluid bg-light border rounded border-success">
	<p class="h4 text-success text-center">Update Plant Information</p>

	<div class="col-12 my-1">
		<center><img class="pic-data" src="asset/garden.png" height="70"></center>
		<p><center> <text class="id id-data"></text> <br>  </center>
			<!-- <form class="submit-update" action="http://192.168.137.1/gasMobile/server.php" method="post" enctype="multipart/form-data"> -->
				<!-- <input type="hidden" name="function" value="updatePlantData"> -->
				<input type="hidden" class="name-plant-id" name="plant_id" value="">
				<label><small>Name</small></label>
				<input class="text-center form-control name-data update"type="text" name="name" placeholder="">

				<label><small>Scientific Name</small></label>
				<input class="text-center form-control sname-data update"type="text" name="sname" placeholder="">

				<label><small>Description</small></label>
				<textarea class="text-center form-control desc-data update"type="text" name="desc" placeholder=""></textarea>

				<!-- <div class="control-group"> -->
					<!-- <label class="control-label" for="images"><small>Plant Image </small></label> -->
					<!-- <div class="controls"> -->
						<!-- <input class="pic-data update"type="file" id="" name="image" > -->
					<!-- </div> -->
				<!-- </div> -->

				<div class="text-center my-3 mt-3">
					<button class="btn btn-block btn-success submit-plant-update"> Submit </button>
				</div>
			<!-- </form> -->
	</div>


		<script>
			$(".submit-plant-update").on("click",function(){
				// alert("oi");
				var plant_id = $(".name-plant-id").val();
				var name = $(".name-data.update").val();
				var sname = $(".sname-data.update").val();
				var desc = $(".desc-data.update").val();
				var image = new FormData($(".pic-data.update")[0]);

				$.post("http://192.168.137.1/gasMobile/server.php",{function:"updatePlantData",plant_id:plant_id,name:name,sname:sname,desc:desc},function(data){
					// alert("oi");
					if(data.status == "success")
					{
						window.location.href = "worker-garden.php";
					}
				},"json");


			});
		</script>

</div>
