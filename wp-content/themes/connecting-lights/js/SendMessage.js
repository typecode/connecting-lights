(function(window, $, page) {

	page.classes.SendMessage = function(options) {

		var o, internal, fn, handlers, colorutil = page.classes.colorutil;

		o = $.extend({
			app: null,
			$e: null,
			selector: "",
			$tigger: null,
			color_picker_src: "",
			bg_desaturation: 0.6,
			prompts: $.isArray(page.classes.prompts) ? page.classes.prompts : [],
			service_dir: ""
		}, options);

		internal = {
			name: "mod.SendMessage",
			$e: (o.$e ? o.$e : $(o.selector)),
			$trigger: o.$trigger,
			overlay: new NI.Overlay({
				flavor: "merlin-overlay",
				autoflush: false,
				closeBtn: true
			}),
			merlin: null,
			colorpicker: null,
			prompts: o.prompts
		};

		fn = {
			init: function() {
				internal.overlay.setBody(internal.$e.detach());
				internal.$trigger.click(handlers.trigger_click);
				if (!$.isArray(internal.prompts)) {
					console.warn("Missing prompts for messages");
				}
			},
			set_random_prompt: function() {
				var prompt = NI.fn.randomElement(internal.prompts);
				internal.merlin.internal.steps["submit"].fields["m"].component.set_val(prompt);
			},
			get_bg_css: function(r, g, b) {
				var hsv;

				// the background color is a desaturated version
				// of the rgb color that the user has picked

				hsv = colorutil.rgbToHSV(r, g, b);

				hsv.s = hsv.s * o.bg_desaturation;

				return colorutil.rgbToString(colorutil.hsvToRGB(hsv));
			}
		};

		handlers = {
			trigger_click: function(e, d) {
				e.preventDefault();
				internal.overlay.open();
			},
			load_prompt_click: function(e, d) {
				e.preventDefault();
				fn.set_random_prompt();
			},
			color_picked: function(e, d) {
				var merlin, r, g, b;

				merlin = internal.merlin;
				r = d.r;
				g = d.g;
				b = d.b;

				merlin.set_val("r", r);
				merlin.set_val("g", g);
				merlin.set_val("b", b);

				e.data.container.css("background-color", fn.get_bg_css(r, g, b));
			}
		};

		internal.merlin = new NI.Merlin({
			name: internal.name + " Merlin",
			$e: internal.$e,
			controls: {
				next: ".next"
			},
			extensions: {
				data: new NI.MerlinData({
					uri: o.service_dir + "add.php",
					data: {
						m: "",
						//q: null, //question ID
						r: null,
						g: null,
						b: null
					}
				})
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
					fields: {
						"m": {
							selector: "textarea[name=m]",
							options: {
								extensions: {
									Validator: {
										validators: ["required", "maxlen=100"]
									},
									Counter: {
										max: 100
									}
								}
							}
						}
					},
					init: function(me) {
						var current_step = me.internal.current_step,
						$colorpicker = current_step.$e.find(".color-picker");

						me.extensions.data.init(me);

						$colorpicker.on("color:picked", {container: current_step.$e}, handlers.color_picked);

						internal.colorpicker = new page.classes.ColorPicker({
							$e: $colorpicker,
							src: o.color_picker_src
						});

						current_step.$e.find(".load-prompt").on("click", handlers.load_prompt_click);

						current_step.fields["m"].component.event_receiver.focus();
					},
					visible: function(me) {
						internal.colorpicker.reset();
						fn.set_random_prompt();
					},
					finish: function(me) {
						me.extensions.data.collect_fields(me);
					}
				},
				"dispatch": {
					selector: ".step.dispatch",
					visible: function(me) {
						me.extensions.data.post_data(function(d) {
							me.show_step("thank-you");
						});
					}
				},
				"thank-you": {
					selector: ".step.thank-you",
					visible: function(me) {
						window.setTimeout(function() {
							internal.overlay.close();
							me.show_step("submit");
						}, 3000);
					}
				}
			}
		});

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));