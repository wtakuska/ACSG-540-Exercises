
const cells =
        document.querySelectorAll('td');
        cells.forEach(function(cell) {
            var number = cell.innerText;
            alert(number + " squared is: " + 
            Math.pow(number, 2))
            alert(number + " cubed is: " + 
            Math.pow(number, 3))
        })
