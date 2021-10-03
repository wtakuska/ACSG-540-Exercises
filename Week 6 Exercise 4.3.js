function maximum_num(number1, number2, number3) {
    return Math.max(number1, number2, number3);
}

var number1 = prompt("Enter a number.");
var number2 = prompt("Enter another number.");
var number3 = prompt("Enter the final number.");

var numbers = maximum_num(number1, number2, number3);

document.write("<em>Your maximum number is: </em>" +numbers);

