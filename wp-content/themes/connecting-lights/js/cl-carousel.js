$(function() {

	$(".carousel").each(function() {

		var container, nav, carousel, caption, timer;

		container = $(this);
		nav = container.find(".nav");
		caption = container.find(".caption");
		
		carousel = new NI.Carousel({
			container: container,
			panelClass: ".slide",
			speed: 400,
			keyboard: false,
			onBeforeMove: function(instance, info) {
				nav.children("li:eq("+ info.index +")").addClass("state-active").siblings().removeClass("state-active");
				caption.text(info.$current.find('img').attr('alt'));
			}
		});

		function navLinkClick(e) {
			e.preventDefault();
			if (timer) {
				clearTimeout(timer);
				timer = null;
			}
			carousel.toIndex(e.data.index);
		}

		function autoNext() {
			timer = setTimeout(function() {
				if ( carousel.info().total > 1 && container.hasClass('autoscroll') ) {
					carousel.next();
					autoNext();
				}
			}, 6000);
		}

		nav.find("a").each(function(i) {
			$(this).on("click", {index: i}, navLinkClick);
		});

		autoNext();

	});

});