<html>
	<head id="header">
		<!-- <script>
			if(!sessionStorage.getItem("id") && !sessionStorage.getItem("position"))
			{
				window.location.href = "index.php";
			}

		</script> -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
                $("#header").load("src/header.php");
         </script>
    </head>
	<body>
		
		<span id="worker_toolbar">
            <script>
                $("#worker_toolbar").load("src/worker-toolbar.php");
            </script>
        </span>
		<div class="container-fluid" style="margin-top: 50px">
			
			<span id="worker_slider">
			    <script>
                    $("#worker_slider").load("src/worker-slider.php");
                </script>
			</span>
			<span id="directory_bar">
			    <script>
                    $("#directory_bar").load("src/directory-bar.php");
                </script>
			</span>
			<div class="row" style="overflow: scroll;height: 200px">
				<table class="table table-bordered table-striped table-sm">
					<tr>
						<td>No</td>
						<td>Name</td>
						<td>Quantity</td>
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


			<!------------------------------------tukar div----------------------------------------->
			<div class="container edit-item-div fixed-bottom mt-3 pb-3 rounded border border-info bg-light d-none col-12" style=" position: relative;z-index: 1">
				<div class="row">
					<div class="col-12 text-right">  
						<img class="btn-close mt-2" src="asset/close.png" height="20">
					</div>
				</div>
				<div class="col-12">
					<div class="text-center my-2"> Inventory Information</div>
					<div class="row mx-1">
						<label class="col-4 my-auto text-center"><small>Item ID</small></label>
						<input class="col-8 form-control data-id" type="text" value="" disabled>
						<label class="col-4 my-auto text-center mt-1"><small>Name</small></label>
						<input class="col-8 form-control mt-1 data-name" type="text" value="" disabled>
						<label class="col-4 my-auto text-center mt-1"><small>Quantity</small></label>
						<input class="col-8 form-control mt-1 data-quantity" type="text" value="" disabled>

						<div class="btn-group my-4 col-12">
							<button class="btn col-4 table-sm btn-outline-info btn-transfer d-none">Transfer</button>
							<button class="btn col-4 table-sm btn-outline-primary btn-edit">Edit</button>
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
							<div class="col-12 text-center mt-2"><button class="btn btn-info submit-transfer">Submit</button></div>
						</div>
						<div class="tab row mx-1 div-edit bg-light p-1 d-none">
							<label class="col-4 my-auto text-center"><small>Item ID</small></label>
							<input class="col-8 form-control data-id" required type="text" value="" >
							<label class="col-4 my-auto text-center mt-1"><small>Name</small></label>
							<input class="col-8 form-control mt-1 data-name" required type="text" value="" >
							<label class="col-4 my-auto text-center mt-1"><small>Type</small></label>
							<input class="col-8 form-control mt-1 data-type" required type="text" value="" >
							<label class="col-4 my-auto text-center mt-1"><small>Quantity</small></label>
							<input class="col-8 form-control mt-1 data-total_quantity" required type="number" value="" >
							<label class="col-4 my-auto text-center mt-1"><small>Brand</small></label>
							<input class="col-8 form-control mt-1 data-brand" required type="text" value="" >
							<div class="col-12 text-center mt-2"><button class="btn btn-primary submit-edit">Submit</button></div>
							<script>

							</script>
						</div>
						<div class="tab row mx-1 div-delete bg-light p-1 d-none">
							<label class="col-4 my-auto text-center mt-1"><small>Item ID</small></label>
							<input class="col-8 form-control mt-1 data-id" type="number" value="">
							<div class="col-12 text-center mt-2"><button class="btn btn-danger submit-delete">Submit</button></div>
						</div>
						
						<script>
							$(".btn-transfer").on("click",function(){
								unset();
								$(".div-transfer").removeClass("d-none");
								$(this).addClass("active");
							});

							$(".btn-edit").on("click",function(){
								unset();
								$(".div-edit").removeClass("d-none");
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
							$(".btn-close").on("click",function(){
								$(".edit-item-div").addClass("d-none");
							});
						</script>
					</div>
				</div>
			</div>


				<!---------------------------------------------------BARUUUUU------------------------------------>
						<div class="container add-item-div fixed-bottom mt-3 pb-3 rounded border border-info bg-light d-none col-12" style=" position: relative;z-index: 1">
				<div class="row">
					<div class="col-12 text-right">  
						<img class="btn-close mt-2" src="asset/close.png" height="20">
					</div>
				</div>
				<div class="col-12">
					<div class="text-center my-2"><b> Add Item</b></div>
					<div class="row mx-1">
						<div class="tab row mx-1 div-add bg-light p-1">
							<label class="col-4 my-auto text-center mt-1"><small>Name</small></label>
							<input class="col-8 form-control mt-1 data-name" type="text" value="" >
							<label class="col-4 my-auto text-center"><small>Type</small></label>
							<input class="col-8 form-control mt-1 data-type" type="text" value="" >
							<label class="col-4 my-auto text-center mt-1"><small>Quantity</small></label>
							<input class="col-8 form-control mt-1 data-total_quantity" type="text" value="" >
							<label class="col-4 my-auto text-center mt-1"><small>Brand</small></label>
							<input class="col-8 form-control mt-1 data-brand" type="text" value="" >
							<div class="col-12 text-center mt-2"><button class="btn btn-primary submit-add">Submit</button></div>
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
							$(".btn-close").on("click",function(){
								$(".edit-item-div").addClass("d-none");
							});

							//BARUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU
							$(".btn-close").on("click",function(){
								$(".add-item-div").addClass("d-none");
							});
						</script>
					</div>
				</div>
			</div>

			<div class="row fixed-bottom p-1 float-div" style="margin-bottom: 10px ">
				<div class="col-12 text-right">
					
						<img class="btn btn-add-item" src="asset/addBtn.png" height="70px">
					
				</div>
			</div>
		</div>
	</body>
	<script>
		$(document).ready(function(){

		var forInformationDiv = $(".float-div").outerHeight();
		var cur_Quantity = 0;
		$(".edit-item-div").css("margin-bottom",forInformationDiv);
		$(".bg-info.col-2.text-white.btn").text("Inventory");
		$(".col-10.directory.text-center").addClass("d-none");
		$(".btn-add-item").on("click",function(){
			$(".add-item-div").removeClass("d-none");
			$(".row.mx-1").removeClass("d-none");
		});
		setup();

		function clearTableItem()
		{
			$(".item_list_row").remove();
		}
		function setup()
		{
			$.post("http://192.168.137.1/gasMobile/server.php",{function:"item_list",user_id:sessionStorage.getItem("id")},function(data){
				var count = data.info.length;
				var fullString = "";
				for(var i = 0; i < count; i++)
				{
					fullString += '<tr class="item_list_row">';
					fullString += 	'<td class="id">'+(i+1)+'<input class="id" type="hidden" value="'+data.info[i].item_id+'"></td>';
					fullString += 	'<td class="name">'+data.info[i].name+'</td>';
					fullString += 	'<td class="quantity">'+data.info[i].quantity+'</td>';
					fullString +=	'<td><button class="btn btn-outline-info text-dark p-0 btn-block moreInformation-item">More</button></td>';
					fullString += '</tr>';
				}
				$(".item-content").append(fullString);
			},"json")
			.done(function(data){
				$(".moreInformation-item").on("click",function(){
					var curID = $(this).parent().siblings(".id").find(".id").val();
					var curName = $(this).parent().siblings(".name").text();
					var curQuantity = $(this).parent().siblings(".quantity").text();
					var totalQuantity = $(this).parent().siblings(".total_quantity").val();
					var curBrand = $(this).parent().siblings(".brand").text();

					$(".edit-item-div").removeClass("d-none");
					$(".data-id").val(curID);
					$(".data-name").val(curName);
					$(".data-quantity").val(curQuantity);
					$(".data-total_quantity").val(totalQuantity);
					$(".data-brand").val(curBrand);
					cur_Quantity = curQuantity;
				});

				$(".submit-edit").on("click",function(){
					var node = $(this).parent();
					var id = node.siblings(".data-id").val();
					var name = node.siblings(".data-name").val();
					var type = node.siblings(".data-type").val();
					var quantity = node.siblings(".data-total_quantity").val();
					var brand = node.siblings(".data-brand").val();

					id = id.trim();
					name = name.trim();
					type = type.trim();
					quantity = quantity.trim();
					brand = brand.trim();


					if(id != "" && name != "" && type != "" && quantity !="" && brand !="")
					{
						if(!isNaN(quantity))
						{
							if(confirm("Are you sure to update this item ?"))
							{
								$.post("http://192.168.137.1/gasMobile/server.php",{function:"update_item",id:id,name:name,type:type,total_quantity:quantity,brand:brand},function(data){
									if(data.status == "success")
									{
										alert("Item has been updated");
										$(".edit-item-div.fixed-bottom").addClass("d-none");
										clearTableItem();
										setup();
									}
									else
									{
										alert("Item not be able to updated");
										$(".edit-item-div.fixed-bottom").addClass("d-none");
									}
								},"json");
							}

						}
						else
						{
							if(isNaN(quantity))
							{
								node.siblings(".data-total_quantity").val("0");
								alert("Please insert valid number for quantity");
							}
							
						}
					}
					else
					{
						if(name == "")
						{
							alert("Please insert valid name");
						}
						if(type =="")
						{
							alert("Please insert valid type");
						}
						if(brand =="")
						{
							alert("Please insert valid brand");
						}
					}

				});

				$(".submit-delete").on("click",function(){
					var node = $(this).parent();
					var id = node.siblings(".data-id").val();

					if(confirm("Are you sure to remove this item?"))
					{
						$.post("http://192.168.137.1/gasMobile/server.php",{function:"delete_item",id:id},function(data){
							if(data.status == "success")
							{
								alert("Item has been deleted");
								$(".edit-item-div.fixed-bottom").addClass("d-none");
								clearTableItem();
								setup();
							}
							else
							{
								alert("Item has been deleted");
								$(".edit-item-div.fixed-bottom").addClass("d-none");
							}
						},"json");
					}
				});
				$(".t-quantity").on("change",function(){
					var input_quantity = $(this).val();

					if(parseInt(input_quantity,10) > cur_Quantity)
					{
						console.log(cur_Quantity);
						$(this).val("0");
					}
					else
					{
						console.log(input_quantity);
					}
					
				
				});

			});
		}
		});

	</script>
</html>