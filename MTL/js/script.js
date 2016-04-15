jQuery(document).ready(function($) {

	// Add bootstrap's 'img-responsive' class to all images
  $('img').addClass('img-responsive');


  $('.song-row').on('click', '.expand-lyrics', function(event) {
  	event.stopPropagation();
  	event.preventDefault();
  	$(this).closest('.song-row').find('.lyrics').slideToggle();
  });


 //  var yourAudio = document.getElementById('yourAudio'),
 //    ctrl = document.getElementById('audioControl');

	// ctrl.onclick = function () {


	//     // Update the Button
	//     var pause = ctrl.innerHTML === '<i class="fa fa-pause"></i>';
	//     ctrl.innerHTML = pause ? '<i class="fa fa-play"></i>' : '<i class="fa fa-pause"></i>';

	//     // Update the Audio
	//     var method = pause ? 'pause' : 'play';
	//     yourAudio[method](event);

	//     // Prevent Default Action
	//     return false;
	//     event.stopPropagation();
	// 	event.preventDefault();
	// };

	jQuery(function (){
	var myAudio = document.getElementById("myAudio");
	var current = null;
	var playingString = "<span aria-hidden=\"true\" data-icon=\"&#xe002;\"></span><span class=\"screen-reader-text\"><i class=\"fa fa-pause\"></i></span>";
	var pausedString = "<span aria-hidden=\"true\" data-icon=\"&#xe003;\"></span><span class=\"screen-reader-text\"><i class=\"fa fa-play\"></i></span>";

	$(document.body).on('click', '.btnPlayPause',function(event){
		var target = this;
		//console.log(target, current); //return;
		event.stopPropagation();
  		event.preventDefault();
		if (current == target) {
			target.innerHTML = pausedString;
			target.parentNode.setAttribute('data-pos', myAudio.currentTime); //start from paused
			myAudio.pause();
			current = null;
		} else { // current!=target
			if (current != null) {
				current.innerHTML = pausedString;
				current.parentNode.setAttribute('data-pos', '0'); //reset position
				target.parentNode.setAttribute('data-pos', myAudio.currentTime); //start from paused
			}
			current = target;
			target.innerHTML = playingString;
            if(myAudio.canPlayType && myAudio.canPlayType("audio/mpeg") != "") { // MP3
			    myAudio.src = target.parentNode.getAttribute('data-src');
            } else if(myAudio.canPlayType && myAudio.canPlayType("audio/ogg") != "") {  // OGG
			    myAudio.src = target.parentNode.getAttribute('data-src2');
            } else {
                //alert('Error: your browser doesn\'t support playing audio. Please use modern browser like Chrome, Firefox, Safari or IE9.');
                return;
            }
			myAudio.play();
			myAudio.onloadeddata = function () {
				myAudio.currentTime = parseFloat(target.parentNode.getAttribute('data-pos'));
			};
		}
	});
	$(document.body).on('click', '.btnMute',function(e){
		myAudio.muted = !myAudio.muted;
		$('.btnMute').each(function(){
			if (myAudio.muted) {
				this.innerHTML = "<span aria-hidden=\"true\" data-icon=\"&#xe001;\"></span><span class=\"screen-reader-text\">Muted</span>";
			} else {
				this.innerHTML = "<span aria-hidden=\"true\" data-icon=\"&#xe000;\"></span><span class=\"screen-reader-text\">Audible</span>";
			}
		});
	});
});

});