<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Triple Play</title>
                <link href="style.css" rel="stylesheet" type="text/css" />
        </head>

        <body>
                <div id="insert">
                        <div id="logo">
                                <h1><a href="inicio.html"><span class="hidden">Triple Play</span></a></h1>
                        </div>
                        <div id="container">
                                <div id="header"></div>
                                <div id="navigation">
                                        <h2 class="hidden">Navigation</h2>
                                        <ul>
                                                <li><a href="consultar.html"  class="consult"><span class="hidden">Consultar </span></a></li>
                                                <li><a href="insertar.html"   class="insert" ><span class="hidden">Insertar  </span></a></li>
                                                <li><a href="eliminar.html"   class="delete" ><span class="hidden">Eliminar  </span></a></li>
                                                <li><a href="actualizar.html" class="update" ><span class="hidden">Actualizar</span></a></li>
                                        </ul>
                                </div>
                                <div id="content">
                                        <div id="content-left">
                                                <div id="title">
                                                        <h2 class="hidden">Indice</h2>
                                                </div>
                                                <div id="description">
                                                        <center>
                                                                <div class="menu_elem">
                                                                        <a href="insertar_jugador.php" class="link_hide">Nuevo Jugador</a>
                                                                </div>

                                                                <div class="menu_elem">
                                                                        <a href="insertar_estadio.php" class="link_hide">Nuevo Estadio</a>
                                                                </div>

                                                                <div class="menu_elem">
                                                                        <a href="insertar_equipo.php" class="link_hide">Nuevo Equipo</a>
                                                                </div>

                                                                <div class="menu_elem">
                                                                        <a href="insertar_juego.php" class="link_hide">Nuevo Juego</a>
                                                                </div>
                                                        </center>

                                                </div>
                                        </div>
                                        <div id="content-right">
                                                <div id="main">
                                                        <center>
                                                                <h3 style="color:#885411;">Nuevo Juego</h3>

                                                                <form action="consultaIJ.php" method="POST" id="insertar_juego">
                                                                        <table border="0" style="text-align:left;" cellpadding="5px;" >
                                                                                <tr>
                                                                                        <td>
                                                                                                Fecha:
                                                                                        </td>
                                                                                        <td>
                                                                                                <input type="text" size="25" name="fecha" id="fecha">
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                                Hora de inicio:
                                                                                        </td>
                                                                                        <td>
                                                                                                <input type="text" size="25" name="hora" id="hora">
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                                Equipo 1:
                                                                                        </td>
                                                                                        <td>
                                                                                                <input type="text" size="40" name="equipo1" id="equipo1">
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                                Equipo 2:
                                                                                        </td>
                                                                                        <td>
                                                                                                <input type="text" size="40" name="equipo2" id="equipo2">
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                                Estadio:
                                                                                        </td>
                                                                                        <td>
                                                                                                <input type="text" size="40" name="estadio" id="estadio">
                                                                                        </td>
                                                                                </tr>

                                                                                <tr>
                                                                                        <td COLSPAN="2" style="text-align:center;">
                                                                                                <input type="submit" value="CREAR" style="font-weight:bold; width:100px; height:30px; color:white; background-color:#885411;">
                                                                                        </td>
                                                                                </tr>


                                                                        </table>
                                                                </form>
                                                        </center>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div id="footer">
                                <p>Un producto de Ñángara, Inc. <img src="images/vendor.png" alt="Una pieza del teclado de un computador, con el simbolo de ñangara." /></p>
                        </div>
                </div>
        </body>
</html>
