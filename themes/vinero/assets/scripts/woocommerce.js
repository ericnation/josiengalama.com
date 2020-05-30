jQuery.noConflict()(function ($) {

	$(document).ready(function() {

		// Cart dropdown
		$(document).on('click', '.vlt-toggle-tab .vlt-toggle-tab__header a', function(e) {
			$(this).parent().next().slideToggle(200);
			return false;
		});

		// Coupon override
		$('.vlt-toggle-tab .vlt-coupon-code').on('click', '.vlt-btn', function(e) {
			e.preventDefault();
			var input = $('.vlt-toggle-tab .vlt-coupon-code input[name="coupon_code"]').val();
			if (input) {
				var primary_input = $('input[name="coupon_code"]');
				primary_input.val(input);
				primary_input.next('.button').trigger('click');
			}
		});

		// Tabs
		$('.tabs').tabs({
			active: 0,
		});

		$('.tabs').on('tabsbeforeactivate', function (e, ui) {
			$(ui.oldPanel).removeClass('animated fadeInUp');
			$(ui.newPanel).addClass('animated fadeInUp');
		});

		$('.tab-link').on('click', function(e) {
			e.preventDefault();
			var tab = $(this).attr('href');
			var index = $('div[id^=tabs-]').index($(tab));
			$('.tabs').tabs( 'option', 'active', index );
		});

		// Quantity
		$(document).on('click', '.vlt-quantity .plus, .vlt-quantity .minus', function(){

			var $this = $(this),
				$qty = $this.siblings('.qty'),
				current = parseInt($qty.val(), 10),
				min = parseInt($qty.attr('min'), 10),
				max = parseInt($qty.attr('max'), 10),
				step = parseInt($qty.attr('step'), 10);

			min = min ? min : 1;
			max = max ? max : current + step;

			if ($this.hasClass('minus') && current > min) {
				$qty.val(current - step);
				$qty.trigger('change');
			}

			if ($this.hasClass('plus') && current < max) {
				$qty.val(current + step);
				$qty.trigger('change');
			}

			return false;
		});

	});

});
