(function(window, $, page) {

	// Static util functions for manipulating color

	var hsvIndices = [
		[0, 3, 1], // 0
		[2, 0, 1], // 1
		[1, 0, 3], // 2
		[1, 2, 0], // 3
		[3, 1, 0], // 4
		[0, 1, 2]  // 5
	];

	page.classes.colorutil = {

		// These color conversion functions are based on / borrowed from
		// code from gury.js [https://github.com/rsandor/gury/blob/master/demos/shared.js]
		// and paper.js [https://github.com/paperjs/paper.js/blob/master/src/color/Color.js]

		rgbToHSV: function() {
			var r, g, b, min, max, delta, h, s, v;
  
			if (arguments.length == 1 && typeof(arguments[0]) == "object") {
				r = arguments[0].r;
				g = arguments[0].g;
				b = arguments[0].b;
			} else if (arguments.length == 3){
				r = arguments[0];
				g = arguments[1];
				b = arguments[2];
			}

			min = Math.min(r, g, b);
			max = Math.max(r, g, b);
			delta = max - min;
			
			h = delta === 0 ? 0
					:   ( max == r ? (g - b) / delta + (g < b ? 6 : 0)
						: max == g ? (b - r) / delta + 2
						:            (r - g) / delta + 4) * 60; // max == b
				s = max === 0 ? 0 : delta / max;
				v = max;

			return {
				h: h,
				s: s,
				v: v
			};
		},

		hsvToRGB: function() {
			var h, s, v, f, i, components, floor = Math.floor;

			if (arguments.length == 1 && typeof(arguments[0]) == "object") {
				h = arguments[0].h;
				s = arguments[0].s;
				v = arguments[0].v;
			} else if (arguments.length == 3) {
				h = arguments[0];
				s = arguments[1];
				v = arguments[2];
			}

			h = (h/60) % 6;

			f = h - floor(h);
			i = hsvIndices[floor(h)];
			components = [
				v,
				v * (1 - s),
				v * (1 - s * f),
				v * (1 - s * (1 - f))
			];

			return {
				r: floor(components[i[0]]),
				g: floor(components[i[1]]),
				b: floor(components[i[2]])
			};
		},

		rgbToString: function() {
			var rgb;
			if (arguments.length == 1) {
				rgb = arguments[0];
			} else if (arguments.length == 3) {
				rgb = {
					r: arguments[0],
					g: arguments[1],
					b: arguments[2]
				};
			} else {
				return '#000';
			}

			return 'rgba(' + rgb.r + ', ' + rgb.g + ', ' + rgb.b + ', 255)';
		}

	};

}(this, this.jQuery, this.page));