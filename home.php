<?php 
session_start();
if(!isset($_SESSION["userID"])){
    header("Location: login_required.php");
    die();
}

require_once('app/db/Koneksi.php');

$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <svg width="60" height="60" class="add-new">
        <a href="new.php">
            <circle cx="30" cy="30" r="25"  fill="#F1CA7F" />
            <line x1="30" y1="10" x2="30" y2="50" style="stroke:#F6F1EE; stroke-width:4" />
            <line x1="10" y1="30" x2="50" y2="30" style="stroke:#F6F1EE; stroke-width:4" />
        </a>
    </svg>
    <header>
        <h1>MyNotes</h1>  
    </header>
    <div class="content">
        <main>
            <?php foreach ($posts as $item) : ?>
                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id'] ?>" onclick="addHist(this)">
                        <div class="card-container">
                            <h3 class="card-header"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                            <div class="card-footer">
                                <a href="delete.php?id=<?= $item['id']?>">Delete</a> | 
                                <a href="edit.php?id=<?= $item['id']?>">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck">

            </div>
        </aside>
    </div>
    <?php
    if(!isset($_COOKIE["tolak"]) || $_COOKIE["tolak"] !== 'yes'){
        echo '<script src="./assets/iklan.js"></script>';
    }
    ?>

    <script>
        function histRender(){
            const history_buck = document.getElementById("history_buck");
            let template = "";
            if (localStorage.arrOfHyst !== null){
                let histories = JSON.parse(localStorage.arrOfHyst);
                histories = [...new Set(histories)];

                histories.forEach(item => {
                    const hist = JSON.parse(localStorage.getItem(item));

                    template += `
                    <div style="border: solid 1px gray; margin:2px">
                        <h5 style="margin:0">${hist.judul}</h5>
                    </div>
                    `;
                });

                history_buck.innerHTML = template;
            }
        }
        histRender();

        function addHist(el){
            const id = el.getAttribute('data-id');
            const judul = el.getElementsByClassName('card-header')[0].innerText;
            const isi = el.getElementsByClassName('card-body')[0].innerText;

            const histItem = {
                id: id, judul: judul, isi: isi
            }

            if(localStorage.getItem('arrOfHyst') !== null) {
                let histories = JSON.parse(localStorage.arrOfHyst);
                histories.push('hyst' + id);
                histories = [...new Set(histories)];

                localStorage.setItem('arrOfHyst',JSON.stringify(histories));
            }else{
                localStorage.setItem('arrOfHyst',JSON.stringify(['hyst' + id]));
            }
            localStorage.setItem('hyst' + id, JSON.stringify(histItem));
            histRender();
        }


    </script>
</body>

</html>
