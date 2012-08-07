(function(window, $, page) {

	page.classes.SendMessage = function(options) {

		var o, internal, fn, handlers;

		o = $.extend({
			app: null,
			$e: null,
			selector: "",
			$tigger: null,
			color_picker_src: "",
			prompts: page.prompts,
			service_dir: ""
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
			color_picker: null,
			prompts: o.prompts
		};

		fn = {
			init: function() {
				internal.overlay.setBody(internal.$e.detach());
				internal.$trigger.click(handlers.trigger_click);
			},
			set_random_prompt: function() {
				var prompt = NI.fn.randomElement(internal.prompts);
				internal.merlin.internal.steps["submit"].fields["m"].component.set_val(prompt);
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
			color_set: function(e, d) {
				var merlin = internal.merlin;
				merlin.set_val("r", d.r);
				merlin.set_val("g", d.g);
				merlin.set_val("b", d.b);
				e.data.container.css("background-color", d.color);
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
						//q: null,
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

						$colorpicker.on("color:set", {container: current_step.$e}, handlers.color_set);

						internal.color_picker = new page.classes.ColorPicker({
							$e: $colorpicker,
							src: o.color_picker_src
						});

						current_step.$e.find(".load-prompt").on("click", handlers.load_prompt_click);

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
							internal.overlay.close();
						});
					}
				}
			}
		});

		fn.init();
		console.log(internal);
	};

}(this, this.jQuery, this.page));