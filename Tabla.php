<?php
include ('conexion.php');


$edad = $_GET['edad'];

$comida = $con->query("SELECT * FROM comidas where LIKE '%$edad%'");

while ($row = $comida->fetch_assoc()) {
     $tmp = $row;
    // array_push($res, $tmp);

 //echo $row['']
}

$con->close();
?>


<!DOCTYPE html>
<html lang="es">
   <head>
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
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <style>
        /*estilos para la tabla*/
        tablacomida th {
            background-color: #3D6DFA;
            color: black;
        }
    </style>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
     <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">

   </head>
   <!-- body -->
   <body class="main-layout inner_page blog_page">
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
                        <nav class="site-navbar">
                           <ul>
                              <li><a href="index.php"><b>Inicio</b></a></li>
                              <li><a href="nosotros.html"><b>Acerca de</b></a></li>
                              <li><a href="menus.html"><b>Menús</b></a></li>
                              <li><a class="active" href="nutricion.html"><b>Tips</b></a></li>
                              <li><a href="contactanos.html"><b>Contactanos</b></a></li>
                              <a class="active" href="Tabla.php"></a>
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
      <!-- blog -->
      <div class="blog">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Generador de menú semanal</h2>
                        <p>&nbsp;&nbsp;<br>Este enfoque dietético no solo promueve una adecuada ingesta de hierro, sino que también considera la interacción de nutrientes que favorecen su absorción, contribuyendo de manera integral al desarrollo óptimo del niño. Aca le presentamos una propuesta de menú semanal:</p>
                    </div>
                </div>
            </div>
            <div>
                <table id="tablacomidas"  style="width:70%">
                <thead >
                    <tr class="tableprimary ">
                       <td><b><center>TURNOS / HORARIO</center></b></td>
                       <td><b><center>NOMBRE DE LA RECETA</center></b></td>
                       <td><b><center>RANGO DE EDAD</center></b></td>
                    </tr>
                </thead>   
                <?php
                foreach ($comida as $c) {
                    ?>
                    <tr>
                        <td >
                            <?php echo $c['turno']; ?>
                        </td>
                        <td >
                            <?php echo $c['nombre']; ?>
                        </td>
                        <td>
                            <?php echo $c['edad']; ?>
                        </td>
                    </tr>
                <?php } ?>
                </table>
            </div>
        </div>
<br>
<br>
      <!-- end blog -->
      <!--  footer -->
      <footer>
         <div class="footer ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row ">
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3 text_align_left">
                              <h3>Menu</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.php">Inicio</a></li>
                                 <li><a href="nosotros.html">Acerca de</a></li>
                                 <li><a href="menus.html">Menus</a></li>
                                 <li><a href="nutricion.html">Tips</a></li>
                                 <li><a href="contactanos.html">Contactanos</a></li>
                                 <li><h3>Enlaces de interes</h3></li>
                                 <br>
                                 <li><a href="https://anemia.ins.gob.pe/suplementacion-con-micronutrientes-para-ninos-de-6-35-meses-de-edad">micronutrientres para niños</a></li>
                                 <li><a href="https://www.sefap.org/2020/04/22/anemia-aportando-un-poco-de-claridad-a-tantas-cifras-y-unidades/">anemia y sus tipos</a></li>
                                 <li><a href="https://www.essalud.gob.pe/essalud-la-libertad-inauguro-consultorios-contra-anemia-en-establecimientos-albrecht-el-porvenir-y-laredo/">consultorios de anemia</a></li>
                                 <li><a href="https://repositorio.ucv.edu.pe/handle/20.500.12692/9833">Patrones alimenticios y su relacion con la anemia</a></li>
                                 
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="hedingh3  text_align_left">
                              <h3>BOLETIN INFORMATIVO</h3>
                              <form id="colof" class="form_subscri">
                                 <input class="newsl" placeholder="Email" type="text" name="Email">
                                 <button class="subsci_btn d-flex align-items-center justify-content-center">Subscribete</button>
                              </form>
                              <ul class="top_infomation">
                                 <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    051-952611002
                                 </li>
                                 <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="Javascript:void(0)">Nutrihierro2024@gmail.com</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2024 Derechos reservados. IESTP LAREDO</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
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



      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

<script>
    let temp = $("#btn2").clone();
    $("#btn2").click(function(){
        $("#btn2").after(temp);
    });

    $(document).ready(function(){
        var table = $('#tabla22').DataTable({
            //orderCellsTop: false,
          //  fixedHeader: true
        });
     //Creamos una fila en el head de la tabla y lo clonamos para cada columna
        $('#example22 thead tr').clone(true).appendTo( '#example22 thead' );

        $('#example22 thead tr:eq(1) th').each( function (i) {
            var title = $(this).text(); //es el nombre de la columna
            $(this).html( '<input type="text" placeholder="Buscar...'+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    });
    
       $(document).ready(function(){
        var table = $('#tablacomidas').DataTable({
            //orderCellsTop: false,
          //  fixedHeader: true
        });

        //Creamos una fila en el head de la tabla y lo clonamos para cada columna
         $('#example23 thead tr').clone(true).appendTo( '#example23 thead' );
         
        $('#example23 thead tr:eq(1) th').each( function (i) {
            var title = $(this).text(); //es el nombre de la columna
            $(this).html( '<input type="text" placeholder="Buscar...'+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    });
