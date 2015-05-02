			<footer id="footer">
				<div class="subscribe-block">
					<div class="container">
						<div class="row">
							<?php $title_subscribe = get_field('title_subscribe', 'option');
							$description_subscribe = get_field('description_subscribe', 'option');
							if(!empty($title_subscribe) or !empty($description_subscribe)): ?>
								<div class="col-sm-6">
									<div class="text-block">
										<?php if(!empty($title_subscribe)) echo '<span class="title">' . $title_subscribe . '</span>';
										if(!empty($description_subscribe)) echo '<p class="hidden-xs">' . $description_subscribe . '</p>'; ?>
									</div>
								</div>
							<?php endif; ?>
								<div class="col-sm-6">
									<?php if( function_exists( 'mc4wp_form' ) ) {
                    mc4wp_form();
                    } ?>
								</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
                        <div class="col-sm-3">
                            <div class="logo hidden-xs"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/coderdojonwuk_logo.gif" alt="CoderDojo.org"></a></div>
                        </div>
                        <div class="col-sm-9">
                            <p>This website supports the work of CoderDojo in the NorthWest UK. We are a recognised CoderDojo regional group, but this website is maintained by local volunteers and is not owned or operated by CoderDojo Foundation. Please see the <a href="https://coderdojo.org/" target="_blank" title="Visit the CoderDojo Foundation website">CoderDojo Foundation Website</a> for official CoderDojo news.</p>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-sm-11">
                            <?php get_search_form(); ?>
                        </div>
                        <div class="col-sm-1">
                            <ul class="social-networks">
                                <li class="twitter"><a href="https://twitter.com/CoderDojoNW/">Twitter</a></li>
                            </ul>
                        </div>
                        <div class="visible-xs">
                            <ul class="list-inline list-unstyled">
                                <li><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
                                <li><a href="<?php echo home_url(); ?>/about/">About</a></li>
                            </ul>
                            <hr/>
                        </div>
                    </div>
				</div>
			</footer>
		</div>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.main.js"></script>
		<script type="text/javascript">    
			if (navigator.userAgent.match(/IEMobile\/10\.0/) || navigator.userAgent.match(/MSIE 10.*Touch/)) {
				var msViewportStyle = document.createElement('style')
					msViewportStyle.appendChild(
						document.createTextNode(
							'@-ms-viewport{width:auto !important}'
						)
					)
				document.querySelector('head').appendChild(msViewportStyle)
			}
		</script>
		<?php wp_footer(); ?>
	</body>
</html>