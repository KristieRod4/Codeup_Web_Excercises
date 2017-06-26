(function(){
"use strict";

var mapElement = document.getElementById("map"); 

var mapOptions = {
	zoom: 10,
	center: {
		lat: 29.4964645,
		lng: -98.478578
		},

	 mapTypeId: google.maps.MapTypeId.SATELLITE

	};

	var map = new google.maps.Map(mapElement, mapOptions);

	var favRestaurant = { lat: 29.3778371, lng: -98.5131725 };



//=================== Add the marker to our existing map-Initial Exercise==============//
// 	var marker = new google.maps.Marker({
//     	position: favRestaurant,
//     	map: map
// });

// 	// Create a new infoWindow object with content
// 	var infowindow = new google.maps.InfoWindow({
//     content: "<h1>Las Cazuelas..The Best TexMex in Town!</h1>"
// });

// // Open the window using our map and marker
// 	infowindow.open(map, marker);

//================================Adding JSON Array===========================//

	var myFavEateries = [ 
		{
			name : "Las Cazuelas",
			type : "Best TexMex",
			location : "645 Chalmers Ave, San Antonio, TX 78214",
			qualities : ["The BEST Chille Relleno", " Happy, friendly service ", "very economical"," huge portions"]
		},
		{
			name : "Chauma Gaucha",
			type : "Best Brazilian Restaurant",
			location : "18318 Sonterra Pl, San Antonio, TX 78258",
			qualities : ["Amazing Salad Bar", " Incredible Service "," Delicious Variety of Steaks!!"]
		},
		{
			name : "Max's Wine Dive",
			type : "American with WINE",
			location :"340 E Basse Rd #101, San Antonio, TX 78209",
			qualities : ["Amazing Selection of Wine! ", " Did I mention the Wine? ", " Seriously though, its the WINE! "]
		}

	]
	myFavEateries.forEach(function(eatery){
		console.log(eatery.location);
		var geocoder = new google.maps.Geocoder();
		var address = eatery.location;
		
		var contentString = '<div id="content">'+
            '<div id="siteInfo">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">' + eatery.name +'</h1>'+
            '<div id="bodyContent">'+
            '<p><b>' + eatery.name + ' </b>, also referred to as <b>' + eatery.type + '</b> . ' 
             + eatery.qualities + ' </p>' + 
            '<p>' + '(last visited June 24, 2017).</p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          		content: contentString
        });

		geocoder.geocode({ "address": address }, function(results, status) {

   			// Check for a successful result
   			if (status == google.maps.GeocoderStatus.OK) {
   				var marker = new google.maps.Marker({
          		position: results[0].geometry.location,
          		map: map,
          		title: eatery.name
        		});
        		marker.addListener('click', function() {
          		infowindow.open(map, marker);
          		marker.addListener('click', toggleBounce);
        		});
      			function toggleBounce() {
        		if (marker.getAnimation() !== null) {
          			marker.setAnimation(null);
        		} else {
          			marker.setAnimation(google.maps.Animation.BOUNCE);
        		}
      		}		

       		// Recenter the map over the address
   			} else {

       // Show an error message with the status if our request fails
       			alert("Geocoding was not successful - STATUS: " + status);
   			}
		});

	});

//============================Adding HTML to InfoWindow====================================//

// var contentString = '<div id="content">'+
//             '<div id="siteInfo">'+
//             '</div>'+
//             '<h1 id="firstHeading" class="firstHeading">Las Cazuelas</h1>'+
//             '<div id="bodyContent">'+
//             '<p><b>Las Cazuelas</b>, also referred to as <b>My Fav TexMex spot</b>, is a freindly ' +
//             'and economical, family run resturaunt ' +
//             'My favorite dish is their Chille Relleno.  It/s only available on Fridays. ' +
//             'But beleive me it is worth the wait!' + '</p>' +
//             '<p>' + '(last visited June 24, 2017).</p>' +
//             '</div>' +
//             '</div>';

//         var infowindow = new google.maps.InfoWindow({
//           content: contentString
//         });

//         var marker = new google.maps.Marker({
//           position: favRestaurant,
//           map: map,
//           title: 'Las Cazuelas (favRestaurant)'
//         });
//         marker.addListener('click', function() {
//           infowindow.open(map, marker);
//           marker.addListener('click', toggleBounce);
//         });

//       function toggleBounce() {
//         if (marker.getAnimation() !== null) {
//           marker.setAnimation(null);
//         } else {
//           marker.setAnimation(google.maps.Animation.BOUNCE);
//         }
//       }

// 	var geocoder = new google.maps.Geocoder();

// 	var geocoderOptions = {
// 	address: prompt("What locations would you like to search for?"),
// };

// 		console.log("Before geocoding.")

// 	geocoder.geocode(geocoderOptions, function(results, status){

// 		console.log("Geocoding finished!");
// 		console.log(results, status);

// 	var ul = document.getElementById("results");

// 	results.forEach(function(result) {
// 		var listItem = "<li>" + result.formatted_address + "</li>";
// 		ul.innterHTML += listItem
// });

// 	if (status == google.maps.GeocoderStatus.Ok){
// 		map.setCenter(results[0].geometry.location);
// 	}else{
// 		alert("Geocoding was not successful - STATUS: " + status);
// 	}

// 		console.log("This code comes after the geocoding request!");

// });
	





})();