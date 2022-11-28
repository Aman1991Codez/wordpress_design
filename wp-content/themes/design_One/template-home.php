<?php

/* Template Name:  template-Home Page*/
get_header();
// echo "string";
?>
<div class="blog-item">
<h2> <a href= "<?php echo
site_url(); ?>"> <i>
  Home / </i>
</a> Blog: </h2>
</div>
<?php
while(have_posts()){
  the_post();
  $imagepath=
    wp_get_attachment_image_src(
      get_post_thumbnail_id(), 'large');
      print_r($imagepath);


?>
<div class="blog-item">
  <img src="<?php echo get_template_directory_uri() ?>/images/logofinal01.png" />
  <h2> <?php the_title();
  ?></h2>
  <?php } ?>
</div>



</div>

<div class="cart"><a  data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img src="<?php bloginfo('template_directory')?>/images/search.png" alt="#"></a></div>
  <div class="animatedParent2">
    <div class="covervideo">
      <video autoplay muted loop id="myVideo">
        <source src="<?php bloginfo('template_directory')?>/img/firstbanner4.mp4" type="video/mp4">
      </video>
      <div class="vidotext">
        <img src="<?php bloginfo('template_directory')?>/images/text.png" alt="#"><br>

      </div>
    </div>
  </div>

  <section style="position:relative; top:-4px;" class="px-3 mt-3">
    <div class="animatedParent position-relative">
      <div class="live"><img src="<?php bloginfo('template_directory')?>/img/aboutbg.png" alt="">
        <div class="textbgbox animated fadeInLeft delay-500">
          <h2>
            Design One by Nidhi</h2>
          <h3>Our Story</h3>
          <p>Our journey of interior designing started with an aspiration of being capable to
            bring your thoughts and imaginations to life, which today we can proudly say we
            have succeeded in doing. Our mission was simple, to be the best when it came to
            handing over your dream homes.</p>
          <a href="our-story.html">Our Story</a></div>
      </div>
    </div>
