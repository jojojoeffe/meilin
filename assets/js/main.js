var Site = {

	init: function(){
		$('html').removeClass('no-js');


		Site.zoom();
		Site.map();
		Site.login();
	},

	zoom: function(){
		$('#zoom').elevateZoom({
			zoomWindowWidth:600,
			zoomWindowHeight:600,
			easing:true
		});
	},

	map:function(){
		var peta = new GMaps({
			div:'#map',
			lat: -7.873436,
			lng: 113.249989
		});

		peta.addMarker({
			div:'#map',
		  	lat: -7.873436,
		 	lng: 113.249989,
		 	title: 'Lima',
		 	click: function(e) {
		    alert('You clicked in this marker');
		  }
		});
	},

	login:function(){
		div:'#myLogin'
	}

};

$(function (){
	Site.init();
});