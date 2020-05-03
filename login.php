<!-- Bu sayfa login yaptığımız sayfadır -->
<html lang="en">

<head>
   <title>Login</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
   <!-- navbar start -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="./index.html">Burak Bağatarhan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="./index.html">Hakkımda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
               <a class="nav-link" href="./ozgecmis.html">Özgeçmiş<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="./sehrim.html">Sivas</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="./mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="./iletisim.html">İletişim</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="./login.php">Giriş</a>
            </li>
         </ul>
      </div>
   </nav>
   <!-- navbar end -->
   <!-- login form start -->
   <div class="container">
      <div class="row">
         <div class="col text-center">
            <h4 class="mt-4 mb-4">Kullanıcı Adınızı ve Şifreyi giriniz</h4>
            <form role="form" action="logTrue.html" method="post">
               <input type="text" name="username" placeholder="Kullanıcı adı = burak" class="mb-1" required ></br>
               <input type="password" name="password" placeholder="Şifre = 1234" class="mb-1" required ><br>
               <button class="btn btn-primary " type="submit" name="login">Login</button>
            </form>
         </div>
      </div>
   </div>
   <!-- login form end -->
   <!-- footer start -->
   <div id="footer"></div>
   <!-- footer end -->
   <script src="./footer.js"></script>
   <script src="js/jquery-3.4.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>

</html>