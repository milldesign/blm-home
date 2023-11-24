<script>
	$(document).ready(function() {
		$(".qa dd").hide();
		$(".qa dl").on("click", function(e) {
			$('dd', this).slideToggle('fast');
			if($(this).hasClass('open')) {
					$(this).removeClass('open');
			} else {
				$(this).addClass('open');
			}
		});
	});
</script>
