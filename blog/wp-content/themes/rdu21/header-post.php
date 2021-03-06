<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url)?>">
    <link href='http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400,700,400italic' rel='stylesheet' type='text/css'> 
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>
 <header class="header-principal">
        <div class="header-wrap">
            <div class="logo">
                <a href="index.html"><img src="<?php bloginfo(stylesheet_directory)?>/img/logo-rdu21.png" alt="logo-rdu21"></a>
            </div>
            <nav class="menu">
              <ul>
                    <li><a class="Menu-link-normal " href="../index.html">Home</a></li>
                    <li><a class="Menu-link" href="../index.html#comprar">Producto</a></li>
                    <li><a class="Menu-link" href="#">Nuestra Marca</a></li>
                    <li><a class="Menu-link current-link-blanco" href="/blog">Blog</a></li>
                    <li><a class="Menu-link-normal" href="../../contactanos/index.html">Contáctanos</a></li>
                </ul>
            </nav>
        </div>
    </header>