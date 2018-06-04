const ss = document.querySelectorAll('.scrollspy')
M.ScrollSpy.init(ss, {scrollOffset: 0});

const mb = document.querySelectorAll('.materialboxed');
M.Materialbox.init(mb);

const slider = document.querySelectorAll('.slider');
M.Slider.init(slider);

const sslider = document.querySelectorAll('.smallSlider');
M.Slider.init(sslider, {indicator: false});

const carousel = document.querySelectorAll('.carousel');
M.Carousel.init(carousel);

const drop = document.querySelectorAll('.dropdown-trigger');
M.Dropdown.init(drop);

$(document).ready(function()
{
	$('#answer').on('click', function(e)
	{
		e.preventDefault();
		$('#quiz').addClass('blue accent-2 white-text');
		$('#answer, #answerField').hide(500);
		$('#answerReveal').show(500);
	});
});