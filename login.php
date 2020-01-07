<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
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

<?php
//include 'db.php';
//session_start();
//if (isset($_POST['submit'])) {
//    $enrol = $_POST['enrol'];
//    $Password = $_POST['pass'];
//
//    $query = "select * from user where password='$Password' and user_enrol='$enrol'";
//    $select_user = mysqli_query($conn, $query);
//    
//    $count=mysqli_num_rows($select_user);
//if($count>0) {
//    while ($row = mysqli_fetch_array($select_user)) {
//        $status = $row['status'];
//        $user_enrol = $row['user_enrol'];
//        $user_name = $row['name'];
//        if ($status == 1) {
//            $_SESSION['user_enrol'] = $user_enrol;
//            $_SESSION['status'] = $status;
//            $_SESSION['user_name'] = $user_name;
//                echo "<script>alert ('Login Successfull');
//       window.location.href='index.php';
//       </script>";
//            
//        } else {
//             echo "<script>alert ('Pls Contact Admin 1');</script>";
//        }
//    }
//}
//else
//{
//     echo "<script>alert ('Pls Check enrollment no. and Password');</script>";
//}
//}
?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/imglogin.webp');">
			<div class="wrap-login100 p-t-190 p-b-30">
                            <!--<form class="" method="post">-->
					<div class="login100-form-avatar">
                                            <img src="./images/iitr.jfif" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						IIT-R FIRST YEAR LOGIN
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "enrollment no. is required">
                                            <input class="input100" type="number" name="enrol" id="enrol" placeholder="enrollment no.">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                                            <input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
<!--                                            <button class="login100-form-btn" name="submit" id="">
							Login
						</button>-->
<input class="login100-form-btn" type="button" value="Login" id="submit">
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				<!--</form>-->
			</div>
		</div>
	</div>
	
	

<!--===============================================================================================-->	
	<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
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

                $("#submit").click(function(){
                    var enrol = $("#enrol").val().trim();
                    var password = $("#pass").val().trim();

                    if( enrol != "" && password != "" ){
                        
                        $.ajax({
                            url:'checkUser.php',
                            type:'post',
                            data:{enrol:enrol,password:password},
                            success:function(response){
                                
                                var msg = "";
                                
                                if(response == 1){
                                    window.location.href = "index.php";
                                }else{
                                    msg = "Invalid enrol and password!";
                                }
                                alert(response);
                               // $("#message").html(msg);
                            }
                        });
                    }
                });

            });
        </script>
	

</body>
</html>