<!DOCTYPE html>
<?php
?>
<html>
    <head>
<?php
include './include/db.php';

// Check user login or not
if (!isset($_SESSION['user_enrol'])) {
    header('Location: home.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: home.php');
}
?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/f6a1c0d875.js"></script>
        <script src = 
                "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
        </script> 
        <title>EndGem</title>
        <script src="sidebar.js"></script>

    </head>
    <body style="background-color: #F2F3F5 !important">
        <div class="menu-bar" style="width:100%;">
            <div class="container-fluid" style="width:100%;">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#"><i class="fas fa-book"></i>ENDGEM</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto" id="mylist" style="margin-left: 25%;">
                            <?php
                            if (isset($_GET['bid']) && isset($_GET['sid'])) {
                                $bid = $_GET['bid'];
                                $sid = $_GET['sid'];
                                $query = " select * from type where status='1'";
                                $select_data = mysqli_query($conn, $query);
                                $count = 0;
                                while ($row = mysqli_fetch_array($select_data)) {
                                    $count++;
                                    $type_id = $row['type_id'];
                                    $type_name = $row['type_name'];
                                    ?>
                                    <?php
                                    if ($type_id == 1) {
                                        ?>
                                        <li  class="nav-item">
                                            <a class="nav-link " id="<?php echo $type_id; ?>"  href="index.php?tid=<?php echo $type_id; ?>&&bid=<?php echo $bid; ?>&&sid=<?php echo $sid; ?>"><?php echo $type_name ?></a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" id="<?php echo $type_id; ?>"  href="index.php?tid=<?php echo $type_id; ?>&&bid=<?php echo $bid; ?>&&sid=<?php echo $sid; ?>"><?php echo $type_name ?></a>
                                        </li>
                                    <?php }
                                }
                            } else {
                                
                            } ?>

                        </ul>     
                        <form action="index.php" method="get" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color:#F2F3F5 ; margin-left: -17% ; color: #fff !important ; border-color: white !important"><i class="fas fa-search"></i></button>
                        </form>


                        <div class="btn-group" > 
                            <?php $fid = $_SESSION['user_enrol']; ?>
                            <?php
                            $query = "SELECT * FROM `user` WHERE user_enrol='$fid'";
                            $select_user = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($select_user);
                            $name = $row['user_name'];
                            ?>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style=" background-color: #fff ; border-color: #4267b2 ; color: #4267b2 ">
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="logout.php">log out</a>
                                    <a class="dropdown-item" href="changepassword.php">change password</a>
                                </div>
                                <button type="button" class="btn btn-primary btn-block" style="margin-right:55px;background-color: #fff ; border-color: #4267b2 ; color: #4267b2 !important ; height: 39px " ><p><?php echo $name ?></p><br><span><?php echo $fid ?></span></button>
                            </div>

                        </div>
                </nav>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row d-flex d-md-block flex-nowrap wrapper" style="background-color: #fff;">
                <!--        sidebar starts-->

                <div class="col-md-2 col-lg-2 col-sm-2 float-left col-1 pl-0 pr-0 collapse width show " id="sidebar">
                    <div class="list-group border-0 card text-center text-md-left" style="">
                        <?php
                        $count = -1;
                        $scount = 0;
                        $query = "SELECT * FROM `branch`";
                        $done_data = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($done_data)) {

                            $branch_name = $row['branch_name'];
                            $branch_id = $row['branch_id'];
                            $count++;
                            ?>
                            <a href="#menu<?php echo $count; ?>"  class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="d-none d-md-inline"><?php echo $branch_name ?></span> </a>



                            <div class="collapse" id="menu<?php echo $count; ?>" style="font-size:.72rem ! important;">
                                <?php
                                $query1 = "SELECT * FROM `subject` WHERE branch_id = $branch_id ";
                                $done_data1 = mysqli_query($conn, $query1);
                                while ($row1 = mysqli_fetch_array($done_data1)) {
                                    $scount++;
                                    $sub_name = $row1['sub_name'];
                                    $sub_id = $row1['sub_id'];
                                    ?> 
                                    <a href="index.php?bid=<?php echo $branch_id; ?>&&sid=<?php echo $sub_id; ?>" class="list-group-item"style="padding-left: 13%;" ><?php echo $sub_name; ?></a>
    <?php } ?> </div> <?php } ?>



                    </div>
                </div>
                <main class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col px-5 pl-md-2 pt-2 main mx-auto" style="background-color:#F2F3F5">
                    <div class="row pr-0">
                        <div id="rightmain" class="col-md-10 col-lg-10 col-sm-10 col-xs-10" >
                            <div class="row">

                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 stcol">
                                    <a href="#" data-target="#sidebar" data-toggle="collapse" style="color:black" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
                                </div>
                                <div class="ndcol">


                                </div>
                                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 pull-right rdcol">
                                    <a href="#" data-target="#rightbar" data-toggle="collapse" style="color:black " aria-expanded="false"><i id="move" onclick="closerightbar()" class="fa fa-navicon fa-2x py-2 p-1"></i></a>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">
                                    <center> <?php
                                        if (isset($_GET['leaderboard'])) {
                                            echo 'Top 5 Gems >';
                                        } elseif (isset($_GET['search'])) {
                                            $search = $_GET['search'];
                                            echo 'posts related to ' . $search . ' are >';
                                        } elseif (isset($_GET['bid']) && isset($_GET['sid']) && isset($_GET['tid'])) {
                                            $bid = $_GET['bid'];
                                            $sid = $_GET['sid'];
                                            $tid = $_GET['tid'];
                                            $query = "SELECT `branch_name` FROM `branch` WHERE branch_id = '$bid' ";
                                            $select_data = mysqli_query($conn, $query);
                                            $branch = mysqli_fetch_array($select_data);
                                            $query1 = "SELECT `sub_name` FROM `subject` WHERE sub_id = '$sid' ";
                                            $select_data1 = mysqli_query($conn, $query1);
                                            $sub = mysqli_fetch_array($select_data1);
                                            $query2 = "SELECT `type_name` FROM `type` WHERE type_id = '$tid' ";
                                            $select_data2 = mysqli_query($conn, $query2);
                                            $type = mysqli_fetch_array($select_data2);
                                            echo $branch['branch_name'] . '    >    ' . $sub['sub_name'] . '    >    ' . $type['type_name'];
                                        } elseif (isset($_GET['bid']) && isset($_GET['sid']) && !isset($_GET['tid'])) {
                                            $bid = $_GET['bid'];
                                            $sid = $_GET['sid'];
                                            $query = "SELECT `branch_name` FROM `branch` WHERE branch_id = '$bid' ";
                                            $select_data = mysqli_query($conn, $query);
                                            $branch = mysqli_fetch_array($select_data);
                                            $query1 = "SELECT `sub_name` FROM `subject` WHERE sub_id = '$sid' ";
                                            $select_data1 = mysqli_query($conn, $query1);
                                            $sub = mysqli_fetch_array($select_data1);
                                            echo 'branch : ' . $branch['branch_name'] . '    >    subject : ' . $sub['sub_name'];
                                        } else {
                                            echo 'branch : ?     >     subject : ?     >     type : ?';
                                        }
                                        ?></center>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="tab-pane fade show active" id="chrepo" style="height: 70%">
                                    <section class="container mt-6">

                                        <hr class="w-25px ml-1 mt-1">
                                        <div class="container-fluid pre-scrollable mh-500 section-dialog" style="max-height: 600px">
                                            <div class="row gap-y gap-2" data-shuffle="list">
