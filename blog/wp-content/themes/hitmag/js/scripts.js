jQuery(document).ready(function(){
	jQuery(".hm-search-button-icon").click(function() {
		jQuery(".hm-search-box-container").toggle('fast');
		jQuery(this).toggleClass("hm-search-close");
	});
});

jQuery(document).ready(function(){
	jQuery('.image-link').magnificPopup({
		type: 'image'
	});
});

/* Featured Slider */

jQuery(window).load(function() {
	// The slider being synced must be initialized first
	jQuery('#hm-carousel').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: true,
		slideshow: false,
		itemWidth: 135,
		itemMargin: 10,
		asNavFor: '#hm-slider'
	});

	jQuery('#hm-slider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: true,
		slideshow: false,
		sync: "#hm-carousel"
	});
});


/* Link the whole slide to the link*/
(function($) {
	$('div.hm-slider-container').on( 'click', function(e) {
		if ( $(e.target).is('span.cat-links') ) { 
			return false;
		} else {
			window.location = $(this).data('loc');
		}
	});
})(jQuery);


(function() {
	// link selector and pop-up window size
	var Config = {
		Link: "a.hm-share",
		Width: 500,
		Height: 500
	};

	// add handler links
	var slink = document.querySelectorAll(Config.Link);
	for (var a = 0; a < slink.length; a++) {
		slink[a].onclick = PopupHandler;
	}

	// create popup
	function PopupHandler(e) {

		e = (e ? e : window.event);
		var t = (e.target ? e.target : e.srcElement);

		// popup position
		var
			px = Math.floor(((screen.availWidth || 1024) - Config.Width) / 2),
			py = Math.floor(((screen.availHeight || 700) - Config.Height) / 2);

		// open popup
		var popup = window.open(t.href, "social", 
			"width="+Config.Width+",height="+Config.Height+
			",left="+px+",top="+py+
			",location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1");
		if (popup) {
			popup.focus();
			if (e.preventDefault) e.preventDefault();
			e.returnValue = false;
		}

		return !!popup;
	}

}());