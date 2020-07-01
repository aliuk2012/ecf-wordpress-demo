<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1 class="govuk-heading-l"><?php the_title(); ?></h1>
	<div class="govuk-grid-row">
  		<div class="govuk-grid-column-two-thirds">
		  <p class="govuk-body"><?php the_content(__('(more...)')); ?></p>
		</div>
	
<?php endwhile; else: ?>
	<h1 class="govuk-heading-l"><?php the_title(); ?></h1>
	<div class="govuk-grid-row"> 
  		<div class="govuk-grid-column-two-thirds">
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		</div>
<?php endif; ?>

<?php get_sidebar(); ?>
	
</div>
</main>
</div>
<?php get_footer(); ?>