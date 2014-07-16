<?php
$items = new WP_Query(
    array(
        'post_type' => 'slide',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

wp_reset_query();

$items = $items->posts;

?>
<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">

<?php $i = 1; ?>
<div class="ia-container">
<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
?>
    <figure>
		<img src="<?=$item->meta["image"]["url"];?>" alt="image0<?=$i?>" />
		<input type="radio" name="radio-set" checked="checked"/>
    <?=$item->meta["fieldname"];?>
    <?php $i++; ?>
<?php endforeach; ?>
<?php foreach($items as $item):?>
</figure>
<?php endforeach; ?>
</div>
</section>
</article>
<?php //if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>