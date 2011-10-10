<?php
include "config.php";

$as = array(
        'home' => array(
                'title'       => 'Inicio',
                'main_div_id' => 'home',
                'vs'          => array()
        ),
        'consultar' => array(
                'title'       => 'Consulta',
                'main_div_id' => 'consult',
                'vs'          => array(
                        'estadio' => array('name' => 'Estadios' , 'title' => 'Estadios' ),
                        'equipo'  => array('name' => 'Equipos'  , 'title' => 'Equipos'  ),
                        'juego'   => array('name' => 'Juegos'   , 'title' => 'Juegos'   )
                )
        ),
        'insertar' => array(
                'title'       => 'Inserción',
                'main_div_id' => 'insert',
                'vs'          => array(
                        'estadio' => array('name' => 'Estadio'  , 'title' => 'Estadio'  ),
                        'equipo'  => array('name' => 'Equipo'   , 'title' => 'Equipo'   ),
                        'juego'   => array('name' => 'Juego'    , 'title' => 'Juego'    ),
                        'jugador' => array('name' => 'Jugador'  , 'title' => 'Jugador'  )
                )
        ),
        'actualizar' => array(
                'title'       => 'Actualización',
                'main_div_id' => 'update',
                'vs'          => array(
                        'estadio' => array('name' => 'Estadios' , 'title' => 'Estadios' ),
                        'equipo'  => array('name' => 'Equipos'  , 'title' => 'Equipos'  ),
                        'juego'   => array('name' => 'Juegos'   , 'title' => 'Juegos'   ),
                        'jugador' => array('name' => 'Jugadores', 'title' => 'Jugadores')
                )
        )
);

if (array_key_exists('a', $_GET)) {
        if (!array_key_exists($_GET['a'], $as)) {
                die ("Bad action: " . $_GET['a']);
        }
} else {
        $_GET['a'] = 'home';
}
$a = $as[$_GET['a']];

if (array_key_exists('v', $_GET) && !array_key_exists($_GET['v'], $a['vs'])) {
        die ("Bad view: " . $_GET['v']);
}
$v = $a['vs'][$_GET['v']];

function print_contents   ($a, $v) { if ($a && $v) include $_GET['a'] . '_' . $_GET['v'] . ".php"; }
function print_title      ($a) { echo $a['title'      ]; }
function print_main_div_id($a) { echo $a['main_div_id']; }
function print_views      ($a) {
        foreach ($a['vs'] as $v => $ps) {
                echo '<a href="tripleplay.php?a=' . $_GET['a'] . "&v=" . $v . '" class="link_hide"><div class="menu_elem">' . $ps['name'] . '</div></a>';
        }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Triple Play - <?php echo $a['title']; ?></title>
                <link href="style.css" rel="stylesheet" type="text/css" />
        </head>
        <body>
                <div id="wrapper" class="<?php echo $a['main_div_id']; ?>">
                        <div id="logo">
                                <h1><a href="tripleplay.php"><span class="hidden">Triple Play</span></a></h1>
                        </div>
                        <div id="top">
                                <div id="header"></div>
                                <h2 class="hidden">Navegación</h2>
                                <ul id="navigation">
                                        <li><a href="tripleplay.php?a=consultar"  class="consult"><span class="hidden">Consultar </span></a></li>
                                        <li><a href="tripleplay.php?a=insertar"   class="insert" ><span class="hidden">Insertar  </span></a></li>
                                        <li><a href="tripleplay.php?a=actualizar" class="update" ><span class="hidden">Actualizar</span></a></li>
                                </ul>
                        </div>
                        <div id="bottom">
                                <div id="left">
                                        <div id="title">
                                                <h2 class="hidden"><?php echo $a['title']; ?></h2>
                                        </div>
                                        <div id="side-content">
                                                <h3 class="hidden">Vistas</h3>
                                                <center><?php echo nav($a); ?></center>
                                        </div>
                                </div>
                                <div id="right">
                                        <div id="main-content">
                                                <h3 class="hidden">Contenido</h3>
                                                <?php if ($a && $v) include $_GET['a'] . '_' . $_GET['v'] . ".php"; ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </body>
</html>
