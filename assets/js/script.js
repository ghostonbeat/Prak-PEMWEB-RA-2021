//HEADER
let Web_Logo = document.getElementById("web-logo");
console.log(Web_Logo);

Web_Logo.addEventListener("click",function(){
    location.href = "index.php";
});

//SUBHEADER PRODUCT LOGO
//Mouse Event -> 
let Logo_Elements_ID = [];
let A = document.getElementsByClassName("product-logo-box cf");
let B = document.getElementsByClassName("product-preview");

for (let i=0; i<A.length; i++){
    Logo_Elements_ID.push(A[i].id);
    document.getElementById(Logo_Elements_ID[i]).addEventListener("mouseenter", function(){
        B[i].innerHTML = "Under construction";
    });
    document.getElementById(Logo_Elements_ID[i]).addEventListener("mouseleave", function(){
        B[i].innerHTML = "";
    });
}


//JS FETCH LOAD FORM 
let OperationField = document.getElementById("operation");

function loadInputForm(id){
    
    fetch('inputform.php')
    .then(data => data.text())
    .then(html => OperationField.innerHTML = html);
}
function AbortInput(){
    OperationField.innerHTML = "";
}

