<?php 
    echo '<div class="breadcrumb">';
      // If there is a parent, display the link.
      $parent_title = get_the_title( $post->post_parent ); ?>

      <a href="<?php echo home_url(); ?>">หน้าหลัก</a>>
      <?php if ($parent_title != the_title('', '', false)) {
        echo '<a href="' . esc_url( get_permalink( $post->post_parent ) ) . '" alt="' . esc_attr( $parent_title ) . '">' . $parent_title . '</a>> ';
        echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . the_title() . '</a>';
      } else {
        echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . the_title() . '</a>';
      }
    echo '</div>';
  ?>