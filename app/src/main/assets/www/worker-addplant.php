

<div class="container-fluid bg-light py-3 border rounded border-success"  style="position: relative;z-index: 1">
	<div class="row">
		<div class="col-12 text-right">
			<img src="asset/close.png" class="my-auto py-auto" height="20">
		</div>
		<p class="h4 text-success text-center mt-6 col-12">Insert New Plant</p>
	</div>

	<div class="col-12 mt-3 mb-2">
		<p><center> <text class="id id-data"></text> <br>  </center>

			<label><small>Name</small></label>
			<input class="text-center form-control name-data"type="text" name="fname" placeholder="">

			<label><small>Scientific Name</small></label>
			<input class="text-center form-control sname-data"type="text" name="lname" placeholder="">

			<label><small>Description</small></label>
			<textarea class="text-center form-control desc-data"type="text" name="" placeholder=""></textarea>

			<div class="control-group">
				<label class="control-label" for="images"><small>Plant Image </small></label>
				<div class="controls">
					<input class="pic-data"type="file" id="" name="images" required>
				</div>
			</div>

			<div class="text-center my-3 mt-3">
				<button class="btn btn-block btn-success submit-report"> Submit </button>
			</div>
		</div>


		<script>
				// alert("huui");
				// alert(sessionStorage.getItem("id"));
				getWorkerData();
				$(".submit-report").on("click",function(){
					var plant_img = $(".plant_img").val();
					var name = $(".name-data").val();
					var sname = $(".sname-data").val();
					var desc = $(".desc-data").val();

					plant_img = plant_img.trim();
					name = name.trim();
					sname = sname.trim();
					desc = desc.trim();
					

					if(name != "" && sname != "" && desc != ""&& plant_img !="")
					{
						$.post("server.php",{function:"updateWorkerData",plant_img:plant_img,name:name,sname:sname,desc:desc,},function(data){

						},"json");
					}

				});
				function getWorkerData()
				{
					$(".form-worker").removeClass("d-none");
					$.post("server.php",{function:"getWorkerData",user:sessionStorage.getItem("id")},function(data){
						if(data.status == "valid")
						{
							$(".name-data").val(data.info.fname);
							$(".sname-data").val(data.info.lname);
							$(".desc-data").val(data.info.age);
							$(".pic-data").attr("src","asset/"+data.info.user_img);
						}

					},"json");

				}
			</script>

		</div>