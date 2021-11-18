function operasiData(){
    let SUM =  document.getElementById('SUM');
    let MIN =  document.getElementById('MIN');
    let MUL =  document.getElementById('MUL');
    let DIV =  document.getElementById('DIV');

    let bil1    = parseInt(document.getElementById('bilangan1').value);
    let bil2    = parseInt(document.getElementById('bilangan2').value);

    let hasilJumlah = bil1 + bil2;
    let hasilKurang = bil1 - bil2;
    let hasilKali   = bil1 * bil2;
    let hasilBagi   = bil1 / bil2;

    SUM.innerHTML = '<h3>Penjumlahan</h3><h3>'+bil1+" + "+bil2+" = "+hasilJumlah+'</h3>';
    MIN.innerHTML = '<h3>Pengurangan</h3><h3>'+bil1+" - "+bil2+" = "+hasilKurang+'</h3>';
    MUL.innerHTML = '<h3>Perkalian  </h3><h3>'+bil1+" x "+bil2+" = "+hasilKali  +'</h3>';
    DIV.innerHTML = '<h3>Pembagian  </h3><h3>'+bil1+" / "+bil2+" = "+hasilBagi  +'</h3>';
}

const data = [
    'larine','aduh','qifuat','toda',
    'anevi','samid','kifuat','cikalang',
    'pororo','samsudin','marco','lukiyem'
];

let preSort  = document.getElementById('preSort');

let text = '';
for (let i=0; i<data.length; i++){
    text += data[i] + ' ';
}

preSort.innerHTML = text;

function pengurutKata(){
    var tempData = data;
    tempData.sort();
    let sortedText = '';
    for (let i=0; i<tempData.length; i++){
        sortedText += tempData[i] + " ";
    }
    postSort.innerHTML = 'Berikut adalah data setelah diurutkan :';
    SUM.innerHTML      = sortedText;
}

function bilanganPrima(){
    let SUM     = document.getElementById('SUM');
    let title   = document.getElementById('userInput');
    
    let batas   = parseInt(document.getElementById('batas').value);

    if (batas % 1 !== 0 || batas <0){
        title.innerHTML = 'Masukkan bilangan lebih besar dari 1!';
        SUM.innerHTML = '';
    }else{
        title.innerHTML = 'Berikut bilangan prima antara 1 sampai '+batas+' :';
        
        const allPrimes = [];
        
        for (let angka=2; angka<=batas; angka++){
            let jumPembagi = 0;
            for(let pembagi=1; pembagi<=angka; pembagi++){
                if (angka%pembagi === 0){
                    jumPembagi++;
                }
            }
            if (jumPembagi <= 2){
                allPrimes[allPrimes.length] = angka;
            }        
        }

        if (allPrimes.length < 1){
            SUM.innerHTML= '<h3>Tidak ada</h3>'
        }else{
            let hasil = '';
            for (let i=0; i<allPrimes.length-1; i++){
                hasil += String(allPrimes[i]) + ", ";
            }
            hasil += allPrimes[allPrimes.length-1];

            SUM.innerHTML = '<h3>'+hasil+'</h3>';
        }
    }
}