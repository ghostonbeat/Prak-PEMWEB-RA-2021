function changeTheme() {
    let option = document.getElementById("Tema");

    if (option.options[option.selectedIndex].value == "black") {
        document.body.style.background = "black";
        document.body.style.color = "white";
    } else if (option.options[option.selectedIndex].value == "white") {
        document.body.style.background = "white";
        document.body.style.color = "black";
    }
}

function changeWeather(){
	let option = document.getElementById("situasi");

	if (option.options[option.selectedIndex].value == "sunny") {
		document.getElementById("weather").innerHTML = "It is nice and sunny outside today. Wear shorts! Goto the beach, or park, and get an ice cream.";	
	}
	else if (option.options[option.selectedIndex].value == "rainy") {
		document.getElementById("weather").innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long.";

	}
	else{
		document.getElementById("weather").innerHTML = "";
	}
}

function getPaktorial (){
	let number =  document.getElementById("paktorial");

	let result = 1;

    for(let i = 1; i <= number.value; i++) {
      result *= i;
    }

    document.getElementById("hasil").innerHTML = `The factorial of ${number.value} is ${result} `;

}