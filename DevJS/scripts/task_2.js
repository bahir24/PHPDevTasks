var today = new Date();
input_card = document.querySelector('.input-data');
monthsNames = ['January,', 'February,', 'March,', 'April,', 'May,', 'June,', 'July,', 'August,', 'September,', 'November,', 'December,'];
currDay = today.getDate();		
currMonth = today.getMonth();
currYear = today.getFullYear();		
currDate = (currDay < 10 ? '0' + currDay : currDay) + ' ' + monthsNames[currMonth] + ' ' + currYear;
input_card.querySelector('p').textContent = currDate;
		
function calculateDays(){
	let resultCard = document.querySelector('.message');
	dayMilliseconds = 24 * 60 * 60 * 1000;
	nextCmassDate = new Date(currYear, 11, 25);
	if(currMonth === 11 && currDay > 25){		
		nextCmassDate.setYear(nextCmassDate.getFullYear() + 1);
	};
	if(currMonth === 11 && currDay === 25){
		while (resultCard.firstChild) {
            resultCard.removeChild(resultCard.firstChild);
        };
		let christMass = document.createElement('h1');
		christMass.className = "m-auto";
		christMass.textContent = "Christmass is today";
		resultCard.append(christMass);
		return
	};
	var daysLeft = Math.floor((nextCmassDate - today)/dayMilliseconds);
	resultCard.querySelector('.result').textContent = daysLeft;
}