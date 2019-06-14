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
			<div class="row MainContent" style="margin-top: 10px">
				<div class="col-12 text-center placePart">
					<div>
						<img class="boundary strawberry d-none part text-center" src="asset/partA.png" height="441" width="340" usemap="#gardenmapA">
						<map name="gardenmapA">
							<area shape="rect" coords="219,80,286,92" class="btn-boundary" place="1" plant="1" boundary="1" >
							<area shape="rect" coords="219,128,286,141" class="btn-boundary" place="1" plant="1" boundary="2" >
							<area shape="rect" coords="219,177,286,189" class="btn-boundary" place="1" plant="1" boundary="3" >
							<area shape="rect" coords="179,245,246,257" class="btn-boundary" place="1" plant="1" boundary="4" >
							<area shape="rect" coords="179,294,247,306" class="btn-boundary" place="1" plant="1" boundary="5" >
							<area shape="rect" coords="179,344,246,356" class="btn-boundary" place="1" plant="1" boundary="6" >
							<area shape="rect" coords="126,291,138,358" class="btn-boundary" place="1" plant="1" boundary="7" >
							<area shape="rect" coords="79,328,92,384" class="btn-boundary" place="1" plant="1" boundary="8" >
						</map>
					</div>
					<div>
						<img class="boundary grape d-none part" src="asset/partB.png" height="360" width="275" usemap="#gardenmapB">
						<map name="gardenmapB">
							<area shape="rect" coords="107,54,168,66" class="btn-boundary" place="2" plant="1" boundary="9" >
							<area shape="rect" coords="86,110,154,123" class="btn-boundary" place="2" plant="1" boundary="10" >
							<area shape="rect" coords="100,164,168,176" class="btn-boundary" place="2" plant="1" boundary="11" >
							<area shape="rect" coords="100,216,168,229" class="btn-boundary" place="2" plant="1" boundary="12" >
							<area shape="rect" coords="98,266,165,278" class="btn-boundary" place="2" plant="1" boundary="13" >
							<area shape="rect" coords="59,204,71,272" class="btn-boundary" place="2" plant="1" boundary="14" >
							<area shape="rect" coords="201,170,213,239" class="btn-boundary" place="2" plant="1" boundary="15" >
						</map>
					</div>
					<div>
						<img class="boundary coconut d-none part" src="asset/partC.png" height="230" width="373" usemap="#gardenmapC">
						<map name="gardenmapC">
							<area shape="rect" coords="83,59,130,68" class="btn-boundary" place="3" plant="1" boundary="16">
							<area shape="rect" coords="83,98,130,107" class="btn-boundary" place="3" plant="1" boundary="17">
							<area shape="rect" coords="84,137,131,146" class="btn-boundary" place="3" plant="1" boundary="18">
							<area shape="rect" coords="40,102,48,145" class="btn-boundary" place="3" plant="1" boundary="19">
							<area shape="rect" coords="154,90,162,133" class="btn-boundary" place="3" plant="1" boundary="20">
							<area shape="poly" coords="186,129,226,138,224,146,184,137" class="btn-boundary" place="3" plant="21" boundary="10">
							<area shape="rect" coords="248,146,290,154" class="btn-boundary" place="3" plant="1" boundary="22">
							<area shape="rect" coords="280,179,323,188" class="btn-boundary" place="3" plant="1" boundary="23">
						</map>
					</div>
					<div>
						<img class="boundary mangostein d-none part" src="asset/partD.png" height="350" width="368" usemap="#gardenmapD">
						<map name="gardenmapD">
							<area shape="rect" coords="131,129,195,142" class="btn-boundary" place="4" plant="1" boundary="24">
							<area shape="rect" coords="131,175,196,187" class="btn-boundary" place="4" plant="1" boundary="25">
							<area shape="rect" coords="131,226,195,240" class="btn-boundary" place="4" plant="1" boundary="26">
							<area shape="rect" coords="78,149,91,214" class="btn-boundary" place="4" plant="1" boundary="27">
							<area shape="rect" coords="230,162,242,227" class="btn-boundary" place="4" plant="1" boundary="28">
							<area shape="rect" coords="281,58,294,122" class="btn-boundary" place="4" plant="1" boundary="29">
						</map>
					</div>
					<div>
						<img class="boundary flower d-none part" src="asset/partE.png" height="350" width="350" usemap="#gardenmapE">
						<map name="gardenmapE">
							<area shape="rect" coords="166,76,230,88" class="btn-boundary" place="5" plant="1" boundary="30" >
							<area shape="rect" coords="166,134,230,146" class="btn-boundary" place="5" plant="1" boundary="31">
							<area shape="rect" coords="175,196,238,208" class="btn-boundary" place="5" plant="1" boundary="32">
							<area shape="rect" coords="210,264,273,276" class="btn-boundary" place="5" plant="1" boundary="33">
							<area shape="rect" coords="117,91,130,154" class="btn-boundary" place="5" plant="1" boundary="34">
							<area shape="rect" coords="273,152,286,216" class="btn-boundary" place="5" plant="1" boundary="35">
						</map>
					</div>
					
				</div>

			
			</div>
			<div class="row form-boundary d-none">
				<div class="col-4">
					<label><small>Boundary code</small></label>
					<input disabled class="text-center form-control id-data" type="text" >
				</div>
				<div class="col-8">
					<label><small>Date</small></label>
					<input class="text-center form-control date-data" type="date" value="">
				</div>
				
				<div class="col-12 mt-2">
					<label><small>Name</small></label>
					<select class="text-center form-control name-data plantList">
						
					</select>
					<!-- <input class="text-center form-control name-data"type="text" name="" placeholder="Name"> -->
					<label><small>Status</small></label>
					<select class="text-center form-control status-data">
						<option value="Vigorous">Vigorous</option>
						<option value="Withered">Withered</option>
						<option value="Barren">Barren</option>
						<option value="Scorched">Scorched</option>
						<option value="Barren">Barren</option>
						<option value="Replanting">Replanting</option>
					</select>
					
					
					<label class="mt-2 col-2"><small>Detail</small></label><span class="text-right col-10 detail-alert text-danger"></span>
					<textarea  class="form-control detail-data" type="text" name="" placeholder="Detail... 300 Words length"></textarea>
					<div class="text-center my-3">
						<button class="btn btn-block btn-success submit-report"> Submit </button>
					</div>
				</div>
			</div>
			
			
			<script>
				$(document).ready(function(){
					$(".row.MainContent").css("margin-top",$(".div-directory").height());
					$(".dir-1").removeClass("d-none");
					$(".dir-1-div").removeClass("d-none");
					$(".dir-1").text("Place");
					$(".dir-2").removeClass("d-none");
					$(".dir-2-div").removeClass("d-none");
					$(".dir-2").text("Boundary");
					getPlantList();
				});
				function getPlantList(){
					$.post("http://192.168.137.1/gasMobile/server.php",{function:"plant_list"},function(data){
						var count = data.info.length;

						var stringHtml = "";

						for(var i = 0;i<count;i++)
						{
							stringHtml += '<option value="'+data.info[i].name+'">'+data.info[i].name+'</option>';
						}
						$(".plantList").append(stringHtml);
					},"json")
				}
				function getDateCurrent(){
					var d = new Date();
					month = '' + (d.getMonth() + 1);
					day = '' + d.getDate();
					year = d.getFullYear();

					if (month.length < 2)
					{
						month = '0' + month;
					} 
					if (day.length < 2)
					{
						day = '0' + day;
					}
					var returnval = year+"-"+month+"-"+day;
					return returnval;
				}
				
				$(".date-data").val(getDateCurrent());

				$(".placePart").find(".part").addClass("d-none");
				$(".placePart").find("."+sessionStorage.getItem("place")).removeClass("d-none");

				$(".boundary").maphilight();
				$(".btn-boundary").on("click",function(){
					getBoundaryData($(this).attr("boundary"));
					//alert($(this).attr("boundary"));
					$("body").animate({scrollTop:$(".form-boundary").offset().top},1000);
				});
				$(".submit-report").on("click",function(){
					if(confirm("Are you sure to submit ?"))
					{
						var boundary_id = $(".id-data").val();
						var date = $(".date-data").val();
						var name = $(".name-data").val();
						var status = $(".status-data").val();
						var detail = $(".detail-data").val();

						boundary_id = boundary_id.trim();
						date = date.trim();
						name = name.trim();
						status = status.trim();
						detail = detail.trim();

						if(boundary_id != "" && date != "" && name != "" && status !="" && detail !="")
						{
							$(".detail-alert").text("");
							$.post("http://192.168.137.1/gasMobile/server.php",{function:"updateBoundaryData",boundary_id:boundary_id,date:date,name:name,status:status,detail:detail},function(data){
								if(data.status =="complete")
								{
									$(".form-boundary").addClass("d-none");
									$("body").animate({scrollTop:$(".placePart").offset().top},1000);
									alert("Submission Completed");
								}
							},"json");
						}
						else
						{
							if(detail == "")
							{
								$(".detail-alert").text("Please Enter Detail");
								$("body").animate({scrollTop:$(".form-boundary").offset().top},1000);
							}
						}

					}
				});
				function getBoundaryData(boundary_id)
				{
					$(".form-boundary").removeClass("d-none");
					$.post("http://192.168.137.1/gasMobile/server.php",{function:"getBoundaryData",boundary:boundary_id},function(data){
						$(".id-data").val(data.info.boundary_id);
						$(".name-data").val(data.info.plant_name);
						$(".status-data").val(data.info.plant_status);
					},"json");
				}
			</script>

		</div>
	</body>
</html>