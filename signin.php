<!DOCTYPE html>

<html lang="en">
<head>
	<title>SIGN UP</title>
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
        <?php include './include/db.php';

?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('./images/imglogin.webp');">
			<div class="">
                            <form class="" action="#" method="POST">
					<div class="login100-form-avatar">
                                            <img src="./images/iitr.jfif" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						IIT-R FIRST YEAR SIGN UP
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                                            <input class="input100" type="text" name="name" id="name" placeholder="Username">
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
                                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Enrollment Number is required">
                                        <input class="input100" type="number" name="enrol" id="enrol" placeholder="Enrollment Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
                                    <div class="wrap-input100 validate-input m-b-10" data-validate = "branch is required">
                                        <select name="branch_id" value="branch_id" id="branch" class="input100">
                                        <option>--Select Branch--</option>
                                              <?php
            $query=" select * from branch where status='1'";
           $select_data= mysqli_query($conn, $query);
           $count =0;
            while ($row = mysqli_fetch_array($select_data)) {
                $count++;
               $branch_id=$row['branch_id'];
                    $branch_name=    $row['branch_name'];
                    $status=    $row['status']; 
                      $created=  $row['created'];
                      ?>
          
                                        <option value="<?php echo $branch_id;?>"><?php echo $branch_name;?></option>
            <?php }?>
                                    </select>
                                        

<!--						<input class="input100" type="text" name="" placeholder="Branch">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>-->
					</div>

					<div class="container-login100-form-btn p-t-10">
<!--                                            <button class="login100-form-btn" name="submit" id="">
							Login
						</button>-->
<input class="login100-form-btn" type="button" value="Sign In" id="signin">
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

                $("#signin").click(function(){
                    var enrol = $("#enrol").val().trim();
                    var password = $("#pass").val().trim();
                    var name = $("#name").val().trim();
                    var branch = $("#branch").val().trim();
                    if( enrol != "" && password != "" && name != "" && branch != "" ){
                        $.ajax({
                            url:'createUser.php',
                            type:'post',
                            data:{enrol:enrol,password:password,name:name,branch:branch},
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