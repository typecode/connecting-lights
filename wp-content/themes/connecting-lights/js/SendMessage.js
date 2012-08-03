(function(window, $, page) {

	page.classes.SendMessage = function(options) {

		var o, internal, fn, handlers;

		o = $.extend({
			app: null,
			$e: null,
			selector: "",
			$tigger: null
		}, options);

		internal = {
			name: "mod.SendMessage",
			$e: (o.$e ? o.$e : $(o.selector)),
			$trigger: o.$trigger,
			overlay: new NI.Overlay({
				autoflush: false
			})
		};

		fn = {

		};

		handlers = {
			triggerClick: function(e, d) {
				e.preventDefault();
				internal.overlay.open({
					bd: internal.$e
				});
			}
		};

		internal.$trigger.click(handlers.triggerClick);
	};

}(this, this.jQuery, this.page));