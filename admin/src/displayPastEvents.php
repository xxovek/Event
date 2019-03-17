<?php 
require('admin/config/connection.php');
$sql = "SELECT * FROM Events WHERE Events.EventDate < CURDATE() ORDER BY EventDate DESC LIMIT 5";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){?>
        <div class="col-md-3">
              <div class="probootstrap-donors text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/10.jpg" alt="Spica Global Arts" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><?php echo ucwords($row['EventName']);?></h3>
                  <p class="donated"><?php echo $row['Venue'];?> <span class="money"><?php echo $row['VenueCity'];?></span></p>
                </div>
              </div>
            </div><?php
        }
    }else{
        
    }
}
else{
   
}
?>
