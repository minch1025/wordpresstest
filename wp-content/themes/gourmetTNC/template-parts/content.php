<article id="post-<?php the_ID();?>" <?php post_class();?>>

    <?php the_post_thumbnail('Large',['class'=>'card-img-top img-fluid']);?>

    <div class="card-body">
        <h4 class="card-title"><?php the_title();?></h4>
        <p class="card-text"><?php the_excerpt();?></p>
    </div>

</article>