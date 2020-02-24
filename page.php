<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

    <section class="title-section">
        <p class="welcome-text">Welcome To</p>
        <h1><?php the_title( ); ?></h1>
    </section>

    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y">
            <?php if(is_active_sidebar( 'sidebar' )) : ?>
                <div class="cell large-8">
            <?php else: ?>
                <div class="cell large-12">
            <?php endif; ?>
                <article class="single-page">
                    <?php the_content( ); ?>
                </article>
            </div>
            <?php if(is_active_sidebar( 'sidebar' )) : ?>
                <div class="cell large-4 well">
                    <?php dynamic_sidebar('sidebar'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(  ); ?>