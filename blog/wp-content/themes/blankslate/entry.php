<div class="clearfix"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search()); ?>

<?php the_post_thumbnail(); ?>
<header>
<?php edit_post_link(); ?>
<?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
<?php if ( is_singular() ) {
echo '<h1 class="entry-title">';
} else {
echo '<h2 class="entry-title">';
} ?>
<?php wcr_share_buttons(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
<?php if ( is_singular() ) {
echo '</h1>';
} else {
echo '</h2>';
} ?>
</header>

<div class="entry-content">
<?php the_content(); ?>
</div>
<?php /* if ( is_singular() ) { get_template_part( 'entry-footer' ); } */?>
</article>

<div class="inner-goback-button">
	<div class="button-goback-txt">
	    <button id="button_enquiry_desktop" onclick="goBack()"><h5>Go Back</h5></button>
	</div>
	<div class="goback-arrow">
		<img src="img/Project Button Arrow.png" class="know-arrow-property" alt="arrow">
	</div>
	<div class="clearfix"></div>
</div>
