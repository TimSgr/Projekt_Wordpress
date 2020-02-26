
        <?php the_post_thumbnail('full', array('class' => 'logo3')); ?>
            <div class="text-block2">
                <h4> <?php the_title()?> </h4>
                <p>
                    <img src="<?php bloginfo('template_url'); ?>/img/clock.png" class="logo4">
                    <?php echo get_the_date('F j, Y'); ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/comment.svg" class="logo4">
                    <?php echo get_comments_number(); ?>
                </p>
            </div>    


