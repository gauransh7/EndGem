<!DOCTYPE html>

<html lang="en">
<head>
	<title>password-change</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
        <?php include 'db.php';

?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('imglogin.webp');">
			<div class="">
                            <form class="" action="#" method="POST">
					<div class="login100-form-avatar">
						<img src="iitr.jfif" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						IIT-R FIRST YEAR SIGNIN
					</span>


					<div class="wrap-input100 validate-input m-b-10" data-validate = "Old Password is required">
                                            <input class="input100" type="password" name="pass" id="pass" placeholder="Old Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
                                <div class="wrap-input100 validate-input m-b-10" data-validate = "New Password is required">
                                            <input class="input100" type="password" name="npass" id="npass" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
<!--                                            <button class="login100-form-btn" name="submit" id="">
							Login
						</button>-->
<input class="login100-form-btn" type="button" value="update" id="update">
					</div>
					<div class="text-center w-full">
                                            <a class="txt1" href="signin.php">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
<!--	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){

                $("#update").click(function(){
                    
                    var password = $("#pass").val().trim();
                    var newpassword = $("#npass").val().trim();
                    if( password != "" && newpassword != ""){
                        
                        $.ajax({
                            alert('hello');
                            url:'updatepassword.php',
                            type:'post',
                            data:{password:password,newpassword:newpassword},
                            success:function(response){
                               
                                var msg = "";
                                if(response == 1){
                                    window.location = "index.php";
                                }else{
                                    msg = "some problem occured!";
                                }
                                
                               // $("#message").html(msg);
                            }
                        });
                    }
                });

            });
        </script>

</body>
</html>