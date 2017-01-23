<?php
if( get_sub_field('global') == 1):
	while ( have_rows('page_content', get_id_by_slug('global-modules')) ) : the_row();
		if( get_row_layout() == 'bio_column_right' ):
			?>
				<div class="container-fluid">
					<div class="row">
						
					</div>
				</div>
			<?php
		endif;
	endwhile;
else :
?>
<div class="container-fluid">
	<div class="row">

	</div>
</div>
<?php
endif;
