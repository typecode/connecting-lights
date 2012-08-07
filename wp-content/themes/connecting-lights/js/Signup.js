(function(window, $, page) {

	page.classes.Signup = function(options) {

		var o, internal;

		o = $.extend({
			$e: null,
			selector: "",
			service_url: "",
			app: null
		}, options);

		internal = {
			name: "mod.Signup",
			$e: (o.$e ? o.$e : $(o.selector)),
			merlin: null
		};

		internal.merlin = new NI.Merlin({
			name: internal.name + " Merlin",
			$e: internal.$e,
			controls: {
				next: ".next"
			},
			extensions: {
				data: new NI.MerlinData({
					uri: o.service_url,
					data: {
						email: null
					}
				})
			},
			first_step: "form",
			steps: {
				"form": {
					selector: ".step.form",
					next: "dispatch",
					fields: {
						"email": {
							selector: "input[type=text]",
							options: {
								extensions: {
									Hint: {
										content: "Enter your email address to get updates"
									},
									Validator: {
										validators: ["required", "email"]
									}
								}
							}
						}
					},
					init: function(me) {
						me.extensions.data.init(me);
					},
					finish: function(me) {
						me.extensions.data.collect_fields(me);
					}
				},
				"dispatch": {
					selector: ".step.dispatch",
					visible: function(me) {
						me.extensions.data.post_data(function(d) {
							if (d == "true") {
								me.show_step("thank-you");
							}
						});
					}
				},
				"thank-you": {
					selector: ".step.thank-you",
					visible: function(me) {
						window.setTimeout(function() {
							me.show_step("form");
						}, 3000);
					}
				}
			}
		});

	};

}(this, this.jQuery, this.page));