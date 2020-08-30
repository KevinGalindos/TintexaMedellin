jQuery(document).ready(function(){

    jQuery(window).on('scroll', function(){
        if(jQuery(window).scrollTop()> 35){
            jQuery('.headerprincipal').addClass('scrollheader');
        }else{
            jQuery('.headerprincipal').removeClass('scrollheader');
        }
    })
    
})