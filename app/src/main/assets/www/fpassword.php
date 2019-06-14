<html>
	<head id="header">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">

                $("#header").load("src/header.php");

         </script>
	</head>
	<body class=" bodyContent bg-success">
		<div class="container-fluid">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10 my-5 bg-light rounded frame" style="height: 480px">
					<div class="text-center mt-5">
						<img class="align-center" src="asset/lock.png" height="60" align="center">
					</div>
					<p class="h5 text-success col-12 text-center mb-5 mt-3">Forgot Your Password?</p>
					<p class="text-center ">We need your registered email address to send you password reset.</p>

					<input class="email-input text-center form-control mt-5 col-12" type="text" name="" placeholder=" Your Email Address">

					<div class="my-5 col-12 text-center">
						<button class="btn-user-fpassword btn  btn-block  btn-success"> SEND </button>
					</div>

				</div>
				<div class="col-1"></div>
			</div>
		</div>
	</body>
	<script>

		getDeviceHeight();
		$(document).ready(function(){
			$(".btn").on("click",function(){
				loginUser();
			});
		});
		
		function getDeviceHeight(){
			$(".frame").css("height",$(window).height()-100);
		}
		function fpasswordUser()
		{
			$(".mes-email").text("");
			var email = $(".email-input").val();
			

			email = email.trim();

			if(email != "" && pass != "")
			{
				$.post("server.php",{function:"login",email:email,pass:pass},function(data){
					var user = data.info;
					alert(data.info.position);
					if(user.position == "Gardener" || user.position == "Worker" || user.position == "Manager")
					{
						sessionStorage.setItem("id",user.id);
						sessionStorage.setItem("fname",user.fname);
						sessionStorage.setItem("lname",user.lname);
						sessionStorage.setItem("age",user.age);
						sessionStorage.setItem("email",user.email);
						sessionStorage.setItem("phone",user.phone);
						sessionStorage.setItem("position",user.position);
						sessionStorage.setItem("address",user.address);
						window.location.href = "worker.php";
						
					}
					else
					{
						window.location.href = "visitor.php";
					}
				},"json");
			}
			else
			{
				if(email == "")
				{
					$(".mes-email").text("Please enter valid email");
				}
				if (pass =="") {
					$(".mes-pass").text("Please enter password");
				}
			}
		}
	</script>
</html>