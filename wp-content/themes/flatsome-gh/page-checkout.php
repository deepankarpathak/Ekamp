<?php
/*
Template name: Page Checkout
Use this for Cart, Checkout and thank you page.
*/
get_header(); ?>

<div  class="page-wrapper page-checkout">
<div class="row">
<div id="content" class="large-12 columns entry-content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
	<?php  if(function_exists('is_wc_endpoint_url')){ ?>
	<?php if (!is_wc_endpoint_url('order-received')){ ?>
	<!-- <div class="checkout-breadcrumb" style="display:none">
		<h1>
			<span class="title-cart"><?php _e('Applied Courses', 'flatsome'); ?></span>   
			<span class="icon-angle-right divider"></span>    
			<span class="title-checkout"><?php _e('Checkout details', 'flatsome'); ?></span>  
			<span class="icon-angle-right divider"></span>  
			<span class="title-thankyou"><?php _e('Enrollment Complete', 'flatsome'); ?></span>
		</h1>
	</div> -->
	<?php } ?>
	<?php } else { ?> 
	<!-- <div class="checkout-breadcrumb" style="display:none">
		<h1>
			<span class="title-cart"><?php _e('Applied Courses', 'flatsome'); ?></span>   
			<span class="icon-angle-right divider"></span>    
			<span class="title-checkout"><?php _e('Checkout details', 'flatsome'); ?></span>  
			<span class="icon-angle-right divider"></span>  
			<span class="title-thankyou"><?php _e('Application Complete', 'flatsome'); ?></span>
		</h1>
	</div> -->
	<?php } ?>

<?php the_content(); ?>			
<?php endwhile; // end of the loop. ?>	
</div><!-- end #content large-12 -->
</div><!-- end row -->
</div><!-- end page-right-sidebar container -->
<?php get_footer(); ?>
