<?php
if(!empty($_GET['ad']) && !empty($_GET['soyad']))
{
    echo "Hosgeldiniz...".$_GET['ad']." ".$_GET['soyad'];
}
else
{
    echo "Lutfen Tum Degerleri Giriniz...";
}


?>