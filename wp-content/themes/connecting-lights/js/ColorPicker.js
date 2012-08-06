(function(window, $, page) {

	page.classes.ColorPicker = function(options) {

		var o, internal, fn, handlers;

		o = $.extend({
			$e: null,
			selector: "",
			color_picker_src: ""
		}, options);

		internal = {
			name: "mod.ColorPicker",
			$e: (o.$e ? o.$e : $(o.selector)),

			$canvas: null,
			canvas: null,
			context: null,

			bg: new Image(),
			pixels: null,

			width: null,
			height: null,
			half_width: null,
			half_height: null,
			radius: null,

			mousePressed: false,
			mouseX: 0,
			mouseY: 0,

			$handle: null,
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
				internal.radius = internal.half_width - 10;
				internal.offset = internal.$canvas.offset();

				internal.$handle = internal.$e.find(".handle");

				internal.canvas.width = internal.width;
				internal.canvas.height = internal.height;

				internal.bg.onload = function() {
					internal.context.drawImage(internal.bg, 0, 0);
					internal.pixels = internal.context.getImageData(0, 0, internal.width, internal.height);
				};
				internal.bg.src = o.color_picker_src;

				internal.$e.on("mousemove", handlers.mousemove);
				internal.$e.on("mousedown", handlers.mousedown);
				internal.$e.on("mouseup", handlers.mouseup);
				internal.$e.on("mouseleave", handlers.mouseleave);

			},
			set_color_from_mouse: function() {
				var data = internal.pixels.data,

				x = Math.floor(internal.handleX),
				y = Math.floor(internal.handleY),

				i = 4*((internal.width*y) + x),

				r = data[i],
				g = data[i + 1],
				b = data[i + 2];
				
				internal.color = "rgb(" + r + "," + g + "," + b + ")";

				internal.$e.trigger("color:set", {
					r: r,
					g: g,
					b: b,
					color: internal.color
				});
			},
			update_handle: function() {
				var mX = internal.mouseX - internal.half_width,
				mY = internal.mouseY - internal.half_height,
				r = Math.sqrt(mX*mX + mY*mY);

				internal.handleX = (internal.radius*(mX/r)) + internal.half_width;
				internal.handleY = (internal.radius*(mY/r)) + internal.half_height;

				internal.$handle.css({
					left: internal.handleX - 20,
					top: internal.handleY - 20
				});
			}
		};

		handlers = {
			mousemove: function(e) {
				var offset = internal.offset;

				internal.mouseX = e.pageX - offset.left;
				internal.mouseY = e.pageY - offset.top;

				if (internal.mousePressed) {
					fn.update_handle();
					fn.set_color_from_mouse();
				}
			},
			mousedown: function(e) {
				internal.mousePressed = true;
				fn.update_handle();
				fn.set_color_from_mouse();
			},
			mouseup: function(e) {
				internal.mousePressed = false;
			},
			mouseleave: function(e) {
				internal.mousePressed = false;
			}
		};

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));