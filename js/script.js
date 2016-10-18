jQuery(document).ready(function($) {

	// Add bootstrap's 'img-responsive' class to all images
	$('img').addClass('img-responsive');

	// Bootstrap dropdown on hover
	$('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({});

	// fancybox
	$(".fancybox").fancybox({

  	openEffect	: 'elastic',
  	closeEffect	: 'elastic',

  	afterLoad: function() {
        this.title = '<a href="' + this.href + '" download>Click to Download</a> ' + this.title;
    },

    helpers : {
        title: {
            type: 'inside'
        }
    }

  });

	//Videos

	$(".youtube-videos").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'elastic',
		closeEffect	: 'elastic'
	});

  $('.song-row').on('click', '.expand-lyrics', function(event) {
  	// event.stopPropagation();
  	// event.preventDefault();
		$('.song-row').not($(this)).find('.lyrics').slideUp();
  	$(this).closest('.song-row').find('.lyrics').slideToggle('slow', "linear", function(){
			// Animation complete
			  	// event.preventDefault();
					$('html, body').animate({
							scrollTop: $(this).closest('.lyrics').offset().top
					}, 500);
		});
		// if (!visible) {
		// 		$('html, body').animate({
		// 				scrollTop: $('.expalyrics').offset().top
		// 		}, 500);
		// }
event.stopPropagation();
event.preventDefault();
  });

  	$(".closeContent").click(function(){
        $(".lyrics").slideUp();
    });

// 	$('.expand-lyrics').click(function(){
// 		$('.lyrics').not($(this).find('.lyrics')).slideUp();
// 		$(this).find('.lyrics').slideToggle();
// 		e.stopImmediatePropagation();
// });


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

	// 	jQuery(function (){
	// var myAudio = document.getElementById("myAudio");
	// var current = null;
	// var playingString = "<span aria-hidden=\"true\" data-icon=\"&#xe002;\"></span><span class=\"screen-reader-text\"><i class=\"fa fa-pause\"></i></span>";
	// var pausedString = "<span aria-hidden=\"true\" data-icon=\"&#xe003;\"></span><span class=\"screen-reader-text\"><i class=\"fa fa-play\"></i></span>";

	// $(document.body).on('click', '.btnPlayPause',function(event){
	// 	var target = this;
		//console.log(target, current); //return;
		// event.stopPropagation();
  // 		event.preventDefault();
		// if (current == target) {
		// 	target.innerHTML = pausedString;
		// 	target.parentNode.setAttribute('data-pos', myAudio.currentTime); //start from paused
		// 	myAudio.pause();
		// 	current = null;
		// } else { // current!=target
			// if (current != null) {
			// 	current.innerHTML = pausedString;
			// 	current.parentNode.setAttribute('data-pos', '0'); //reset position
			// 	target.parentNode.setAttribute('data-pos', myAudio.currentTime); //start from paused
			// }
			// current = target;
			// target.innerHTML = playingString;
   //          if(myAudio.canPlayType && myAudio.canPlayType("audio/mpeg") != "") { // MP3
			//     myAudio.src = target.parentNode.getAttribute('data-src');
   //          } else if(myAudio.canPlayType && myAudio.canPlayType("audio/ogg") != "") {  // OGG
			//     myAudio.src = target.parentNode.getAttribute('data-src2');
   //          } else {
                //alert('Error: your browser doesn\'t support playing audio. Please use modern browser like Chrome, Firefox, Safari or IE9.');
//                 return;
//             }
// 			myAudio.play();
// 			myAudio.onloadeddata = function () {
// 				myAudio.currentTime = parseFloat(target.parentNode.getAttribute('data-pos'));
// 			};
// 		}
// 	});

// 	$(document.body).on('click', '.btnMute',function(e){
// 		myAudio.muted = !myAudio.muted;
// 		$('.btnMute').each(function(){
// 			if (myAudio.muted) {
// 				this.innerHTML = "<span aria-hidden=\"true\" data-icon=\"&#xe001;\"></span><span class=\"screen-reader-text\">Muted</span>";
// 			} else {
// 				this.innerHTML = "<span aria-hidden=\"true\" data-icon=\"&#xe000;\"></span><span class=\"screen-reader-text\">Audible</span>";
// 			}
// 		});
// 	});
// });

	$("audio").on("play", function(){
    var _this = $(this);
    $("audio").each(function(i,el){
        if(!$(el).is(_this))
            $(el).get(0).pause();
    });
});


// YouTube embed with poster image

// poster frame click event
$(document).on('click','.js-videoPoster',function(ev) {
  ev.preventDefault();
  var $poster = $(this);
  var $wrapper = $poster.closest('.js-videoWrapper');
  videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
  var $iframe = $wrapper.find('.js-videoIframe');
  var src = $iframe.data('src');
  // hide poster
  $wrapper.addClass('videoWrapperActive');
  // add iframe src in, starting the video
  $iframe.attr('src',src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
  // if we're stopping all videos on page
  if (!$wrapper) {
    var $wrapper = $('.js-videoWrapper');
    var $iframe = $('.js-videoIframe');
  // if we're stopping a particular video
  } else {
    var $iframe = $wrapper.find('.js-videoIframe');
  }
  // reveal poster
  $wrapper.removeClass('videoWrapperActive');
  // remove youtube link, stopping the video from playing in the background
  $iframe.attr('src','');
}


});
