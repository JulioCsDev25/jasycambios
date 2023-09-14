jQuery(document).ready(function(){
    jQuery("#menuzord2").menuzord({
        align: "right",
        scrollable: false,
    });
    $(window).scroll(function(){
        if ($(this).scrollTop()>200) {
          $('.go-top').fadeIn(200);
        }else{
          $('.go-top').fadeOut(200);
        }
    });
    $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 500);
    });
    function scrollToAnchor(aid){
        var aTag = $("#name_"+ aid);
        var v = aTag.offset();
        $('html,body').animate({scrollTop: v.top-50},'slow');
    }   
    
  /*$(".image_servicios").each(function(){
      $(this).attr('src',$(this).attr('data-src'));
      $(this).show();
  });  */  
});
function ver_sucursal(val){
    for(var i=1;i<8;i++){
        $('#suc_'+i).removeClass('fadeInUp');
        $('#suc_'+i).addClass('animated fadeOutDown');        
    }
    setTimeout(function(){
        for(var i=1;i<8;i++){
            if(val==0){
                $('#suc_'+i).show();
                $('#suc_'+i).removeClass('fadeOutDown');
                $('#suc_'+i).addClass('animated fadeInUp'); 
            }else{
                if(i==val){
                    $('#suc_'+i).show();
                    $('#suc_'+i).removeClass('fadeOutDown');
                    $('#suc_'+i).addClass('animated fadeInUp');                 
                }else{
                    $('#suc_'+i).hide();                
                }
            }
        }
    },1000);
}
function cambiar(cam){
    var val = cam.value;                    
    if(val==1){
        dolar_guarani();
    }else{
        dolar_real();
    }
}