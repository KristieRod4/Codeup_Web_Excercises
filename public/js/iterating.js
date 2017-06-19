(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation,
//      in a variable called 'names'.

var names = ["Jack", "Jill", "Jenny", "James"];

//     // TODO: Create a log statement that will log the number of elements in the names
//      array.
console.log("There are " + names.length + " names in the array");



//     // TODO: Create log statements that will print each of the names array elements
//     individually.
// console.log("The first name is " + names[0]);
// console.log("The second name is " + names[1]);
// console.log("The third name is " + names[2]);
// console.log("The last name is " + names[3]);

// Open the iterating.js file that you created in the last lesson.
// Modify the code that logs the names array elements individually to
//  instead use a for loop.
// // Below the for loop, use a forEach loop to print the names again.
// // View the results in your browser to test for the expected output.
// // Finally, save your work, commit the changes to your git repository, 
// and push to GitHub.

for (var i = 0; i < names.length; i++) {
	console.log(names[i]);
}


})();


// BONUS
// Create a simple Mad Libs game which prompts the user to provide parts of speech
//  to complete missing words or phrases for 3 - 4 silly sentences.
//  Add each word or phrase from each prompt to a single array. 
//  Once a user has entered all the Mad Libs, alert the results. 
//  Use a confirm to play again or not. Validate user input to prevent blank entries. 
//  At the very least, wrap your program
//  in an IIFE function. Consider organizing your code into smaller functions.


// Create a temperature conversion application using the user interaction methods
//  (alert, confirm, prompt) to take in a list of temperatures, 
//  ask the user which conversion to make (Fahrenheit to Celsius or vice versa) 
//  return to the user a list of converted temperatures.

Extra bonus: add Kelvin.

