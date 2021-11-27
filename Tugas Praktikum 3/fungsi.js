function theme() {
    var selectBox = document.getElementById("theme");
    var value = selectBox.options[selectBox.selectedIndex].value;

    if (value == "White") {
        document.body.style.background = "white";
        document.body.style.color = "black";
    }
    else if (value == "Black") {
        document.body.style.background = "black";
        document.body.style.color = "white";
    }
    else if (value == "Green") {
        document.body.style.background = "green";
        document.body.style.color = "yellow"
    }
}

function weather() {
    var selectBox = document.getElementById("weather");
    var value = selectBox.options[selectBox.selectedIndex].value;
    var situation = document.getElementById("note");

    if (value == "Sunny") {
        situation.innerText = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream."
    }
    else if (value == "Rainy") {
        situation.innerText = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long."
    }
}

function factorial() {
    var x = document.getElementById("factorial").value;
    var y = x;
    var hasil = document.getElementById("hasil");

    for (i = y - 1; i > 1; i--) {
        y *= i;
    }
    hasil.innerText = "The factorial of " + x + " is " + y;
}