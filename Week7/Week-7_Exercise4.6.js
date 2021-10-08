//A line of text in alphabetical order.
var textEntry = prompt("Please enter a sentence of words: ");

var text_string = textEntry.split(' ');
text_string.sort(function (a, b) {
    return a.toLowerCase().localeCompare(b.toLowerCase());
});
//Case-insensitive otherwise it sorted capital letters first regardless of order.

document.write("<em>Your text in alphabetical order</em>:  " +text_string.join(' '));