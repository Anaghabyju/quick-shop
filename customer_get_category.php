<?php
include "connectr.php";
$dep_id=$_POST['dep']; 
$result=mysqli_query($con,"SELECT * FROM `category_tbl` WHERE dep_id=$dep_id");
$list = array();
if(mysqli_num_rows($result)) {
    while($row = mysqli_fetch_assoc($result)){
        $data   = array(
            'id'                      => $row['category_id'],
            'name'                    => $row['category'],
            ); 
        array_push($list,$data);
    }
 }
echo json_encode($list);

?>