<?php get_header(); ?>

<main>
    <h1>Welcome to <?php bloginfo('name'); ?></h1>
    <p>This is the main theme file.</p>

    <?php
    // 投稿/固定ページが存在すればループで表示
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <article>
                <!-- 記事タイトルとリンクを表示 -->
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <!-- 記事の抜粋を表示 -->
                <p><?php the_excerpt(); ?></p>
            </article>
            <?php
        }
    } else {
        echo '<p>No posts found.</p>';
    }
    ?>
</main>

<?php get_footer(); ?>
