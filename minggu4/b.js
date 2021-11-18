var DataStored = document.getElementById('DataStored');

function loadData(){
    const xhr = new XMLHttpRequest();
    xhr.onload = function() {
        DataStored.innerHTML = 'this.responseText';
    }
    xhr.open('GET', 'load_latest.php', true);
    xhr.send();
}