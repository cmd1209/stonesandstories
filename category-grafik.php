<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">

        <div class="col col100">
          <?php // display categories in two columns
$cats = explode('<br />', wp_list_categories('title_li=&echo=0&depth=1&style=none'));
$cat_n = count($cats) - 1;
for ($i = 0; $i < $cat_n; $i++):
	if ($i < $cat_n/2):
		$cat_left = $cat_left.'<li>'.$cats[$i].'</li>';
	elseif ($i >= $cat_n/2):
		$cat_right = $cat_right.'<li>'.$cats[$i].'</li>';
	endif;
endfor; ?>

<ul class="left">
	<?php echo $cat_left; ?>
</ul>
<ul class="right">
	<?php echo $cat_right; ?>
</ul>
        </div>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>