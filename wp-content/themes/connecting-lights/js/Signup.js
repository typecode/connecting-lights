(function(window, $, page) {

	page.classes.Signup = function(options) {

		var o, internal;

		o = $.extend({
			$e: null,
			selector: "",
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
			first_step: "form",
			steps: {
				"form": {
					selector: ".form",
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
					}
				}
			}
		});

	};

}(this, this.jQuery, this.page));