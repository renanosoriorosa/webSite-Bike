//add my google maps
var myCenter = new google.maps.LatLng(-30.065375, -51.2340505);

function initialize() {
	var mapProp = {
		center:myCenter,
		zoom:15,
		scrollwheel:true,
		draggable:true,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

	var marker = new google.maps.Marker({
		position:myCenter,
		icon: 'img/marcador.png'
	});

	marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);