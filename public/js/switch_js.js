"use strict";

// Don't change the next two lines!
// This creates two variables:
//     one with the colors of the rainbow, and another with a single randome
//     another with a single random color value
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (color) {
    // TODO: create a case statement that will handle every color except indigo and violet
  case "red":
  	console.log("Nailpolish is red.");
  	break;
  case "orange":
  	console.log("Emergency cones are orange.");
  	break;
  case "yellow":
  	console.log("Raincoats are yellow.");
  	break;
  case "green":
  	console.log("Forests are green.");
  	break;
  case "blue":
  	console.log("Ink is blue.");
  	break;
  default:
  	console.log("I dont know anything about indigo or violet.");
    break;


    // TODO: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.

    // TODO: create a default case that will catch indigo and violet
    // TODO: for the default case, log: I do not know anything by that color.
}


// HEB Discount

var camCart = 180;
var ryCart = 250;
var geoCart = 320;
var discounted Amount;
var finalTotal;

if (camCart > 200) {
  discountedAmount = camCart * .1;
  finalTotal = camCart - discountedAmount;
  console.log("Cameron got a discount on " + " of " + discountedAmount);
} else {
    console.log("Cameron paid " + camCart + " and did not have a discount");
    finalTotal =ryCart;
}

console.log("Cameron had a final total of " + finalTotal);


// if (ryCart > 200) {
//   discountedAmount = camCart * .1;
//   finalTotal = ryCart - discountedAmount;
//   console.log("Ryan got a discount on " + " of " + discountedAmount);
// } else {
//     console.log("Ryan paid " + ryCart + " and did not have a discount");
// }
// if (geoCart > 200) {
//   discountedAmount = camCart * .1;
//   finalTotal = geoCart - discountedAmount;
//   console.log("George got a discount on " + " of " + discountedAmount);
// } else {
//     console.log("George paid " + geoCart + " and did not have a discount");
// }

}
// flip a coin
 var flipACoin = Math.floor(Math.random()* 2)
 console.log(flipACoin);

 if (flipACoin ===1) {
  console.log("Dont do it!");
 } else {
  console.log("Buy a car");
 }

 (flipACoin === 1) ? "Buy a house!" : "Buy a car!";
  console.log(outcome);

// Lucky Number

 var luckyNumber = Math.floor(Math.random() * 6);
 var subtotal = 60;
 var discount = 0;
 var newTotal;

  console.log(luckyNumber);

  switch(luckyNumber) {
    case 0:
      console.log("No discount");
      disount = 0;
      break;
    case 1:
      console.log("You get a 10% discount");
      discount = .1
      break;
    case 2:
      console.log("You get a 25% disocunt");
      discount = .25
      break;
    case 3:
      console.log("You get a 50% discount");
      discount = .5
      break;
      case 4:
        console.log("You get 100%");
        break;
      default:

      newTotal = subtotal -(subtotal * discount);
      console.log("Your final total after discount is" + newTotal)
  }


//odd or even excercise

var proceed = confirm("Would you like to enter a number?");
if (proceed) {
  var number = prompt("Please enter a number.")

if (isNaN(parseFloat(number))) {
  console.log("Not a valid number.");
} else {
  if (number % 2 === 0) {
      alert("Your number is even.");
  } else {
      alert("Your number is odd.");
  }
      alert("Your number plus 100 is" + (parseFloat(number) + 100));
      if (number < 0) {
        console.log(number + " is negatie");
      }else {
        console.log(number + " is positive");
      }
}

} else{
  console.log("Another time then...");

}







  newTotal = subtotal - (subtotal * discount;)
    console.log






