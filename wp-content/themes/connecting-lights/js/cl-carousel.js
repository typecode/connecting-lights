$(function() {

	$(".carousel").each(function() {

		var container, nav, carousel, arrows, timer;

		container = $(this);

		nav = container.find(".carousel-nav");
		
		carousel = new NI.Carousel({
			container: container,
			panelClass: ".slide",
			speed: 800,
			onBeforeMove: function(instance, info) {
				nav.children("li:eq("+ info.index +")").addClass("state-active").siblings().removeClass("state-active");
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
			}, 4000);
		}

		nav.find("a").each(function(i) {
			$(this).on("click", {index: i}, navLinkClick);
		});

		autoNext();

	});

});