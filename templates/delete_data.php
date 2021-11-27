<?php

require "db_func.php";

$id = $_GET["id"];

Delete_Data($id);

if (mysqli_affected_rows($db) > 0 ){
    echo "
        <script>
            alert('Data deleted successfully!');
            document.location.href = 'showData.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data failed to delete!');
            document.location.href = 'showData.php';
        </script>
    ";
}

?>