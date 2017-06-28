(function(){
	"use strict";


// Write a function named isNegative that accepts a number and returns true or false based on whether the 
// input is negative.

//  isNegative(-1) // true
//  isNegative(6) // false


function isNegative(input){
if (input < 0) {
        return true;
    } else{
    return false;
}
    isNegative(-1) 
    isNegative(6) 
	console.log(isNegative(number));

// Write a function named average that accepts an array of numbers and returns the average of those numbers

//  average([1, 2, 3]) // 2
//  average([4, 6, 8, 10, 12]) // 8

function average(array){
	var getAverage = 0;
    for(i = 0; i < array.length; i++){
        getAverage += array[i];
    }
        return total / array.length;

    

	console.log(getAverage[1, 2, 3]);
    console.log(getAverage[4, 6, 8]);



// Write a function named countOdds that accepts an array of numbers and returns the number of odd numbers 
// in the array.

//  countOdds([1, 2, 3]) // 2
//  countOdds([4, 6, 8, 10]) // 0
//  countOdds([1, 2, 1, 1]) // 3

function countsOdds(array){
    var total = 0;
    for (var i = 0; i < array.length; i++){
        if (array[i] % 2 != 0) {
            total ++;
        }
    }
    return total;
}
console.log(countsOdds([1, 2, 3]));
console.log(countsOdds([4, 6, 8, 10]));
console.log(countsOdds([1, 2, 1, 1]));


// Write a function named convertNameToObject that accepts a string that contains a first name and last name 
// separated by a space, and returns an object with properties firstName and lastName.

//  convertNameToObject('Harry Potter') // {firstName: 'Harry', lastName: 'Potter'}
//  convertNameToObject('Ron Weasley') // {firstName: 'Ron', lastName: 'Weasley'}

function convertNameToObject(string){
    var nameArray = string.split(" ");
    var nameObject = {
        firstName : nameArray[0],
        lastName : nameArray[1]
    }; 
    return nameObject;
}
// Write a function named fiveTo that accepts a number and returns an array of the integers from 5 up to (but not including) the passed number.

//  fiveTo(10) // [5, 6, 7, 8, 9]
//  fiveTo(6) // [5]

function fiveTo(number){
    var arrayIntegers = [];
    for (var i = 5; i < number; i++) {
        arrayIntegers.push(i);

    }
    return arrayIntegers;

}
// Write a function named upperCaseLastNames that accepts an array of objects where each object has 
// properties firstName and lastName and returns the same array of objects with each last name capitalized

 var names = 
 [
     {firstName: 'Harry', lastName: 'Potter'},
     {firstName: 'Ron', lastName: 'weasley'},
     {firstName: 'Hermione', lastName: 'granger'}
 ];
 // upperCaseLastNames(names);
 
 // [
 //    {firstName: 'Harry', lastName: 'Potter'},
 //    {firstName: 'Ron', lastName: 'Weasley'},
 //    {firstName: 'Hermione', lastName: 'Granger'}

 // ] 

 function upperCaseLastNames(names){
    names.forEach(function(name){
        name.lastName = name.lastName.charAt(0).toUpperCase() + name.lastName.slice(1);
    });
    return names;
 }
console.log(upperCaseLastNames(names));

}());