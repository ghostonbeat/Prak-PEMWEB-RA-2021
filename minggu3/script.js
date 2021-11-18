// //Markus Togi Fedrian Rivaldi Sinaga
// //118140337

const tampil = document.getElementById('tampilString');
const tampilFaktorial = document.getElementById('tampilFaktorial');

function pilihanElemen(){
    let elemen = document.getElementById('elemen').value;
    if (elemen === 'api'){
        tampil.innerHTML = '<h3>api</h3>panas dan cahaya yang berasal dari sesuatu yang terbakar';
    }else if (elemen === 'air'){
        tampil.innerHTML = '<h3>air</h3>cairan jernih tidak berwarna, tidak berasa, dan tidak berbau yang diperlukan dalam kehidupan makhluk hidup';
    }else if (elemen === 'tanah'){
        tampil.innerHTML = '<h3>tanah</h3>permukaan bumi atau lapisan bumi yang di atas sekali';
    }else {
        tampil.innerHTML = '<h3>angin</h3>gerakan udara dari daerah yang bertekanan tinggi ke daerah yang bertekanan rendah';
    }
}

function hitungFaktorial(){
    let bilangan = document.getElementById('bilangan').value;
    let faktorial = 1;
    for (let i=1; i<=bilangan; i++){
        faktorial*=i;
    }
    if(bilangan === null || bilangan < 1){
        alert('Masukkan bilangan lebih besar dari 0!')
    }else{
        let hasil = 'Hasil faktorial dari ' + bilangan + ' adalah ' + faktorial;
        tampilFaktorial.innerHTML = '<h2>'+hasil+'</h2>';
        tampilFaktorial.style.backgroundColor ='white';
    }
}

function modeGelap(){
    document.body.style.backgroundImage = "url('media/double-bubble-dark.png')"
    document.body.style.color = "white";
    document.getElementById('container').style.backgroundColor = "black"
}