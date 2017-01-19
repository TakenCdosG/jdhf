<?php
/**
 * Footer template file.
 * @package Jason Debus Heigl Foundation
 * @since Jason Debus Heigl Foundation 1.0
 */
?>

<footer id="footer">
	<div class="pre-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php
						if(is_active_sidebar('sidebar-1')){
							dynamic_sidebar('sidebar-1');
						}
					?>
				</div>
				<div class="col-sm-3">
					<?php
						if(is_active_sidebar('sidebar-2')){
							dynamic_sidebar('sidebar-2');
						}
					?>
				</div>
				<div class="col-sm-3">
					<?php
						if(is_active_sidebar('sidebar-3')){
							dynamic_sidebar('sidebar-3');
						}
					?>
				</div>
				<div class="col-sm-3">
					<?php
						if(is_active_sidebar('sidebar-4')){
							dynamic_sidebar('sidebar-4');
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 social">
					<?php
						if(is_active_sidebar('sidebar-5')){
							dynamic_sidebar('sidebar-5');
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul>
							<li>© The Jason Debus Heigl Foundation 2008-<?php echo date("Y"); ?>&nbsp</li>
							<?php
								if(is_active_sidebar('sidebar-6')){
									dynamic_sidebar('sidebar-6');
								}
							?>
							<div class="clearfix"></div>
						</ul>

					</div>
				</div>
			</div>

		</div>
	</div>

</footer>
<?php wp_footer(); ?>
</div>
</div>
</body>
</html>
