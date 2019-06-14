

<div class="container-fluid bg-light" style="margin-top: 50px">

	<div class="row" style="overflow: scroll;height: 300px">
		<table class="table table-bordered table-striped table-sm">
			<tr>
				<td>No</td>
				<td>Name</td>
				<td>Scientific Name</td>
				<td>Action</td>
			</tr>
			<tbody class="item-content">
						<!-- 
						<tr>
							<td>1</td>
							<td>item-name</td>
							<td>quantity</td>
							<td><button class="btn p-0 btn-block">lel</button></td>
						</tr> -->
					</tbody>
				</table>
			</div>
			<div class="row edit-item-div fixed-bottom py-5 my-5 rounded bg-light d-none" style="margin-bottom:1000px">
				<div class="col-12">
					<div class="text-center my-2"> Plant Information</div>
					<div class="row mx-1">
						<label class="col-4 my-auto text-center"><small>Plant ID</small></label>
						<input class="col-8 form-control data-id" type="text" value="">
						<label class="col-4 my-auto text-center mt-1"><small>Name</small></label>
						<input class="col-8 form-control mt-1 data-name" type="text" value="">
						<label class="col-4 my-auto text-center mt-1"><small>Scientific Name</small></label>
						<input class="col-8 form-control mt-1 data-quantity" type="text" value="">

						<div class="btn-group my-4 col-12">
							<button class="btn col-4 table-sm btn-outline-info btn-transfer">Transfer</button>
							<button class="btn col-4 table-sm btn-outline-primary btn-add">Add</button>
							<button class="btn col-4 table-sm btn-outline-danger btn-delete">Delete</button>
						</div>
						<div class="tab row mx-1 div-transfer d-none bg-light p-1">
							<div class="col-12 text-right"></div>
							<label class="col-4 my-auto text-center mt-1"><small>Transfer to</small></label>
							<select class="col-8 form-control mt-1 t-name">
								<option>lol</option>
								<option>lol</option>
							</select>
							<label class="col-4 my-auto text-center mt-1"><small>Transfer Quantity</small></label>
							<input class="col-8 form-control mt-1 t-quantity" type="number" value="">
							<div class="col-12 text-center mt-2"><button class="btn btn-info">Submit</button></div>
						</div>
						<div class="tab row mx-1 div-add bg-light p-1 d-none">
							<label class="col-4 my-auto text-center mt-1"><small>Quantity</small></label>
							<input class="col-8 form-control mt-1 data-quantity" type="number" value="">
							<div class="col-12 text-center mt-2"><button class="btn btn-primary">Submit</button></div>
						</div>
						<div class="tab row mx-1 div-delete bg-light p-1 d-none">
							<label class="col-4 my-auto text-center mt-1"><small>Quantity</small></label>
							<input class="col-8 form-control mt-1 data-quantity" type="number" value="">
							<div class="col-12 text-center mt-2"><button class="btn btn-danger">Submit</button></div>
						</div>
						
						<script>
							$(".btn-transfer").on("click",function(){
								unset();
								$(".div-transfer").removeClass("d-none");
								$(this).addClass("active");
							});

							$(".btn-add").on("click",function(){
								unset();
								$(".div-add").removeClass("d-none");
								$(this).addClass("active");
							});
							$(".btn-delete").on("click",function(){
								unset();
								$(".div-delete").removeClass("d-none");
								$(this).addClass("active");
							});
							function unset()
							{
								$(".btn-group").find(".btn").removeClass("active");
								$(".tab").addClass("d-none");
							}
						</script>
					</div>
				</div>

			</div>
			<div class="row fixed-bottom p-1 float-div" style="margin-bottom: 30px ">
				<div class="col-12 text-right d-none">
					
					<img class="btn btn-add-item" src="asset/addBtn.png" height="70px">
					
				</div>
			</div>
		</div>

	<script>
		var forInformationDiv = $(".float-div").outerHeight();
		var cur_Quantity = 0;
		$(".edit-item-div").css("margin-bottom",forInformationDiv);
		$(".bg-info.col-2.text-white.btn").text("Inventory");
		$(".col-10.directory.text-center").addClass("d-none");
		$(".btn-add-item").on("click",function(){
			if(confirm("Are You Sure?"))
			{
				$(".edit-item-div").addClass("d-none");
				
			}
		});
		setup();
		function clearPlantList(){
			$(".plant_row").remove();
		}
		function setup()
		{
			$.post("http://192.168.137.1/gasMobile/server.php",{function:"plant_list"},function(data){
				var count = data.info.length;
				var fullString = "";
				
				for(var i = 0; i < count; i++)
				{
					fullString += '<tr class="plant_row">';
					fullString += 	'<td class="id">'+(i+1)+'<input class="id" type="hidden" value="'+data.info[i].id+'"></td>';
					fullString += 	'<td class="name">'+data.info[i].name+'</td>';
					fullString += 	'<td class="sname">'+data.info[i].scientific_name+'<input type="hidden" value="'+data.info[i].description+'"></td>';
					fullString +=	'<td><img src="asset/setting-table.png" class="btn-update-plant btn-outline-info" height="30"><img src="asset/ts.png" class="btn-delete-plant btn-outline-info" height="30"></td>';
					fullString += '</tr>';
				}
				$(".item-content").append(fullString);
			},"json")
			.done(function(data){
				$(".btn-update-plant").on("click",function(){
					var curID = $(this).parent().siblings(".id").find(".id").val();
					$("#update-div-plant").removeClass("d-none");
					getPlantData(curID);
				});
				$(".btn-delete-plant").on("click",function(){
					if(confirm("Are you sure to delete this plant information?"))
					{
						var curID = $(this).parent().siblings(".id").find(".id").val();
						$.post("http://192.168.137.1/gasMobile/server.php",{function:"delete_plant",plant_id:curID},function(data){

							alert(data.status);
							// {
								// clearPlantList();
								// setup();
							// }
						},"json");
					}
				});
				

			});
			function getPlantData(id)
			{

				$.post("http://192.168.137.1/gasMobile/server.php",{function:"getPlantData",plant_id:id},function(data){
					if(data.status == "valid")
					{
						var pointer = $(".container-fluid.bg-light.border.rounded.border-success");
						// alert(pointer.attr("class"));
						pointer.find(".name-plant-id").val(data.info[0].id);
						pointer.find(".name-data").val(data.info[0].name);
						pointer.find(".sname-data").val(data.info[0].scientific_name);
						pointer.find(".desc-data").val(data.info[0].description);
						pointer.find(".pic-data").attr("src","http://192.168.137.1/gasMobile/asset/"+data.info[0].image);
					}

				},"json");

			}
		}
	</script>
