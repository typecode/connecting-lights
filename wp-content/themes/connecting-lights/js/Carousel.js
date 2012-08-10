(function(window, $, page) {

	page.classes.Carousel = function(options) {

		var o, internal, elements, fn, handlers;

		o = $.extend({
			app: null,
			$e: null,
			selector: "",
			interval_speed: 6000
		}, options);

		internal = {
			name: "mod.Carousel",
			$e: (o.$e ? o.$e : $(o.selector)),
			carousel: null,
			timer: null
		};

		elements = {
			nav: internal.$e.find(".nav"),
			caption: internal.$e.find(".caption")
		};

		fn = {
			init: function() {
				internal.carousel = new NI.Carousel({
					container: internal.$e,
					panelClass: ".slide",
					speed: 400,
					keyboard: false,
					touch: false,
					onBeforeMove: function(instance, info) {
						elements.nav.children("li:eq("+ info.index +")").addClass("state-active").siblings().removeClass("state-active");
						elements.caption.text(info.$current.find('img').attr('alt'));
					}
				});

				elements.nav.find("a").each(function(i) {
					$(this).on("click", {index: i}, handlers.nav_link_click);
				});

				o.app.events.on("overlay:opened", handlers.overlay_opened);
				o.app.events.on("overlay:closed", handlers.overlay_closed);

				fn.auto_next();
			},
			auto_next: function() {
				internal.timer = setTimeout(function() {
					if ( internal.carousel.info().total > 1 && internal.$e.hasClass('autoscroll') ) {
						internal.carousel.next();
						fn.auto_next();
					}
				}, o.interval_speed);
			}
		};

		handlers = {
			nav_link_click: function(e) {
				e.preventDefault();
				if (internal.timer) {
					clearTimeout(internal.timer);
					internal.timer = null;
				}
				internal.carousel.toIndex(e.data.index);
				fn.auto_next();
			},
			overlay_opened: function(e, d) {
				if (internal.timer) {
					clearTimeout(internal.timer);
					internal.timer = null;
				}
			},
			overlay_closed: function(e, d) {
				if (! internal.timer) {
					fn.auto_next();
				}
			}
		};

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));