function replaceLetters(button) {
    var currentRow = button.closest('tr');
    var currentCells = currentRow.querySelectorAll('td');

    var stringCell = currentCells[0];
    var currentString = stringCell.textContent;

    var placeToResult = currentCells[2];

    if (stringCell.querySelector('input')) {
        currentString = stringCell.querySelector('input').value;
    }

    var arrString = currentString.split('');
    upperStart = 'A'.charCodeAt(0);
    upperEnd = 'Z'.charCodeAt(0);

    lowerStart = 'a'.charCodeAt(0);
    lowerEnd = 'z'.charCodeAt(0);

    numStart = '0'.charCodeAt(0);
    numEnd = '9'.charCodeAt(0);

    for (var stringIndex = 0; stringIndex < arrString.length; stringIndex++) {
        let currentLetter = arrString[stringIndex];
        let currentCode = currentLetter.charCodeAt(0);
        switch (currentCode) {
            case upperEnd:
                currentCode = upperStart;
                break;
            case lowerEnd:
                currentCode = lowerStart;
                break;
            case numEnd:
                currentCode = numStart;
                break;
            default:
                currentCode++;
        }
        arrString[stringIndex] = String.fromCharCode(currentCode);
    }
    
    var newString = arrString.join('');

    placeToResult.textContent = newString;
};