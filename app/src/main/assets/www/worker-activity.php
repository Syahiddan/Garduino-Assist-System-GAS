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

		<div class="container-fluid MainContent" style="margin-top: 50px">
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
			
			<div class="row px-2 mt-2 d-none">
				<div class="row col-10 px-0 ml-1">
					<label class="col-6"><small>Start Date</small></label>
					<label class="col-6"><small>End Date</small></label>
					<input class="form-control col-6" type="date" name="" >
					<input class="form-control col-6" type="date" name="" >
				</div>
				<div class="col-2 mt-5">
					<button class="btn btn-activity-filter text-center my-auto py-auto"><img src="asset/search.png" height="25"></button>
				</div>
			</div>
			<div class="col-12 px-0" >
				<table class="mt-2 table table-bordered table-sm " >
					<tbody >
						
						<tr class="activity-header">
							<td class="text-center"><small>No</small></td>
							<td class="text-center"><small>Detail</small></td>
							<td class="text-center"><small>Status</small></td>
							<td class="text-center"><small>Action</small></td>
						</tr>

						
						<tr class="activity-footer"></tr>
					</tbody>
				</table>
			</div>
			
			<div class="row fixed-bottom p-1 float-div" style="margin-bottom: 10px ">
				<div class="row form-act border border-info bg-light d-none" style="position: relative;z-index: 1">
					
					<div class="col-12 text-right px-5">  
						<img class="btn-close-act mt-2" src="asset/close.png" height="20">
					</div>
					
					<div class="col-12 h5 text-center mb-2 div-title-form">Request Activity</div>
					<div class="col-1"></div>
					<div class="col-4 my-auto text-right "><small>Worker ID :</small></div>
					<input type="type" class="col-6 form-control form-control-sm act-user-id" disabled>
					<div class="col-1"></div>
					<div class="col-1"></div>
					<input class="act-id" type="hidden">
					<div class="col-4 my-auto text-right "><small>Activity Title:</small></div>
					<input type="type" class="col-6 form-control form-control-sm act-title" >
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-4 my-auto text-right "><small>Activity Description:</small></div>
					<input type="type" class="col-6 form-control form-control-sm act-desc" >
					<div class="col-1"></div>
					<div class="col-1"></div>
					<div class="col-2 my-auto">Start</div>
					<div class="col-8">
						<div class="row">
							<text class="col-3 my-auto text-right "><small>Date :</small></text><input type="date" class="col-9 form-control form-control-sm act-sdate">
							<text class="col-3 my-auto text-right "><small>Time :</small></text><input type="time" class="col-9 form-control form-control-sm act-stime">
						</div>
					</div>
					<div class="col-1"></div>
					<div class="col-1"></div>

					<div class="col-2 my-auto">End</div>
					<div class="col-8">
						<div class="row">
							<text class="col-3 my-auto text-right"><small>Date :</small></text><input type="date" class="col-9 form-control form-control-sm act-edate">
							<text class="col-3 my-auto text-right"><small>Time :</small></text><input type="time" class="col-9 form-control form-control-sm act-etime">
						</div>
					</div>
					<div class="col-12 text-center my-2"><button class="col-6 btn btn-outline-success btn-sm act-submit">Submit</button></div>
				</div>


				<div class="col-12 text-right div-add-act">
						<img class="btn btn-add-item" src="asset/addBtn.png" height="70px">
				</div>
			</div>
		</div>
		<!-- <div class="container-fluid addContent fixed-bottom" style="position: relative;z-index: 1">
			
		</div> -->
	</body>
	<script>
		$(document).ready(function(){
			$(".div-directory").find(".bg-info.col-2.text-white.btn").text("ACTIVITY");
			setupThisPage();
			setActivityList("all");

			$(".btn-add-item").on("click",function(){
				setupActivityRequest();
				$(".div-add-act").addClass("d-none");
				$(".form-act").removeClass("d-none");
			});
			$(".btn-close-act").on("click",function(){
				$(".form-act").addClass("d-none");
				$(".div-add-act").removeClass("d-none");
			});
			$(".act-submit").on("click",function(){
				var textBtn = $(this).text();
				if(textBtn == "Submit")
				{
					var id = sessionStorage.getItem("id");
					var title = $(".act-title").val();
					var desc = $(".act-desc").val();
					var sdate = $(".act-sdate").val();
					var stime = $(".act-stime").val();
					var edate = $(".act-edate").val();
					var etime = $(".act-etime").val();

					title = title.trim();
					desc = desc.trim();

					if(title != "" && desc!="" && sdate!="" && edate !="" && stime !="" && etime !="") 
					{
						if(confirm("Are you sure to submit this activity?"))
						{
							$.post("http://192.168.137.1/gasMobile/server.php",{function:"submitNewActivity",userID:id,title:title,desc:desc,sdate:sdate,stime:stime,edate:edate,etime:etime},function(data){

							},"json")
							.done(function(data){
								if(data.status == "success")
								{
									alert("Activity submission successfully");
									clearActivityList();
									setActivityList("all");
									$(".form-act").addClass("d-none");
									$(".div-add-act").removeClass("d-none");
								}
								else
								{
									$(".form-act").addClass("d-none");
									$(".div-add-act").removeClass("d-none");
								}
							});
						}
					}else{
						if(title == "")
						{
							alert("Title is empty");
						}
						else if(desc=="")
						{
							alert("Description is empty");
						}
						else if(sdate=="")
						{
							alert("Start date is empty");
						}
						else if(stime =="")
						{
							alert("Start time is empty");
						}
						else if(edate == "")
						{
							alert("End date is empty");
						}
						else if(etime =="")
						{
							alert("End time is empty");
						}
					}
					//alert(sdate);
					
				}
				else if(textBtn == "Edit")
				{
					var id = sessionStorage.getItem("id");
					var act_id_curr = $(".act-id").val();
					var title = $(".act-title").val();
					var desc = $(".act-desc").val();
					var sdate = $(".act-sdate").val();
					var stime = $(".act-stime").val();
					var edate = $(".act-edate").val();
					var etime = $(".act-etime").val();

					title = title.trim();
					desc = desc.trim();

					if(title != "" && desc!="" && sdate!="" && edate !="" && stime !="" && etime !="") 
					{
						if(confirm("Are you sure to edit this activity?"))
						{
							$.post("http://192.168.137.1/gasMobile/server.php",{function:"update_current_activity",act_id:act_id_curr,title:title,desc:desc,sdate:sdate,stime:stime,edate:edate,etime:etime},function(data){

							},"json")
							.done(function(data){
								alert(data.status);
								if(data.status == "success")
								{
									alert("Activity editted successfully");
									clearActivityList();
									setActivityList("all");
									$(".form-act").addClass("d-none");
									$(".div-add-act").removeClass("d-none");
								}
								else
								{
									$(".form-act").addClass("d-none");
									$(".div-add-act").removeClass("d-none");
								}
							});
						}
					}else{
						if(title == "")
						{
							alert("Title is empty");
						}
						else if(desc=="")
						{
							alert("Description is empty");
						}
						else if(sdate=="")
						{
							alert("Start date is empty");
						}
						else if(stime =="")
						{
							alert("Start time is empty");
						}
						else if(edate == "")
						{
							alert("End date is empty");
						}
						else if(etime =="")
						{
							alert("End time is empty");
						}
					}
				}
				
			});

			function clearActivityList()
			{
				$(".act-data-row").remove();
			}
			function submitActivityRequest(){

			}
			function setupActivityRequest()
			{

				$(".act-user-id").val(sessionStorage.getItem("id"));
				$(".act-title").val("");
				$(".act-desc").val("");
				$(".act-sdate").val("");
				$(".act-stime").val("");
				$(".act-edate").val("");
				$(".act-etime").val("");
				$(".div-add-act").addClass("d-none");
				$(".form-act").removeClass("d-none");
				$(".div-title-form").text("Request Activity");
				$(".act-submit").text("Submit");

			}

			function setupThisPage(){

				var mainDirectory = $(".div-directory").find(".col-2.text-white");
				mainDirectory.text("ACTIVITY");
				$(".directory").addClass("d-none");
			}
		
			function setActivityList(filter)
			{

				$.post("http://192.168.137.1/gasMobile/server.php",{function:"activity_list", worker_id:sessionStorage.getItem("id"),filter:filter},function(data){
					//alert(data.info[1].activity_id);
					if(data.status == "available")
					{
						var count = data.info.length;
						var htmlString = '';
						for(var i = 0 ; i < count ; i++)
						{
							htmlString +='<tr class="act-data-row">';
							htmlString +='	<td class="text-center td-id">'+(i+1)+'<input class = "id" value="'+data.info[i].activity_id+'" type="hidden"></td>';
							htmlString +='	<td>';
							htmlString +='		<text class="col-12 p-0"><small>'+data.info[i].title+'</small></text><br><br>';
							htmlString +='		<text class="col-12 p-0">';
							htmlString +='			<small><b>Start Date</b> : </small>';
							htmlString +='			<small>'+data.info[i].sdate+'</small><br>';
							htmlString +='			<small><b>Start Time</b> : </small>';
							htmlString +='			<small>'+data.info[i].stime+'</small>';
							htmlString +='		</text>';
							htmlString +='		<br>';
							htmlString +='		<text class="col-12 p-0">';
							htmlString +='			<small><b>End Date</b> : </small>';
							htmlString +='			<small>'+data.info[i].edate+'</small><br>';
							htmlString +='			<small><b>End Time</b> :</small>';
							htmlString +='			<small>'+data.info[i].etime+'</small>';
							htmlString +='		</text>';
							htmlString +='	</td>';
							htmlString +='	<td>';
							if(data.info[i].status == "Pending")
							{
								htmlString +='		<br><button class="btn btn-block btn-warning"><small>Pending</small></button>';
							}
							else if(data.info[i].status == "Cancel")
							{
								htmlString +='		<br><button class="btn btn-block btn-light"><small>Cancel</small></button>';
							}
							else if(data.info[i].status == "Approved")
							{
								htmlString +='		<br><button class="btn btn-block btn-success"><small>Approved</small></button>';
							}
							else if(data.info[i].status == "Declined")
							{
								htmlString +='		<br><button class="btn btn-block btn-danger"><small>Declined</small></button>';
							}
							htmlString +='	</td>';

							htmlString +='	<td class="text-center"><br>';
							htmlString +='		<img src="asset/setting-table.png" class=" act-edit-btn btn" height="30"><img src="asset/ts.png" class="my-auto act-delete-btn btn" height="30">';
							htmlString +='	</td>';
							htmlString +='<tr>';
						}
						$(htmlString).insertAfter(".activity-header");
					//alert(htmlString);
					}
				
				},"json")
				.done(function(data){
					$(".act-delete-btn").on("click",function(){
						var id = $(this).parent().parent().find(".id").val();
						if(confirm("Are you sure to delete activity information?"))
						{
							$.post("http://192.168.137.1/gasMobile/server.php",{function:"delete_current_activity",act_id:id},function(data){
								if(data.status == "success")
								{
									clearActivityList();
									setActivityList("all");
								}
							},"json");
						}
					});
					$(".act-edit-btn").on("click",function(){
						if(confirm("Are you sure to update activity information?"))
						{
							var id = $(this).parent().parent().find(".id").val();
							$.post("http://192.168.137.1/gasMobile/server.php",{function:"get_current_activity",act_id:id},function(data){

							},"json")
							.done(function(data){

								$(".div-title-form").text("Edit Activity");
								$(".act-user-id").val(sessionStorage.getItem("id"));
								$(".act-id").val(data.info.activity_id);
								$(".act-title").val(data.info.title);
								$(".act-desc").val(data.info.description);
								$(".act-sdate").val(data.info.sdate);
								$(".act-stime").val(data.info.stime);
								$(".act-edate").val(data.info.edate);
								$(".act-etime").val(data.info.etime);
								$(".div-add-act").addClass("d-none");
								$(".form-act").removeClass("d-none");
								$(".act-submit").text("Edit");
							});
						}
						
					});
				},"json")
				.fail(function(data){
				//alert("No Connection... Please Connect to Network");
				});
			}
		});
		
	</script>
</html>