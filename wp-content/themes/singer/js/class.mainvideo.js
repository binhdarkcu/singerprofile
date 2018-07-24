// JavaScript Document
var mainVideo = (function() {
	var mainPlayer;
	var mainsrcTemp = '';
	function init(){
		initVideo();
		changeVideo();
		//addNoteVideo();
		//removeNote();
	}


	function initVideo(){
		var firstVideo = $('#mainVideo').attr('data-source');
		mainsrcTemp = firstVideo;
		var poster = $('#mainVideo').attr('data-poster');
		console.log(firstVideo);
		mainPlayer = videojs('mainVideo', {
			controls: true,
			autoplay: true,
			preload: 'auto',
			loop: true,
            sources: [{src: firstVideo, type: 'video/youtube'}],
            techOrder: ['youtube', 'html5']
		}, function(){
			this.on('ended', function() {
			    var nextVideo = $('ul.videoPlayerList li.currentPlay').next();
			    var nextsrc = $(nextVideo).find('a').attr('data-source');
			    $('ul.videoPlayerList li').removeClass('currentPlay');
				$(nextVideo).addClass('currentPlay');
				$('ul.videoPlayerList li a').removeClass('play');
				$(nextVideo).find('a').addClass('play');

				if(nextsrc){
			    	changeSource(nextsrc);
			    }
			});
			this.on('play', function() {
				$('ul.videoPlayerList li a').removeClass('playing');
				$('ul.videoPlayerList li.currentPlay a').removeClass('playing').addClass('pause');

			});
			this.on('pause', function() {
				$('ul.videoPlayerList li a').removeClass('pause');
			    $('ul.videoPlayerList li.currentPlay a').removeClass('pause').addClass('playing');
			    var curTime = this.currentTime();
			    var minutes = Math.floor(curTime / 60);
			    var seconds = Math.floor(curTime - minutes * 60)
			    var x = minutes < 10 ? "0" + minutes : minutes;
			    var y = seconds < 10 ? "0" + seconds : seconds;
			    $('.notetab input.ipduration').val(x+":"+y);
			});
		});
	}

	function changeVideo(){
		$('ul.videoPlayerList li a').click(function(){
			var src = $(this).attr('data-source'),
				poster = $(this).attr('data-poster');
			$("html, body").animate({ scrollTop: 0 }, 400);
			$('ul.videoPlayerList li').removeClass('currentPlay');
				$(this).parents().addClass('currentPlay');
			if (mainPlayer.paused()) {
			    mainPlayer.play();
			}
			else {
			    mainPlayer.pause();
			}
			if(mainsrcTemp != src){

				changeSource(src, poster);
			}
			srcTemp = src;
		});
	}
	function play(){

	}
	function pause(){

	}
	function changeSource(src, poster) {
		mainPlayer.pause();
		mainPlayer.currentTime(0);
		mainPlayer.src(src);
		console.log(poster);
		$('.vjs-poster').css('background-image', 'url('+poster+')');
		mainPlayer.ready(function() {
			this.one('loadeddata', videojs.bind(this, function() {
				this.currentTime(0);
			}));
			mainPlayer.load();
			mainPlayer.play();
		});

	}

	function addNoteVideo(){

		$('#noteTab a#btnAdd').click(function(){
			var duration = $('.notetab input.ipduration').val();
			var text = $('.notetab .inputcontent').val();

			if(text != ''){
				var html = '<li><div class="duration">'+ duration + '</div><div class="text">'+text+'</div><a href="#" class="remove"></a></li>';
				$('.noteResult ul').prepend(html);
			}


		});
	}

	function removeNote(){
		$('.notetab a.remove').click(function(){
			var id = $(this).attr('data-id');
			$('.noteResult ul li[data-id="'+id+'"]').remove();
		});
	}

	return {
		init:init
	}

})();

$(document).ready( function() {
	mainVideo.init();
});
