//declare style
var style = [
{
	"featureType": "landscape",
	"stylers": [
	{
		"saturation": -100
	},
	{
		"lightness": 65
	},
	{
		"visibility": "on"
	}
	]
},
{
	"featureType": "poi",
	"stylers": [
	{
		"saturation": -100
	},
	{
		"lightness": 51
	},
	{
		"visibility": "simplified"
	}
	]
},
{
	"featureType": "road.highway",
	"stylers": [
	{
		"saturation": -100
	},
	{
		"visibility": "simplified"
	}
	]
},
{
	"featureType": "road.arterial",
	"stylers": [
	{
		"saturation": -100
	},
	{
		"lightness": 30
	},
	{
		"visibility": "on"
	}
	]
},
{
	"featureType": "road.local",
	"stylers": [
	{
		"saturation": -100
	},
	{
		"lightness": 40
	},
	{
		"visibility": "on"
	}
	]
},
{
	"featureType": "transit",
	"stylers": [
	{
		"saturation": -100
	},
	{
		"visibility": "simplified"
	}
	]
},
{
	"featureType": "administrative.province",
	"stylers": [
	{
		"visibility": "off"
	}
	]
},
{
	"featureType": "water",
	"elementType": "labels",
	"stylers": [
	{
		"visibility": "on"
	},
	{
		"lightness": -25
	},
	{
		"saturation": -100
	}
	]
},
{
	"featureType": "water",
	"elementType": "geometry",
	"stylers": [
	{
		"hue": "#ffff00"
	},
	{
		"lightness": -25
	},
	{
		"saturation": -97
	}
	]
}
]


function initMap() {
	var lat = 43.097630;
	var lng = 131.864950;
	// coordinates to latLng
	var center = new google.maps.LatLng(lat, lng);
	//
	var isDraggable = $(document).width() > 600 ? true : false;
	// map Options
	var mapOptions = {
		draggable: isDraggable,
		zoom: 17,
		center: center,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		"scrollwheel":false,
		"disableDefaultUI": true
	};


	//set up content strig
	var contentString = '<div id="content">'+
	'<div id="siteNotice">'+
	'</div>'+
	'<h3 id="firstHeading" class="firstHeading">ООО «Автообувь»</h3>'+
	'<div id="bodyContent">'+
	'690065, Приморский край, г. Владивосток,<br> ' +
	'ул. Стрельникова, 7, офис 804.<br>'+
	'Телефон:'+ '8 (800) 250-57-07<br>' +
	'E-mail: manager@autoobuv.com'+
	'<h4>Режим работы:</h4> '+
	'Пн-Пт, 9-18<br> '+
	'без перерывов '+
	'</div>'+
	'</div>';


	//draw a map
	var map0 = new google.maps.Map(document.getElementById("gMap"), mapOptions);

	//draw infowindow
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	//draw marker
	var marker = new google.maps.Marker({
		position: center,
		map: map0,
		title: ''
	});

	//set style
	map0.setOptions({styles: style});

	//add event listener to marker
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map0,marker);
	});
	google.maps.event.trigger( map0, "resize" );
	map0.setZoom( map0.getZoom() );

}


// call the function
google.maps.event.addDomListener(window, 'load', initMap);

function contactInfo() {

	var listItem = $('#contactinfo li');

	//set selected on first item
	$(listItem[0]).addClass('selected');

	//mouseEnter / mouseleave
	$(listItem).mouseenter(function(){
		$(this).addClass('active');
	});
	$(listItem).mouseleave(function(){
		$(this).removeClass('active');
	});

	//onClick
	$(listItem).click(function(){

		$(listItem).removeClass('selected');
		$(this).addClass('selected');

	});

} //contactInfo

