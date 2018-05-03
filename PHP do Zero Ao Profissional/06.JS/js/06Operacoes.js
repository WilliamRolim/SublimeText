function somar(){
	var campo1 = parseFloat(document.getElementById("campo1").value);
	var campo2 = parseFloat(document.getElementById("campo2").value);

	var soma = campo1 + campo2;
	var sub = campo1 - campo2;
	var mult = campo1 * campo2;
	var div = campo1 / campo2;

	alert("SOMA: " + soma + "\nSubtração: " + sub + 
		"\nMultiplicação: " + mult + "\nDivisão: " + div);
}