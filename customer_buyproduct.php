<?php
include('connectr.php');
$data=mysqli_query($con,"select * from shop_tbl");
$del=mysqli_query($con,"SELECT * FROM category_tbl");
?>

<script type = "text/javascript"src = "https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<form action="" method="POST">
<!-- <input type="text" id="user" onkeyup="handle()">
<br> -->
<select  id="dep">
<option value="">--Select shop--</option>
<?php
while($row=mysqli_fetch_assoc($data))
{ ?>  
   <option value="<?php echo $row['shop_id'];?>">  <?php echo $row['shop_name'];?></option>
   <?php
}
?>
</select>


<select id="emp">
<option value="">--Select category--</option>
<?php
while($row=mysqli_fetch_assoc($del))
{ 
  ?>  
   <option value="<?php echo $row['category_id'];?>">  <?php echo $row['category'];?></option>
   <?php
}
?>
</select> 

</form>
<script>
$('#dep').change(function(){
           var dep_id   = $('#dep').val();
           $.ajax({
             url:'customer_get_category.php',
             method: 'post',
             data: {
              dep: dep_id},
             dataType: 'json',
             success: function(response){
                 // Remove options 
               $('#emp').find('option').not(':first').remove();
              //  Add options
               $.each(response,function(index,data){
                  $('#emp').append('<option value="'+data['category_id']+'">'+data['category']+'</option>');
               });
             }
          });
         });
</script>
 