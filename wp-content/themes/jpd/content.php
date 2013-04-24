<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php the_post_thumbnail(); ?>
			<?php if ( is_single() ) : ?>
                <div class="left-title-header">
                    <h1 class="entry-number">No.<?php the_id(); ?></h1>
                    <span class="title-border"></span>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
                <div class="right-title-header">    
                    <h2 class="entry-date"><?php the_date();?></h2>
                </div> 
<!--                <div class="font-test">
                	<h1 class="centaur">VENDORS</h1>
                    <h1 class="ecuyer">VENDORS</h1>
                    <h1 class="elephnt">VENDORS</h1>
                    <h1 class="gara">VENDORS</h1>
                    <h1 class="garait">VENDORS</h1>
                    <h1 class="parfumerie">VENDORS</h1>
                </div>
-->			<?php else : ?>
           <a  class="title-header" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                <div class="left-title-header">
                    <h1 class="entry-number">No.<?php the_id(); ?></h1>
                    <span class="title-border"></span>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
                <div class="right-title-header">    
                    <h2 class="entry-date"><?php the_date();?></h2>
                </div>    
                
           	</a> 
			
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
      				<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>

		</footer><!-- .entry-meta -->
	</article><!-- #post -->
