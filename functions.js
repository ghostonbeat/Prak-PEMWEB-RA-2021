let valueTotal = 0;
let valueTotalField = document.getElementById('valueTotal');

let valField_Mangga = document.getElementById('value_Mangga');
let val_Mangga = parseInt(document.getElementById('value_Mangga').value);
let currentPrice_Mangga = document.getElementById('currentPrice_Mangga');
let mangga_count = document.getElementById('mangga_count');
let subTotal_Mangga = document.getElementById('subTotal_Mangga');
function minusValue_Mangga(){
    if (val_Mangga>0){
        val_Mangga -= 1;
        valField_Mangga.value          = val_Mangga;
        mangga_count.innerHTML         = val_Mangga;
        currentPrice_Mangga.innerHTML  = val_Mangga * 15000;
        subTotal_Mangga.innerHTML      = val_Mangga * 15000;
        valueTotal -= 15000;
        valueTotalField.innerHTML = valueTotal;
    }
}
function plusValue_Mangga(){
    val_Mangga +=1;
    valField_Mangga.value         = val_Mangga;
    mangga_count.innerHTML        = val_Mangga;
    currentPrice_Mangga.innerHTML = val_Mangga * 15000;
    subTotal_Mangga.innerHTML     = val_Mangga * 15000;
    valueTotal += 15000;
    valueTotalField.innerHTML = valueTotal;
}

let valField_Jambu = document.getElementById('value_Jambu');
let val_Jambu = parseInt(document.getElementById('value_Jambu').value);
let currentPrice_Jambu = document.getElementById('currentPrice_Jambu');
let jambu_count = document.getElementById('jambu_count');
let subTotal_Jambu = document.getElementById('subTotal_Jambu');
function minusValue_Jambu(){
    if (val_Jambu>0){
        val_Jambu -= 1;
        valField_Jambu.value          = val_Jambu;
        jambu_count.innerHTML         = val_Jambu;
        currentPrice_Jambu.innerHTML  = val_Jambu * 13000;
        subTotal_Jambu.innerHTML      = val_Jambu * 13000;
        valueTotal -= 13000;
        valueTotalField.innerHTML = valueTotal;
    }
}
function plusValue_Jambu(){
    val_Jambu +=1;
    valField_Jambu.value         = val_Jambu;
    jambu_count.innerHTML        = val_Jambu;
    currentPrice_Jambu.innerHTML = val_Jambu * 13000;
    subTotal_Jambu.innerHTML     = val_Jambu * 13000;
    valueTotal += 13000;
    valueTotalField.innerHTML = valueTotal;
}

let valField_Salak = document.getElementById('value_Salak');
let val_Salak = parseInt(document.getElementById('value_Salak').value);
let currentPrice_Salak = document.getElementById('currentPrice_Salak');
let salak_count = document.getElementById('salak_count');
let subTotal_Salak = document.getElementById('subTotal_Salak');
function minusValue_Salak(){
    if (val_Salak>0){
        val_Salak -= 1;
        valField_Salak.value         = val_Salak;
        salak_count.innerHTML        = val_Salak;
        currentPrice_Salak.innerHTML = val_Salak * 10000;
        subTotal_Salak.innerHTML     = val_Salak * 10000;
        valueTotal -= 10000;
        valueTotalField.innerHTML = valueTotal;
    }
}
function plusValue_Salak(){
    val_Salak +=1;
    valField_Salak.value         = val_Salak;
    salak_count.innerHTML        = val_Salak;
    currentPrice_Salak.innerHTML = val_Salak * 10000;
    subTotal_Salak.innerHTML     = val_Salak * 10000;
    valueTotal += 10000;
    valueTotalField.innerHTML = valueTotal;
}