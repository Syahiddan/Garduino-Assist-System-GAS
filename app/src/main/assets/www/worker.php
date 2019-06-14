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
			<div class="row mt-3 mainContent">
				<div class="col-6 ">
					<button class="btn-garden text-center btn btn-outline-info btn-block">
						<img src="asset/garden.png" height="100"><br>GARDEN
					</button>
					<button class="btn-schedule text-center btn btn-outline-info btn-block">
						<img src="asset/schedule.png" height="100"><br>SCHEDULE
					</button>
					<button class="btn-feedback text-center btn btn-outline-info btn-block">
						<img src="asset/viewfeedback.png" height="100"><br>FEEDBACK
					</button>
				</div>
				<div class="col-6 ">
					<button class="btn-activity text-center btn btn-outline-info btn-block">
						<img src="asset/activity.png" height="100"><br>ACTIVITY
					</button>
					<button class="btn-item text-center btn btn-outline-info btn-block">
						<img src="asset/item.png" height="100"><br>ITEM
					</button>
					<button class="btn-setting text-center btn btn-outline-info btn-block">
						<img src="asset/setting.png" height="100"><br>SETTING
					</button>
				</div>

			</div>
		</div>
	</body>
	<script>
		$(".btn-garden").on("click",function(){
			window.location.href = "worker-garden.php";
		});
		$(".btn-schedule").on("click",function(){
			window.location.href = "worker-schedule.php";
		});
		$(".btn-feedback").on("click",function(){
			window.location.href = "worker-feedback-garden.php";
		});
		$(".btn-activity").on("click",function(){
			window.location.href = "worker-activity.php";
		});
		$(".btn-item").on("click",function(){
			window.location.href = "worker-item.php";
		});
		$(".btn-setting").on("click",function(){
			window.location.href = "worker-setting.php";
		});
	</script>
</html>