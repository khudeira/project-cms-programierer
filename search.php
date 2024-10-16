<?php get_header(); ?>

<main>
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>
    
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No results found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
