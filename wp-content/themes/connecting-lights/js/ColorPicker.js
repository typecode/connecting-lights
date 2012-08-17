(function(window, $, page) {

	page.classes.ColorPicker = function(options) {

		var self, o, internal, fn, handlers;

		self = this;

		o = $.extend({
			$e: null,
			selector: "",
			src: "" //path to image of the color wheel
		}, options);

		internal = {
			name: "mod.ColorPicker",
			$e: (o.$e ? o.$e : $(o.selector)),

			$canvas: null,
			canvas: null,
			context: null,

			bg: null,
			pixels: null, //image data

			width: null,
			height: null,
			half_width: null,
			half_height: null,
			radius: null,
			radius_offset: 9,

			dragging: false,
			cursorX: 0,
			cursorY: 0,

			$handle: null,
			handle_width: null,
			handle_height: null,

			handleX: 0,
			handleY: 0,

			r: 0,
			g: 0,
			b: 0
		};

		fn = {
			init: function() {
				var element;

				internal.$canvas = internal.$e.find("canvas");
				internal.canvas = internal.$canvas[0];
				internal.context = internal.canvas.getContext("2d");

				internal.width = internal.$canvas.width();
				internal.height = internal.$canvas.height();
				internal.half_width = internal.width/2;
				internal.half_height = internal.height/2;
				internal.radius = internal.half_width;

				internal.$handle = internal.$e.find(".handle");
				internal.handle_width = parseInt(internal.$handle.css("width"), 10);
				internal.handle_height = parseInt(internal.$handle.css("height"), 10);

				internal.canvas.width = internal.width;
				internal.canvas.height = internal.height;

				internal.bg = new Image();
				internal.bg.onload = function() {
					internal.context.drawImage(internal.bg, 0, 0);
					internal.pixels = internal.context.getImageData(0, 0, internal.width, internal.height);
					self.reset();
				};
				internal.bg.src = o.src;

				internal.$e
					.on("mousemove", handlers.mousemove)
					.on("mousedown", handlers.mousedown)
					.on("mouseup", handlers.mouseup);

				// using raw DOM for attaching touch events, to avoid jQuery
				// normalizing the event object that gets passed in to the handlers
				element = internal.$e[0];
				element.addEventListener("touchmove", handlers.touchmove, false);
				element.addEventListener("touchstart", handlers.touchstart, false);
				element.addEventListener("touchend", handlers.touchend, false);
			},
			set_color_from_pos: function() {
				var data, x, y, i, r, g, b;

				fn.update_handle();

				if (!internal.pixels) {
					internal.pixels = internal.context.getImageData(0, 0, internal.width, internal.height);
					console.log(internal.pixels);
				}

				data = internal.pixels.data;

				x = Math.floor(internal.handleX);
				y = Math.floor(internal.handleY);

				i = 4*((internal.width*y) + x);

				r = data[i];
				g = data[i + 1];
				b = data[i + 2];

				internal.r = r;
				internal.g = g;
				internal.b = b;

				internal.$e.trigger("color:picked", {
					r: r,
					g: g,
					b: b
				});
			},
			set_random_color: function() {
				internal.cursorX = NI.math.random(0, internal.width);
				internal.cursorY = NI.math.random(0, internal.height);
				fn.set_color_from_pos();
			},
			update_handle: function() {
				var R, x, y, r;

				R = internal.radius - internal.radius_offset;
				x = internal.cursorX - internal.half_width;
				y = internal.cursorY - internal.half_height;
				r = Math.sqrt(x*x + y*y);

				internal.handleX = (R*(x/r)) + internal.half_width;
				internal.handleY = (R*(y/r)) + internal.half_height;

				internal.$handle.css({
					left: internal.handleX - (internal.handle_width/2),
					top: internal.handleY - (internal.handle_height/2)
				});
			}
		};

		handlers = {
			mousemove: function(e) {
				var offset = internal.$canvas.offset();

				internal.cursorX = e.pageX - offset.left;
				internal.cursorY = e.pageY - offset.top;

				if (internal.dragging) {
					fn.set_color_from_pos();
				}
			},
			mousedown: function(e) {
				internal.dragging = true;
				if (internal.cursorX && internal.cursorY) {
					fn.set_color_from_pos();
				}
			},
			mouseup: function(e) {
				internal.dragging = false;
			},
			touchmove: function(e) {
				var touch, offset;

				touch = e.targetTouches[0];
				offset = internal.$canvas.offset();

				internal.cursorX = touch.pageX - offset.left;
				internal.cursorY = touch.pageY - offset.top;

				if (internal.dragging) {
					fn.set_color_from_pos();
				}

				e.preventDefault();
			},
			touchstart: function(e) {
				internal.dragging = true;
			},
			touchend: function(e) {
				internal.dragging = false;
			}
		};

		this.reset = function() {
			fn.set_random_color();
		};

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));