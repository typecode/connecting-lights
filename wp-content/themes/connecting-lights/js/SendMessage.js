(function(window, $, page) {

	function ColorPicker(options) {

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
	}

	page.classes.SendMessage = function(options) {

		var o, internal, fn, handlers;

		o = $.extend({
			app: null,
			$e: null,
			selector: "",
			$tigger: null,
			color_picker_src: "",
			backend_url: ""
		}, options);

		internal = {
			name: "mod.SendMessage",
			$e: (o.$e ? o.$e : $(o.selector)),
			$trigger: o.$trigger,
			overlay: new NI.Overlay({
				flavor: "merlin-overlay",
				autoflush: false,
				closeBtn: true,
				onOpen: function() {

				},
				onClose: function() {

				}
			}),
			merlin: null,
			color_picker: null
		};

		fn = {
			init: function() {
				internal.overlay.setBody(internal.$e.detach());
				internal.$trigger.click(handlers.trigger_click);
			}
		};

		handlers = {
			trigger_click: function(e, d) {
				e.preventDefault();
				internal.overlay.open();
			},
			color_set: function(e, d) {
				e.data.container.css("background-color", d.color);
			}
		};

		internal.merlin = new NI.Merlin({
			name: internal.name + " Merlin",
			$e: internal.$e,
			controls: {
				next: ".next"
			},
			first_step: "info",
			steps: {
				"info": {
					selector: ".send-message-info",
					next: "submit"
				},
				"submit": {
					selector: ".send-message-submit",
					next: "dispatch",
					init: function(me) {
						var $e = me.internal.current_step.$e.find(".color-picker");

						$e.on("color:set", {container: me.internal.current_step.$e}, handlers.color_set);

						internal.color_picker = new ColorPicker({
							$e: $e,
							color_picker_src: o.color_picker_src
						});
					}
				},
				"dispatch": {
					selector: ".step.dispatch"
				}
			}
		});

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));