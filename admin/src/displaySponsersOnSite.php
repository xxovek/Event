<?php
require('admin/config/connection.php');
$sql = "SELECT * FROM Sponsers WHERE showFlag = 1 LIMIT 5";
if($result = mysqli_query($con,$sql) or die(mysqli_error($con))){
  $count = mysqli_num_rows($result);
    if($count>0){
        while($row=mysqli_fetch_array($result)){?>
        <div class="item">
  <div class="probootstrap-testimony-wrap text-center">
    <figure>
      <img src="img/12.jpg" alt="Spica Global Arts">
    </figure>
    <blockquote class="quote">&ldquo;<?php echo $row['sponserDesc'];?>&rdquo; <cite class="author"> &mdash; <span><?php echo $row['sponserName'];?></span></cite></blockquote>
  </div>
</div>
<?php }
    }
    for($i=$count;$i<2;$i++){?>
      <div class="item">
      <div class="probootstrap-testimony-wrap text-center">
    <figure>
      <img src="img/12.jpg" alt="Spica Global Arts">
    </figure>
    <blockquote class="quote">&ldquo;Loreal&rdquo; <cite class="author"> &mdash; <span>I don't Know</span></cite></blockquote>
  </div>
</div> <?php
    }
}
else{   
}
?>