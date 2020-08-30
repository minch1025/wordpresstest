<article id="post-<?php the_ID();?>" <?php post_class('bg-warning');?>>
    <div class="card-body text-white">
        <strong><?php the_content(); ?></strong>
        <p class="text-right">
            <small><?php the_author(); ?>
                <cite>@
                    <?php the_date('Y-m-d');?></cite>
            </small>
        </p>
    </div>

</article>