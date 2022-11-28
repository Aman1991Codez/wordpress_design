<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> <?php bloginfo('name'); ?> <?php wp_title() ?>
<?php if ( is_front_page()) { echo  "|"; bloginfo('description'); } ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css "/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css " />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@500&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
<script type="text/javascript">  href="<?php echo get_template_directory_uri(); ?> /WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Great Vibes:400","Josefin Sans:100,200,300,regular,500,600,700,100italic,200italic,300italic,italic,500italic,600italic,700italic"]  }});"</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animations.css"/>

<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?> >


<div class="right_panel">
  <header class="headermain main-header">
    <div class="container">
      <div class="logocenter">
        <a href="index.html"> <img src="<?php bloginfo('template_directory' ) ?>/images/logofinal01.png" alt="#"> </a>
      </div>
      <nav class="manutop">
        <header class="header_area">
          <div class="main_header_area animated">
            <div class="container">
              <nav id="navigation1" class="navigation">
                <div class="nav-header">
                  <div class="nav-toggle"></div>
                </div>


                 <div class="nav-menus-wrapper">
                  <!-- <ul class="nav-menu">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="our-story.html">OUR STORY</a></li>
                    <li>
                      <a href="#">COLLECTION </a>
                      <div class="megamenu-panel">
                        <div class="megamenu-lists">
                          <ul class="megamenu-list list-col-3">
                            <li class="megamenu-list-title"><a href="#">BEDROOM</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Storage Beds</a></li>
                            <li><a href="#">Bedside Tables</a></li>
                            <li><a href="#">Wardrobes</a></li>
                          </ul>
                          <ul class="megamenu-list list-col-3">
                            <li class="megamenu-list-title"><a href="living.html">LIVING</a></li>
                            <li><a href="sofas.html">Sofas</a></li>
                            <li><a href="#">Coffee Tables</a></li>
                            <li><a href="#">Bar Counters</a></li>
                          </ul>

                          <ul class="megamenu-list list-col-3">
                            <li class="megamenu-list-title"><a href="#">DINING</a></li>
                            <li><a href="#">Dining Chairs</a></li>
                            <li><a href="#">Dining Tables</a></li>
                            <li><a href="#">Stools</a></li>
                          </ul>

                          <ul class="megamenu-list list-col-3">
                            <li class="megamenu-list-title"><a href="#">LIGHTING</a></li>
                            <li><a href="#">Chandeliers</a></li>
                            <li><a href="#">Wall Lights</a></li>
                            <li><a href="#">Lamps</a></li>
                          </ul>
                         <ul class="megamenu-list list-col-3">
                            <li class="megamenu-list-title"><a href="artwork.html">ARTWORK</a></li>
                            <li><a href="#">Paintings </a></li>
                            <li><a href="#">Mirrors</a></li>
                          </ul>
                          <ul class="megamenu-list list-col-3">
                            <li class="megamenu-list-title"><a href="#">DECOR</a></li>
                            <li><a href="#">Artifacts </a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li><a href="#">KITCHEN</a></li>
                    <li><a href="projects.html">PROJECTS</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                  </ul> -->
                </div>

              </nav>

            <?php wp_nav_menu(array('theme_location'=>'primary-menu',
            'menu_class'=>'nav-menu')) ?>
                </div>
              </nav>
            </div>
          </div>
        </header>

