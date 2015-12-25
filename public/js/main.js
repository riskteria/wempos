$(document).foundation({
	offcanvas: {
		// Sets method in which offcanvas opens.
		// [ move | overlap_single | overlap ]
		open_method: 'overlap_single',
		// Should the menu close when a menu link is clicked?
		// [ true | false ]
		close_on_click: false
	}
});

$(document).foundation('orbit', 'reflow');

$(".off-canvas-submenu").hide();
$(".off-canvas-submenu-call").click(function () {
	$(this).parent().next(".off-canvas-submenu").slideToggle('fast');
	$(this).find("span").find("i.fi-arrow-open").toggleClass("fi-arrow-close");
});

$("#searchbox-icon").click(function() {
	$(".topbar-search-box form").toggleClass("searchbox-close");
	$(".searchbox-input").focus();
});

$(window, document, undefined).ready(function() {

  $('.loginbox-group input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });

});

$(function(){

    $('.show-card-detail').on('click',function(){        
        $('.reveal-card-reveal').slideToggle('slow');
    });
    
    $('.reveal-card-reveal .close').on('click',function(){
        $('.reveal-card-reveal').slideToggle('slow');
    });
});

$("#show-compare-details").click(function(){
  $("div.more-compare").addClass('hide');
  $("div.compare-details").removeClass("hide");
});