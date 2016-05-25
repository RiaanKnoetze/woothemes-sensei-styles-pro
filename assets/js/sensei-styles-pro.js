jQuery(document).ready(function($) {
	// Add a special classname to all courses that contain a featured course image
	jQuery('#main-course .course .woo-image').parent().addClass('course-featured-image');

	// Hide empty heading tags on results page
	jQuery('#main .course-results-lessons h2, #main .course-results-lessons h3')
	.filter(function() {
	  var text = $(this).text().replace(/\s*/g, '');
	  return !text;
	}).hide();
});