<?php 
  $file = basename(_FILE);
  /*$array = array(
      'Recursos Financieros' => 'rh.php',
      'Institución' => 'institucion.php',
      'Recursos Humanos' => 'recursoshumanos.php'
    );

  if ($file==$array['rh.php']) {
    $res = "Recursos Financieros";
  }*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>SUAP</title>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <meta name="description" content="Freewall demo fit zone" />
  <meta name="keywords" content="javascript, dynamic, grid, layout, jquery plugin, fit zone"/>
  <!--Style Css-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/ace.min.css" />
  <link rel="stylesheet" href="css/ace-responsive.min.css" />
  <link rel="stylesheet" href="css/ace-skins.min.css" />
  <link href="css/fonts/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/metro.css">
  <link rel="stylesheet" href="css/bread.css">
  <!--end Style Css-->
  <!--js-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/freewall.js"></script>
  <!--end js-->
</head>

<body class="container">
  <div class="layout">
    <!--Aqui inicia la barra-->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a href="index.php" class="brand">
            <small>
              <i class="icon-bar-chart"></i>
              <b>SUAP</b>
            </small>
          </a><!--/.brand-->

          <ul class="nav ace-nav pull-right">


            <li class="light-blue">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <span class="user-info">
                  <medium> Inicia Sesión</medium>

                </span>

                <i class="icon-caret-down"></i>
              </a>

              <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                <li>
                  <a href="login2.php">
                    <i class="icon-user"></i>
                    Iniciar Sesión
                  </a>
                </li>
                <li>
                  <a href="logout.php">
                    <i class="icon-cog"></i>
                    Configuración
                  </a>
                </li>

                <li>
                  <a href="nuevo_usuario.php">
                    <i class="icon-list"></i>
                    Nuevo Usuario
                  </a>
                </li>

              </ul>
            </li>
          </ul><!--/.ace-nav-->
        </div><!--/.container-fluid-->
      </div>
      </div>
      <?php
      $gato = "<a href='' title=''>".$_POST['chat']."</a>";
      include "barras.php";
      ?>
      <!--/.navbar-inner--><br><br><br>
      <!--Aqui termina la barra-->
      <!--Inician el menu tipo Windows 8, cada div con id="freewall" es un modulo-->
      <div id="freewall" class="free-wall">
        <a href="rh.php">
          <div class='brick s2x2' style='background-color: rgb(52, 152, 219)' data-fixSize=true>        
            <div class='cover'>
              <h1><br><br>Financieros</h1>
              <i class="fa fa-briefcase fa-5x"></i>
            </div>
          </div>
        </a>
        <a href="institucion.php">
          <div class='brick s2x1' style='background-color: rgb(46, 204, 113)'>
            <div class='cover'>
              <h1>Institución</h1>
              <i class="fa fa-institution fa-5x"></i>
            </div>
          </div>
        </a>  
        <a href="recursoshumanos.php">
        <div class='brick s3x1' style='background-color: rgb(26, 188, 156)'>
            <div class='cover'>
              <h1>Recursos Humanos</h1>
              <i class="fa fa-male fa-5x"></i><i class="fa fa-male fa-5x"></i><i class="fa fa-male fa-5x"></i>
            </div>
         </div>
        </a>
        <a href="pr1.php">
        <div class='brick s3x2' style='background-color: rgb(241, 196, 15)'>
          <div class='cover'>
            <h1><br><br>Proyecto 1</h1>
            <!--<h1><br><br>Proyecto 1</h1>-->
            <i class="fa fa-file-text fa-5x"></i>
          </div>
        </div>
        </a>
        <div class='brick s1x1' style='background-color: rgb(41, 128, 185)'>
          <div class='cover'>
            <h1>s1x1</h1>
            <i class="fa fa-cog fa-5x"></i>
          </div>
        </div>
        <div class='brick s2x1' style='background-color: rgb(230, 126, 34)'>
          <div class='cover'>
            <h1>s2x1</h1>
            <i class="fa fa-line-chart fa-5x"></i>
          </div>
        </div>
        <div class='brick s2x1' style='background-color: rgb(231, 76, 60)' data-fixSize=true>
          <div class='cover'>
            <h1>s2x1</h1>
            <i class="fa fa-dollar fa-5x"></i>
          </div>
        </div>
        <div class='brick s1x1' style='background-color: rgb(155, 89, 182)'>
          <div class='cover'>
            <h1>s1x1</h1>
            <i class="fa fa-book fa-5x"></i>
          </div>
        </div>
        <div class='brick s2x1' style='background-color: rgb(231, 76, 60)'>
          <div class='cover'>
            <h1>s2x1</h1>
            <i class="fa fa-bar-chart fa-5x"></i>
          </div>
        </div>

        <div class='brick s1x1' style='background-color: rgb(41, 128, 185)'>
          <div class='cover'>
            <h1>s1x1</h1>
            <i class="fa fa-user fa-5x"></i>
          </div>
        </div>

      </div>
    </div>
    <div class="">
    </div>
    <script type="text/javascript">
      var temp = "<div class='brick' style='width:{width}px; height: {height}px;background-color: {color}'><div class='cover'>{num}</div></div>";
      var colour = [
      "rgb(26, 188, 156)",
      "rgb(46, 204, 113)",
      "rgb(52, 152, 219)",
      "rgb(241, 196, 15)",
      "rgb(41, 128, 185)",
      "rgb(230, 126, 34)",
      "rgb(231, 76, 60)",
      "rgb(155, 89, 182)"
      ];

      /*var w = 1, h = 1, html = '', color = '', limitItem = 10;
      for (var i = 0; i < limitItem; ++i) {
        h = 1 + 3 * Math.random() << 0;
        w = 1 + 3 * Math.random() << 0;
        color = colour[colour.length * Math.random() << 0];
        html += temp.replace(/\{height\}/g, h*150).replace(/\{width\}/g, w*150).replace("{color}", color).replace("{num}", i + 1);
      }
      $("#freewall").append(html);*/


      $(function() {
        var wall = new freewall("#freewall");
        wall.reset({
          selector: '.brick',
          animate: true,
          cellW: 160,
          cellH: 160,
          delay: 30,
          //draggable: true,
          onResize: function() {
            wall.refresh($(window).width() - 30, $(window).height() - 30);
            //wall.fitZone($(window).width() - 30 , $(window).height() - 30);
            wall.fitWidth();
          }
        });
        // calculator width and height for IE7;
        wall.fillHoles();
        wall.fitWidth();
        //wall.fitZone($(window).width() - 30 , $(window).height() - 30);
        //wall.fitHeight();
      });
    </script>
  </body>
  </html>