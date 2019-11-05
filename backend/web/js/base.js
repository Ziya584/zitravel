"use strict";
jQuery(document).ready(function () {
	jQuery('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});
});