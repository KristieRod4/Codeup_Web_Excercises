(function(){
    "use strict";

    // TODO: Create an array holding the names of the eight planets in our solar system in order, 
    // starting closest to the sun.
    var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];

    // function for logging the planets array
    function logPlanets() {
        console.log("Here is the list of planets:");
        console.log(planets);
        console.log("---- ---- ---- ----");
    }

    logPlanets();

    // console.log('Adding "The Sun" to the beginning of the planets array.');
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();

    planets.unshift("The Sun");
    console.log(planets);

    // console.log('Adding "Pluto" to the end of the planets array.');
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();
    planets.push("Pluto");
    console.log(planets);


    // console.log('Removing "The Sun" from the beginning of the planets array.');
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();

    var firstElement = planets.shift();
    console.log(planets);

    // planets.forEach(function(element)) {

    

    // console.log('Removing "Pluto" from the end of the planets array.');
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();
    //dont need arguments...
    planets.pop();

    // planets.splice(planets.indexOf('Pluto'), 2);
    // console.log(planets)

    // console.log('Finding and logging the index of "Earth" in the planets array.');
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    var index = planets.indexOf('Earth');

    console.log(index);

    // console.log('Using splice to remove the planet after "Earth".');
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();
    var indexOfEarth = planets.indexOf("Earth");
    planets.splice(indexOfEarth + 1, 1);
    console.log(planets);

    // console.log('Using splice to add back the planet after "Earth".');
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();
    planets.splice(3, 0, "Mars");
    console.log(planets);


    // console.log("Reversing the order of the planets array.");
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();
    console.log(planets.reverse());

    // console.log("Sorting the planets array.");
    // // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    // logPlanets();
    console.log(planets.sort());

// BONUS:
//     Array Manipulation Optional BONUS Exercise...

// Create a student roster management app. Using the user dialogue functions (alert, confirm, prompt), create an application that will prompt the user to choose from a menu with the following actions: 
//         1) Add a Student 
//         2) Delete a Student 
//         3) view all students in alphabetical order 
//         4) view all students in reverse alphabetical
})();