</section>

  <section class="px-3 mt-5">
    <div class="mainheading">
      <h2>COLLECTIONS</h2>
    </div>
    <div class="animatedParent">
      <div class="grid ">
        <figure class="effect-steve grid__card-image-wrapper grid__card grid__card--col1of4">
          <img src="<?php bloginfo('template_directory')?>/img/live.jpg" sizes="(max-width: 1024px) 100vw, 1024px" loading="lazy" class="grid__card-image" width="1024" height="624" alt="img29"/>
          <figcaption>
            <span class="grid__card-label">
              LIVING </span>
            <p>Add a unique Danish touch to your living room with our New Collection of furniture. </p>
            <a href="living.html">View more</a>
          </figcaption>
        </figure>

        <figure class="effect-steve grid__card-image-wrapper grid__card grid__card--col1of2">
          <img src="<?php bloginfo('template_directory')?>/img/bedrom.jpg" sizes="(max-width: 1024px) 100vw, 1024px" loading="lazy" class="grid__card-image" width="1024" height="624" alt="img29"/>
          <figcaption>
            <span class="grid__card-label">
              BEDROOM </span>
            <p>Design by Nidhi's collection of verious bedroom furniture encompasses a sophisticated selection of luxury beds and bedside tables featured in a range of contemporary and modern styles. </p>
            <a title="MORE COLLECTIONS" href="#">View more</a>
          </figcaption>
        </figure>

        <figure class="effect-steve grid__card-image-wrapper grid__card grid__card--col1of4">
          <img src="<?php bloginfo('template_directory')?>/img/light.jpg" sizes="(max-width: 1024px) 100vw, 1024px" loading="lazy" class="grid__card-image" width="1024" height="624" alt="img29"/>
          <figcaption>
            <span class="grid__card-label">
              LIghting </span>
            <p>Our classic to modern Italian lighting and Murano lighting features a spectacular collection of..</p>
            <a title="MORE COLLECTIONS" href="#">View more</a>
          </figcaption>
        </figure>

        <figure class="effect-steve grid__card-image-wrapper grid__card grid__card--col1of2">
          <img src="<?php bloginfo('template_directory')?>/img/dining.jpg" sizes="(max-width: 1024px) 100vw, 1024px" loading="lazy" class="grid__card-image" width="1024" height="624" alt="img29"/>
          <figcaption>
            <span class="grid__card-label">
              Dining </span>
            <p>Contemporary Danish design meets clever functionality in our extending dining tables. Adjust the size depending on your needs, and go from an intimate dinner to a family gathering in a second.
            </p>
            <a title="MORE COLLECTIONS" href="#">View more</a>
          </figcaption>
        </figure>

        <figure class="effect-steve grid__card-image-wrapper grid__card grid__card--col1of4">
          <img src="<?php bloginfo('template_directory')?>/img/artwork.jpg" sizes="(max-width: 1024px) 100vw, 1024px" loading="lazy" class="grid__card-image" width="1024" height="624" alt="img29"/>
          <figcaption>
            <span class="grid__card-label">
              ARTWORK </span>
            <p>A wide range of painting especially imported from various artists all over europe.</p>
            <a href="artwork.html">View more</a>
          </figcaption>
        </figure>

        <figure class="effect-steve grid__card-image-wrapper grid__card grid__card--col1of4">
          <img src="<?php bloginfo('template_directory')?>/img/decor.jpg" sizes="(max-width: 1024px) 100vw, 1024px" loading="lazy" class="grid__card-image" width="1024" height="624" alt="img29"/>
          <figcaption>
            <span class="grid__card-label">
              DECOR </span>
            <p>Exquisite artefacts and rugs which are imported from turkey and italy.  </p>
            <a title="MORE COLLECTIONS" href="#">View more</a>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>



  <section class=" mb-4 px-3">
    <div class="animatedParent">
      <div id="owl-demo" class="owl-carousel owl-theme position-relative">
        <div class="item slider_b"><img src="<?php bloginfo('template_directory')?>/img/project01.jpg" alt="1">
          <div class="sleep_box animated fadeInLeft delay-500 go">
            <h2>
              <div class="card-block__line"></div>
              PROJECTS</h2>
            <h3> M3M Golfestate, Gurugram</h3>
            <a href="">Explore</a></div>
        </div>
        <div class="item slider_b"><img src="<?php bloginfo('template_directory')?>/img/project02.jpg" alt="GTA V">
          <div class="sleep_box animated fadeInLeft delay-500 go">
            <h2>
              <div class="card-block__line"></div>
              PROJECTS</h2>
            <h3> Greater Kailash II, New Delhi</h3>
            <a href="">Explore</a></div>
        </div>

        <div class="item slider_b"><img src="<?php bloginfo('template_directory')?>/img/project03.jpg" alt="GTA V">
          <div class="sleep_box animated fadeInLeft delay-500 go">
            <h2>
              <div class="card-block__line"></div>
              PROJECTS</h2>
            <h3>The Camellias, Gurugram</h3>
            <a href="">Explore</a></div>
        </div>
      </div>
    </div>
  </section>


  <section class="mb-4 px-3">
    <div class="animatedParent">
      <div id="owl-demo3" class="owl-carousel owl-theme position-relative">
        <div class="item slider_b"><img src="<?php bloginfo('template_directory')?>/img/interior-design.jpg" alt="1">
          <div class="slider_box animated fadeInLeft delay-500 go">
            <h2>
              <div class="card-block__line"></div>
              Services</h2>
            <h3>  Interior Designing  </h3>
            <p>Interior designing is a form of art which is performed by converting lifeless houses
              into living homes. </p>
            <a href="">Explore</a></div>
        </div>
        <div class="item slider_b"><img src="<?php bloginfo('template_directory')?>/img/Personalised-Furniture.jpg" alt="GTA V">
          <div class="slider_box animated fadeInLeft delay-500 go">
            <h2>
              <div class="card-block__line"></div>
              Services</h2>
            <h3> Personalised Furniture </h3>
            <p>Furniture is an integral part of any home as it represents you and reflects your
              personality. It must have the utmost comfort and class.</p>
            <a href="">Explore</a></div>
        </div>

        <div class="item slider_b"><img src="<?php bloginfo('template_directory')?>/img/civil-work.jpg" alt="GTA V">
          <div class="slider_box animated fadeInLeft delay-500 go">
            <h2>
              <div class="card-block__line"></div>
              Services</h2>
            <h3>  Civil Work  </h3>
            <p>There are times when the plans are not to your requirements and need some
              changes; we are there to help you in such situations as well.</p>
            <a href="">Explore</a></div>
        </div>

      </div>
    </div>
  </section>


  <section class="ftco-section px-3 mb-4">
        <div class="featured-carousel owl-carousel">
          <div class="item">
            <div class="work-wrap d-md-flex">
              <div class="img order-md-last" style="background-image: url(img/blog01.jpg);"></div>
              <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                <div class="desc w-100">
                  <h4>Blog</h4>
                  <h2 class="mb-4">INSPIRING DINING ROOM DESIGN IDEAS</h2>
                  <p class="h5">Create a timeless dining space to gather with family and friends for years to come. </p>

                  <p class="mt-4">
                    <button type="button" class="btn btn-outline-dark mb-2">Explore</button>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="work-wrap d-md-flex">
              <div class="img order-md-last" style="background-image: url(img/<?php bloginfo('template_directory')?>/mirror.jpg);"></div>
              <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                <div class="desc w-100">
                  <h4>Blog</h4>
                  <h2 class="mb-4">  Mirror Mirror on the Wall</h2>
                  <p class="h5">Alright, so our resolution this year is to be uninhibited and unabashed, so without a speck of reserve, we affirm that we love preening ourselves in the mirror. Yes, we do. Call it vanity or full-blown narcissism, we are owing it up.</p>

                  <p class="mt-4">
                    <button type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Explore</button>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
  </section>



<?php




get_footer();


?>