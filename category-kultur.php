<?php get_header(); ?>
<section role="main">

	<div class="maincontent">
		<div class="col col100">
			<div class="module">
				<h1><strong><?php single_cat_title(); ?></strong></h1>

				<div class="col col33">
					<?php $i = 0; if ( have_posts()): while (have_posts()) : the_post();  if ($i % 3 == 0): ?>
					<div class="textwrap ">
						<div class="singletitle">
							<h2><?php the_title(); ?>
								<?php if( get_field('subheadline') ): ?>
									<span><?php the_field('subheadline'); ?></span>
								</h2>
							</div>
						<?php endif; ?>
						<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
						<p>
							<?php echo excerpt(25); ?>
						</p>
					</div>
				<?php  endif; $i++; ?>
			<?php endwhile; endif; ?>
		</div>

		<div class="col col33">
			<?php $i = 0; if ( have_posts()): while (have_posts()) : the_post();  if ($i % 3 == 1): ?>
			<div class="textwrap ">
				<div class="singletitle">
					<h2><?php the_title(); ?>
						<?php if( get_field('subheadline') ): ?>
							<span><?php the_field('subheadline'); ?></span>
						</h2>
					</div>
				<?php endif; ?>
				<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
				<p>
					<?php echo excerpt(25); ?>
				</p>
			</div>
		<?php  endif; $i++; ?>
	<?php endwhile; endif; ?>
</div>

<div class="col col33">
	<?php $i = 0; if ( have_posts()): while (have_posts()) : the_post();  if ($i % 3 == 2): ?>
	<div class="textwrap ">
		<div class="singletitle">
			<h2><?php the_title(); ?>
				<?php if( get_field('subheadline') ): ?>
					<span><?php the_field('subheadline'); ?></span>
				</h2>
			</div>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
		<p>
			<?php echo excerpt(25); ?>
		</p>
	</div>
<?php  endif; $i++; ?>
<?php endwhile; endif; ?>
</div>


</div>
</div>
</div>
<div class="sidebar">
	<?php get_sidebar(); ?>
</div>

</section>
<!-- /section -->
<?php get_footer(); ?>
