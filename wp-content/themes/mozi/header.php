
<!DOCTYPE html>
<html lang="ru">
    <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная</title>
  <?php wp_head(); ?>

</head>
    <body>
    
    <div class="hero__wrapper">
        <!-- Header -->
        <header>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <a id href="../index.html"><img src="images/logo.svg" alt=""></a>
        </div>

        <?php wp_nav_menu(array(
            'theme_location'  => 'top',
            'container'  => 'nav',
            'container_class' => 'menu',
            'container_id'  => '',
            'menu_class'  => none,
            'menu_id'  => none,
        )); ?>

    </div>

    <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>  

</div>

</header>