jQuery(document).ready(function($) {

	// Add bootstrap's 'img-responsive' class to all images
  $('img').addClass('img-responsive');


  $('.song-row').on('click', '.expand-lyrics', function(event) {
  	event.stopPropagation();
  	event.preventDefault();
  	$(this).closest('.song-row').find('.lyrics').fadeToggle();
  });


  var yourAudio = document.getElementById('yourAudio'),
    ctrl = document.getElementById('audioControl');

	ctrl.onclick = function () {

	    // Update the Button
	    var pause = ctrl.innerHTML === '<i class="fa fa-pause"></i>';
	    ctrl.innerHTML = pause ? '<i class="fa fa-play"></i>' : '<i class="fa fa-pause"></i>';

	    // Update the Audio
	    var method = pause ? 'pause' : 'play';
	    yourAudio[method]();

	    // Prevent Default Action
	    return false;
	};

});