var leftInput = document.getElementById("leftInput")
var operator = document.getElementById("operator")
var rightInput = document.getElementById("rightInput")



var one = document.getElementById("one")
one.addEventListener("click", function(){
	leftInput.value = 1
	rightInput.value = 1
})

var two = document.getElementById("two")
two.addEventListener("click", function(){
	leftInput.value = 2
	rightInput.value = 2
})

var three = document.getElementById("three")
three.addEventListener("click", function(){
	leftInput.value = 3
	rightInput.value = 3
})

var four = document.getElementById("four")
four.addEventListener("click", function(){
	leftInput.value = 4
	rightInput.value = 4
})

var five = document.getElementById("five")
five.addEventListener("click", function(){
	leftInput.value = 5
	rightInput.value = 5
})

var six = document.getElementById("six")
six.addEventListener("click", function(){
	leftInput.value = 6
	rightInput.value = 6
})

var seven = document.getElementById("seven")
seven.addEventListener("click", function(){
	leftInput.value = 7
	rightInput.value = 7

})

var eight = document.getElementById("eight")
eight.addEventListener("click", function(){
	leftInput.value = 8
	rightInput.value = 8
})

var nine = document.getElementById("nine")
nine.addEventListener("click", function(){
	leftInput.value = 9
	rightInput.value = 9
})

var zero = document.getElementById("zero")
zero.addEventListener("click", function(){
	leftInput.value = 0
	rightInput.value = 0
})

var decimal = document.getElementById("decimal")
decimal.addEventListener("click", function(){
	leftInput.value = "."
	rightInput.value = "."
})

var add = document.getElementById("add")
add.addEventListener("click", function(){
	operator.value = "+"
})

var subt = document.getElementById("subt")
subt.addEventListener("click", function(){
	operator.value = "-"
})

var mult = document.getElementById("mult")
mult.addEventListener("click", function(){
	operator.value = "*"
})

var sum = document.getElementById("sum")
sum.addEventListener("click", function(){
	operator.value = "="
})


var clear_all = document.getElementById("clear_all")
clear_all



var operator;
	function setValues()
	{
		leftInput = Number(document.getElementById("leftInput").value);
		operator = Number(document.getElementById("operator").value);
	}

	function sum() {
		setValues();
		results = a+b;
	}












