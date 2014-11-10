<!DOCTYPE html>
<html>
<head>
  <title>SUAP</title>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <meta name="description" content="Freewall demo fit zone" />
  <meta name="keywords" content="javascript, dynamic, grid, layout, jquery plugin, fit zone"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/ace.min.css" />
  <link rel="stylesheet" href="css/ace-responsive.min.css" />
  <link rel="stylesheet" href="css/ace-skins.min.css" />
  <link href="css/fonts/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/metro.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/freewall.js"></script>
</head>

<body class="container">
  <div class="layout">
    <!--Aqui inicia la barra-->
    <div class="navbar">
      <div class="navbar-inner"  style='background-color: rgb(0, 163, 204)'>
        <div class="container-fluid">
          <a href="index.php" class="brand">
            <small>
              <i class="icon-bar-chart"></i>
              <b>SUAP</b>
            </small>
          </a>
        </div><!--/.container-fluid-->
      </div>
      <!--/.navbar-inner--><br><br>
      <!--Aqui termina la barra-->
      <!--Inician el menu tipo Windows 8, cada div con id="freewall" es un modulo-->
      <br><br>
      <div id="freewall" class="free-wall">
        
        <a href="">
        <div class='brick s1x3' style='background-color: #913dff'>
          <div class='cover'>
            <h1><br><br><br><br>Estadísticas</h1>
            <i class="fa fa-bar-chart-o fa-5x"></i>
          </div>
        </div>
        </a>
        
        <a href="">
          <div class='brick s1x3' style='background-color: rgb(255,140,0)'>        
            <div class='cover'>
              <h1><br><br><br><br>Línea del Tiempo</h1>
              <i class="fa fa-line-chart fa-5x"></i>
            </div>
          </div>
        </a>

        <a href="">
        <div class='brick s1x3' style='background-color: rgb(50,205,50)'>
          <div class='cover'>
            <h1><br><br><br><br>Ver proyectos</h1>
            <i class="fa fa-search fa-5x"></i> 
          </div>
        </div>
        </a>

        <a href="">
        <div class='brick s1x3' style='background-color: rgb(253,105,50)'>
          <div class='cover'>
            <h1><br><br><br><br>Usuarios</h1>
            <i class="fa fa-users fa-5x"></i> 
          </div>
        </div>
        </a>

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
        //calculator width and height for IE7;
        wall.fillHoles();
        wall.fitWidth();
        //wall.fitZone($(window).width() - 30 , $(window).height() - 30);
        //wall.fitHeight();
      });
    </script>
  </body>
  </html>
