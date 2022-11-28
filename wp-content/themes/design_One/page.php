<?php

get_header();
the_post();
?>






<div class="middle-container">

  <div class="middle-right">
    <div class="page-status">
        <h1><?php the_title() ?> :</h1>


      <h2> <a href="<?php echo
       site_url(); ?>">
      Home /</i></a> <?php  the_title() ?>:</h2>
    </div>
    <?php the_post_thumbnail(array(
      500,500)); ?>
    </div>
    <div class="about-content">
      <?php echo get_the_content(); ?>
    </div>
    <div class="clear"></div>
<?php the_post_thumbnail(array(500, 500)); ?>

<div class="about-content">
<?php echo get_the_content();
 ?>

</div>
    <?php $imagepath=
    wp_get_attachment_image_src(
      get_post_thumbnail_id(), 'large');


      ?>
<img src="<?php echo $imagepath[0] ?>" width="500"/>
</div>


<?php
get_footer();
?>