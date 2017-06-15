"use strict";

// number example
		var i = 1
			while(i < 65536) {
				i *= 2
				console.log("The number is" + i);
			}


//  This is how you get a random number between 50 and 100
 var allCones = Math.floor(Math.random() * 50) + 50;
 // This is how you get a random number between 1 and 5
 console.log("I have to sell " + allCones + " cones.");
 while (allCones>0) {

 var conesSold = Math.floor(Math.random() *5) +1;
 console.log("they bought" + conesSold + " cones");
 allCones = allCones - conesSold;
 }


 if (allCones <=0) {
 	console.log(" We are out of cones!");
 	
 	
 }


 // cones = Math.floor(Math.random() * 5) + 1;
// do { allCones = allCones - cones; {
// 	console.log(cones + " cones that were sold");
// 	(cones = Math.floor(Math.random() * 5) + 1);
// 	console.log("There are " + allCones + " more cones left")
// } while (allCones - cones)


 	// while  {
 	// 	console.log(cones - allCones + " cones sold");
 	// 	co
 	// } while(allCones > 0);
