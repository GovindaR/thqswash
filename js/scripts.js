$(document).ready(function() {
    $('#fullpage').fullpage({
		// sectionsColor: ['#0F2980', '#ffd200', '#c1c1c1'],
		anchors:false,
		menu: '.main-nav ul',
		scrollOverflow:false
	});
});
jQuery(document).ready(function($){
	//update these values if you change these breakpoints in the style.css file (or _layout.scss if you use SASS)
	var MqM= 768,
		MqL = 1024;
	var faqsSections = $('.cd-faq-group'),
		faqTrigger = $('.cd-faq-trigger'),
		faqsContainer = $('.cd-faq-items'),
		faqsCategoriesContainer = $('.cd-faq-categories'),
		faqsCategories = faqsCategoriesContainer.find('a'),
		closeFaqsContainer = $('.cd-close-panel');
	faqTrigger.on('click', function(event){
		event.preventDefault();
		$(this).next('.cd-faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
	});
});
jQuery(document).ready(function() 
{	
	if (jQuery(window).width() < 768) 
		{
			jQuery.fn.fullpage.destroy('all');
		} 
});

jQuery(window).resize(function() 
	{
		if (jQuery(window).width() < 768) 
		{
			jQuery.fn.fullpage.destroy('all');
		} 

	});
$( "#bun" ).click(function() {
  $('nav ul').toggleClass( "menu-btn" );
});

$('.animation').each(function(){

	var waypoint = new Waypoint({
	  element: this,
	  handler: function(direction) {
		var animation = $(this.element).attr('data-animation');
		$(this.element).css('opacity','1');
		$(this.element).addClass("animated " + animation);
	  },
	  offset: '75%' 
	})

});



$( ".twoToneButton" ).click(function() {
    	if($('.ml-field-group label input:text').val().length != 0){
		$('.twoToneButton').addClass('spinning');
		$('.primary1.twoToneButton').removeClass('primary1');
		$('.twoToneButton .fa-arrow-right').hide();
        
     
      setTimeout( 
            function(){  
                $('.twoToneButton').removeClass('spinning');
                $('.ml-last-item').show();
                 $('.ml-first-item').hide();
		  		$('.primary').show();
			  $('.primary1').hide();
			  $('.twoToneCenter').hide();
            }, 2000);
      }
    });
    