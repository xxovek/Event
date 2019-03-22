GalleryProfile();
function GalleryProfile(){
    $.ajax({
        url:'admin/src/getRandomEventProfile.php',
        type:'GET',
        dataType:'json',
        success:function(response){
            $('#galleryProfile').css('background-image','url(admin/Events/1900x960/'+response['EventProfile']+')');
        }
    });
}