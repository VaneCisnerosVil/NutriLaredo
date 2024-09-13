<?php
include ('conexion.php');

?>




<!DOCTYPE html>
<html lang="es">
   <head>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>NutriH+</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">

      <!-- icono de pestaña -->
      <link rel="icon" href="images/logo.ico">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div class="full_bg">
      <!-- header -->
      <header class="header-area">
         <div class="container">
            <div class="row d_flex">
                  <div class=" col-md-3 col-sm-3">
                     <div class="logo">
                        <a href="index.php"><img src="images/laredosss.png"></a>
                     </div>
                  </div>
                  <div class="col-md-9 col-sm-9">
                     <div class="navbar-area">
                     <nav class="site-navbar text_align_right">
                        <ul>
                           <li><a class="active" href="index.php"><b>Inicio</b></a></li>
                           <li><a href="nosotros.html"><b>Acerca de</b></a></li>
                           <li><a href="menus.html"><b>Menús</b></a></li>
                           <li><a href="nutricion.html"><b>Tips</b></a></li>
                           <li><a href="contactanos.html"><b>Contactanos</b></a></li>
                           <a class="active" href="Tabla.html"></a>
                           <!--<li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                           <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></li>-->
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
      </header>
   <!-- end header inner -->
         <!-- top -->
         <div class="slider_main">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide">
               <ol class="carousel-indicators">
                  <li data-target="#banner1" data-slide-to="0"></li>
                  <li data-target="#banner1" data-slide-to="1"></li>
                  <li data-target="#banner1" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Nutri <br>Hierro + </h1>
                                    <p>¡Ayudemos a nuestros niños a crecer fuertes y saludables con una alimentación rica en hierro! El hierro es esencial para su desarrollo, fortaleciendo su cuerpo y mente.</p>
                                    <a class="read_more" href="menus.html">Menus</a>
                                    <a class="read_more" href="nutricion.html">TIPS</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                           <figure><img src="images/imagenes del carrusel/_ece3e151-4507-4403-bba3-5ff7ca7a1fa8.jpeg" alt="imagen_1"></figure>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/_f5fe5f45-175f-467b-9f2a-4a75b900a39f.jpeg" alt="imagen 2"></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                  <div class="carousel-item ">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Nutri <br>Hierro + </h1>
                                    <p>La deficiencia de hierro en los niños es un tema importante, y es fundamental asegurarnos de que nuestros pequeños reciban suficiente hierro para su crecimiento y desarrollo</p>
                                    <a class="read_more" href="Javascript:void(0)">MENUS</a>
                                    <a class="read_more" href="Javascript:void(0)">TIPS</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/_7df96ec3-aac8-427c-a46c-37e39ae4a8c6.jpeg" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/preview.webp" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--third slide-->
                  <div class="carousel-item ">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Nutri <br>Hierro + </h1>
                                    <p>El hierro es esencial para el crecimiento y desarrollo de tu hijo. ¡Inclúyelo en su dieta diaria!</p>
                                    <a class="read_more" href="Javascript:void(0)">MENUS</a>
                                    <a class="read_more" href="Javascript:void(0)">TIPS</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/_22b1d991-10f3-451f-ae36-d4a90bb78f10.jpeg" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/_96296f05-564c-45e9-a8ef-7ae5bfd9bbd1.jpeg" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               
