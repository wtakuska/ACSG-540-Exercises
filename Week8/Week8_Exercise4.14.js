function reverser (num) {
    var result = 0;

    while (num>0) {

        result *= 10;
        result += (num%10);
        num = Math.floor(num/10);
    }

    return result;

}

var a = prompt("Enter a multi-digit number");
document.write("<h3>Numbers Entered: </h3>" +a+ '<br />' +"<h3>Numbers in Reverse Order: </h3>" +reverser(a));
