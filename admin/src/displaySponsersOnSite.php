<?php
require_once('admin/config/connection.php');
$sql = "SELECT * FROM Sponsers WHERE showFlag = 1 LIMIT 5";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){?>
        <div class="item">
  <div class="probootstrap-testimony-wrap text-center">
    <figure>
      <img src="img/12.jpg" alt="Free Bootstrap Template by uicookies.com">
    </figure>
    <blockquote class="quote">&ldquo;<?php echo $row['sponserDesc'];?>&rdquo; <cite class="author"> &mdash; <span><?php echo $row['sponserName'];?></span></cite></blockquote>
  </div>
</div>
<?php }
    }else{
       
    }
}
else{
    
}
?>