<!--                  <fourth slide
                  <div class="carousel-item ">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Nutri <br>Hierro + </h1>
                                    <p>El hierro fortalece el sistema inmunológico de tus hijos, ayudándolos a combatir enfermedades.</p>
                                    <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/_7df96ec3-aac8-427c-a46c-37e39ae4a8c6.jpeg" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img2.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>-->
 <!--                 <fith slide
                  <div class="carousel-item ">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Nutri <br>Hierro + </h1>
                                    <p>Una dieta balanceada con hierro asegura que tus hijos crezcan fuertes y saludables.</p>
                                    <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img1.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img2.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>-->
                  <!--sixth slide-->
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Nutri <br>Hierro + </h1>
                                    <p>Cuidar la alimentación de tus hijos hoy es garantizarles un mañana lleno de salud y vitalidad.</p>
                                    <a class="read_more" href="Javascript:void(0)">MENUS</a>
                                    <a class="read_more" href="Javascript:void(0)">TIPS</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/pixlr-image-generator-ff8f1b9f-02c3-480c-b99e-43a098060515.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/imagenes del carrusel/pixlr-image-generator-b46b4d81-2179-40f4-a8ab-1cc2a4046f79.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
 <!--                 <seventh slide
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Nutri <br>Hierro + </h1>
                                    <p>Una alimentación rica en hierro ayuda a prevenir la anemia y mantiene a tus hijos llenos de energía.</p>
                                    <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img1.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img2.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>-->
                  <!-- third slide-->
                <!--  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Spa <br>Center </h1>
                                    <p>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                    <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img1.png" alt="#"/></figure>
                                          <div class="play_icon">
                                             <a class="play-btn" href="javascript:void(0)"><img src="images/play_icon.png"></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img2.png" alt="#"/></figure>
                                          <div class="play_icon">
                                             <a class="play-btn" href="javascript:void(0)"><img src="images/play_icon.png"></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>-->
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <br>
      <br>
      <br>
      <!-- appointment -->
<div class="appointment">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <h2>REALIZA aqui tus consultas</h2>
               <p>inserta el nombre, edad o nivel de hemoglobina.</p>
            </div>
         </div>
         <div class="col-md-12">
            <div class="opciones d-flex justify-content-between">
               <button class="envio" onclick="seleccionarOpcion('edad')">Edad</button>
               <button class="envio" onclick="seleccionarOpcion('hemoglobina')">Hemoglobina</button>
            </div>
            <br>
            <form action="Tabla.php" method="GET" id="request" class="main_form">
               <div class="row">
                  <div class="col-md-12">
                     <input class="form_control" placeholder="Coloca aquí el Nombre" type="text" name="name" id="nombre" required>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="edad">
                        <select class="form_control" name="edad" id="edad" required>
                           <option value="">Seleccione un rango de edad</option>
                           <option style="color: black" value="6-8">6 a 8 meses</option>
                           <option style="color: black" value="9-11">9 a 11 meses</option>
                           <option style="color: black" value="12-23">12 a 23 meses</option>
                           <option style="color: black" value="24-35">24 a 35 meses</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="hemoglobina">
                        <input class="form_control" placeholder="Nivel de Hemoglobina" type="number" name="hemoglobina" id="hemoglobina" required>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <input type="submit" class="btn btn-success envio d-flex align-content-center justify-content-center" value="FILTRAR" >     </input>             
                   </div>
               </div>
            </form>
         </div>
     
         <style>
            .edad, .hemoglobina {
               visibility: hidden;
               opacity: 0;
               transition: visibility 0s, opacity 0.5s linear;
               height: 0;
            }
            .edad.active, .hemoglobina.active {
               visibility: visible;
               opacity: 1;
               height: auto;
            }
         </style>

         <script>
            let opcionSeleccionada = 'edad';

            function seleccionarOpcion(opcion) {
               opcionSeleccionada = opcion;
               document.querySelector('.edad').classList.toggle('active', opcion === 'edad');
               document.querySelector('.hemoglobina').classList.toggle('active', opcion === 'hemoglobina');
            }

            function almacenarDatos(event) {
               let Nombre = document.getElementById('nombre').value;
               let Edad = '';
               let HEMO = '';

               if (opcionSeleccionada === 'edad') {
                  Edad = document.getElementById('edad').value;
               } else if (opcionSeleccionada === 'hemoglobina') {
                  HEMO = document.getElementById('hemoglobina').value;
               }

               // Aquí puedes hacer lo que necesites con las variables
               console.log('Nombre:', Nombre);
               console.log('Edad:', Edad);
               console.log('HEMO:', HEMO);
               console.log('Opción seleccionada:', opcionSeleccionada);

               // No prevenimos el evento por defecto para permitir la navegación a menu.html
            }

            // Inicializar la vista
            seleccionarOpcion('edad');
         </script>
      </div>
   </div>
