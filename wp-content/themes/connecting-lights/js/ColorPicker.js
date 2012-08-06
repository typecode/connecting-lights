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

			mousePressed: false,
			mouseX: 0,
			mouseY: 0,

			color: null
		};

		fn = {
			init: function() {
				internal.$canvas = internal.$e.find("canvas");
				internal.canvas = internal.$canvas[0];
				internal.context = internal.canvas.getContext("2d");

				internal.width = internal.$canvas.width();
				internal.height = internal.$canvas.height();
				internal.canvas.width = internal.width;
				internal.canvas.height = internal.height;
				internal.offset = internal.$canvas.offset();

				internal.bg.onload = function() {
					internal.context.drawImage(internal.bg, 0, 0);
					internal.pixels = internal.context.getImageData(0, 0, internal.width, internal.height);
				};
				internal.bg.src = o.color_picker_src;

				internal.$e.on("mousemove", handlers.mousemove);
				internal.$e.on("mousedown", handlers.mousedown);
				internal.$e.on("mouseup", handlers.mouseup);

			},
			set_color_from_mouse: function() {
				var data = internal.pixels.data,

				x = Math.floor(internal.mouseX),
				y = Math.floor(internal.mouseY),

				r = data[((internal.width * y) + x) * 4],
				g = data[(((internal.width * y) + x) * 4) + 1],
				b = data[(((internal.width * y) + x) * 4) + 2];
				
				internal.color = "rgb(" + r + "," + g + "," + b + ")";

				internal.$e.trigger("color:set", {
					color: internal.color
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
			}
		};

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));