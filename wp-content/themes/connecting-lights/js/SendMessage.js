(function(window, $, page) {

	page.classes.SendMessage = function(options) {

		var o, internal, fn, handlers;

		o = $.extend({
			app: null,
			$tigger: null
		}, options);

		internal = {
			name: "mod.SendMessage",
			$trigger: o.$trigger,
			overlay: new NI.Overlay({
				closeBtn: true
			})
		};

		fn = {

		};

		handlers = {
			triggerClick: function(e, d) {
				e.preventDefault();
				internal.overlay.open({
					bd: "[content will go here soon]"
				});
			}
		};

		internal.$trigger.click(handlers.triggerClick);
	};

}(this, this.jQuery, this.page));