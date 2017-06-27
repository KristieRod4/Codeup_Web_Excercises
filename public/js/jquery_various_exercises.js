"use strict";
$(document).ready(function(){

//===========ID Selectors
			// 	alert($("#top").html());
			// 	//============ Class Selectors
			// 	$('.important').css("border", "1px solid red");
			// 	//=============Element Selector

			// 	$('li').css('font-size', '20px');
			// 	
			// 	$('p').css('backround-color', 'yellow');
			// 	$('li').css('backround-color', 'yellow');
			// 	//====================Multiple Selectors
			// 	$('h1, p, li').css('backround-color', 'yellow'); -->

// Use the file jquery_exercises.html for these exercises. Commit your changes to GitHub.

// Remove your custom jQuery code from previous exercises.

// Add jQuery code that will change the background color of a h1 element when clicked.
$('h1').click(function(){
		$(this).css('background-color', 'red');
	});
// Make all paragraphs have a font size of 18px when they are double clicked.
$('p').dblclick(function(){
	$('p').css('font-size', '18px');
	//change 'p' to 'this' to change just 1 paragraph

})

// Set all li text color to red when the mouse is hovering, reset to white when it is not.
	$('li').hover(
		function(){
			$('this').css('color', 'red');
		})
		function(){
			$('this').css('color', 'blue');
		}
);


// BONUS 1:

// Recreate the nav bar at the top of the jQuery docs website (just the links floated to the right):
// - Each link in the nav bar may link to the jQuery docs homepage
// - Change the font color to red and make the text bold for a given link on click


// BONUS 2:

// Begin developing a functional tic-tac-toe game:
// - Create a game board with tiles that when clicked, turn either red or blue depending on the turn
// - The tiles before being clicked should be grey with a black border
// - The opacity of a given tile should visibly decrease on hover
// - Display on the page if it is the red or blue player’s turn
// - Tiles may only be clicked once
// - Create a button on the page that when clicked, resets the board

// });









 }); 		