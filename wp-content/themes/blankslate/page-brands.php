<?php
$items = new WP_Query(
    array(
        'post_type' => 'brand',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

wp_reset_query();

$items = $items->posts;

?>

<?php get_header(); ?>
<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
?>
	<div class="galonelvel with_href folio_box col_s prettyPhoto hs_done masonry-brick" title="Lorem ipsum photo caption" rel="gal\[b\]" style="position: absolute;">
		<a style="display: none;" href="" title="">
			<img src="<?=$item->meta["image"]["url"];?>" width="220" height="220">
		</a>
		<div class="folio" style="background: url(<?=$item->meta["image"]["url"];?>) 0 0; height: 220px; width: 220px;">  
			<i style="height: 220px; width: 220px; display: block; opacity: 0;"></i>
		</div>
	</div>
<?php endforeach; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>