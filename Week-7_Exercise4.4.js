//Prompt input of number
const number = parseInt(prompt('Enter a positive number: '));

var fibonacci = [];
var n;

fibonacci[0] = 0;
fibonacci[1] = 1;
 
for (n = 2; n <= number; n++) {
  
  fibonacci[n] = fibonacci[n - 2] + fibonacci[n - 1];
  console.log(fibonacci[n]);
}

document.write("<h4>Output of Fibonacci numbers: </h4>" +fibonacci.join(', '))
