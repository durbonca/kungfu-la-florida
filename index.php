<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
<?php include ('mail.php'); ?>
<!--favicon-->
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="manifest" href="manifest.json">
<meta name="description" content="Academia de kung fu - La Florida, Santiago de Chile. Especializada en la tecnica del Choy Lee Fut">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    <title>Escuela de artes marciales | KungFu La Florida</title>
  </head>
  <body style="background-color: rgb(36,40,43);">

  <section>
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" style="color: white;" href="#">HOME</a></li>
                        </ul>
                    </div>
                    <div class="col-7 col-sm-4 col-md-4 col-lg-auto col-xl-auto text-right d-sm-flex align-self-end align-items-sm-start"><a href="https://wa.me/56951787063"><i class="fa fa-whatsapp" style="background-color: rgb(36,40,43);color: rgb(45,160,50);font-size: 45px;"></i></a><a target="_blank" href="https://www.instagram.com/kungfulaflorida/" style="height: 46px;margin-right: 20px;margin-left: 20px;"><i class="fa fa-instagram" style="background-color: rgb(36,40,43);color: rgb(220,35,102);font-size: 45px;margin: 0px;margin-right: 0px;margin-left: 0px;"></i></a>
                        <a
                            href="https://www.facebook.com/kungfulaflorida/" target="_blank"><i class="fa fa-facebook-square" style="background-color: rgb(36,40,43);color: rgb(59,88,151);font-size: 45px;"></i></a>
                    </div>
                </div>
            </nav>
        </section>

        <section class="container-fluid top-backgroung">      
            <div class="content row justify-content-center align-items-center" style="padding: 20px;">
              <div class="col-sm-6 col-12 justify-content-center d-flex text-center align-items-center">
                <div class="w-100 text-white">
                  <h1 class="display-3">CHOY LEE FUT</h1>
                  <h3>LA FLORIDA</h3>
                </div>
              </div>
              <div class="col-sm-3 col-12">
                <img style="margin-left: 25%; align: center; width: 50%; height: auto; border-radius: 50%;" src="/img/logo.jpg" alt="">
              </div>
            </div>
    </section>

    <video style="width: 100%; height: auto;" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/video/videoHeader.mp4" type="video/mp4">
    </video>

<section> 
    <div class="container-fluid p-3 top-backgroung">
      <div class="row mx-auto justify-content-center"> <p>Millaray 20, La Florida</p> </div>
      <div class="row mx-auto justify-content-center"> <p class="lead mb-0">Clases lun-mie-vie / 9:30-20:00-21:00</p> </div>
    </div>
<!--contact form-->

<div class="container p-3">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h1 class="text-light">Contacto</h1>
      <form class="form-horizontal" role="form" method="post" action="index.php">
      <div class="form-group">
      <strong class="text-secondary" style="color: rgb(255,255,255);margin: 5px;padding: 5px;">Nombre</strong>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" value=''>
          <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
      </div>
      <div class="form-group">
      <strong class="text-secondary" style="color: rgb(255,255,255);margin: 5px;padding: 5px;">Email</strong>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com" value=''>
          <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
      </div>
      <div class="form-group">
      <strong class="text-secondary" style="color: rgb(255,255,255);margin: 5px;padding: 5px;">Mensaje</strong>
        <div class="col-sm-10">
          <textarea class="form-control" rows="4" name="message" value=''></textarea>
          <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
        <div class="g-recaptcha" data-sitekey="6LfXu6YUAAAAALl_4POI89ZC8soIBgAf_rbG-sV8"></div>
          <?php echo "<p class='text-danger'>$errCapt</p>";?>
          </br>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <?php echo $result; ?>
        </div>
      </div>
    </form>
  </div>
  
  <div class="col-md-6 col-md-offset-3">
    <iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAz6OJtcaqlTf4Sd3ppY_dmMvz8dCvfRNg&amp;q=millaray+20%2C+la+florida&amp;zoom=14" width="100%" height="400"></iframe>
  </div>

</div>
</div>

</section>

<div class="footer-dark" style="width: 100%;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col item social"><a href="https://www.facebook.com/kungfulaflorida/"><i class="icon ion-social-facebook"></i></a><a href="https://www.instagram.com/kungfulaflorida/"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Kung Fu La Florida © 2019</p>
            </div>
        </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
