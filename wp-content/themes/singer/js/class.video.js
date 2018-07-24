// JavaScript Document
var videoPlayer = (function() {
	var player;
	var srcTemp = '';
	function init(){
		initVideo();
		//changeVideo();
		//addNoteVideo();
		//removeNote();
		calculatePadding();
		closeVideo();
		$(window).resize(function(){
			calculatePadding();
		})
	}

	function calculatePadding(){
		var videoH = $('.mainScreen').innerHeight();
		if($('main').hasClass('fixed')) {
			$('.featured').css('padding-top', videoH)
		}
	}

	function closeVideo(){
		$('.closebtn').click(function(){
			$('#main').removeClass('fixed');
			$('.featured').removeAttr('style');
			var myPlayer = videojs("homeVideo");
			myPlayer.pause();
		});
	}
	
	function initVideo(){
		var firstVideo = $('#homeVideo').attr('data-source');
		srcTemp = firstVideo;
		var poster = $('#homeVideo').attr('data-poster');
		player = videojs('homeVideo', {
			techOrder: ['youtube', 'flash', 'html5'],
			autoplay: true,
			poster: poster,
			responsive: true,
			sources: [{ 
				type: "video/mp4",
				src: firstVideo
			}]
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
			var src = $(this).attr('data-source');
			$('ul.videoPlayerList li').removeClass('currentPlay');
				$(this).parents().addClass('currentPlay');
			if (player.paused()) {
			    player.play();
			}
			else {
			    player.pause();
			}
			if(srcTemp != src){
				
				changeSource(src);
			}
			srcTemp = src;
		});
	}
	function play(){

	}
	function pause(){

	}
	function changeSource(src) {
		player.pause();
		player.currentTime(0);
		
		player.src(src);
		
		player.ready(function() {
			this.one('loadeddata', videojs.bind(this, function() {
				this.currentTime(0);
			}));

			this.load();
			this.play();
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
	videoPlayer.init();
});

