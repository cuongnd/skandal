jQuery(document).ready(function($){
    $(".domtabs li#map").click(function(){
        $(".img").css("display","none");
        $(".img2").css("display","block");
    })
    $(".domtabs li#photos").click(function(){
        $(".img2").css("display","none");
        $(".img").css("display","block");
    })
})
