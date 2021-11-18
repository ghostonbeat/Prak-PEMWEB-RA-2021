var submitButton = document.getElementById('submitData');
var DataStored = document.getElementById('DataStored');

submitButton.addEventListener('onclick', function(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            console.log('oke')
            DataStored.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'load_latest.php', ture);
    xhr.send();
});



