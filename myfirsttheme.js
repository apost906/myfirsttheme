// Execute jQuery functions only "after" jQuery JS has loaded
$(function()	{
	$('#main').click(function()	{
		$(this).addClass('');
	});
});

	// Add bootsrap affix to the nav
	$('$primary-nav').attr('data-spy','affix');
	$('$primary-nav').attr('data-offset-top','195');

// Listen for keyup events
$(document).keyup(function(e)	{
	switch(e.which)	{
	case 39: // right arrow
		window.location = 'http://www.google.com';
		break;
	case 20: // caps lock
		$('input[name=s]').val('');
		break;
	case 27: // escape key
		$('$main').slideUp();
		break;
	case 76: // L key
		// Get the URL for wp-admin
		var url = $('footer a.login').attr('href');
		window.location = url;
		break;
	}
});