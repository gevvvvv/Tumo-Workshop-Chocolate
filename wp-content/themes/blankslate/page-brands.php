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
<div class="brands-text">
	<h1>Brands</h1>
</div>
<div id="brands-content">
<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
?>
    <div class="grid_3 expand">
		<div class="logoprice">
        	<img class="rotate" alt="" src="<?=$item->meta["image"]["url"];?>"> <!--you can edit the image, open the psd file for the vector image format-->
        </div>
        <div class="price">
        	<p><?=$item->meta["desc"];?></p>
        </div>
        <div class="triangle"></div>
    </div>
<?php endforeach; ?>
</div>

<?php get_footer(); ?>