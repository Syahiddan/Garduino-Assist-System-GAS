<html>
<head id="header">
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

		<div class="row" id="worker_slider">
			<script>
	        	$("#worker_slider").load("src/worker-slider.php");
	    	</script>
		</div>
		<span id="directory_bar">
		    <script>
                $("#directory_bar").load("src/directory-bar.php");
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

		<div class="container col-12 d-none form-viewfeedback mt-3 pb-3 border border-info bg-light rounded fixed-bottom" style="position: relative;z-index: 1">

			<div class="row">
				<div class="col-12 text-right">  
					<img class="btn-close mt-2" src="asset/close.png" height="20">
				</div>
			</div>
			<div class="row form-feedback">
				<div class="col-12 px-0" style="overflow: scroll;height: 450px">
					<table class="mt-2 table table-bordered table-sm ">
						<tr class="feedback-header">
							<!-- <td class="text-center"><small>No</small></td> -->
							<td class="text-center"><small>Rating and Feedback</small></td>
						</tr>

						<tr class="feedback-footer"></tr>
					</table>
				</div>
			</div>
		</div>


		<script>
			$(".placePart").find(".part").addClass("d-none");
			$(".placePart").find("."+sessionStorage.getItem("place")).removeClass("d-none");

			var mainDirectory = $(".div-directory").find(".col-2.text-white");
			mainDirectory.text("FEEDBACK");
			$(".dir-1").text("Place");
			$(".btn-boundary").on("click",function(){
				getFeedbackData($(this).attr("boundary"));
					//alert($(this).attr("boundary"));
					$("body").animate({scrollTop:$(".form-viewfeedback").offset().top},1000);
				});

			/*---------------------------------------------viewfeedback----------------------------------*/
			function cleartable()
			{
				$(".data-rating").remove();
			}
			function getFeedbackData(boundary_id)
			{
				cleartable();
				$(".form-viewfeedback").removeClass("d-none");
				$.post("http://192.168.137.1/gasMobile/server.php",{function:"getFeedbackData",boundary:boundary_id},function(data){
					if(data.status == "available")
					{
						var count = data.info.length;
						var htmlString = '';
						for(var i = 0 ; i < count ; i++)
						{
							htmlString +='<tr class="data-rating">';
						//	htmlString +='	<td class="text-center">'+(i+1)+'</td>';
							htmlString +='	<td>';
							htmlString +='		<text class="col-12 p-0">';
							htmlString +='			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

							htmlString +='			<small><b>'+data.info[i].fname+'</b></small>';
							htmlString +='			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
							htmlString +='			<small><i>'+data.info[i].fbdate+'</i></small>';
							htmlString +='		</text>';
							htmlString +='		<br>';
							htmlString +='		<text class="col-12 p-0">';

							htmlString +='			<img src="http://192.168.137.1/gasMobile/asset/user-icon.png" style="height:30px">';
							htmlString +='			&nbsp;';
							var rating = data.info[i].rating
							for(var x=0; x<rating; x++) {

								htmlString +='			<img src="asset/star.png" style="height:20px">';
							}
							var norating = 5 - data.info[i].rating
							for(var x=0; x<norating; x++) {

								htmlString +='			<img src="asset/blankstar.png" style="height:18px">';
							}
							htmlString +='			<br><br>';
							htmlString +='			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
							htmlString +='			<small>'+data.info[i].feedback+'</small>';
							htmlString +='		</text>';
							htmlString +='	</td>';

							htmlString +='</tr>';
						}
						$(htmlString).insertAfter(".feedback-header");
					}

				},"json")
				.done(function(data){

				},"json");
			}

			$(".btn-close").on("click",function(){
				$(".form-viewfeedback").addClass("d-none");
			});
		</script>

	</div>
</body>
</html>