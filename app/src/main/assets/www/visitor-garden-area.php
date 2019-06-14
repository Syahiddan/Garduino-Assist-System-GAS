<html>
<head>
	<span id="header"></span>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $("#header").load("src/header.php");
     </script>

	<style>
	.rating {
		display: block;
		direction: rtl;
		unicode-bidi: bidi-override;
		text-align: center;
	}
	.rating .star-data {
		display: none;
	}
	.rating label {
		color: lightgray;
		display: inline-block;
		font-size: 22pt;
		margin: 0 -2px;
		transition: transform .15s ease;
	}
	.rating label:hover {
		transform: scale(1.35, 1.35);
	}
	.rating label:hover,
	.rating label:hover ~ label {
		color: green;
	}
	.rating .star-data:checked ~ label {
		color: green;
	}

</style>

</head>
<body>
	<span id="visitor_toolbar">
	    <script>
	        $("#visitor_toolbar").load("src/visitor-toolbar.php");
	    </script>
	</span>
	<div class="container-fluid" style="margin-top: 50px">
		<div class="row" id="visitor_slider">
			<script>
		        $("#visitor_slider").load("src/visitor-slider.php");
		    </script>
		</div>
		<span class="" id="visitor_directory">
			<script>
		        $("#visitor_directory").load("src/visitor-directory-bar.php");
		    </script>
		</span>

		<div class="row " style="margin-top: 10px">
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

		<div class="container col-12 d-none form-feedback mt-3 pb-3 border border-info bg-light rounded fixed-bottom" style="position: relative;z-index: 1">
			<div class="row">
				<div class="col-12 text-right">  
					<img class="btn-close mt-2" src="asset/close.png" height="20">
				</div>
			</div>

			<div class="col-12">
				<center><img class="image-data" style="height:100px"><br>
					<input disabled class="text-center form-control id-data"type="text" name="" placeholder="Name" hidden>
					<b><text class="text-center name-data"></text></b></center><br>
					<label><small>Scientific Name:</small></label><br>
					<i><text class="scientific_name-data"></text></i>
					<br><br>
					<label><small>Information:</small></label><br>
					<textarea disabled style="height:200px; overflow:auto; background:transparent; border:none; font-size:15px" class="text-justify w-100 description-data" ></textarea>

					<br>
					<br>
				</div>			

				<div class="text-center col-12 mt-3 border rounded">
					<p class="mt-2"><b>Rating and Feedback</b></p>
					<div class="rating">
						<input id="radio1" type="radio" name="thisrate" value="5" class="star-data" />
						<label for="radio1">&#9733;</label>
						<input id="radio2" type="radio" name="thisrate" value="4" class="star-data" />
						<label for="radio2">&#9733;</label>
						<input id="radio3" type="radio" name="thisrate" value="3" class="star-data" />
						<label for="radio3">&#9733;</label>
						<input id="radio4" type="radio" name="thisrate" value="2" class="star-data" />
						<label for="radio4">&#9733;</label>
						<input id="radio5" type="radio" name="thisrate" value="1" class="star-data" />
						<label for="radio5">&#9733;</label>
					</div>
					<div class="text-center mt-4">
						<input class="form-control feedback-data formfeedback" type="text" placeholder="Write a short feedback.." style="border:none; border-bottom:2px solid; background: transparent;">
					</div>
					<div class="text-center mt-3 mb-3">
						<button class="btn btn-success btn-block btnFeedback">Save</button>
					</div>
				</div>
			</div>

			<script>
				$(document).ready(function(){
					$(".boundary").maphilight();
					
				var mainDirectory = $(".div-directory").find(".col-2.text-white");
				mainDirectory.text("BOUNDARY");
				// $(".directory").addClass("d-none");

				function clearData(){
					$(".image-data").attr("src","");
					$(".name-data").text("no data");
					$(".scientific_name-data").text("no data");
					$(".description-data").text("no data");
				}
				$(".placePart").find(".part").addClass("d-none");
				$(".placePart").find("."+sessionStorage.getItem("place")).removeClass("d-none");


				$(".btn-boundary").on("click",function(){
					clearData();
					getBoundaryData($(this).attr("boundary"));
					//alert($(this).attr("boundary"));

					// $(".description-data").css("height",$(".description-data")[0].scrollHeight);

					$("body").animate({scrollTop:$(".form-feedback").offset().top},1000);
				});

				$(".btnFeedback").on("click",function(){
					var boundary_id = $(".id-data").val();
					var rating = $(".star-data:checked").val();
					var feedback = $(".feedback-data").val();

					boundary_id = boundary_id.trim();
					rating = rating.trim();
					feedback = feedback.trim();

					if(boundary_id != "" && rating != "" && feedback != "")
					{

						$.post("http://192.168.137.1/gasMobile/server.php",{function:"insertFeedback",boundary_id:boundary_id,rating:rating,feedback:feedback},function(data){

							alert("Thank you for your feedback!");
							window.location.href = "visitor-garden-area.php";
						},"json");
					}

				});

				function getBoundaryData(boundary_id)
				{
					$(".form-feedback").removeClass("d-none");
					$.post("http://192.168.137.1/gasMobile/server.php",{function:"getBoundaryData",boundary:boundary_id},function(data){
						$(".id-data").val(data.info.boundary_id);
						$(".name-data").text(data.info.plant_name);
						$(".status-data").val(data.info.plant_status);
						$(".description-data").text(data.info.plant_info);
						$(".scientific_name-data").text(data.info.plant_sname);
						$(".image-data").attr("src","http://192.168.137.1/gasMobile/asset/"+data.info.image);
						//alert($(".image-data").attr("src"));
					},"json");
				}

				$(".btn-close").on("click",function(){
					$(".form-feedback").addClass("d-none");
				});
				});
			</script>
		</div>
	</body>
	</html>