<?php get_header(); ?>

    <?php get_template_part("partials/section", "title"); ?>

    <main class="content">

        <div class="container">

            <div class="row">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php

                    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                    $title = get_the_title();

                    ?>

                    <?php if( !empty($title) ): ?>

                        <h2><?php echo $title; ?></h2> <br />

                    <?php endif; ?>

                    <?php if( !empty($thumbnail) && is_single() ): ?>

                        <img src="<?php echo $thumbnail[0]; ?>" alt="<?php echo $title; ?>" class="full-width">

                    <?php endif; ?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>

            </div><!-- /.row -->

        </div><!-- /.container -->

    </main><!-- /.content -->

<?php get_footer(); ?>