<html>
	<head id="header">
        <script>
           if(sessionStorage.getItem("id") && sessionStorage.getItem("position"))
           {
            if(sessionStorage.getItem("position") == "Visitor" || sessionStorage.getItem("position") == "visitor" )
            {
              window.location.href = "visitor.php";
            }
            else{
                window.location.href = "worker.php";
            }
           }

         </script>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">

                $("#header").load("src/header.php");

         </script>
	</head>
	<body class="bg-success">
    		<div class="container">
    			<div class="row">
    				<div class="col-1"></div>
    				<div class="col-10 bg-light my-5 bg-light rounded frame" style="height:600px">
    					<div class="text-center mt-3">
    						<img class="align-center" src="asset/logo.png" height="60" align="center">
    					</div>
    					<p class="h6 text-success col-12 text-center mb-5">Garduino Assist System</p>
    					<small><label class="col-4 text-left">E-mail</label><label class="mes-email col-8 text-right"></label></small>
    					<input class="email-input text-center form-control" type="text" name="" placeholder="Email">
    					<small><label class="col-4 text-left">Password</label><label class="mes-pass col-8 text-right mt-2"></label></small>
    					<input class="pass-input text-center  form-control" type="password" name="" placeholder="Password">
    					<div class="my-3 col-12 text-center">
    						<button class="btn-user-login btn  btn-block  btn-success"> LOG IN </button>
    					</div>
    					<div class="text-center my-3 d-none">
    						<button class="btn btn-outline-light forgot-passwordBtn text-info">Forgot Password?</button>

    					</div>
    					<div class="text-center my-3">
    						<button class="btn btn-outline-light Vlogin text-info">Use As Visitor</button>

    					</div>
    				</div>
    				<div class="col-1"></div>
    			</div>
    		</div>
    	</body>

    	<script>

    		getDeviceHeight();
    		$(document).ready(function(){
    			$(".btn-user-login").on("click",function(){
    				loginUser();
    			});
                $(".Vlogin").on("click",function(){

                    loginAnonymous();
                });
                $(".forgot-passwordBtn").on("click",function(){
                    forgotPassword();
                });
    		});

    		function getDeviceHeight(){
    			$(".frame").css("height",$(window).height()-100);
    		}
            function forgotPassword()
            {
                window.location.href = "fpassword.php"; 
            }
    		function loginUser()
    		{
    			$(".mes-email").text("");
    			$(".mes-pass").text("");
    			var email = $(".email-input").val();
    			var pass = $(".pass-input").val();

    			email = email.trim();
    			pass = pass.trim();

    			if(email != "" && pass != "")
    			{
    				$.post("http://192.168.137.1/gasMobile/server.php",{function:"login",email:email,pass:pass},function(data){
    					var user = data.info;
    					//alert(data.info.position);
    					if(user.position == "Gardener" || user.position == "Worker" || user.position == "Manager" || user.position == "StoreKeeper" || user.position =="Supervisor")
    					{
                            sessionStorage.setItem("id",user.id);
    						sessionStorage.setItem("fname",user.fname);
    						sessionStorage.setItem("lname",user.lname);
    						sessionStorage.setItem("age",user.age);
    						sessionStorage.setItem("email",user.email);
    						sessionStorage.setItem("phone",user.phone);
    						sessionStorage.setItem("position",user.position);
    						sessionStorage.setItem("address",user.address);
                            sessionStorage.setItem("image",user.user_img);
    						window.location.href = "worker.php";

    					}
    					else
    					{
    						window.location.href = "visitor.php";
    					}
    				},"json")
    				.fail(function(data){
    				    alert("No Internet Connection");
    				});
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
            function loginAnonymous()
            {
                // alert("huoi");
                // $.post("http://192.168.137.1/gasMobile/server.php",{function:"Vlogin"},function(data){
                //     alert(data);
                // });
                $.post("http://192.168.137.1/gasMobile/server.php",{function:"Vlogin"},function(data){
                    
                    var user = data.info;
                   
                    if(user.position=="Visitor")
                    {
                        sessionStorage.setItem("id",user.id);
                        sessionStorage.setItem("fname",user.fname);
                        sessionStorage.setItem("lname",user.lname);
                        sessionStorage.setItem("age",user.age);
                        sessionStorage.setItem("email",user.email);
                        sessionStorage.setItem("phone",user.phone);
                        sessionStorage.setItem("position",user.position);
                        sessionStorage.setItem("address",user.address);
                        window.location.href = "visitor.php";
                    }
                },"json");
            }
    	</script>
</html>