<?php printf( '<p class="footer-category">' . __('Filed under:', 'spirit' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'spirit' ) . '</span> ', ', ', '</p>' ); ?>