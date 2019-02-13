<?php get_template_part('header'); ?>

<main role="main" aria-label="Content">
    <!-- section -->
    <section>

        <h1>
            <?php esc_html_e('Latest Posts', 'handmadestale'); ?>

            <small>
                <?php printf(
                    _n('%d post', '%d posts', hmt_published_post_count(), 'handmadestale'),
                    hmt_published_post_count()
                ); ?>
            </small>
        </h1>

        <?php get_template_part('loop'); ?>

    </section>
    <!-- /section -->
</main>

<?php get_template_part('footer'); ?>
