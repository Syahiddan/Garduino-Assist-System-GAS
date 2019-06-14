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
			<?php include_once("src/directory-bar.php");?>
			<div class="row " style="margin-top: 30px">
				<div class="text-center"><img class="tryimage" src="asset/map.png" height="412" usemap="#gardenmap"></div>
				<map name="gardenmap">

					<area shape="poly" coords="87,274,72,260,65,261,35,273,23,265,26,244,30,226,43,217,76,194,83,167,89,160,110,162,127,138,129,71,130,67,150,23,170,28,178,36,215,82,204,111,180,156,169,212,169,219,181,238,174,234,173,235,172,243,149,247,145,250,137,276,105,249,88,249,84,260,84,267" alt="A" class="area btn-area" value="strawberry">

					<area shape="poly" coords="181,238,169,219,169,212,180,156,204,111,215,82,225,58,228,56,271,54,274,56,274,59,251,106,251,112,254,114,279,118,282,120,284,122,291,140,302,171,302,176,289,191,289,196,306,230,297,233,293,233,265,228,252,242,239,236,241,216,240,214,237,215,212,228,209,244,191,241" alt="B" class="btn-area area" value="grape">
					
					<area shape="poly" coords="88,275,84,267,84,260,88,249,105,249,137,276,157,297,175,315,185,319,192,320,196,326,204,331,212,325,240,326,244,328,266,350,270,358,286,395,234,372,208,363,199,359,197,357,197,350,195,347,160,338,153,338,124,356,119,357,114,357,80,343,41,343,38,341,37,337,58,300,62,298,84,304,87,302" alt="C" class="btn-area area" value="coconut">
					
					<area shape="poly" coords="137,276,145,250,149,247,172,243,173,235,181,238,191,241,209,244,212,228,237,215,240,214,241,216,239,232,238,244,217,264,216,267,218,285,219,300,214,305,210,305,193,298,190,298,190,302,196,326,192,320,185,319,175,315,157,297" alt="D" class="btn-area area" value="mangostein">

					<area shape="poly" coords="239,236,252,242,265,229,293,234,297,233,306,230,322,241,322,249,314,276,314,280,343,299,345,303,345,310,339,343,330,392,328,396,326,397,311,397,286,395,270,358,266,350,244,328,240,326,212,325,204,331,196,326,190,302,190,298,193,298,210,305,214,305,219,300,218,285,216,267,217,264,238,244" alt="E" class="btn-area area" value="flower">
  					
				</map>
				

				<script>
					$(document).ready(function(){
						$(".tryimage").maphilight();
						var mainDirectory = $(".div-directory").find(".col-2.text-white");
						mainDirectory.text("FEEDBACK");
						$(".btn-area").on("click",function(){
							var value = $(this).attr("value");
							//alert(value);

							sessionStorage.setItem("place",value);

							window.location.href="worker-feedback-garden-area.php";
						});
					});
				</script>
			</div>
		</div>
	</body>
</html>