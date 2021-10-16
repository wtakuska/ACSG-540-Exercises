function counter () {
    var result=[0,0,0];

    for (var i=0; i<arguments.length; i++) {
        switch(arguments[i] < 0)

        {
            case 1:
                result[0]++;
                result[1]++;
                break;

            case 0:
                switch(arguments[i] == 0)

            {
                case 0:
                    result[2]++;
                    break;
            }
        }

        if(arguments[i] < 0) {
            result[0]++;
        }

        else if(arguments[i] == 0) {
            result[1]++;

        }
        else {
            result[2]++;
        }
    
    }
    return result;
};
//User input
var ask = prompt("Enter an array of numbers seperated by a comma").split(",");

var result = counter.apply(this, ask);

document.write("Entered numbers: " +ask+ '<br />')

document.write("Less than 0: " +result[0]+ '<br />');

document.write("Equal to 0: " +result[1]+ '<br />');

document.write("Greater than 0: " +result[2]+ '<br />');

