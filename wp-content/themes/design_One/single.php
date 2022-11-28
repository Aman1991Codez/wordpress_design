<?php


    get_header();
    the_post();

?>
<div class="clear"></div>
<div class="middle-right">
<h1><?php the_title(); ?> </h1>
<?php

$imagepath=
wp_get_attachment_image_src(
  get_post_thumbnail_id(), 'large');

?>

<img src="<?php echo $imagepath[0] ?>
"width="100%"/>

<div><?php echo get_the_date(); ?></div>
<div><?php the_author(); ?></div>
<div><?php the_content(); ?></div>
</div>
<div class="clear"></div>

<?php


    get_footer();

?>