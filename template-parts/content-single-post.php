<div class="p-2">
	<h2 class="my-3"><?php the_title(); ?></h2>

	<?php
	if (has_post_thumbnail()) {
		the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) );
	}
	?>
	<?php
	if ('post' === get_post_type()) :
		?>
		<div class="entry-meta mt-2">
			<?php
			storebase_posted_on();
			storebase_posted_by();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<div class="py-2">

		<?php
		the_content()
		?>
	</div>

	<div class="entry-footer">
		<?php storebase_entry_footer(); ?>
	</div>
</div>