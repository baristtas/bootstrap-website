<!-- Bu sayfa login submit olunca açılan sayfadır -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ANSI">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login formunun yollandığı sayfa</title>
</head>
<body>
<?php
if ($_POST['username'] == 'burak' && $_POST['password'] == '1234') {
    echo '<h3>Doğru bilgileri girdin ', $_POST['username'], "<br> Sekiz saniye içinde anasayfaya yönlendirilecek.</h3>";
    echo "<script>
    setTimeout(function () {window.location.href = 'index.html'; }, 8000); </script>";
}else {
    echo "<script>
    alert('Yanlış bilgi girildi. Tamama tıklanınca login sayfasına yönlendirilecek.');
    window.location = 'login.php' </script>";
    // Alert bir javascript fonksiyonu. Bundan dolayı script etiketiyle yazıldı. Giriş bilgileri yanlışsa alert box açacak.
    // Alert box'ta ok'e basınca login sayfasına geri gideceğiz.
}

?>
</body>
</html>