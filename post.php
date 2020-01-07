<!DOCTYPE html>
<html lang="en">
    <?php
    include './include/db.php';
    if(isset($_POST['submit'])){
        $post_title = $_POST['title'];
        $post_dis = $_POST['blog_des'];
        $user_enrol = $_SESSION['user_enrol'];
        $branch_id = $_POST['branch'];
        $sub_id = $_POST['subject'];
        $type_id = $_POST['type'];
        $file = $_FILES['doc']['name'];
    $file_temp = $_FILES['doc']['tmp_name'];
    move_uploaded_file($file_temp, "./posts/$file");
        $query = "INSERT INTO `post`(`post_title`, `post_dis`, `content`, `status`, `created`, `downloads`, `user_enrol`, `branch_id`, `type_id`, `sub_id`) VALUES ('$post_title','$post_dis','$file','1',now(),'0','$user_enrol','$branch_id','$type_id','$sub_id')";
        $insert_data = mysqli_query($conn, $query);
    }
    ?>
<head>
	<title>ADD POST</title>
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

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('./images/imglogin.webp');">
			<div class="wrap-login100 p-t-190 p-b-30">
                            <form class="" enctype="multipart/form-data" action="#" method="post">
					<div class="login100-form-avatar">
                                            <img src="./images/iitr.jfif" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						ADD YOUR POST
					</span>
                            
                            <div class="wrap-input100 validate-input m-b-10">
                                    <label>Branch </label>
                                    <!--<input type="text" name="blog_title" class="form-control">-->
                                    <select name="branch" id="branch" class="input100" onchange="getsubject(this.value)">
                                        <option>--Select Branch--</option>
                                              <?php
            $query=" select * from branch where status='1'";
           $select_data= mysqli_query($conn, $query);
           $count =0;
            while ($row = mysqli_fetch_array($select_data)) {
                $count++;
               $branch_id=$row['branch_id'];
                    $branch_name=$row['branch_name'];
                      ?>
          
                                        <option value="<?php echo $branch_id;?>"><?php echo $branch_name;?></option>
            <?php }?>
                                    </select>
                                </div>
                            <div class="wrap-input100 validate-input m-b-10">
                                    <label>Subject </label>
                                  
                                    <select name="subject" id="subject" class="input100">

          

                                    </select>
                                </div>
                            <div class="wrap-input100 validate-input m-b-10">
                                    <label>Type</label>
                              
                                    <select name="type" id="type" class="input100">
                                        <option>--Select Type--</option>
                                              <?php
            $query=" select * from type where status='1'";
           $select_data= mysqli_query($conn, $query);
           $count =0;
            while ($row = mysqli_fetch_array($select_data)) {
                $count++;
               $type_id=$row['type_id'];
                    $type_name=    $row['type_name'];
                      ?>
          
                                        <option value="<?php echo $type_id;?>"><?php echo $type_name.$type_id;?></option>
            <?php }?>
                                    </select>
                                </div>
                               <div class="wrap-input100 validate-input m-b-10" data-validate = "Title is required">
                                   <label>Title</label>
                                   <input class="input100" type="text" name="title" id="title" placeholder="Title">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

                                    <div class="wrap-input100 validate-input m-b-10" data-validate = "enrollment no. is required">
                                        <label>Attach File</label>
                                        <input class="input100" type="file" name="doc" placeholder="attach file">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
                                    <div class="form-group">
                                    <label>Post Description: </label>
                                    <textarea name="blog_des" id="editor"></textarea>
                                    <script src="./ckeditor/ckeditor.js" type="text/javascript"></script>
                                    <script src="./ckeditor/sample.js" type="text/javascript"></script>
                                    <script>
	initSample();
</script>
                                    
                                    </div>

<center><button type="submit" name="submit" id="submit" style="margin-top: 13px;" class="input100 btn btn-info">Submit</button></center>



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
            function getsubject(val) {
	$.ajax({
		type: "POST",
		url: "get-subject-ep.php",
		data:'branch_id='+val,
//		beforeSend: function() {
//			$("#city-list").addClass("loader");
//		},
		success: function(data){
			$("#subject").html(data);
//			$("#city-list").removeClass("loader");
		}
	});
}
        </script>
	

</body>
</html>