<!-- SECTION FEATURE IMAGE -->
  <?php  $thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
  
  <?php if( has_post_thumbnail() ) { ?>
    <section class="banner" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="blackground" data-speed="2">
      <h1 class="banner__title"><?php the_title(); ?></h1>
    </section>
  <?php } else { ?>
    <section class="banner  banner--default" data-type="blackground" data-speed="2">
      <h1 class="banner__title"><?php the_title(); ?></h1>
    </section>
  <?php } ?>