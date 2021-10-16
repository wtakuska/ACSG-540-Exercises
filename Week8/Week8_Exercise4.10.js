function first_vowel () {
    var vow_str = prompt ("Enter a word to find the leftmost vowel" , "");

    for (var i=0; i<vow_str.length; i++) {
        let fv = vow_str.charAt(i);

        if (fv == 'A' || fv == 'a' || fv == 'E' 
            || fv == 'e' || fv == 'I' || fv == 'i'
            || fv == 'O' || fv == 'o' || fv == 'U'
            || fv == 'u' || fv == 'Y' || fv == 'Y') {

                if ( i < vow_str.length ) {
                    document.write("Word Entered: " +vow_str+ "<br />");
                    document.write("First vowel is in position " +(i+1)+ '<br />');
                    break;
                }
        }
    
    } 
}

first_vowel();