<?php
if (isset($_GET['leaderboard'])) {
    $query = "SELECT * FROM `post` ORDER BY downloads DESC LIMIT 5";
    $select_query = mysqli_query($conn, $query);
    if (!$select_query) {
        die('QUERY FAILED' . mysqli_error($conn));
    } else {
        //   echo 'success';    
    }

    //$count = mysqli_num_rows($select_query);
    while ($row = mysqli_fetch_array($select_query)) {
        $name = $row['post_title'];
        $content = $row['content'];
        $downloads = $row['downloads'];
        $id = $row['id'];
        ?>
                                                        <script type="text/javascript">

                                                            $(document).ready(function () {
                                                                $("#<?php echo $id; ?>").on("click", function () {
                                                                    $('#<?php echo "d" . $id; ?>').html(function (i, val) {
                                                                        return val * 1 + 1
                                                                    });

                                                                    var downloads = document.getElementById("<?php echo "d" . $row['id']; ?>").innerHTML;
                                                                    var id = document.getElementById("<?php echo $row['id']; ?>").innerHTML;
                                                                    $.ajax({
                                                                        type: "post",
                                                                        url: "updatedownloads.php",
                                                                        data: {
                                                                            downloads: downloads,
                                                                            id: id
                                                                        },
                                                                        success: function (data) {
                                                                        }
                                                                    });
                                                                });
                                                            });


                                                        </script>


                                                        <div class="col-md-11 bg-secondary pt-3 pb-1 my-1" style="background-color: #fff !important;" data-shuffle="item" data-groups="tut">
                                                            <h5 class="d-inline-block"><?php echo $name; ?></h5>
                                                            <div class="text-right float-right">
                                                                <span id="<?php echo 'd' . $id; ?>"><?php echo $downloads; ?></span>
                                                                <a download="<?php echo $content ?>" href="./posts/<?php echo $content ?>"><button id="<?php echo $id; ?>" class="btn btn-primary ml-auto d-inline btn-sm"><i class="fa fa-download"></i></button></a>
                                                                <a class="btn btn-primary ml-auto d-inline" target="_blank" href="./posts<?php echo $content ?>" data-provide="lightbox">View</a>

                                                            </div>
                                                        </div>

    <?php
    }
} elseif (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM post WHERE post_title LIKE '%$search%'";
    $select_query = mysqli_query($conn, $query);
    if (!$select_query) {
        die('QUERY FAILED' . mysqli_error($conn));
    } else {

        //   echo 'success';    
    }

    //$count = mysqli_num_rows($select_query);
    while ($row = mysqli_fetch_array($select_query)) {
        $name = $row['post_title'];
        $content = $row['content'];
        $downloads = $row['downloads'];
        $id = $row['id'];
        ?>
                                                        <script type="text/javascript">

                                                            $(document).ready(function () {
                                                                $("#<?php echo $id; ?>").on("click", function () {
                                                                    $('#<?php echo "d" . $id; ?>').html(function (i, val) {
                                                                        return val * 1 + 1
                                                                    });

                                                                    var downloads = document.getElementById("<?php echo "d" . $row['id']; ?>").innerHTML;
                                                                    var id = document.getElementById("<?php echo $row['id']; ?>").innerHTML;
                                                                    $.ajax({
                                                                        type: "post",
                                                                        url: "updatedownloads.php",
                                                                        data: {
                                                                            downloads: downloads,
                                                                            id: id
                                                                        },
                                                                        success: function (data) {
                                                                        }
                                                                    });
                                                                });
                                                            });





                                                        </script>


                                                        <div class="col-md-11 bg-secondary pt-3 pb-1 my-1" style="background-color: #fff !important;" data-shuffle="item" data-groups="tut">
                                                            <h5 class="d-inline-block"><?php echo $name; ?></h5>
                                                            <div class="text-right float-right">
                                                                <span id="<?php echo 'd' . $id; ?>"><?php echo $downloads; ?></span>
                                                                <a download="<?php echo $content ?>" href="./posts/<?php echo $content ?>"><button id="<?php echo $id; ?>" class="btn btn-primary ml-auto d-inline btn-sm"><i class="fa fa-download"></i></button></a>
                                                                <a class="btn btn-primary ml-auto d-inline" target="_blank" href="./posts<?php echo $content ?>" data-provide="lightbox">View</a>

                                                            </div>
                                                        </div>

    <?php
    }
} elseif (isset($_GET['bid']) && isset($_GET['sid']) && isset($_GET['tid'])) {
    $bid = $_GET['bid'];
    $sid = $_GET['sid'];
    $tid = $_GET['tid'];
    $query = "SELECT `post_title`, `content`, `downloads`,`id` FROM `post` WHERE branch_id = $bid AND sub_id = $sid AND type_id = $tid";
    $run_query = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($run_query)) {
        $name = $row['post_title'];
        $content = $row['content'];
        $downloads = $row['downloads'];
        $id = $row['id'];
        ?>

                                                        <script type="text/javascript">


                                                            $(document).ready(function () {
                                                                $("#<?php echo $id; ?>").on("click", function () {
                                                                    $('#<?php echo "d" . $id; ?>').html(function (i, val) {
                                                                        return val * 1 + 1
                                                                    });

                                                                    var downloads = document.getElementById("<?php echo "d" . $row['id']; ?>").innerHTML;
                                                                    var id = document.getElementById("<?php echo $row['id']; ?>").innerHTML;
                                                                    $.ajax({
                                                                        type: "post",
                                                                        url: "updatedownloads.php",
                                                                        data: {
                                                                            downloads: downloads,
                                                                            id: id
                                                                        },
                                                                        success: function (data) {
                                                                        }
                                                                    });
                                                                });
                                                            });



                                                        </script>


                                                        <div class="col-md-11 bg-secondary pt-3 pb-1 my-1" style="background-color: #fff !important;" data-shuffle="item" data-groups="tut">
                                                            <h5 class="d-inline-block"><?php echo $name; ?></h5>
                                                            <div class="text-right float-right">
                                                                <span id="<?php echo "d" . $id; ?>"><?php echo $downloads; ?></span>
                                                                <a download="<?php echo $content ?>" href="./posts/<?php echo $content ?>"><button  id="<?php echo $id; ?>" class="btn btn-primary ml-auto d-inline btn-sm"><i class="fa fa-download"></i></button></a>
                                                                <a class="btn btn-primary ml-auto d-inline" target="_blank" href="./posts/<?php echo $content ?>" data-provide="lightbox">View</a>
                                                            </div>
                                                        </div>

    <?php
    }
} elseif (isset($_GET['bid']) && isset($_GET['sid']) && !isset($_GET['tid'])) {
    ?>
                                                    <div class="alert alert-info alert-dismissible fade show" style="background-color:#4267b2 ; color:#fff">
                                                        <strong>Info!</strong> Please select type from navbar .
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    </div>
<?php
} else {
    ?>
                                                    <div class="alert alert-info alert-dismissible fade show" style="background-color:#4267b2 ; color: #fff">
                                                        <strong>Info!</strong> Please select branch and corresponding subject to proceed.
                                                        <button type="button" class="close" data-dismiss="alert" >&times;</button>
                                                    </div>

<?php }
?>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2 col-1 pr-0 collapse width show" id="rightbar" style="right:0 ;position:fixed ;float: right ; background-color: rgba(135, 51, 51, 0)">

                            <div class="list-group border-0 text-center text-md-left" style="">  

                                <a href="index.php?leaderboard"  style="text-align: center;margin-top:50%;padding: 10px 0px 10px 0px;" class="list-group-item d-inline-block collapsed"  data-parent="#rightbar"><i class="fas fa-gem"></i><span style="margin-left:2%" class="d-none d-md-inline">Leaderboard</span></a>


                                <a href="post.php" class="list-group-item d-inline-block collapsed"  style="text-align: center;margin-top:10%;padding: 10px 0px 10px 0px;" data-parent="#rightbar"><i class="fas fa-plus-square"></i><span style="margin-left:2%" class="d-none d-md-inline">Add File</span></a>    



                            </div>


                        </div>
                    </div>
            </div>
        </div>
    </main>

</div>
</div>

</body>
</html>
