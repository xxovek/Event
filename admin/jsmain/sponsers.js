function activateSponsers(sponserId){
    $.ajax({
        url:'admin/src/activateSponsers.php',
        type:'POST',
        data:{sponserId:sponserId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
            //window.location.href="";
        }
    });
}
function AddSponsers(){
    var sponserName = $('#sponserName').val();
    var sponserDesc = $('#sponserDesc').val();
    var imgname = $('#imgname').val();
    $.ajax({
        url:'admin/src/addSponsers.php',
        type:'POST',
        data:{sponserName:sponserName,sponserDesc:sponserDesc,imgname:imgname},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
function displaySponsers(){
    $.ajax({
        url:'admin/src/displaySponsers.php',
        type:'POST',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){
                
            }
        }
    });
}
// displaySponsersOnSite();
function displaySponsersOnSite(){
    var htmlData = '',htmlEData='';
    $.ajax({
        url:'admin/src/displaySponsersOnSite.php',
        type:'GET',
        data:({Limit:'3'}),
        processData: true,
        dataType:'json',
        success:function(response){
            var count = response.length; 
            if(response[0].msg==1){
                    htmlEData +='<div class="item"><div class="probootstrap-testimony-wrap text-center">';
                    htmlEData +='<figure><img src="img/12.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>';
                    htmlEData +='<blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>';
                    htmlEData +='</div> </div>';
            $('.sponsersData').html(htmlEData);
            }else if(response[0].msg==0){
                alert('Error While Connecting Server Please try Again Later');
            }else{
                for(var i=0;i<count;i++){
                    htmlData +='<div class="item"><div class="probootstrap-testimony-wrap text-center">';
                    htmlData +='<figure><img src="img/12.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>';
                    htmlData +='<blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>';
                    htmlData +='</div> </div>';
                    // $('#xyz').addClass('fadeInUp probootstrap-animated');
                }
                $('.sponsersData').html(htmlData);
            }  
        }
    });
}               
function removeSponser(sponserId){
    $.ajax({
        url:'admin/src/removeSponsers.php',
        type:'POST',
        data:{sponserId:sponserId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
