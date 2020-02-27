<p class="oben">
    <?php the_content(); ?>
</p>
<?php the_post_thumbnail('full', array('class' => 'logo5 rounded-circle'))?>
    <p><?php the_title();?></p>

    <?php
    previous_post_link('<span class="left black">&laquo; %link</span>');
    next_post_link('<span class="right black">%link &raquo;</span>');
?>                           
<div class="clearfix"></div>