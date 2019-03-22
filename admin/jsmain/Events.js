function activateEvent(EventId){
    $.ajax({
        url:'admin/src/activateEvents.php',
        type:'POST',
        data:{EventId:EventId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
            //window.location.href="";
        }
    });
}
function AddEvent(){
    var EventName = $('#EventName').val();
    var EventDate = $('#EventDate').val();
    var EventTime = $('#EventTime').val();
    var Description = $('#Description').val();
    var Venue = $('#Venue').val();
    var VenueCity = $('#VenueCity').val();
    var imgname = $('#imgname').val();
    $.ajax({
        url:'admin/src/addContacts.php',
        type:'POST',
        data:{EventName:EventName,EventDate:EventDate,EventTime:EventTime,Description:Description,Venue:Venue,VenueCity:VenueCity,imgname:imgname},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
function displayEvents(){
    $.ajax({
        url:'admin/src/displayEvents.php',
        type:'POST',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){
                
            }
        }
    });
}
function removeEvent(EventId){
    $.ajax({
        url:'admin/src/removeEvent.php',
        type:'POST',
        data:{EventId:EventId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
displayEventsOnSite();
function displayEventsOnSite(){
    $.ajax({
        url:'admin/src/displayEventsOnSite.php',
        type:'GET',
        data:({Limit:'6'}),
        dataType:'json',
        success:function(response){
            var count = response.length; 
            if(response[0].msg==1){
            $('.eventData').html('<div class="row mb40"><div class="col-md-6 col-md-push-6 probootstrap-animate" style="visibility:visible;opacity:1;"><p><img src="img/4.jpg" alt="Spica Global Arts" class="img-responsive"></p></div><div class="col-md-5 col-md-pull-6 news-entry probootstrap-animate" style="visibility:visible;opacity:1;"><h2 class="mb0"><a href="#">Consectetur Adipisicing Elit</a></h2><p class="probootstrap-news-date">July 20, 2017 by Admin</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sunt excepturi dicta ex, placeat ab esse, iure harum eaque fuga asperiores distinctio amet temporibus enim illum molestiae neque ad similique possimus repellendus velit! Quaerat nihil nemo, aliquam consectetur debitis illum. Excepturi cum, quaerat minus odit dolorem recusandae, debitis reprehenderit voluptate?</p><p><span class="probootstrap-meta-share"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span> <a href="#" class="btn btn-black">Read More...</a></p></div></div>');
            }else if(response[0].msg==0){
                alert('Error While Connecting Server Please try Again Later');
            }else{
                for(var i=0;i<count;i++){
                    if(i%2==0){
                        $('.eventData').append('<div class="row mb40"><div class="col-md-6 col-md-push-6 probootstrap-animate" style="visibility:visible;opacity:1;"><p><img src="img/4.jpg" alt="Spica Global Arts" class="img-responsive"></p></div><div class="col-md-5 col-md-pull-6 news-entry probootstrap-animate" style="visibility:visible;opacity:1;"><h2 class="mb0"><a href="#" onClick="EventDetails('+response[i]['EventId']+')">'+response[i]['EventName']+'</a></h2><p class="probootstrap-news-date">'+response[i]['EventDate']+' At '+response[i]['Venue']+'</p><p>'+response[i]['Description']+' </p><p><span class="probootstrap-meta-share"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span> <a href="#" class="btn btn-black">Read More...</a></p></div></div>');
                    }else{
                        $('.eventData').append('<div class="row mb40"><div class="col-md-6 probootstrap-animate"  style="visibility:visible;opacity:1;"><p><img src="img/26.jpg" alt="Spica Global Arts" class="img-responsive"></p></div><div class="col-md-5 col-md-push-1  news-entry probootstrap-animate"  style="visibility:visible;opacity:1;"><h2 class="mb0"><a href="#" onClick="EventDetails('+response[i]['EventId']+')">'+response[i]['EventName']+'</a></h2><p class="probootstrap-news-date">'+response[i]['EventDate']+' At '+response[i]['Venue']+'</p><p>'+response[i]['Description']+' </p><p><span class="probootstrap-meta-share"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span> <a href="#" class="btn btn-black">Read More...</a></p></div></div>');
                    }
                }
            }  
        }
    });
}
function EventDetails(EventId){
    window.location.href="gallery.php?EventId="+EventId;
}
displayUpcomingEvents();
function displayUpcomingEvents(){
    var htmlData = '';
    $.ajax({
        url:'admin/src/displayEventsOnSite.php',
        type:'GET',
        data:({Limit:'3'}),
        dataType:'json',
        success:function(response){
            var count = response.length; 
            if(response[0].msg==1){
            $('.upComingData').html('<div class="row mb40"><div class="col-md-6 col-md-push-6 probootstrap-animate" style="visibility:visible;opacity:1;"><p><img src="img/4.jpg" alt="Spica Global Arts" class="img-responsive"></p></div><div class="col-md-5 col-md-pull-6 news-entry probootstrap-animate" style="visibility:visible;opacity:1;"><h2 class="mb0"><a href="#">Consectetur Adipisicing Elit</a></h2><p class="probootstrap-news-date">July 20, 2017 by Admin</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sunt excepturi dicta ex, placeat ab esse, iure harum eaque fuga asperiores distinctio amet temporibus enim illum molestiae neque ad similique possimus repellendus velit! Quaerat nihil nemo, aliquam consectetur debitis illum. Excepturi cum, quaerat minus odit dolorem recusandae, debitis reprehenderit voluptate?</p><p><span class="probootstrap-meta-share"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span> <a href="#" class="btn btn-black">Read More...</a></p></div></div>');
            }else if(response[0].msg==0){
                alert('Error While Connecting Server Please try Again Later');
            }else{
                for(var i=0;i<count;i++){
                    htmlData +='<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" id="pqr" data-animate-effect="fadeIn" style="visibility:visible;opacity:1;"><div class="probootstrap-image-text-block probootstrap-cause">';
                    htmlData +='<figure><img src="admin/Events/600x303/'+response[i]['EventProfile']+'" alt="Spica Global Arts" class="img-responsive"></figure>';
                    htmlData +='<div class="probootstrap-cause-inner"><div class="progress"><div class="progress-bar progress-bar-s2" data-percent="99"></div> </div>';
                    htmlData +='<div class="row mb30"><div class="col-md-6 col-sm-6 col-xs-6 probootstrap-raised">Raised: <span class="money">$49,112</span></div><div class="col-md-6 col-sm-6 col-xs-6 probootstrap-goal">Goal: <span class="money">$50,000</span></div></div>';            
                    htmlData +='<h2><a href="#">'+response[i]['EventName']+'</a></h2><div class="probootstrap-date"><i class="icon-calendar"></i> 2 hours remaining</div>';
                    htmlData +='<p>'+response[i]['Description']+'</p><p><a href="#" class="btn btn-primary btn-black">Buy Now!</a></p></div></div></div>';
                    $('#pqr').addClass('fadeInUp probootstrap-animated');
                }
                $('.upComingData').html(htmlData);
            }  
        }
    });
}
