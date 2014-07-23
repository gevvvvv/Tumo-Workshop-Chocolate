<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<div class="contactMain">
		<div class="contactContent">
			<header class="header">
			<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
			</header>
			<section class="entry-content">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
			<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
			<div class="contactImages">
				<div class="pic-container">
				    <img src="/wp-content/uploads/2014/07/10171831_446235185511121_2462388784950046695_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10171831_446235185511121_2462388784950046695_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10171831_446235185511121_2462388784950046695_n.jpg" class="pic" />
				    <a class="pic-caption" href="#!">Hi, i'm Rikarsen</a>
				</div>
			</div>
			<div class="contactImages">
				<div class="pic-container pic-container2">
				    <img src="/wp-content/uploads/2014/07/10567316_609934855789335_1680734030_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10567316_609934855789335_1680734030_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10567316_609934855789335_1680734030_n.jpg" class="pic" />
				    <a class="pic-caption pic-caption2" href="#!">Hi, i'm Mary</a>
				</div>
			</div>
			<div class="contactImages">
				<div class="pic-container">
				    <img src="/wp-content/uploads/2014/07/10563443_609934852456002_1974613512_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10563443_609934852456002_1974613512_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10563443_609934852456002_1974613512_n.jpg" class="pic" />
				    <a class="pic-caption" href="#!">Hi, i'm Rafik</a>
				</div>
			</div>
			<div class="contactImages">
				<div class="pic-container pic-container2">
				    <img src="/wp-content/uploads/2014/07/10524731_609933295789491_7217276025320766692_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10524731_609933295789491_7217276025320766692_n.jpg" class="pic" />
				    <img src="/wp-content/uploads/2014/07/10524731_609933295789491_7217276025320766692_n.jpg" class="pic" />
				    <a class="pic-caption pic-caption2" href="#!">Hi, i'm Davit</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>