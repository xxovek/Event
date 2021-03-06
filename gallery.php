<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spica Global Arts &mdash; Our Gallery</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel = "icon" href ="img/logo.png" type = "image/x-icon">
  </head>
  <body>
<?php include 'navbar.php';?>
      <section class="probootstrap-hero probootstrap-hero-inner" id="abcd"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate"><strong id="nameOfEvent">vikas</strong><span>Together we can make a difference</span></h1>
                <p class="probootstrap-animate"><a href="#" class="btn btn-primary btn-lg">Buy Ticket Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">
          <div class="eventData1">
        </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">
         <div class="row probootstrap-gutter10">
           <?php
           include 'admin/config/connection.php';
           $EventId = $_REQUEST['EventId'];
           $sql = "SELECT pictures FROM EventsGallary WHERE EventId=$EventId";
           if($result = mysqli_query($con,$sql)){
               if(mysqli_num_rows($result)>0){
                   while($row=mysqli_fetch_array($result)){?>
                   <div class="col-md-3 col-sm-4 col-xs-6 gal-item probootstrap-animate">
              <a href="admin/EventGallery/800x800/<?php echo $row['pictures'];?>" class="image-popup"><img src="admin/EventGallery/800x800/<?php echo $row['pictures'];?>" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            </div><?php
                   }
               }else{?>
                <div class="col-md-3 col-sm-4 col-xs-6 gal-item probootstrap-animate">
              <a href="img/img_sq_1.jpg" class="image-popup"><img src="img/img_sq_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            </div><?php
                   }
           }
           else{

           }
           ?>
          </div>
        </div>
      </section>
    <?php include 'footer.php';?>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="admin/jsmain/Events.js"></script>
    <script>
EventeDetailsParticular();
displayEventbyID();
function displayEventbyID(){
    var EventId = '<?php echo $_REQUEST['EventId'];?>';
    // alert(EventId);
    $.ajax({
        url:'admin/src/displayAllEventsOnSiteById.php',
        type:'GET',
        data:({EventId:EventId}),
        dataType:'json',
        success:function(response){
            var count = response.length;
            var ehtml ='';
                for(var i=0;i<count;i++){
                     ehtml+='<div class="row mb40"><div class="col-md-6 col-md-push-6 probootstrap-animate" style="visibility:visible;opacity:1;">';
                     ehtml+='<p><img src="admin/Events/800x800/'+response[i]['EventProfile']+'" alt="Spica Global Arts" class="img-responsive"></p>';
                     ehtml+='</div><div class="col-md-5 col-md-pull-6 news-entry probootstrap-animate" style="visibility:visible;opacity:1;">';
                     ehtml+='<h2 class="mb0"><a href="#" onClick="EventDetails('+response[i]['EventId']+')">'+response[i]['EventName']+'</a>';
                     ehtml+='</h2><p class="probootstrap-news-date" style="color: brown;font-weight: bold;">Event Date:'+response[i]['EventDate']+'<br> Event Location: '+response[i]['Venue']+'</p>';
                    ehtml +='<p class="" style="color:#a69e2a;font-weight: bold;font-size: small;">Event Detail:<br> At '+response[i]['Description']+'</p>';
                     ehtml+='<p class="money" style="color:#2f0e8f;font-weight: bold;font-size: medium;"> Venue City:  '+response[i]['VenueCity']+'</br> Time:  '+response[i]['EventTime']+' </p>';
                     // ehtml+='<p class="money" style="color:#2f0e8f;font-weight: bold;font-size: medium;"> Time:  '+response[i]['EventTime']+' </p>';
// ehtml+='<p><span class="probootstrap-meta-share"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span>';
                     // ehtml+='<a href="gallery.php?EventId='+response[i]['EventId']+'"  class="btn btn-black">Read More...</a></p>';
                     ehtml+='</div></div>';

                    }
                    $('.eventData1').append(ehtml);
                }
    });
}
function EventeDetailsParticular(){
  var EventId = '<?php echo $_REQUEST['EventId'];?>';
  // $('.probootstrap-gutter10').append('<div class="col-md-3 col-sm-4 col-xs-6 gal-item probootstrap-animate" id="abc"><a href="img/img_sq_1.jpg" class="image-popup"><img src="img/img_sq_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a></div>');
  $.ajax({
        url:'admin/src/displayEventDescription.php',
        type:'GET',
        data:{EventId:EventId},
        dataType:'json',
        success:function(response){
          var count = response.length;
            if(response[0].msg==1){
            $('.row probootstrap-gutter10').html('<div class="row mb40"><div class="col-md-6 col-md-push-6 probootstrap-animate" style="visibility:visible;opacity:1;"><p><img src="img/4.jpg" alt="Spica Global Arts" class="img-responsive"></p></div><div class="col-md-5 col-md-pull-6 news-entry probootstrap-animate" style="visibility:visible;opacity:1;"><h2 class="mb0"><a href="#">Consectetur Adipisicing Elit</a></h2><p class="probootstrap-news-date">July 20, 2017 by Admin</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sunt excepturi dicta ex, placeat ab esse, iure harum eaque fuga asperiores distinctio amet temporibus enim illum molestiae neque ad similique possimus repellendus velit! Quaerat nihil nemo, aliquam consectetur debitis illum. Excepturi cum, quaerat minus odit dolorem recusandae, debitis reprehenderit voluptate?</p><p><span class="probootstrap-meta-share"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span> <a href="#" class="btn btn-black">Read More...</a></p></div></div>');
            }else if(response[0].msg==0){
                alert('Error While Connecting Server Please try Again Later');
            }else{
              $('#abcd').css('background-image','url(admin/Events/1900x960/'+response[0]['EventProfile']+')');
              $('#nameOfEvent').text(response[0]['EventName']);
            }
        },
        failure: function (response) {
            alert(response);
        }
    });
}
</script>
</body>
</html>
