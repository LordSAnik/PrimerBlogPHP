<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location error.php' );
}

$posts = obtener_post($blog_config['post_x_pagina'], $conexion);
if (!$posts) {
    header('Location error.php');
}
print_r($post);
require 'views/index.view.php';

?>