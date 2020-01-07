<?php
include './include/db.php';
//if (! empty($_POST["branch"])) {
//    $enrol = mysqli_real_escape_string($conn,$_POST['branch']);
    $branch_id = $_POST['branch_id'];
    
//    require_once __DIR__ . '/../Model/CountryStateCity.php';
//    $countryStateCity = new CountryStateCity();
//    $cityResult = $countryStateCity->getCityByStateId($stateId);
//    ?>
<option>--Select subject--</option>
<?php
            $query=" select * from subject where branch_id = '$branch_id'";
           $select_data= mysqli_query($conn, $query);
           $count =0;
            while ($row = mysqli_fetch_array($select_data)) {
                $count++;
                $sub_id = $row['sub_id'];
                    $sub_name=$row['sub_name'];
//                    echo '<script>alert(1)</script>';
                      ?>
          
                                        <option value="<?php echo $sub_id;?>"><?php echo $sub_name;?></option>
<?php  }?>