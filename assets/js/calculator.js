function calculate(){
	const ft1 = +input.get('value_1_ft').optional().number().val();
	const ft2 = +input.get('value_2_ft').optional().number().val();
	const in1 = +input.get('value_1_in').optional().number().val();
	const in2 = +input.get('value_2_in').optional().number().val();
	const operation = input.get('operation').raw();
	if(!input.valid()) return;

	const totalInches1 = ft1 * 12 + in1;
	const totalInches2 = ft2 * 12 + in2;
	let result = math[operation](totalInches1, totalInches2);
	if(totalInches1 === totalInches2 && operation === 'divide') {
		output.val(1).set('result');
	}
	else {
		output.val(feetAndInchesToInches(result)).set('result');
	}
}

function feetAndInchesToInches(inches){
	const ft = Math.floor(inches / 12);
	const inch = inches % 12;
	if(ft === 0) return `${inch} in`;
	return `${ft} ft ${roundTo(inch)} in`;
}
