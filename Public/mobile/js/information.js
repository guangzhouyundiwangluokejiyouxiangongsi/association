$(function(){
    $('.y_tabs a').eq(0).addClass('tabson');
     $('.y_message ul').eq(0).show();
    $('.y_tabs a').click(function(){
      var i=$(this).index();
      $(this).addClass('tabson').siblings('.y_tabs a').removeClass('tabson')
      $('.y_message ul').eq(i).show().siblings('.y_message ul').hide();
    })

    $(window).scroll(function () {
    	var banHeight=$('.y_banner').height();
	    if ($(window).scrollTop() > banHeight) {
	     	$('.y_tabs').css({
	     		'position':'fixed',
	     		'top':'0.741rem'
	     	})
	    }
	    else
	    {
	      $('.y_tabs').css({
	     		'position':'',
	     		'top':''
	     	})
	    }
	});
})
 