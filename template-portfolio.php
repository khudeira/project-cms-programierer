<?php
/* Template Name: Portfolio */
get_header();
?>

<main>
    <section class="portfolio">
        <h1>My Portfolio</h1>
        <div class="portfolio-items">
            <?php
            // Define a query to fetch portfolio items (from a custom post type or regular posts)
            $args = array(
                'post_type' => 'project', // Change this to 'post' if not using custom post type
                'posts_per_page' => -1 // Get all portfolio items
            );
            $portfolio_query = new WP_Query($args);
            
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            ?>
                <div class="portfolio-item">
                    <h2><?php the_title(); ?></h2>
                    <div class="portfolio-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="portfolio-excerpt">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            <?php
                endwhile;
            else :
                echo '<p>No portfolio items found.</p>';
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
