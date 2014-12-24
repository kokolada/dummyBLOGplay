$("html, body").animate({ scrollTop: $('#vijestLokacija').offset().top }, 1000);

/*scroll to top*/
$(document).ready(function(){
    
  //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
  //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});

// panel collapse
$(function ($) {
        $('.panel-heading span.clickable').on("click", function (e) {
            if ($(this).hasClass('panel-collapsed')) {
              // expand the panel
                $(this).parents('.panel').find('.panel-body').slideDown();
                $(this).removeClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
            else {
              // collapse the panel
                $(this).parents('.panel').find('.panel-body').slideUp();
                $(this).addClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            }
        });
    });
    
 $('.row .thumbnail').on('load', function() {
  
 }).each(function(i) {
   if(this.complete) {
   	var item = $('<div class="item"></div>');
     var itemDiv = $(this).parents('div');
     var title = $(this).parent('a').attr("title");
    
     item.attr("title",title);
   	$(itemDiv.html()).appendTo(item);
   	item.appendTo('.carousel-inner'); 
     if (i==0){ // set first item active
      item.addClass('active');
     }
   }
 });

/* activate the carousel */
 $('#modalCarousel').carousel({interval:false});

 /* change modal title when slide changes */
 $('#modalCarousel').on('slid.bs.carousel', function () {
   $('.modal-title').html($(this).find('.active').attr("title"));
 })

 /* when clicking a thumbnail */
 $('.row .thumbnail').click(function(){
     var idx = $(this).parents('div').index();
   	var id = parseInt(idx);
   	$('#myModal').modal('show'); // show the modal
     $('#modalCarousel').carousel(id); // slide carousel to selected
  	
 });
