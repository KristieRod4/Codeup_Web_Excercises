//For Loops

// Create a file named for_loops.js inside the js directory and link it to your loops.html file.

// // Write the JS code to prompt the user for a number between 1 and 10, then log to the console 
// the multiplication table for that number. For instance, if the user enters is 7, the console 
// output should look like:
var userPrompt = prompt("Please pick a number between 1 and 10.");

do {

} while(isNan(userPrompt) || (userPrompt < 1 || userPrompt));

for (var i = 0; i <= 10; i++) { 
	console.log(userPrompt + "X" + i + "=" + (userPrompt * i));
}
//  7x1=7
//  7x2=14
//  7x3=21
//  7x4=28
//  7x5=35
//  7x6=42
//  7x7=49
//  7x8=56
//  7x9=63
//  7x10=70
// Use a for loop and the code from the previous lessons to generate 10 random numbers between 20 and 200 and output to the console whether each number is odd or even. For example:

//  123 is odd
//  80 is even
//  24 is even
//  199 is odd
//  ...
// Use inline JavaScript to create a for loop that uses console.log to create the output shown below.

//  1
//  22
//  333
//  4444
//  55555
//  666666
//  7777777
//  88888888
//  999999999
//  0000000000
// Create a for loop that uses console.log to create the output shown below.

//  100
//  95
//  90
//  85
//  80
//  75
//  70
//  65
//  60
//  55
//  50
//  45
//  40
//  35
//  30
//  25
//  20
//  15
//  10
//  5
// Break and Continue

// Create a file named break_and_continue.js in the js directory.
// Prompt the user for an odd number between 1 and 50. Use a loop and a break statement to continue prompting the user if they enter invalid input.
// Use a loop and the continue statement to output all the odd numbers between 1 and 50, except for the number the user entered.
// Your output should look like this:

// Number to skip is: 27

// Here is an odd number: 1
// Here is an odd number: 3
// Here is an odd number: 5
// Here is an odd number: 7
// Here is an odd number: 9
// Here is an odd number: 11
// Here is an odd number: 13
// Here is an odd number: 15
// Here is an odd number: 17
// Here is an odd number: 19
// Here is an odd number: 21
// Here is an odd number: 23
// Here is an odd number: 25
// Yikes! Skipping number: 27
// Here is an odd number: 29
// Here is an odd number: 31
// Here is an odd number: 33
// Here is an odd number: 35
// Here is an odd number: 37
// Here is an odd number: 39
// Here is an odd number: 41
// Here is an odd number: 43
// Here is an odd number: 45
// Here is an odd number: 47
// Here is an odd number: 49