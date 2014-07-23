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
<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
?>
	<div class="grid_3 expand">
		<div class="logoprice">
        	<img class="rotate" alt="" src="<?=$item->meta["image"]["url"];?>"> <!--you can edit the image, open the psd file for the vector image format-->
        </div>
        <div class="price">
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p> <!--you can edit-->
       		<ul>
            	<li><p>Lorem ipsum dolor sit amet consec</p></li> <!--you can edit-->
                <li><p>Lorem ipsum dolor sit amet consec</p></li> <!--you can edit-->
                <li><p class="noborder">Lorem ipsum dolor sit amet consec</p></li> <!--you can edit-->
            </ul>
            <p class="btn red"><a href="#">Cupcakes</a></p> <!--you can edit-->
        </div>
        <div class="triangle"></div>
    </div>
<?php endforeach; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>