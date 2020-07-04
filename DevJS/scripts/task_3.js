function generatePallindrom(inputStr) {
    var inputField = inputStr.closest(".input-group").querySelector('input');
    typedStr = inputField.value;
    arrTypedStr = typedStr.split('');
    readyFlag = true;

    while (readyFlag) {
        let arrCount = arrTypedStr.length;

        for (descIndex = arrCount - 1, ascIndex = 0; ; ascIndex++, descIndex--) {

            if (arrTypedStr[ascIndex] !== arrTypedStr[descIndex]) {
                for (var shiftIndex = arrTypedStr.length; shiftIndex !== (descIndex + 1); shiftIndex--) {                    
                    if(ascIndex === 0){
                        arrTypedStr[arrCount] = arrTypedStr[arrCount - 1];
                        break;
                    } else {
                        arrTypedStr[shiftIndex] = arrTypedStr[shiftIndex - 1];
                    }                    
                }
                arrTypedStr[descIndex + 1] = arrTypedStr[ascIndex];
                break;                                
            }
            if ((descIndex - ascIndex) < 2) {
                readyFlag = false;
                console.log(arrTypedStr);
                break;
            }
        }    
    };    
};