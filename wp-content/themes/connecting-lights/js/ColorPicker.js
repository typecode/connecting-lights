(function(window, $, page) {

	// remove "px" from a string representing a css pixel dimension
	// and cast as a Number (i.e. trimpx("10px") returns 10)
	// Used to parse px dimension values from CSS properties,
	// such as "width" and "height"
	function trimPX(s) {
		if (s) {
			return Number(s.substring(0, s.length - 2));
		}
		return 0;
	}

	page.classes.ColorPicker = function(options) {

		var self, o, internal, fn, handlers;

		self = this;

		o = $.extend({
			$e: null,
			selector: "",
			src: ""
		}, options);

		internal = {
			name: "mod.ColorPicker",
			$e: (o.$e ? o.$e : $(o.selector)),

			$canvas: null,
			canvas: null,
			offset: null,
			context: null,

			bg: new Image(),
			pixels: null, //image data

			width: null,
			height: null,
			half_width: null,
			half_height: null,
			radius: null,
			radius_offset: 10,

			mousePressed: false,
			mouseX: 0,
			mouseY: 0,

			$handle: null,
			handle_width: null,
			handle_height: null,

			handleX: 0,
			handleY: 0,

			color: null
		};

		fn = {
			init: function() {
				internal.$canvas = internal.$e.find("canvas");
				internal.canvas = internal.$canvas[0];
				internal.context = internal.canvas.getContext("2d");

				internal.width = internal.$canvas.width();
				internal.height = internal.$canvas.height();
				internal.half_width = internal.width/2;
				internal.half_height = internal.height/2;
				internal.radius = internal.half_width;
				internal.offset = internal.$canvas.offset();

				internal.$handle = internal.$e.find(".handle");
				internal.handle_width = trimPX(internal.$handle.css("width"));
				internal.handle_height = trimPX(internal.$handle.css("height"));

				internal.canvas.width = internal.width;
				internal.canvas.height = internal.height;

				internal.bg.onload = function() {
					internal.context.drawImage(internal.bg, 0, 0);
					internal.pixels = internal.context.getImageData(0, 0, internal.width, internal.height);
					self.reset();
				};
				internal.bg.src = o.src;

				internal.$e.on("mousemove", handlers.mousemove);
				internal.$e.on("mousedown", handlers.mousedown);
				internal.$e.on("mouseup", handlers.mouseup);
				internal.$e.on("mouseleave", handlers.mouseleave);
			},
			set_color_from_mouse: function() {
				var data, x, y, i, r, g, b;

				fn.update_handle();

				if (!internal.pixels) {
					internal.pixels = internal.context.getImageData(0, 0, internal.width, internal.height);
				}

				data = internal.pixels.data;

				x = Math.floor(internal.handleX);
				y = Math.floor(internal.handleY);

				i = 4*((internal.width*y) + x);

				r = data[i];
				g = data[i + 1];
				b = data[i + 2];
				
				internal.color = "rgb(" + r + "," + g + "," + b + ")";

				internal.$e.trigger("color:set", {
					r: r,
					g: g,
					b: b,
					color: internal.color
				});
			},
			set_random_color: function() {
				internal.mouseX = NI.math.random(0, internal.width);
				internal.mouseY = NI.math.random(0, internal.height);
				fn.set_color_from_mouse();
			},
			update_handle: function() {
				var R = internal.radius - internal.radius_offset,
				mX = internal.mouseX - internal.half_width,
				mY = internal.mouseY - internal.half_height,
				r = Math.sqrt(mX*mX + mY*mY);

				internal.handleX = (R*(mX/r)) + internal.half_width;
				internal.handleY = (R*(mY/r)) + internal.half_height;

				internal.$handle.css({
					left: internal.handleX - (internal.handle_width/2),
					top: internal.handleY - (internal.handle_height/2)
				});
			}
		};

		handlers = {
			mousemove: function(e) {
				var offset = internal.offset;

				internal.mouseX = e.pageX - offset.left;
				internal.mouseY = e.pageY - offset.top;

				if (internal.mousePressed) {
					fn.set_color_from_mouse();
				}
			},
			mousedown: function(e) {
				internal.mousePressed = true;
				fn.set_color_from_mouse();
			},
			mouseup: function(e) {
				internal.mousePressed = false;
			},
			mouseleave: function(e) {
				internal.mousePressed = false;
			}
		};

		this.reset = function() {
			fn.set_random_color();
		};

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));