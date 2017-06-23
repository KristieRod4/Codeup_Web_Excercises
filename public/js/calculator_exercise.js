var leftInput = document.getElementById("leftInput");
var operatorInput = document.getElementById("operatorInput");
var rightInput = document.getElementById("rightInput");
var sum = document.getElementById("sum");
var clearAll = document.getElementById("operatorall_clear");
var answer;

//_____________Adding Numbers and Operators______________//
    

 var numberz = document.getElementsByClassName("number");
 for (var i = 0; i < numberz.length; i++){
 	numberz[i].addEventListener("click", addNumberToDisplay);
 }
var operatorz = document.getElementsByClassName("operator");
for (var i=0; i <operatorz.length; i++){
	operatorz[i].addEventListener("click", addNumberToDisplay);
}

//___________________________________________________//

function addNumberToDisplay(){
	if (this.className.includes("operator")){
	 	operatorInput.setAttribute("value", this.value);
	}else if (operatorInput.value != "" && leftInput.value != "") {
		var displayValue = rightInput.getAttribute("value");
		displayValue += this.value;
		rightInput.setAttribute("value", displayValue);
	}else if (this.className.includes("number")){
		var displayValue = leftInput.getAttribute("value");
		displayValue += this.value;
		leftInput.setAttribute("value", displayValue);
	}
}


//___________________________________________________//
clearAll.addEventListener("click", function(){
	leftInput.setAttribute("value", "");
	operatorInput.setAttribute("value", "");
	rightInput.setAttribute("value", "");
});

function calculateResults(){
	var leftMathInput = parseFloat(leftInput.value);
	var rightMathInput = parseFloat(rightInput.value);
	
	if (operatorInput.value == "+") {
	answer = leftMathInput + rightMathInput;
	clearCalc();
}else if (operatorInput.value == "-"){
	answer = leftMathInput - rightMathInput;
	clearCalc();
}else if (operatorInput.value == "*"){
	answer = leftMathInput * rightMathInput;
	clearCalc();
}else if (operatorInput.value == "/"){
	answer = leftMathInput / rightMathInput;
	clearCalc();
}

};

sum.addEventListener("click", calculateResults);

// function executeMathOperation(){
// 	operator.value = this.value;
// }

function clearCalc (){
	leftInput.value = answer;
	operatorInput.value = "";
	rightInput.value = "";
}

// function emptyTextBox(){
// operator.value = "";
// rightInput.value = "";

// }

// clearAll.addEventListener("click", function(){
// 	operator.value = "";
	
// });




// var one = document.getElementById("btnone")
// one.addEventListener("click", function(){
// 	leftInput.value += 1
	
// })

// var two = document.getElementById("btntwo")
// two.addEventListener("click", function(){
// 	leftInput.value += 2
	
// })

// var three = document.getElementById("btnthree")
// three.addEventListener("click", function(){
// 	leftInput.value += 3
	
// })

// var four = document.getElementById("btnfour")
// four.addEventListener("click", function(){
// 	leftInput.value += 4
	
// })

// var five = document.getElementById("btnfive")
// five.addEventListener("click", function(){
// 	leftInput.value += 5
	
// })

// var six = document.getElementById("btnsix")
// six.addEventListener("click", function(){
// 	leftInput.value += 6
	
// })

// var seven = document.getElementById("btnseven")
// seven.addEventListener("click", function(){
// 	leftInput.value += 7
	

// })

// var eight = document.getElementById("btneight")
// eight.addEventListener("click", function(){
// 	leftInput.value += 8
	
// })

// var nine = document.getElementById("btnnine")
// nine.addEventListener("click", function(){
// 	leftInput.value += 9
	
// })

// var zero = document.getElementById("btnzero")
// zero.addEventListener("click", function(){
// 	leftInput.value += 0
	
// })

// var decimal = document.getElementById("btndecimal")
// decimal.addEventListener("click", function(){
// 	leftInput.value = "."

// })
//____________________Adding Math Symbols to Operator_____________//


// var add = document.getElementById("operatoradd")
// add.addEventListener("click", function(){
// 	operator.value = "+"
// })

// var subt = document.getElementById("operatorsubt")
// subt.addEventListener("click", function(){
// 	operator.value = "-"
// })

// var mult = document.getElementById("operatormult")
// mult.addEventListener("click", function(){
// 	operator.value = "*"
// })

// var sum = document.getElementById("operatorsum")
// sum.addEventListener("click", function(){
// 	operator.value = "="
// })


//_________________Adding Numbers to RightInput_____________________//

// var one = document.getElementById("btnone")
// one.addEventListener("click", function(){
// 	rightInput.value += 1
	
// })

// var two = document.getElementById("btntwo")
// two.addEventListener("click", function(){
// 	rightInput.value += 2
	
// })

// var three = document.getElementById("btnthree")
// three.addEventListener("click", function(){
// 	rightInput.value += 3
	
// })

// var four = document.getElementById("btnfour")
// four.addEventListener("click", function(){
// 	rightInput.value += 4
	
// })

// var five = document.getElementById("btnfive")
// five.addEventListener("click", function(){
// 	rightInput.value += 5
	
// })

// var six = document.getElementById("btnsix")
// six.addEventListener("click", function(){
// 	rightInput.value += 6
	
// })

// var seven = document.getElementById("btnseven")
// seven.addEventListener("click", function(){
// 	rightInput.value += 7
	

// })

// var eight = document.getElementById("btneight")
// eight.addEventListener("click", function(){
// 	rightInput.value += 8
	
// })

// var nine = document.getElementById("btnnine")
// nine.addEventListener("click", function(){
// 	rightInput.value += 9
	
// })

// var zero = document.getElementById("btnzero")
// zero.addEventListener("click", function(){
// 	rightInput.value += 0
	
// })

// var decimal = document.getElementById("btndecimal")
// decimal.addEventListener("click", function(){
// 	rightInput.value = "."

// })




//______________________Operator Functions_______________________//

// var operator;
// 	function setValues()
// 	{
// 		leftInput = Number(document.getElementById("leftInput").value);
// 		operator = Number(document.getElementById("operator").value);
// 	}

// 	function sum() {
// 		setValues();
// 		results = a+b;
// 	}


// var clear_all = document.getElementById("clear_all")
// clear_all









