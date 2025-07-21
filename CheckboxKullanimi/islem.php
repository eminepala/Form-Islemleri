<?php
if (isset($_GET['hobiler'])) {
    $hobiler = $_GET['hobiler'];

    foreach ($hobiler as $hob) {
        echo $hob . "<br>";
    }
}
else
{
    echo "Hiçbir hobi seçilmedi.";
}
?>
