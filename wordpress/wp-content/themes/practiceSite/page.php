<?php
get_header();
if(have_posts());
while (have_post()) :
the_post();
    the_content();
endwhile;
endif;
get_footer();
?>