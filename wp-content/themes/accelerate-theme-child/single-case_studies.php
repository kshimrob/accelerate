<?php get_header(); ?>

  
<?php $size = "full"; ?>
<?php $services = get_field('services'); ?>
<?php $client = get_field('client'); ?>
<?php $site_link = get_field('site_link'); ?>
<?php $description = get_field('description'); ?>
<?php $image_1 = get_field('image_1'); ?>
<?php $image_2 = get_field('image_2'); ?>
<?php $image_3 = get_field('image_3'); ?>



<div class="case-study">
  <section class="case-study-info">
    <h1 class="case-study-title"><?php the_title(); ?></h1>
    <h2 class="case-study-subtitle"><?php echo $services; ?></h2>
    <h2 class="case-study-subtitle">Client: <?php echo $client; ?></h2>
    <h2 class="case-study-subtitle"><a href="<?php echo $site_link; ?>"><?php echo $site_link; ?></a></h2>
    <p><?php echo $description; ?></p>

  </section>

  <section class="case-study-images">
  <?php if($image_1) {?>
    <?php echo wp_get_attachment_image( $image_1, $size ); ?>
  <?php } ?>
  <?php if($image_2) {?>
    <?php echo wp_get_attachment_image( $image_2, $size ); ?>
  <?php } ?>
  <?php if($image_3) {?>
    <?php echo wp_get_attachment_image( $image_3, $size ); ?>
  <?php } ?>

  </section>
</div>