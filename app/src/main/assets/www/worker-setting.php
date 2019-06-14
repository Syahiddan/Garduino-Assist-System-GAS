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
		

				<div class="col-12 mt-3">
					<form action="http://192.168.137.1/gasMobile/server.php" method="post" enctype="multipart/form-data">
						<center><img class="pic-data rounded-circle border border-info" src="asset/user.png" height="70"><!-- <input type="file" class=" img-input" name="image"><div class="col-12"><button class="col-6 btn btn-upload-pic">Upload</button> --></div></center>
						<p><center> <text class="id id-data"></text> <br>  </center>
						<script>
							$(".btn-upload-pic").on("click",function(){
								$(".img-input").click();
							});
							$(".img-input").on("change",function(event){
								$(".pic-data").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
							});
						</script>
						<input type="hidden" name="function" value="updateWorkerData">
						<label><small>First Name</small></label>
						<input class="text-center form-control fname-data"type="text" name="fname" placeholder="">

						<label><small>Last Name</small></label>
						<input class="text-center form-control lname-data"type="text" name="lname" placeholder="">

						<label><small>Age</small></label>
						<input class="text-center form-control age-data"type="number" name="" placeholder="">

						<label><small>Phone</small></label>
						<input class="text-center form-control phone-data"type="text" name="phone" placeholder="">

						<label><small>Address</small></label>
						<textarea class="text-center form-control address-data"type="text" name="address" placeholder=""></textarea>

						<label><small>Email</small></label>
						<input class="text-center form-control email-data" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="you@example.com" type="text" name="email" placeholder="">

						<label><small>Password</small></label>
						<input class="text-center form-control password-data"type="password" name="password" placeholder="">


						<div class="text-center my-3">
							<button class="btn btn-block btn-success submit-report"> Submit </button>
						</div>
					</form>
				</div>
			
			
			<script>
				$(document).ready(function(){
					getWorkerData();
					
				});
				$(".submit-report").on("click",function(){
					var user_img = $(".user_img").val();
					var fname = $(".fname-data").val();
					var lname = $(".lname-data").val();
					var age = $(".age-data").val();
					var phone = $(".phone-data").val();
					var address = $(".address-data").val();
					var email = $(".email-data").val();
					var password = $(".password-data").val();


					user_img = user_img.trim();
					fname = fname.trim();
					lname = lname.trim();
					age = age.trim();
					phone = phone.trim();
					address = address.trim();
					email = email.trim();
					password = password.trim();

					if(fname != "" && lname != "" && age != ""&& phone !="" && address !="" && email !="" && password!="")
					{
						$.post("http://192.168.137.1/gasMobile/server.php",{function:"updateWorkerData",user_img:user_img,fname:fname,lname:lname,age:age,address:address,email:email,password:password},function(data){

						},"json");
					}

				});
				function getWorkerData()
				{
					$(".form-worker").removeClass("d-none");
					$.post("http://192.168.137.1/gasMobile/server.php",{function:"getWorkerData",user:sessionStorage.getItem("id")},function(data){
						// alert("hahah");
						if(data.status == "valid")
						{
							$(".fname-data").val(data.info.fname);
							$(".lname-data").val(data.info.lname);
							$(".age-data").val(data.info.age);
							$(".phone-data").val(data.info.phone);
							$(".address-data").val(data.info.address);
							$(".email-data").val(data.info.email);
							$(".password-data").val(data.info.password);
							$(".id-data").text(data.info.id);
							$(".pic-data").attr("src","http://192.168.137.1/gasMobile/asset/profile_picture/"+data.info.user_img);
						}
							
					},"json");
						
				}
			</script>

		</div>
	</body>
</html>