<?php 
function contar_usuarios(){
    $archivo = 'contador.txt';
    if (file_exists($archivo)) {
        $cuenta = file_get_contents($archivo) + 1;
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    }else {
        file_put_contents($archivo, 1);
        return 1;
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135046744-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-135046744-1');
      </script>
        <title>Jakson Casas | Developer</title>
         <meta name="description" content="Jakson Casas student of systems engineering at Universidad Nacional del Callao." />
      <meta name="keywords" content="Jakson Casas, Software Developer, Product Designer, GCP, data engineer, Google Local Guide, Crowdsource, Lima, Peru, cesar jakson sanchez casas" />
      <meta property="og:locale" content="es_PE"/>
      <meta property="og:title" content="Jakson Casas | Developer"/>
      <meta name="author" content="Jakson Casas" />
        <link rel="stylesheet" href="assets/css/styles.css">
        <meta name="theme-color" content="#000000"/>
         <link rel="icon" href="https://fotos.subefotos.com/42d800aad1bca8fc10891470f18cb390o.png" />
    <script type="text/javascript">
         var device = navigator.userAgent
         if (device.match(/Iphone/i) 
         || device.match(/Ipod/i)
         || device.match(/Android/i)
         || device.match(/J2ME/i)
         || device.match(/BlackBerry/i)
         || device.match(/iPhone|iPad|iPod/i)
         || device.match(/Opera Mini/i)
         || device.match(/IEMobile/i)
         || device.match(/Mobile/i)
         || device.match(/Windows Phone/i)
         || device.match(/windows mobile/i)
         || device.match(/windows ce/i)
         || device.match(/webOS/i)
         || device.match(/palm/i)
         || device.match(/bada/i)
         || device.match(/series60/i)
         || device.match(/nokia/i)
         || device.match(/symbian/i)
         || device.match(/HTC/i))
         { 
         window.location = "m/index.html";
        }
</script>
    </head>
    <body>
    <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
       <script>      
                  $(window).load(function() { // makes sure the whole site is loaded
                  $('#status').fadeOut(); // will first fade out the loading animation
                  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                  $('body').delay(350).css({
                    'overflow': 'visible'
                  });
                })
                </script>
        <!-- OVERLAY -->
        <div class="overlay first"></div>
        <div class="overlay second"></div>
        <div class="overlay third"></div>

        <!-- HEADER -->
        <header class="l-header" style="padding-top: 10px;">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"> <img src="assets/img/LogoJC59.png" alt="JaksonCasas" width="80" height="80" class="icon-blakc" ></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="projects.html" class="nav__link">Projects</a></li>
                        <li class="nav__item"><a href="https://jaksoncasasdev.blogspot.com/" class="nav__link">Blog</a></li>
                        <li class="nav__item"><a  href="mailto:jaksoncasas@gmail.com" class="nav__link" id="contacto">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>
            </nav>
        </header>

        <!-- MAIN -->
        <main class="l-main bd-grid">
            <div class="home">
                <div class="home__information">
                    <span class="home__pressent anime-text" style="color: #3b3b3b;">Hello, My name is</span>
                    <h1 class="home__title anime-text">Jakson Casas</h1>
                    <span class="home__skill anime-text" style="font-size: 20px">System Engineering Student</span>
                    
                    <div>
                        <a href="#" class="home__button anime-text">RESUME 📄</a>
                    </div>
                </div>

                <div class="home__img">
                    <img src="assets/img/img.png" alt="">
                </div>
                
                <div class="home__social">
                     <a href="https://www.linkedin.com/in/jakson-casas-ba6a1318b/"><ion-icon name="logo-linkedin" class="home__social-icon"></ion-icon></a>
                    <a href="https://github.com/JaksonCasas19"><ion-icon name="logo-github" class="home__social-icon"></ion-icon></a>
                    <a href="https://twitter.com/Jakson_casas"><ion-icon name="logo-twitter" class="home__social-icon"></ion-icon></a>
                </div>

            </div>
               <footer class="nav__item"><p id="foote">Made by Jakson Casas ©2020 - <?php echo contar_usuarios(); ?> Views   </p> </footer>
        </main>


        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

        <!-- MAIN -->
        <script src="assets/js/main.js"></script>
    
        <!-- ICONS -->
        <script  type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
        <script>
   
    window.onload = function () {
      document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
      }, false);
      document.addEventListener("keydown", function (e) {
        //document.onkeydown = function(e) {
        // "I" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
          disabledEvent(e);
        }
        // "J" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
          disabledEvent(e);
        }
        // "S" key + macOS
        if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
          disabledEvent(e);
        }
        // "U" key
        if (e.ctrlKey && e.keyCode == 85) {
          disabledEvent(e);
        }
        // "F12" key
        if (event.keyCode == 123) {
          disabledEvent(e);
        }
      }, false);
      function disabledEvent(e) {
        if (e.stopPropagation) {
          e.stopPropagation();
        } else if (window.event) {
          window.event.cancelBubble = true;
        }
        e.preventDefault();
        return false;
      }
    }; 

</script>

    </body>
</html>