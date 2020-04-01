$(document).ready(function(){

 //   var width = $(document).width();

 //  if ($(window).width() >= 1024) {

 //           $('#fullpage').fullpage({
 //           sectionsColor: ['#000', '#000', '#000', '#000', '#000'],
 //           anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
 //           menu: '#menu'
 //       });
		
//		   }

        $(".main-wrapper .gray").mouseover(function(){
            $(this).addClass("active");
            $(".orange").removeClass("active");
            $(".blue").removeClass("active");
            $(".yellow").removeClass("active");
        });

        $(".main-wrapper .orange").mouseover(function(){
            $(this).addClass("active");
            $(".gray").removeClass("active");
            $(".blue").removeClass("active");
            $(".yellow").removeClass("active");
        });

        $(".main-wrapper .blue").mouseover(function(){
            $(this).addClass("active");
            $(".gray").removeClass("active");
            $(".orange").removeClass("active");
            $(".yellow").removeClass("active");
        });

        $(".main-wrapper .yellow").mouseover(function(){
            $(this).addClass("active");
            $(".gray").removeClass("active");
            $(".blue").removeClass("active");
            $(".orange").removeClass("active");
        });

 
	
});