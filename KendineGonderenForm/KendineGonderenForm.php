<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST["ad"];
    $email = $_POST["email"];

    echo "<h2>Gelen Veriler:</h2>";
    echo "Ad: $ad <br>";
    echo "E-posta: $email <br><hr>";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kendine Gönderen Form</title>
</head>
<body>

<h2>Form Bilgileri</h2>
<form action="" method="post">
    <label for="ad">Ad:</label>
    <input type="text" id="ad" name="ad"><br><br>

    <label for="email">E-posta:</label>
    <input type="email" id="email" name="email"><br><br>

    <input type="submit" value="Gönder">
</form>

</body>
</html>