</div>
      <!-- end appointment -->
      <!--  footer -->
      <footer>
         <div class="footer ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row ">
                        <div class="col-lg-4 col-md-4">
                           <div class="hedingh3 text_align_left">
                              <h3>Menu</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.php">Inicio</a></li>
                                 <li><a href="nosotros.html">Acerca de</a></li>
                                 <li><a href="menus.html">Menus</a></li>
                                 <li><a href="nutricion.html">Tips</a></li>
                                 <li><a href="contactanos.html">Contactanos</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                           <div class="hedingh3 text_align_left">
                              <h3>Enlaces de interes</h3>
                              <ul class="menu_footer">
                                 <ul class="menu_footer">
                                       <li><a href="https://anemia.ins.gob.pe/suplementacion-con-micronutrientes-para-ninos-de-6-35-meses-de-edad">Micronutrientres para Niños</a></li>
                                       <li><a href="https://www.sefap.org/2020/04/22/anemia-aportando-un-poco-de-claridad-a-tantas-cifras-y-unidades/">Anemia y sus tipos</a></li>
                                       <li><a href="https://www.essalud.gob.pe/essalud-la-libertad-inauguro-consultorios-contra-anemia-en-establecimientos-albrecht-el-porvenir-y-laredo/">Consultorios de Anemia</a></li>
                                       <li><a href="https://repositorio.ucv.edu.pe/handle/20.500.12692/9833">Patrones alimenticios y su relacion con la anemia</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                           <div class="hedingh3  text_align_left">
                              <h3>BOLETIN INFORMATIVO</h3>
                              <ul class="top_infomation">
                                 <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    051-952611002
                                 </li>
                                 <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="Javascript:void(0)">Nutrihierro2024@gmail.com</a>
                                 </li>
                              </ul>
                              <form id="colof" class="form_subscri"></form>
                                 <button class="subsci_btn d-flex align-items-center justify-content-center"><a href="contactanos.html">Contactanos</a></button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-5"></div>
                        <div class="follow text_align_center">
                           <ul class="social_icon ">
                              <li><a href="https://www.facebook.com/profile.php?id=61565367856092&mibextid=ZbWKwL"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="https://vm.tiktok.com/ZMhe4jPJn/"><i class="bi bi-tiktok fa" aria-hidden="true"></i></a></li>
                              <li><a href=" https://www.instagram.com/nutrihierroplus?igsh=MWZ1ZWdhNnZibjB3dg=="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        </div>
                     <div class="col-md-12">
                        <p>© 2024 Derechos reservados. IESTP LAREDO</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/custom.js"></script>
   
      <!-- Api para agregar el icono de whatsapp -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://api.whatsapp.com/send?phone=51952611002&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20NutriH%2B." class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
      </a>
      <!-- Fin de la API-->

      <!-- Enlace del Chatbot-->
      <script>
         window.addEventListener('mouseover', initLandbot, { once: true });
         window.addEventListener('touchstart', initLandbot, { once: true });
         var myLandbot;
         function initLandbot() {
           if (!myLandbot) {
             var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
             s.addEventListener('load', function() {
               var myLandbot = new Landbot.Livechat({
                 configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2601659-WRMUG5OEVK148VVQ/index.json',
               });
             });
             s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
             var x = document.getElementsByTagName('script')[0];
             x.parentNode.insertBefore(s, x);
           }
         }
      </script>
      <!--fin del enace chatbot-->

   </body>
</html>
