<!-- Bu sayfa login tuşuna tıklanınca açılan sayfadır -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login formunun yollandığı sayfa</title>
</head>
<body>
<?php
if (isset($_POST['login']) && !empty($_POST['username']) 
&& !empty($_POST['password'])) {
if ($_POST['username'] == 'burak' && 
    $_POST['password'] == '1234') {
    echo '<h3>Doğru bilgileri girdin ', $_POST['username'], "<br> Sekiz saniye içinde anasayfaya yönlendirilecek.</h3>";
    header( "refresh:8;url=index.html" );
}else {
    echo "<script>
    alert('Yanlış bilgi girildi. Tamama tıklanınca login sayfasına yönlendirilecek.');
    window.location = 'login.php' </script>"; 
}
}?>
</body>
</html>