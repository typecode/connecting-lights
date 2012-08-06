(function(window, $, page) {

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
					fields: {
						"m": {
							selector: "textarea[name=m]",
							options: {

							}
						}
					},
					init: function(me) {
						var $e = me.internal.current_step.$e.find(".color-picker");

						$e.on("color:set", {container: me.internal.current_step.$e}, handlers.color_set);

						internal.color_picker = new page.classes.ColorPicker({
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