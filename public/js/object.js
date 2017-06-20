  (function(){
//     "use strict";

//     /**
//      * TODO:
//      * Create person object, store it in a variable named person
//      */
//      // var person = {};

//     /**
//      * TODO:
//      * Create firstName and lastName properties in your person object, and
//      * assign your name to them
//      */
//      // 

//      // var person = {
//      // "firstName" : "Kristie",
//      // "lastName" : "Rodriguez",
//      // "sayHello" : "Hello from ",
//      //    };
//      //    console.log(person.sayHello + person.firstName + person.lastName);


//     /**
//      * TODO:
//      * Add a sayHello method to the person object that returns a greeting using
//      * the firstName and lastName properties.
//      * console.log the returned message to check your work
//      *
//      * Example
//      * person.sayHello() // returns "Hello from Rick Sanchez!"

//     person.sayHello = function () {
//         return "Hello from " + person.firstName + person.lastName

//     }

//      */

//     * TODO: Remember this problem from before?
//      *
//      * HEB has an offer for the shoppers that buy products amounting to more
//      * than $200. Write a JS program, using conditionals, that logs to the
//      * browser, how much does Ryan, Cameron and George need to pay. We know that
//      * Cameron bought $180, Ryan $250 and George $320. Your program will have to
//      * display a line with the name of the person, the amount before the
//      * discount, the discount, if any, and the amount after the discount.
//      *
//      * Uncomment the lines below to create an array of objects where each object
//      * represents one shopper. Use a foreach loop to iterate through the array,
//      * and console.log the relevant messages for each person
     

//     var shoppers = [
//          {
//              name: 'Cameron',
//              amount: 180,
//              discount: .20,
//              amountAfterDiscount: 180,
//          },


//         {
//             name: 'Ryan',
//              amount: 250,
//              discount: .20,
//              amountAfterDiscount: 200,
//          },

//          { 
//              name: 'George',
//              amount: 320,
//              discount:.20,
//              amountAfterDiscount: 256,
//          },
//     ];

// // console.log("The first shopper is " + shoppers[0].name + "his bill total is " + shoppers[0].amountAfterDiscount + ".");
// // console.log("The second shopper is " + shoppers[1].name + "his bill total is " + shoppers[1].amountAfterDiscount + ".");
// // console.log("The third shopper is " + shoppers[2].name + "his bill total is " + shoppers[2].amountAfterDiscount + ".");
// // console.log("Here are all the names of all the shoppers:");
// shoppers.forEach(function(shopper) {

//     console.log("The first shopper is " + shopper.name + " his bill total is " + shopper.amountAfterDiscount + ".");
     
    
// });
    

// })();



"use strict";

// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author property.
// The author property should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
var books = [

{
     title: "To Kill A Mockingbird",
     author:  {

                firstName: "Harper",
                lastName: "Lee",
            },

     copyright: "1962",
     price: "10.99",
     keywords:  ["Classic", "Romance", "Thriller", "Non-Fiction", "Autobiography"],


    
},

{
     title: "The Catcher in the Rye",
     author:  {

                firstName: "JD",
                lastName: "Salinger",
             },

     copyright: "1951",
     price: "9.22",
     keywords:  ["Classic", "Romance", "Thriller", "Non-Fiction", "Autobiography"],
},

{
     title: "A Tree Grows in Brooklyn",
     author:  {

                firstName: "Betty",
                lastName: "Smith",
            },

     copyright: "1949",
     price: "11.74",
     keywords:  ["Classic", "Romance", "Thriller", "Non-Fiction", "Autobiography"],
},


{

     title: "Look Homeward Angel",
     author:  {

                firstName: "Thomas",
                lastName: "Wolfe",
              },

     copyright: "1940",
     price: "10.80",
     keywords:  ["Classic", "Romance", "Thriller", "Non-Fiction", "Autobiography"],
},

{
     title: "Rebecca",
     author:  {

                firstName: "Daphne",
                lastName: "duMaurier",

             },

     copyright: "1934",
     price: "8.79",
     keywords:  ["Classic", "Romance", "Thriller", "Non-Fiction", "Autobiography"],
},



];

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here

    books.forEach(function(book, index, array)
   {

    // console.log("Book #" + (index + 1));
    // console.log("Title: " + book.title);
    // console.log("Author: " + book.author.firstname + "" + book.author.firstName);
    // console.log("---");
}
// // end loop here
));

  //console.log("Orsinger's Postulate of Approaching Loops");
  //console.log("Start by ignoring the loop completely");
  //console.log("If you have an array of things named with a plural variable name,");
  //console.log("Then make a singular version of that variable name and assign the first elemect of that array");

  //(After console.logging a working...see SLACK)
  
  var index = 0,
  var book = books[index];

  console log(book);
  console.log("Book #" + (index +1));
  console.log("Title" + book.title);
  console.log("Author: " + book.author.firstname + "" + book.author.firstName);
  console.log("---");

     index0
  // console.log("Book #" + (index + 1));
    // console.log("Title: " + book.title);
    // console.log("Author: " + book.author.firstname + "" + book.author.firstName);
    // console.log("---");
    index1
// console.log("Book #" + (index + 1));
    // console.log("Title: " + book.title);
    // console.log("Author: " + book.author.firstname + "" + book.author.firstName);
    // console.log("---");
    index2
 // console.log("Book #" + (index + 1));
    // console.log("Title: " + book.title);
    // console.log("Author: " + book.author.firstname + "" + book.author.firstName);
    // console.log("---");
    index3
// console.log("Book #" + (index + 1));
    // console.log("Title: " + book.title);
    // console.log("Author: " + book.author.firstname + "" + book.author.firstName);
    // console.log("---");   
    index4
// console.log("Book #" + (index + 1));
    // console.log("Title: " + book.title);
    // console.log("Author: " + book.author.firstname + "" + book.author.firstName);
    // console.log("---");






// BONUS 1 (expanding on the books object exercise):

//     Add a property “keywords” that contains an array of possibly genres the book may be categoriezed by
//     Add a boolean property “available” and set it to true
//     Add a dateAvailable property that has a string of the date/time when the book will be available
//     Add a method rent() that... 
//         - changes the available property to false if it is not already false
//         - sets the dateAvailable to a date exactly two weeks from when the rent() method is called 
//         (to do this, research the JS Date object and use methods from it in your code)
//     Add a method returned() that...
//         - changes the available property to true
//         - changes the dateAvailble property to the string “now”


// BONUS 2 (Create a Dog object):

//     The dog object should have properties for: 
//         breed (string), 
//         weightInPounds (number),
//         age (number), 
//         color (string), 
//         steralized (boolean), 
//         shotRecords (array of objects with properties for date and typeOfShot)

//     The dog object should have methods to:
//         bark() - will console.log “Woof!”
//         getOlder() - will increase age by 1
//         fix() - will set sterile to true
//         getShot() - takes in an argument for the name of the shot and adds a new shot with the current date to the shotRecords array




//   