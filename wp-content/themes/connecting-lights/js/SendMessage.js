(function(window, $, page) {

	page.classes.SendMessage = function(options) {

		var o, internal;

		o = $.extend({
			app: null,
			$tigger: null
		}, options);

		internal = {
			name: "mod.SendMessage",
			$trigger: o.$trigger,
			overlay: new NI.Overlay({
				
			})
		};

		
	};

}(this, this.jQuery, this.page));